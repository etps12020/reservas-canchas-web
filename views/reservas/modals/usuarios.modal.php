<!-- Modal -->
<div class="modal fade" id="usuariosModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Buscar Usuario:</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        

        <table id="tblDuis" >
            <thead>
                <th>Dui</th>
            </thead>
            <tbody>
                <?php
                    foreach ($duis as $key => $dui) {
                        ?>
                        <tr data-dui="<?php echo $dui->dui;?>" class="row-dui"      >
                            <td><?php echo $dui->dui;?></td>
                        </tr>
                        <?php
                    }
                ?>
            </tbody>
        </table>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>