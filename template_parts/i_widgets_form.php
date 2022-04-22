<section id="widgets-home" class="bg-oscuro">
    <div class="container-fluid wrap">
        <div class="row">
            <?php if(!empty($arrayWidgets)):?>
                <div class="listado-widgets col-md-8 px-0">
                    <?php foreach ($arrayWidgets as $key => $widget) {?>
                        <?php
                            $titulo =  $widget['titulo'];
                            $parrafo = $widget['parrafo'];
                            $imagen_desktop = $widget['imagen_desktop'];
                        ?>
                        <div id="widget-<?php echo $key + 1?>" class="item-widget col-md-4 text-center">
                            <div class="content-item">
                                <?php if($imagen_desktop) :?>                     
                                    <picture class="imagen-item-widget">
                                        <source media="(max-width:640px)" srcset="<?php echo $imagen_desktop ?>">
                                        <img src="<?php echo $imagen_desktop ?>" alt="<?php echo $titulo ?>">
                                    </picture>      
                                <?php endif; ?>   
                                                    
                                <div class="texto-item-widget px-4">
                                    <?php if ($titulo) :?> <h2 class="titulo-item"> <?php echo $titulo ?></h2> <?php endif ?>
                                    <?php if ($parrafo) :?> <p><?php echo $parrafo  ?></p> <?php endif ?>  
                                </div>
                            </div>
                        </div>  
                    <?php }?>
                </div>
            <?php endif ?>      

            <?php 
                include 'template_parts/i_form.php'
            ?>
        </div>
    </div>
</section>