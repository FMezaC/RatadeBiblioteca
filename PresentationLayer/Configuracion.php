<div class="panel panel-default">
    <div class="panel-heading">Configuración de perfil</div>
    <form action="#" method="post" role="form" class="">
        <div class="panel-body">
            <div class="profile-userpic col-md-4">
                <div class="profile-userpic">
                    <img src="img/male.png" class="img-responsive" alt="">
                </div>
                <div class="profile-usertitle">
                    <div class="profile-usertitle-job">
                        <a href="#" data-target="#ChangeImage" data-toggle="modal">Cargar Imagen</a>
                    </div>
                    <div class="profile-usertitle-job">
                        <a href="#" data-target="#ChangePassw" data-toggle="modal">Cambiar Contraseña</a>
                    </div>
				        </div>
            </div>
            <div class="DataRegister col-md-8">
                <input type="text" class="form-control" placeholder="Nombre">
                <input type="text" class="form-control" placeholder="Apellidos">
                <input type="text" class="form-control" placeholder="Desempeño">
                <input type="mail" class="form-control" id="ejemplo_email_1" placeholder="Correo">
                <input type="text" class="form-control" placeholder="Usuario">
                <input type="password" class="form-control" id="ejemplo_password_1" placeholder="Contraseña">
            </div>
        </div>
        <div class="panel-footer">
          <div class="block-rigth">
            <button type="button" class="btn btn-default">Editar</button>
          </div>
        </div>
    </form>
</div>

<!---- Modal Contraseña--->
<div class="modal" tabindex="-1" role="dialog" id="ChangePassw">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>

<!---- Modal Perfil --->
<div class="modal" tabindex="-1" role="dialog" id="ChangeImage">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Seleccione Perfil</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>