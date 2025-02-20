$("document").ready(function(){

    $('#btn').submit(function(e){
        e.preventDefault();
        var form = this ;
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url : "/ajax",
            type : "post",
            contentType: false,
            processData: false,
            data : new FormData(form),
            success :function(res){
                console.log(res)
            },
            error: function(response){
                $(form).find(".error").html('');
                $(form).find(".error").css('display','block');
                $(form).find(".error").css('color','red');
                $(form).find(".error").css('padding-left','10px');
                $.each( response.responseJSON.errors, function( key, value ) {
                    $(form).find(`.error-${key}`).html(value[0]);
                });
            }
        });
    });
});

