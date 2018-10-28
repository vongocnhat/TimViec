<script type="text/javascript" src="manage/vendor/datepicker/js/datepicker.min.js" ></script>
<script type="text/javascript" src="manage/vendor/datepicker/js/datepicker.en.js" ></script>
<script>
    $(document).ready(function(){
        $('input[type="date"]').datepicker({
            language: 'en',
            dateFormat: 'yyyy-mm-dd',
            todayButton: new Date(),
            clearButton: true,
            autoClose: true,
        });
    });
</script>