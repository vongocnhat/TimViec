<html style="margin: 0; padding: 0; border: 0;"><head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="http://localhost:85/zNhat/TimViec/public/">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap4/css/bootstrap.css">
    <link rel="stylesheet" href="pdf/base-template.css">
</head>
<body data-profile-dynamic-index="http://localhost:85/zNhat/TimViec/public/employee-home/profile-dynamic"><a href="http://localhost:85/zNhat/TimViec/public/employee-home/profile-dynamic" id="btn-save" class="btn btn-success top-left-0" style="display: none;">Lưu</a>
    <input type="hidden" name="hideName" id="hideName" value="-1543251600">
    
    <div class="container-div">
        <div class="header-n">
            <div class="mlr-10px padding-4-0">
                <h2 class="m-0">Võ Ngọc Nhật</h2>
                <h4 class="m-0">Công Nghệ Thông Tin</h4>
            </div>
        </div>
        <div class="left-right-box">
            <div class="content-left" style="height: 1336px;">
                <div class="box-img">
                    <img src="img/anh.jpg" class="w-100-h-100">
                </div>
                <div class="box-profile">
                    <div class="box-btn mlr-10px">
                        <button class="btn-add btn-primary" id="btn-add-profile" title="Add Content">+</button>
                        <button class="btn-remove btn-danger" title="Delete Current Focus">-</button>
                    </div>
                    <div class="box-textarea mlr-10px">
                        <textarea-to-text type="text" class="input-n auto-height-n" rows="1"></textarea-to-text>
                    </div>
                </div>
            </div>
            <div class="content-right" style="height: 1336px;">
                <div class="m-10px">
                    <div class="box-btn">
                        <button class="btn-add btn-primary" id="btn-add-content">+</button>
                        <button class="btn-remove btn-danger">-</button>
                    </div>
                    <div class="box-textarea">
                        <textarea-to-text type="text" class="input-n auto-height-n" rows="1">s</textarea-to-text>
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
            element.eq(index).outerHeight(value.scrollHeight);
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
            var _token = 'DY2PFiwTaUEn4OwVYuNT7iTdUskENaTvLIXonRS3';
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
            var name = $('#name').val() + '-' + '1543251600';
            // for edit
            if ($('#hideName').val()) {
                name = $('#hideName').val();
                if ($('#btn-save').css('display') !== 'none') {
                    $('#btn-save').css('display', 'none');
                }
            } else {
                // khoi tao edit
                $('body').prepend('<a href="http://localhost:85/zNhat/TimViec/public/employee-home/profile-dynamic" id="btn-save" class="btn btn-success top-left-0" style="display: none;">Lưu</a>');
                $('#hideName').val(name);
            }
            // /for edit
            var numberStr = ($html.find('.container-div').outerHeight() / 1416).toString();
            var number = 1;
            if (numberStr.indexOf('.') !== -1) {
                number = parseInt(numberStr.substring(0, numberStr.indexOf('.'))) + 1;
            }
            $html.find('.content-left').outerHeight(number * 1416 - 80);
            $html.find('.content-right').outerHeight(number * 1416 - 80);
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

</body></html>