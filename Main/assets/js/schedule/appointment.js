$(document).ready(function(){
    
    $('.error').hide();

    function showAlert(message){
        $("#idalert").text(message);
        $('.error').slideDown('slow');
        setTimeout(() => {
            $('.error').slideUp('slow');
        }, 3000);  
    }

    $("#btnSearch").click(function() {
        $("#customersFount").html("")
        $('#searchModal').modal('show');
    });
    
    $('body').on('click', '.use-address', function() { 
        const postData = {
            id: $(this).attr("Id")
        };

        $.ajax({
            url: '../logic/schedule/searchCustomerById.php',
            type: 'POST',
            dataType: 'json',
            data: postData
        })
        .done(function(resp){
            $data = resp.data;
            if($data.length >= 1){
                $cus = $data[0];
                $("#patient_id").text($($cus).attr("IdParteRole"));
                $("#patient_name").val($($cus).attr("NombreCompleto"));
                $address = $($cus).attr("Calle") + ', ' + $($cus).attr("Ciudad") + ', ' + $($cus).attr("Estado") + ', ' + $($cus).attr("CodigoPostal");
                $("#patient_address").val($address);
                $("#patient_phone").val($($cus).attr("Telefono"));
                $("#patient_email").val($($cus).attr("Email"));
                $('#searchModal').modal('toggle');
            }
            else{
                alert("No se pudo recuperar el cliente seleccionado");
            }
        })
        .fail(function(resp){
            alert("Ocurrio un error al recuperar al cliente");
        });
    })

    $("#btnSearchPatients").click(function() {

        if ($("#inpSearch").val() == "")
        {
            alert("Debe esècificar un filtro de bùsqueda");
        }
        else
        {
            const postData = {
                filter: $("#inpSearch").val()
            };

            $.ajax({
                url: '../logic/schedule/searchCustomer.php',
                type: 'POST',
                dataType: 'json',
                data: postData
            })
            .done(function(resp){
                
                $data = resp.data;
                $dataDiv = '<div class="list-group">';
                $.each($data, function() {
                    // '+$(this).attr("NombreCompleto")+'
                    $dataDiv += '<button type="button" id="'+$(this).attr("IdParteRole")+'" class="btn btn-secondary btn-lg use-address">'+$(this).attr("NombreCompleto")+'</button>';
                });
                $dataDiv += '</div>';
                $("#customersFount").html($dataDiv)
            })
            .fail(function(resp){
                console.log('Fail');
            });
        }
    });
    
    $("#btnSaveAppointment").click(function(){
        $id = $("#patient_id").text();
        $fecha = $("#patient_date").val();
        $hora = $("#patient_hora").val();
        $area = $("#areaSelect").val();
        if ($id == ""){
            showAlert("Debe seleccionar a un cliente");
        }else if ($fecha == ""){
            showAlert("Debe especificar una fecha");
        }else if($hora == ""){
            showAlert("Debe especificar una hora");
        }else if($area == "Seleccione"){
            showAlert("Debe especificar un área a tratar");
        }else{
            const postData = {
                idParteRole: $id,
                fecha: $fecha,
                hora: $hora
            };

            $.ajax({
                url: '../logic/schedule/saveappointment.php',
                type: 'POST',
                dataType: 'json',
                data: postData
            })
            .done(function(resp){
                console.log('Done');
                $data = resp.data;
                if($data.length >= 1){
                    $app = $data[0];
                    $("#resultModalText").text("Cita agendada correctamente con el folio " + $($app).attr("Folio"));
                    $('#resultModal').modal('show');
                }else{
                    showAlert("Ocurrio un error al agendar la cita, intente más tarde");
                }
            })
            .fail(function(resp){
                console.log('Fail');
            });
        }
    });

    $("#btnAppointmentCreated").click(function(){
        $("#patient_id").text("");
        $("#patient_date").val("");
        $("#patient_hora").val("");
        $("#patient_name").val("");
        $("#patient_address").val("");
        $("#patient_phone").val("");
        $("#patient_email").val("");
        $("#areaSelect").val("Seleccione");
        $('#resultModal').modal('toggle');
    });

});