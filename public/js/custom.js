$(document).ready(function() {
    var date = new Date();

    $('#date_from_picker').datetimepicker({
        minDate: date,
        useCurrent: false,
        format: 'YYYY-MM-DD'
    });
    

    $('#date_to_picker').datetimepicker({
        minDate: date,
    	useCurrent: false,
        format: 'YYYY-MM-DD'
    });

    $("#date_from_picker").on("dp.change", function (e) {
        $('#date_to_picker').data("DateTimePicker").minDate(e.date);
    });


    $("#date_to_picker").on("dp.change", function (e) {
        $('#date_from_picker').data("DateTimePicker").maxDate(e.date);
    });
});