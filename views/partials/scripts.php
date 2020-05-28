  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"></script>
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
  <script src="scripts/side-bar.js" ></script>  
  <!-- JavaScript -->
  <script src="//cdn.jsdelivr.net/npm/alertifyjs@1.13.1/build/alertify.min.js"></script>
  <script src="./scripts/jquery.toast.js"></script>

  <?php
    if(isset($_SESSION[USUARIO]) && ($_SESSION[USUARIO]->idRol==1  || $_SESSION[USUARIO]->idRol==2)   ){
  ?>
    <script src="scripts/notificaciones.js"></script>
  <?php
    }
  ?>