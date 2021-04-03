<!doctype html>
<html lang="es">
  <head>
  	<title>Pacientes</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://bootswatch.com/4/flatly/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/picture_profile.css">
    <link rel="stylesheet" href="../assets/css/common.css">
  </head>
  <body>
      <div id="master"></div>

      <div class="container-fluid margin-top">
        <div class="row">
            <div class="col-lg-10">
                <legend class="d-flex justify-content-center">Pacientes</legend>
            </div>
            <div class="col-lg-2">
                <button type="button" id="btnAddCustomer" class="btn btn-link d-flex justify-content-end">Agregar Paciente</button>
            </div>
        </div>
        
    </div>
      
    <table id="tblContent" class="table table-hover" >
        <thead>
            <tr class="table-secondary">
              <th scope="col">ID</th>
              <th scope="col">Nombre</th>
              <th scope="col">Género</th>
              <th scope="col">Teléfono</th>
              <th scope="col">Email</th>
              <th scope="col" style="display:none;">Nombre</th>
              <th scope="col" style="display:none;">Paterno</th>
              <th scope="col" style="display:none;">Materno</th>
              <th scope="col" style="display:none;">Calle</th>
              <th scope="col" style="display:none;">CP</th>
              <th scope="col" style="display:none;">Ciudad</th>
              <th scope="col" style="display:none;">Estado</th>
              <th scope="col" style="display:none;">Genero</th>
              <th scope="col">Acciones</th>
            </tr>
        </thead>
        <tbody>

        </tbody>
    </table>

    <script src="//code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="../assets/js/common/bootstrap.bundle.min.js"></script>
    <script src="../assets/js/common/master.js"></script>
    <script src="../assets/js/patient/patientlist.js"></script>
    <script src="../assets/js/patient/patient.js"></script>
    <script src="../assets/js/common/picture_profile.js"></script>
  </body>
</html>