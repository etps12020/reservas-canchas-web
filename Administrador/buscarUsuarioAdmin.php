<div class="container">
  <h4 align="center">Bienvenido Administrador del Sistema</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Modificar usuarios</font></h2></br>
   <p align="center">Buscar por DUI o Id de Usuario </p>
  
  <div class="container">
    
  <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>Id</th>
        <th>DUI</th>
        <th>Correo</th>
		<th>Acciones</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>1</td>
        <td>00010310-6</td>
        <td>john@example.com</td>
		<td><a href="Administrador/usuariosAdminMod.php" class="btn btn-link">Modificar</a></td>
      </tr>
      <tr>
        <td>2</td>
        <td>00014912-5</td>
        <td>mary@mail.com</td>
		<td><a href="Administrador/usuariosAdminMod.php" class="btn btn-link">Modificar</a></td>
      </tr>
      <tr>
        <td>3</td>
        <td>00010236-5</td>
        <td>july@greatstuff.com</td>
		<td><a href="Administrador/usuariosAdminMod.php" class="btn btn-link">Modificar</a></td>
      </tr>	  
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  
<script>
$(document).ready(function(){
  $("#myInput").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#myTable tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
