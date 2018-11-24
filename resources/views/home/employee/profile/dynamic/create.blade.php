<!DOCTYPE html>
<html style="margin: 0; padding: 0; border: 0;">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('/') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap4/css/bootstrap.css" />
    <link rel="stylesheet" href="pdf/base-template.css">
</head>
<body data-profile-dynamic-index="{{ route('employeeHome.profile-dynamic.index') }}">
    <input type="hidden" name="hideName" id="hideName" />
    <div class="mt-3 mb-3" id="box-inputs">
        <label for="name" class="text-primary">@lang('profile_home.name'): </label>
        <input type="text" name="name" id="name" />
        <a class="btn btn-success" id="btn-save" href="{{ route('employeeHome.profile-dynamic.store') }}">Save</a>
    </div>
    <div class="container-div">
        <div class="header-n">
            <div class="mlr-10px">
                <h3 class="m-0">Võ Ngọc Nhật</h3>
                <h5>Công Nghệ Thông Tin</h5>
            </div>
        </div>
        <div class="left-right-box">
            <div class="content-left">
                <div class="box-img">
                    <img src="img/anh.jpg" class="w-100-h-100" />
                </div>
                <div class="box-profile">
                    <div class="box-btn mlr-10px">
                        <button class="btn-add btn-primary" id="btn-add-profile" title="Add Content">+</button>
                        <button class="btn-remove btn-danger" title="Delete Current Focus">-</button>
                    </div>
                    <div class="box-textarea mlr-10px">
                        <textarea type="text" class="input-n auto-height-n" rows="1"></textarea>
                    </div>
                </div>
            </div>
            <div class="content-right">
                <div class="m-10px">
                    <div class="box-btn">
                        <button class="btn-add btn-primary" id="btn-add-content">+</button>
                        <button class="btn-remove btn-danger">-</button>
                    </div>
                    <div class="box-textarea">
                        <textarea type="text" class="input-n auto-height-n" rows="1"></textarea>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script>
        $('#btn-add-profile').click(function() {
            $(this).parent().siblings('.box-textarea').append('<textarea type="text" class="input-n auto-height-n" rows="1"></textarea>');
        });

        $('#btn-add-content').click(function() {
            $(this).parent().siblings('.box-textarea').append('<textarea type="text" class="input-n auto-height-n" rows="1"></textarea>');
        });

        var $curTextAreaFocus;
        $('.btn-remove').click(function() {
            $(this).parent().siblings('.box-textarea').find($curTextAreaFocus).remove();
        });

        $('.box-textarea').on('focus', '.auto-height-n', function() {
            $curTextAreaFocus = $(this);
        });

        $('.box-textarea').on('keyup', '.auto-height-n', function() {
            const element = $(this)[0];
            element.style.height = '29px';
            element.style.height = (element.scrollHeight + 1) + 'px';
        });

        $('textarea').css('height', '29px');
        // for edit
        const element = $('.box-textarea').find('.auto-height-n');
        $.each(element, function(index, value) {
            element.eq(index).height(value.scrollHeight);
        });
        // /for edit
        //init name
        if ($('#hideName').val()) {
            if ($('#btn-save').css('display') === 'none') {
                $('#btn-save').css('display', 'block');
            }
        }
        $('#btn-save').click(function(e) {
            e.preventDefault();
            var _token = '{{ csrf_token() }}';
            var $html = $('html');
            $html.find('textarea').replaceWith(function () {
                $element = $("<textarea-to-text>").text($(this).val());
                $.each(this.attributes, function (i, attribute) {
                    if (attribute.name !== 'style') {
                        $element.attr(attribute.name, attribute.value);
                    }
                });
                return $element;
            });
            var url = $(this).prop('href');
            var name = $('#name').val() + '-' + '{{ strtotime(date("Y-m-d")) }}';
            // for edit
            if ($('#hideName').val()) {
                name = $('#hideName').val();
                if ($('#btn-save').css('display') !== 'none') {
                    $('#btn-save').css('display', 'none');
                }
            } else {
                // khoi tao edit
                $('body').prepend('<a href="{{ route("employeeHome.profile-dynamic.store")}}" id="btn-save" class="btn btn-success top-left-0" style="display: none;">@lang("common.save")</a>');
                $('#hideName').val(name);
            }
            // /for edit
            var numberStr = ($html.find('.container-div').outerHeight() / 1416).toString();
            var number = 1;
            if (numberStr.indexOf('.') !== -1) {
                number = parseInt(numberStr.substring(0, numberStr.indexOf('.'))) + 1;
            }
            $html.find('.content-left').height(number * 1416 - 70);
            $html.find('.content-right').height(number * 1416 - 70);
            $html.find('#box-inputs').remove();
            $.ajax({
                url: url,
                type: 'POST',
                data: { html: $html[0].outerHTML, name: name, _token },
                success: function() {
                    window.location = $('body').data('profile-dynamic-index');
                },
            });
        });
    </script>
</body>
</html>