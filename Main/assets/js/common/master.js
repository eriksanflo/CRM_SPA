$(document).ready(function(){

    $('#master').html('<nav class="navbar navbar-expand-lg navbar-dark bg-primary">'+
    '<a class="navbar-brand" href="dashboard.php">CRM BOSA SPA</a>'+
    '<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">'+
      '<span class="navbar-toggler-icon"></span>'+
    '</button>'+
  
    '<div class="collapse navbar-collapse" id="navbarColor01">'+
      '<ul class="navbar-nav mr-auto">'+
        '<li class="nav-item dropdown">'+
          '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Agenda</a>'+
          '<div class="dropdown-menu">'+
            '<a class="dropdown-item" href="schedule.php">Consultar Agenda</a>'+
            '<a class="dropdown-item" href="appointment.php">Agregar Cita</a>'+
          '</div>'+
        '</li>'+
        '<li class="nav-item">'+
          '<a class="nav-link" href="services.php">Servicios</a>'+
        '</li>'+
        '<li class="nav-item dropdown">'+
          '<a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Pacientes</a>'+
          '<div class="dropdown-menu">'+
            '<a class="dropdown-item" href="patientlist.php">Lista Pacientes</a>'+
          '</div>'+
        '</li>'+
      '</ul>'+
      '<form class="form-inline my-2 my-lg-0">'+
        '<input class="form-control mr-sm-2" type="text" placeholder="Search">'+
        '<button class="btn btn-secondary my-2 my-sm-0" type="submit">Search</button>'+
      '</form>'+
    '</div>'+
  '</nav>');

});