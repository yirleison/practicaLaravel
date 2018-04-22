
var user = {

    saveUser: function () {

        var data = {

            nombre: $('#r-nombre').val(),
            password: $('#r-pass').val(),
        }

        console.log(data);

        if ($('#r-pass').val() != $('#r-repeat-pass').val()) {
            new PNotify({
                title: 'Validaciòn password',
                text: 'Las contraseñas son incorrectas',
                type: 'info'
            });
        }

        else {

            $.ajaxSetup(
                {
                    headers:
                        {
                            'X-CSRF-Token': $('input[name="_token"]').val()
                        }
                });

            $.ajax({
                url: "registrar",
                type: 'post',
                dataType: 'json',
                data: data
            }).done(function (result) {
                if (data.data == 1) {
                    //retorno al home...
                }
            });
        }
    },

    updateUser: function () {

    },

    deleteUser: function () {

    }
}