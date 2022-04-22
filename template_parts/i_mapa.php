<section id="mapa-site">
    <div class="contenedor d-flex flex-wrap">
        <div class="image-mapa px-0">
            <img src="images/mapa-dark.jpg" alt="">
        </div>
        <div class="datos-mapa">
            <h2 class="color-verde">MAPA DE<br> CONECTIVIDAD</h2>
            <div class="datos">
                <?php if(!empty($arrayLeyendas)):?>
                    <ul class="leyenda">
                        <?php foreach ($arrayLeyendas as $key => $leyenda) {?>
                            <?php
                                $titulo =  $leyenda['titulo'];
                                $imagen = $leyenda['imagen_desktop'];
                            ?>
                            <li class="item s-<?php echo $key +1 ?> color-blanco">
                                <div class="simbolo-item">
                                    <img src="<?php echo $imagen ?>" alt="<?php echo $titulo ?>">
                                </div>
                                <p class="descripcion-item"><?php echo $titulo ?></p>
                            </li>  
                        <?php }?>
                    </ul>
                <?php endif ?>   
            </div>  

            <div class="tiempos color-blanco">
                <h3>TIEMPOS DE TRASLADO</h3>
                <ul class="listado-tiempos">
                    <li class="item">
                        <p>SANTIAGO CENTRO</p>
                        <p class="tiempo">20 MIN</p>
                    </li>
                    <li class="item">
                        <p>PROVIDENCIA</p>
                        <p class="tiempo">15 MIN</p>
                    </li>
                    <li class="item">
                        <p>VITACURA / LAS CONDES</p>
                        <p class="tiempo">15 MIN</p>
                    </li>
                    <li class="item">
                        <p>LA DEHESA</p>
                        <p class="tiempo">25 MIN</p>
                    </li>
                    <li class="item">
                        <p>AEROPUERTO</p>
                        <p class="tiempo">15 MIN</p>
                    </li>
                </ul>
            </div>
        </div>  
    </div>  
</section>