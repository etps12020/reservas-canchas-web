  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Reservaciones de canchas para polideportivo UTEC</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">

  <!-- Custom styles for this template -->

  <!-- Nav side -->
  <link href="./css/nav-side.css" rel="stylesheet">

  <link  rel="stylesheet"  href="https://cdn.datatables.net/1.10.21/css/jquery.dataTables.min.css" />
  

  <style>
  .cursor:hover{
    cursor:pointer;
  }

  .horarios{
    max-height:375px;
    overflow-y:scroll; 
  }

  .hora-container{
    display:flex;
    justify-content:space-around;
    border:#f2f2f2 1em solid;    
    line-height:5em;
  }

  .hora-container:hover{
    cursor:pointer; 
  }

  .hora-disponible{
    background: rgba( 125, 219, 148 , 0.2);
    color:#000;
    font-weight:bold;
  }

  .hora-ocupada{
    background: rgba( 219, 141, 125 , 0.2);
    color:#000;
    font-weight:bold;
  }

  .hora-seleccionada{
    background: rgba( 79, 184, 182 , 0.5 );
  }
  </style>
