<div class="panel panel-default">
    <div class="panel-heading"><br></div>
    <ul class="nav nav-tabs ">
        <li class="active"><a href="#Accesso" data-toggle="tab">Ingresar</a></li>
        <li><a href="#Register" data-toggle="tab">Crear Cuenta</a></li>
    </ul>
    <div id="myTabContent" class="tab-content">
        <div class="tab-pane active in" id="Accesso">
            <!----- Formulario Acceso al sistema ---->
            <div class="panel-body">
            <div class="col-md-4">
            <img src="img/port03.jpg" alt="" class="img-max-zise">
            </div>
            <div class="col-md-8">
            <form class="form-signin"  method="post" role="form">
                <span id="reauth-email" class="reauth-email"></span>
                <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required autofocus>
                <input type="password" id="inputPassword" class="form-control" placeholder="Contraseña" required>
                <div id="remember" class="checkbox">
                    <label>
                        <input type="checkbox" value="remember-me"> Remember me
                    </label>
                </div>
                <button class="btn btn-lg btn-success btn-block btn-signin" type="submit">Ingresar</button>
            </form><!-- /form -->
            <a href="#" class="forgot-password"data-target="#ChangePassw" data-toggle="modal">
                ¿Cambiar contraseña?
            </a>
            </div>
            </div>   
            <div class="panel-footer"><br></div>  
             <!----- Fin de Formulario Acceso al sistema ---->
        </div>
        <div class="tab-pane fade" id="Register">
            <!----- Formulario de registro de usuarios ---->
    <form class="form-signin" method="post" role="form" class="">
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
                    <button type="submit" class="btn btn-success">Registrar</button>
                    <button type="button" class="btn btn-warning">Cancelar</button>
                    </div>
				</div>  
            </div>
            <div class="DataRegister col-md-8">
                <input type="text" class="form-control" placeholder="Nombre" required>
                <input type="text" class="form-control" placeholder="Apellidos" required>
                <input type="text" class="form-control" placeholder="Desempeño" required>
                <input type="email" id="inputEmail" class="form-control" placeholder="Correo" required>
                <input type="text" class="form-control" placeholder="Usuario" required>
                <input type="password" class="form-control" id="ejemplo_password_1" placeholder="Contraseña" required>
            </div>
        </div>
        <div class="panel-footer"><br></div>
    </form>
        <!------ Fin de formulario de registro --->
        </div>
    </div>
</div>

<!---- Modal Contraseña--->
<div class="modal" tabindex="-1" role="dialog" id="ChangePassw">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Cambiar contraseña</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Enviar</button>
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