<!-- Data popover script -->
<script>
    $(function () {
        $('[data-toggle="popover"]').popover({ html : true });
    });
</script>
<div class="panel panel-default">
    <div class="panel-heading">Mis Archivos
    <!-- FILTROS --->
        <div class="col-md-2">
            <div class="btn-group" role="group" aria-label="">
                <div class="btn-group" role="group">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="glyphicon glyphicon-compressed" ></span>Filtrar</a>
                    <ul class="dropdown-menu">
                    <li><a href="#">Todos los archivos</a></li>
                        <li><a href="#">Mis Archivos</a></li>
                        <li><a href="#">Guardados</a></li>
                        <li><a href="#">Leidos</a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!--- Contador --->
            <span class="badge pull-right">42</span>
    </div>

    <div class="panel-body">

        <div class="MyFiles">
            <div class="col-md-2">
                <img src="img/banner1.jpg" class="img-adap" alt="">
            </div>
            <div class="col-md-10">
            <span class="glyphicon glyphicon-option-vertical pull-right" data-toggle="popover" data-placement="bottom" title="Opciones" data-content="
            <a href='#' class='pop' onclick='alerta()'>Eliminar<span class='glyphicon glyphicon-trash'></span></a>
            <a href='#' data-toggle='modal' data-target='#flipFlop'>Editar<span class='glyphicon glyphicon-pencil'></span></a>
            <a href='#'>Leido<span class='glyphicon glyphicon-eye-open'></span></a>"></span>
                <div class="title"><h4>Diseño de software</h4></div>
                <div class="author">Fiodor Dostoievsqui</div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                                <span class="sr-only">60% completado</span>
                        </div>
                    </div>
                    <!---- CALIFICACION ESTRELLA --->
                    <form>
                        <p class="clasificacion">
                            <input id="radio1" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio1">★</label><!--
                            --><input id="radio2" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio2">★</label><!--
                            --><input id="radio3" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio3">★</label><!--
                            --><input id="radio4" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio4">★</label><!--
                            --><input id="radio5" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio5">★</label>
                            <span class="pull-right">(4/5)</span>
                        </p>
                    </form>
                    <!---- CALIFICACION ESTRELLA --->
                <div class="">Número de pagina 100 | 60</div>
            </div>
        </div>

    </div>
<!-- Divicion de dos libros --->
    <div class="panel-body">
        
        <div class="MyFiles">
            <div class="col-md-2">
                <img src="img/bg-banner02.jpg" class="img-adap" alt="">
            </div>
            <div class="col-md-10">
            <span class="glyphicon glyphicon-option-vertical pull-right" data-toggle="popover" data-placement="bottom" title="Opciones" data-content="
            <a href='#' class='pop' onclick='alerta()'>Eliminar<span class='glyphicon glyphicon-trash'></span></a>
            <a href='#' data-toggle='modal' data-target='#flipFlop'>Editar<span class='glyphicon glyphicon-pencil'></span></a>
            <a href='#'>Leido<span class='glyphicon glyphicon-eye-open'></span></a>"></span>
                <div class="title"><h4>Arquitectura de software</h4></div>
                <div class="author">Federico Meza</div>
                    <div class="progress">
                        <div class="progress-bar" role="progressbar" aria-valuenow="60"
                            aria-valuemin="0" aria-valuemax="100" style="width: 20%;">
                                <span class="sr-only">20% completado</span>
                        </div>
                    </div>
                    <!---- CALIFICACION ESTRELLA --->
                    <form>
                        <p class="clasificacion">
                            <input id="radio6" type="radio" name="estrellas" value="5"><!--
                            --><label for="radio6">★</label><!--
                            --><input id="radio7" type="radio" name="estrellas" value="4"><!--
                            --><label for="radio7">★</label><!--
                            --><input id="radio8" type="radio" name="estrellas" value="3"><!--
                            --><label for="radio8">★</label><!--
                            --><input id="radio9" type="radio" name="estrellas" value="2"><!--
                            --><label for="radio9">★</label><!--
                            --><input id="radio10" type="radio" name="estrellas" value="1"><!--
                            --><label for="radio10">★</label>
                            <span class="pull-right">(4/5)</span>
                        </p>
                    </form>
                    <!---- CALIFICACION ESTRELLA --->
                <div class="">Número de pagina 100 | 20</div>
            </div>
        </div>
    </div>
<div class="panel-footer"></div>
</div>
