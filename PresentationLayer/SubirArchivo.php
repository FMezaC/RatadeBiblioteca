<div class="panel panel-default">
<div class="panel-heading">Subir Documento</div>
  <div class="panel-body">
      <div class="col-md-12">
          <!-- main -->
          <h5>Título</h5>
          <input type="text" id="inputPassword" class="form-control" placeholder="Título" required>
          <h5>Mostrar</h5>
            <select name="transporte" class="form-control">
              <option>Público</option>
              <option>Privado</option>
            </select>
          <h5>Descripción</h5>
          <textarea name="mensaje" id="mensaje" class="form-control textarea h-100"  placeholder="Escriba una descripcion..."></textarea>
      </div>
  </div>

  <div class="panel-body">
    <div class="file-upload-wrapper center-block">
        <div class="boton-cargar">
          <p class="Texto-Load">Seleccionar Documento</p>
        </div>
        <input type="file" id="input-file-now" class="file-upload" onchange="return ValidaExten()" />
          <p>O arrastre aquí.</p>
    </div>
  </div>

  <div class="panel-body">
    <div id="visorArchivo">
      <p>mostrar archivo</p>
      <!--******Aqui se muestran los archivos******* *--->
    </div>
  </div>
</div>

