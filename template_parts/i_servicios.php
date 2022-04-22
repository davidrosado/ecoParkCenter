<section id="servicios">
    <?php if(!empty($arrayServicios)):?>
        <?php foreach ($arrayServicios as $key => $servicio) {?>
            <?php
                $titulo =  $servicio['titulo'];
                $parrafo = $servicio['parrafo'];
                $parrafo_2 = $servicio['parrafo_2'];
                $parrafo_3 = $servicio['parrafo_3'];
                $imagen_desktop = $servicio['imagen_desktop'];
                $imagen_mobile = $servicio['imagen_mobile'];
            ?>
            <div id="servicio-<?php echo $key + 1?>" class="item-servicio  bg-oscuro">
                <div class="texto-item-servicio">
                    <?php if ($titulo) :?> <h2 class="titulo-item color-verde"> <?php echo $titulo ?></h2> <?php endif ?>
                    <?php if ($parrafo) :?> <p><?php echo $parrafo  ?></p> <?php endif ?>     
                    <?php if ($parrafo_2) :?> <p><?php echo $parrafo_2  ?></p> <?php endif ?>  
                    <?php if ($parrafo_3) :?> <p><?php echo $parrafo_3  ?></p> <?php endif ?>   
                </div>
         
                <?php if($imagen_desktop) :?>                     
                    <picture class="imagen-item-servicio">
                        <source media="(max-width:640px)" srcset="<?php echo $imagen_mobile ?>">
                        <img src="<?php echo $imagen_desktop ?>" alt="">
                    </picture>      
                <?php endif; ?>                 
             </div>  
        <?php }
    endif ?>    
</section>