function report() {
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
    $.ajax({
        method: "POST",
        url: "/daily-report",
        dataType : "json",
        success : function(res) {
            console.log(res)
        }
    });
}