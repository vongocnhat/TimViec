(function() {
    var certificates = [];
    var $formCertificate = $('#formCertificate');
    var $listCertificates = $('#listCertificates');
    hideListCertificates();
    $formCertificate.submit(function(e) {
        e.preventDefault();
        var tempArr = {};
        $.each($(this).serializeArray(), function() {
            tempArr[this.name] = this.value;
        });
        if ($('[name=key]').val()) {
            certificates[$('[name=key]').val()] = tempArr;
            $('[name=key]').val(null);
        } else {
            certificates.push(tempArr);
        }
        $(this).trigger("reset");
        $(this).find('select').trigger('change');
        var listHTML = '';
        certificates.forEach(function(item, key) {
            listHTML += '<tr>\n';
            var element = item['graduate_id'];
            listHTML += '<td>' + $('select[name=graduate_id]').find('option[value="' + element + '"]').text() + '</td>\n';
            element = item['name'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['school'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['start_month_certificate'] + '/' + item['start_year_certificate'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['end_month_certificate'] + '/' + item['end_year_certificate'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['major'];
            listHTML += '<td>' + element + '</td>\n';
            listHTML += '<td class="edit" data-key="' + key + '"><i class="fas fa-edit"></i></td>\n';
            listHTML += '<td class="delete" data-key="' + key + '"><i class="fas fa-trash-alt"></i></td>\n';
            listHTML += '</tr>'
        });
        $listCertificates.find('tbody').html(listHTML);
        hideListCertificates();
    });
    $listCertificates.find('tbody').on('click', '.edit', function() {
        var item = certificates[$(this).data('key')];
        var element = item['graduate_id'];
        $('[name=graduate_id]').val(element).change();
        element = item['name'];
        $('[name=name]').val(element);
        element = item['school'];
        $('[name=school]').val(element);
        element = item['start_month_certificate'];
        $('[name=start_month_certificate]').val(element).change();
        element = item['start_year_certificate'];
        $('[name=start_year_certificate]').val(element).change();
        element = item['end_month_certificate']
        $('[name=end_month_certificate]').val(element).change();
        element = item['end_year_certificate'];
        $('[name=end_year_certificate]').val(element).change();
        element = item['major'];
        $('[name=major]').val(element);
        // set edit
        $('[name=key]').val($(this).data('key'));
    });
    $listCertificates.find('tbody').on('click', '.delete', function() {
        $(this).parent().remove();
        certificates.pop($(this).data('key'));
        hideListCertificates();
    });
    $('#formProfile').submit(function(e) {
        e.preventDefault();
        var certificateUrl = $formCertificate.prop('action');
        var certificatesJSON = JSON.stringify(certificates);
        var _token = $formCertificate.find('input[name=_token]').val();
        $.ajax({
            url: certificateUrl,
            type: 'POST',
            data: { _token, certificatesJSON },
        });
    });

    function hideListCertificates() {
        if (certificates.length === 0) {
            $listCertificates.hide();
        } else {
            $listCertificates.show();
        }
    }
})();