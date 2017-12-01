<!-- Portada -->
<section id="Portada">
    <div class="container"></div>
</section>
<?php include('pages/servicios.php');?>


<!-- Projectos -->
<section id="Projectos">
    <div class="container">
        <!-- Three columns of text below the carousel -->
        <div class="row">
            <!-- Imagen del projecto -->
            <div class="col-sm-12">
                <a href="#Venatna1" data-toggle="modal">
                   <!-- <buttom class="btn"> click me</buttom> -->
                    <img class="img-rounded" src="img/exponentes/exp1.jpg" alt="Generic placeholder image" width="140" height="140">
                </a>
                <!-- Ventana emergente con descripcion del proyecto. -->
                <div class="modal fade" id="Venatna1">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <!-- Header de la ventana -->
                            <div class="modal-header">
                                <button tyle="button" class="close" data-dismiss="modal" arial-hidden="true">&times;</button>
                                <h4 class="modal-title">Tema de Proyecto</h4>
                            </div>
                            <!-- contenido de la ventana -->
                            <div class="body-modal">
                                <div class="container-fluid">
                                    <div class="row">
                                        <div class="col-sm-6">
                                            <h2>Columna 1</h2>
                                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam egestas vestibulum massa, et consequat mauris vestibulum nec. Donec ultricies rhoncus mauris non viverra. Etiam commodo arcu nibh, quis fermentum massa viverra eget. Aliquam tincidunt interdum felis lacinia rutrum. Integer mattis nunc sit amet ligula eleifend vehicula sed vel erat. Ut eu lorem ex. Integer augue lacus, tincidunt a mauris ut, maximus pellentesque metus. Morbi arcu erat, imperdiet vitae tortor nec, mattis dignissim nibh. Duis tempor auctor ante. Pellentesque ac diam ac ante ornare placerat. Mauris ultrices ante in nulla fermentum, eget dapibus tellus finibus. Donec egestas eros at velit tristique egestas. Aenean non ipsum ut libero pulvinar dapibus. Fusce gravida ut sapien vitae elementum. Nunc et eros et ante egestas molestie. Donec varius orci dui, a finibus massa convallis efficitur.</p>
                                        </div>
                                        <div class="col-sm-6">
                                            <h2>Columna 2</h2>
                                            <p>Pellentesque facilisis ullamcorper erat nec euismod. Donec non risus id velit malesuada vestibulum. Fusce sed egestas dolor. Donec sed facilisis velit, nec efficitur neque. Sed luctus tempus est et aliquet. Aenean ac ante id felis sollicitudin dictum. Vestibulum at metus egestas, porta est non, tempor mauris. Proin lectus augue, mattis at enim a, luctus scelerisque velit. Duis rutrum accumsan elit vel viverra. In eu lorem id enim sollicitudin sagittis. Vestibulum euismod consequat mauris, in molestie dui luctus eu. Proin gravida molestie mauris.</p>
                                        </div>
                                        </div>
                                    <div class="row">
                                        <div class="col-sm-12">
                                            <h2>Columna 2</h2>
                                            <p>Pellentesque facilisis ullamcorper erat nec euismod. Donec non risus id velit malesuada vestibulum. Fusce sed egestas dolor. Donec sed facilisis velit, nec efficitur neque. Sed luctus tempus est et aliquet. Aenean ac ante id felis sollicitudin dictum. Vestibulum at metus egestas, porta est non, tempor mauris. Proin lectus augue, mattis at enim a, luctus scelerisque velit. Duis rutrum accumsan elit vel viverra. In eu lorem id enim sollicitudin sagittis. Vestibulum euismod consequat mauris, in molestie dui luctus eu. Proin gravida molestie mauris.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <!-- Footer de la ventana Modal -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Contacto -->
<?php include('pages/contacto.php');?>