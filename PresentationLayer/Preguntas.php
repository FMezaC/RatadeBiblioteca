<script>
// Auto size Input
$(document).ready(function () {
    $('textarea#mensaje').autoResize();
});

// Data Togle
$(function () {
    $('[data-toggle="popover"]').popover({ html : true });
});
</script>
<div class="panel panel-default">
    <div class="panel-heading">Pregunta</div>
    <form action="#" method="post" role="form" class="">
        <div class="panel-body">
            <div class="col-md-12">
                <!-- main -->
                <textarea name="mensaje" id="mensaje" class="form-control textarea h-100"  placeholder="Escriba una nota..."></textarea>
                <!-- footer -->
                <div class="grey-style">
                    <div class="pull-left">
                        <button class="btn btn-sm btn-theme"><i class="glyphicon glyphicon-camera"></i></button>
                        <button class="btn btn-sm btn-theme"><i class="glyphicon glyphicon-map-marker"></i></button>
                    </div>
                    <div class="pull-right">
                        <button class="btn btn-sm btn-theme03">POST</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>


<!--- POST DE USUARIOS ---->
<div class="panel panel-default">
    <div class="panel-heading">
        <div class="grey-style">
            <div class="col-md-12">
                <div class="col-md-1">
                    <div class="pull-left">
                        <img src="img/male.png" class="img-profile" alt="">
                    </div>
                </div>
                <div class="col-md-10">
                    <h5>Federico Meza Colorado</h5>
                </div>
                <div class="col-md-1">
                    <div class="pull-right">
                        <a href="#"><span class="glyphicon glyphicon-option-vertical"></span></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--- FIN PANEL HEADER POST --->
    <form action="#" method="post" role="form" class="">
        <div class="panel-body">
            <div class="col-md-12">
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit mollitia ea 
                        assumenda corrupti, iusto hic, nobis voluptatum accusantium pariatur, 
                        error vel eligendi alias ipsa ut ratione nam temporibus repellat quisquam.</p>
                <!-- fin main -->
            </div>
        </div>

        <div class="panel-footer">
            <div class="grey-footer">
                <div class="pull-right Aline-items">
                    <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="#" class="comment"><span class="glyphicon glyphicon-comment"></span></a>
                    <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
            </div>
        </div>

        <!---- respuestas ----->
        <div class="panel-body">
            <div class="col-md-12">
                <!-- main -->
                <textarea name="mensaje" id="mensaje" rows="1" class="form-control textarea h-100"  placeholder="Escriba una respuesta..."></textarea>
                <!-- footer -->
                <div class="grey-style">
                    <div class="pull-right">
                        <button type="button" class="btn btn-sm btn-theme04">Cancelar</button>
                        <button type="button" class="btn btn-sm btn-theme03">Publicar</button>
                    </div>
                </div>
                <!-- main -->
                <!-- main -->
                    <p class="comments">Lorem ipsum dolor sit amet consectetur adipisicing elit. Odit mollitia ea 
                        assumenda corrupti, iusto hic, nobis voluptatum accusantium pariatur, 
                        error vel eligendi alias ipsa ut ratione nam temporibus repellat quisquam.</p>
                <!-- fin main -->
            </div>
        </div>

        <div class="panel-footer">
            <div class="grey-footer">
                <div class="pull-right Aline-items">
                    <a href="#"><span class="glyphicon glyphicon-trash"></span></a>
                    <a href="#" class="comment"><span class="glyphicon glyphicon-comment"></span></a>
                    <a href="#"><span class="glyphicon glyphicon-pencil"></span></a>
                </div>
            </div>
        </div>
    </form>
</div>
