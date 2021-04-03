<!doctype html>
<html lang="es">
  <head>
  	<title>Crear Cita</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/common.css">
  </head>
  <body>
    <div id="master"></div>
    
    <div class="error alert alert-warning">
      <span id="idalert"></span>
    </div>

    <div class="row">
      <div class="col col-md-12">
        <div class="float-right margin-top-right margin-bottom">
            <a class="btn btn-primary" href="schedule.php" role="button"><i class="fa fa-calendar"></i>  Consultar Agenda</a>
        </div> 
      </div>
    </div>

    <div class="container">
        <div class="row justify-content-md-center">
          <div class="col col-md-5">
            <fieldset>
              <legend>Paciente</legend>
              <div class="row">
                <div class="col col-md-6 float-right">
                <label>Cliente ID:</label><label for="" class="badge badge-info identifier" id="patient_id"></label>
                </div>
                <div class="col col-md-6">
                  <button type="button" class="btn btn-primary" id="btnSearch" ><i class="fa fa-search"></i> Buscar paciente </button>
                </div>
              </div>
              <div class="form-group">
                <label for="patient_name">Nombre Completo</label>
                <input type="text" class="form-control" id="patient_name" disabled="">
              </div>
              <div class="form-group">
                <label for="patient_address">Dirección</label>
                <input type="text" class="form-control" id="patient_address" disabled="">
              </div>
              <div class="form-group">
                <label for="patient_phone">Teléfono</label>
                <input type="phone" class="form-control" id="patient_phone" disabled="">
              </div>
              <div class="form-group">
                <label for="patient_email">Correo Eléctronico</label>
                <input type="email" class="form-control" id="patient_email" disabled="">
              </div>
              
              
            </fieldset>
          </div>
          <div class="col col-md-5">
            <fieldset>
              <legend>Tratamiento</legend>
              <div class="form-group">
                <label for="areaSelect">Área a tratar</label>
                <select class="form-control" id="areaSelect">
                  <option>Seleccione</option>
                  <option>PIERNAS COMPLETAS</option>
                  <option>MEDIA PIERNA</option>
                  <option>BRAZOS COMPLETOS</option>
                  <option>MEDIO BRAZO</option>
                  <option>ESPALDA COMPLETA</option>
                  <option>MEDIA ESPALDA</option>
                  <option>COXIS</option>
                  <option>GLUTEO</option>
                  <option>PECHO </option>
                  <option>ABDOMEN</option>
                  <option>LINEA DE ABDOMEN</option>
                  <option>PEZONES</option>
                  <option>CUELLO</option>
                  <option>CARA</option>
                  <option>MEDIA CARA</option>
                  <option>NUCA</option>
                  <option>BOZO</option>
                  <option>MANOS </option>
                  <option>PIES</option>
                  <option>BARBA</option>
                  <option>BIKINI</option>
                  <option>LINEA INTERGLUTEA</option>
                  <option>OREJAS</option>
                  <option>NARIZ</option>
                  <option>ENTRECEJO</option>
                  <option>ENTREPECHO</option>
                  <option>PATILLA</option>                  
                </select>
              </div>
              <div class="form-group">
                <label for="patient_datetime">Fecha y Hora</label>
                <div class="row margin-bottom">
                  <div class="col-lg-6">
                    <input type="date" class="form-control" id="patient_date" required placeholder="Fecha">
                  </div>
                  <div class="col-lg-6">
                    <input type="time" class="form-control" id="patient_hora" required placeholder="Hora">
                  </div>
                </div>
              </div>
            </fieldset>
          </div>
        </div>
        <div class="row justify-content-end">
          <div class="col col-md-2 align-self-end">
            <button type="button" class="btn btn-primary margin-five" id="btnSaveAppointment"><i class="fa fa-save">   </i>   Registrar</button>
          </div>
        </div>
    </div>


    <div class="modal fade" id="searchModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
              <div class="modal-header">
                  
                  <input class="form-control mr-sm-2" type="text" placeholder="Search" id="inpSearch" />
                  <button class="btn btn-secondary my-2 my-sm-0" id="btnSearchPatients">Buscar</button>
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                  </button>
              </div>
              <div class="modal-body" id="customersFount" >
              </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="resultModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Registro de Cita</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body" id="resultModalText">
                
            </div>
            <div class="modal-footer">
                <button type="button" id="btnAppointmentCreated" class="btn btn-secondary" >Aceptar</button>
            </div>
            </div>
        </div>
    </div>


    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/common/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/common/master.js"></script>
    <script src="../assets/js/schedule/appointment.js"></script>
  </body>
</html>