<form v-on:submit.prevent="createKeep()" method="post">
<div class="modal fade" id="create">
  <div class="modal-dialog">
   <div class="modal-content">
    <div class="modal-header">
    <h5>Crear</h5>
     <button type="button" class="close" data-dismiss="modal">
       <span>&times;</span>
     </button>
     
    </div>
    <div class="modal-body">
       <label for="keep">Nueva Tarea</label>
       <input type="text" name="keep" class="form-control" v-model="newKeep"> 
       <span v-for="error in errors" class="text-danger">@{{error}}</span>
    </div> 
    <div class="modal-footer">
      <input type="submit" class="btn btn-primary" value="Guardar" >
    </div>
   </div>
  </div>
</div>
</form>