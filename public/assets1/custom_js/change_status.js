$(document).on('click', '.changeStatus', function () {
    $id = $(this).attr('data-id');
    $routeName = $(this).attr('data-route-name');
    $csrf = $("#generate_csrf").attr('content');
    $.ajax({
        url:$routeName,
        type: "POST",
        data: {
            id: $id,
            _token: $csrf
        },
        async: true,
        success: function (response)
        {
            if(response.code == 200) {
                if(response.isactive){
                    Swal.fire(
                        'Super!',
                        'record a été activé avec succès',
                        'success'
                    )
                }else{
                    Swal.fire(
                        'Super!',
                        'record a été desactivé avec succès',
                        'success'
                    )
                }

            }
        }
    });
})
