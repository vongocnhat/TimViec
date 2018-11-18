var formExperienceOfProfileSubmit;
(function() {
    var experienceOfProfiles = typeof(experienceOfProfilesPara) == "undefined" ? [] : experienceOfProfilesPara;
    var $formExperienceOfProfile = $('#formExperienceOfProfile');
    var $listExperienceOfProfile = $('#listExperienceOfProfile');
    loadTable();
    hideListExperienceOfProfile();
    $formExperienceOfProfile.submit(function(e) {
        e.preventDefault();
        var tempArr = {};
        $.each($(this).serializeArray(), function() {
            tempArr[this.name] = this.value;
        });
        if ($('[name=key]').val()) {
            experienceOfProfiles[$('[name=key]').val()] = tempArr;
            $('[name=key]').val(null);
        } else {
            experienceOfProfiles.push(tempArr);
        }
        $(this).trigger("reset");
        $(this).find('select').trigger('change');
        loadTable();
        hideListExperienceOfProfile();
    });
    $listExperienceOfProfile.find('tbody').on('click', '.edit', function() {
        var item = experienceOfProfiles[$(this).data('key')];
        var element = item['company_name'];
        $('[name=company_name]').val(element);
        element = item['office_id'];
        $('[name=office_id]').val(element).change();
        element = item['school'];
        $('[name=school]').val(element);
        element = item['start_month_experience'];
        $('[name=start_month_experience]').val(element).change();
        element = item['start_year_experience'];
        $('[name=start_year_experience]').val(element).change();
        element = item['end_month_experience']
        $('[name=end_month_experience]').val(element).change();
        element = item['end_year_experience'];
        $('[name=end_year_experience]').val(element).change();
        element = item['job_description'];
        $('[name=job_description]').val(element);
        element = item['achievement'];
        $('[name=achievement]').val(element);
        // set edit
        $('[name=key]').val($(this).data('key'));
    });
    $listExperienceOfProfile.find('tbody').on('click', '.delete', function() {
        $(this).parent().remove();
        experienceOfProfiles.pop($(this).data('key'));
        hideListExperienceOfProfile();
    });

    function hideListExperienceOfProfile() {
        if (experienceOfProfiles.length === 0) {
            $listExperienceOfProfile.hide();
        } else {
            $listExperienceOfProfile.show();
        }
    }

    function loadTable() {
        var listHTML = '';
        experienceOfProfiles.forEach(function(item, key) {
            listHTML += '<tr>\n';
            var element = item['company_name'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['office_id'];
            listHTML += '<td>' + $('#formExperienceOfProfile select[name=office_id]').find('option[value="' + element + '"]').text() + '</td>\n';
            if(item['start_at']) {
                element = item['start_at'];
            } else {
                element = item['start_month_experience'] + '/' + item['start_year_experience'];
            }
            listHTML += '<td>' + element + '</td>\n';
            if(item['ended_at']) {
                element = item['ended_at'];
            } else {
                element = item['end_month_experience'] + '/' + item['end_year_experience'];
            }
            listHTML += '<td>' + element + '</td>\n';
            element = item['job_description'];
            listHTML += '<td>' + element + '</td>\n';
            element = item['achievement'];
            listHTML += '<td>' + element + '</td>\n';
            listHTML += '<td class="edit" data-key="' + key + '"><i class="fas fa-edit"></i></td>\n';
            listHTML += '<td class="delete" data-key="' + key + '"><i class="fas fa-trash-alt"></i></td>\n';
            listHTML += '</tr>'
        });
        $listExperienceOfProfile.find('tbody').html(listHTML);
    }
    
    formExperienceOfProfileData = function () {
        var experienceOfProfilesJSON = JSON.stringify(experienceOfProfiles);
        return experienceOfProfilesJSON;
    }
})();