<div class="container">
  <h4 align="center">Bienvenido Administrador del Sistema</h4>
  <br><h2 align="center" style="background-color:#8A084B"><font color=White>Modificar Horarios</font></h2></br>
   <p align="center">Buscar Horarios </p>
  
  <div class="container">
    
  <input class="form-control" id="myInput" type="text" placeholder="Buscar..">
  <br>
  <table class="table table-bordered table-striped">
    <thead>
      <tr>
        <th>id</th>
        <th>Hora Inicio</th>
        <th>Hora Fin</th>
		<th>Acciones</th>
      </tr>
    </thead>
    <tbody id="myTable">
      <tr>
        <td>1</td>
        <td>8:00 A.M.</td>
        <td>10:00 A.M.</td>
		<td><a href="Administrador/horariosAdminMod.php" class="btn btn-link">Modificar</a></td>
      </tr>
      <tr>
        <td>1</td>
        <td>8:00 A.M.</td>
        <td>10:00 A.M.</td>
		<td><a href="Administrador/horariosAdminMod.php" class="btn btn-link">Modificar</a></td>
      </tr>
      <tr>
        <td>1</td>
        <td>8:00 A.M.</td>
        <td>10:00 A.M.</td>
		<td><a href="Administrador/horariosAdminMod.php" class="btn btn-link">Modificar</a></td>
      </tr>
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
