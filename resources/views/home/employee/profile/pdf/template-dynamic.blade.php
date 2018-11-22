<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Page Title</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <base href="{{ asset('/') }}">
    <link rel="stylesheet" type="text/css" media="screen" href="bootstrap4/css/bootstrap.css" />
    <link rel="stylesheet" href="css/jquery-ui.css">
</head>
<body>
    <style>
        body {
            color: white;
            width: 794px;
            height: 1123px;
            margin: 0 auto;
        }

        .header-n {
            background-color:#3d9678;
        }

        .content-left {
            background-color: black;
            width: 250px;
            float: left;
        }

        .content-right {
            background-color: #4b6e77;
            width: 544px;
            float: left;
            padding: 10px;
        }

        .box-img {
            width: 170px;
            height: 170px;
            margin: 15px auto;
        }

        .w-100-h-100 {
            width: 100%;
            height: 100%;
        }

        .box-profile {
            background-color: #3d9678;
            padding: 10px;
        }

        .box-btn {
            text-align: right;
            padding: 5px 0;
            outline: 1px solid red;
            display: none;
            margin-bottom: 5px;
        }

        .box-profile:hover .box-btn, .content-right:hover .box-btn {
            display: block;
        }

        .btn-add, .btn-remove {
            width: 30px;
            line-height: 18px;
        }

        .input-n {
            width: 100%;
            background-color: transparent;
            color: white;
            border: none;
            border-bottom: 1px dashed;
            overflow: hidden;
            /* resize: none; */
        }
    </style>
    <a class="btn btn-success" id="btn-save" href="{{ route('employeeHome.profile.pdfDynamicSave') }}">Save</a>
    <div class="header-n">
        <div>Võ Ngọc Nhật</div>
        <div>Công Nghệ Thông Tin</div>
    </div>
    <div class="content-left">
        <div class="box-img">
            <img src="img/anh.jpg" class="w-100-h-100" />
        </div>
        <div class="box-profile">
            <div class="box-btn">
                <button class="btn-add btn-primary" id="btn-add-profile" title="Add Content">+</button>
                <button class="btn-remove btn-danger" title="Delete Current Focus">-</button>
            </div>
            <div class="box-textarea">
                <textarea type="text" class="input-n auto-height-n" rows="1"></textarea>
            </div>
        </div>
    </div>
    <div class="content-right">
        <div class="box-btn">
            <button class="btn-add btn-primary" id="btn-add-content">+</button>
            <button class="btn-remove btn-danger">-</button>
        </div>
        <div class="box-textarea">
            <textarea type="text" class="input-n auto-height-n" rows="1"></textarea>
        </div>
    </div>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jquery-ui.js"></script>
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
        $('textarea').resizable();
        $('textarea').css('height', '29px');

        $('#btn-save').click(function(e) {
            e.preventDefault();
            $('input').each(function(){
                $(this).attr('value', $(this).val());
            });
            $('textarea').each(function(){
                $(this).text($(this).val());
            });
            var $html = $('html').clone();
            $html.find('#btn-save').remove();
            var url = $(this).prop('href');
            $.ajax({
               url: url,
               data: { html: $html[0].outerHTML }, 
            });
        });
    </script>
</body>
</html>