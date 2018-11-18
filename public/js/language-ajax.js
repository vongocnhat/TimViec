var formLanguageData;
(function() {
    var languages = [];
    var $formLanguage = $('#formLanguage');
    var $listLanguage = $('#listLanguage');
    hideListLanguage();
    $formLanguage.submit(function(e) {
        e.preventDefault();
        var tempArr = {};
        $.each($(this).serializeArray(), function() {
            tempArr[this.name] = this.value;
        });
        if ($('[name=key]').val()) {
            languages[$('[name=key]').val()] = tempArr;
            $('[name=key]').val(null);
        } else {
            languages.push(tempArr);
        }
        $(this).trigger("reset");
        $(this).find('select').trigger('change');
        var listHTML = '';
        languages.forEach(function(item, key) {
            listHTML += '<tr>\n';
            var element = item['language_id'];
            listHTML += '<td>' + $('#formLanguage select[name=language_id]').find('option[value="' + element + '"]').text() + '</td>\n';
            element = item['listening'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['speaking'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['reading'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['writing'];
            listHTML += '<td>' + element + '</td>\n';
            listHTML += '<td class="edit" data-key="' + key + '"><i class="fas fa-edit"></i></td>\n';
            listHTML += '<td class="delete" data-key="' + key + '"><i class="fas fa-trash-alt"></i></td>\n';
            listHTML += '</tr>'
        });
        $listLanguage.find('tbody').html(listHTML);
        hideListLanguage();
    });
    $listLanguage.find('tbody').on('click', '.edit', function() {
        var item = languages[$(this).data('key')];
        
        var element = item['language_id'];
        $('[name=language_id]').val(element).change();
        element = item['listening']
        $('[name=listening][value=' + element + ']').prop('checked', true);
        element = item['speaking'];
        $('[name=speaking][value=' + element + ']').prop('checked', true);
        element = item['reading'];
        $('[name=reading][value=' + element + ']').prop('checked', true);
        element = item['writing'];
        $('[name=writing][value=' + element + ']').prop('checked', true);
        // set edit
        $('[name=key]').val($(this).data('key'));
    });
    $listLanguage.find('tbody').on('click', '.delete', function() {
        $(this).parent().remove();
        languages.pop($(this).data('key'));
        hideListLanguage();
    });

    function hideListLanguage() {
        if (languages.length === 0) {
            $listLanguage.hide();
        } else {
            $listLanguage.show();
        }
    }
    
    formLanguageData = function () {
        var languagesJSON = JSON.stringify(languages);
        return languagesJSON;
    }
})();