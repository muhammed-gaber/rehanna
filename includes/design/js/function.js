$(window).load(function() {
    $('#jobs').on('change', function() {
        $('#job').val($(this).val());
    });
});
