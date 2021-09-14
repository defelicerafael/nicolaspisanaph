<?php
    include_once 'server/archivos_back.php';
   
?>
<div class="px-md-5 mx-md-5 px-4 mx-0">
        <div class="mansonry_row"  id="archivos"></div>
        <button id="mas_fotos" type="button" class="btn btn-outline-secondary mx-auto d-block mt-3">Ver más fotos</button>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-fullscreen">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-title">NATT CÓRDOBA - MAKE UP ARTIST - HAIRDRESSER</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close" id="cerrarModal"></button>
            </div>
            <div class="modal-body">
                <div id="carouselSegundo" class="carousel carousel-dark slide" data-bs-ride="carousel">
                    <div class="carousel-inner">
                    <?php
                        foreach($select as $k=>$v){
                    ?>
                        <div class="carousel-item segundo" data-carousel-numero="<?php echo $v['id'];?>">
                            <img src="<?php echo $v['img_home'];?>" class="mx-auto d-block imgmodal" alt="...">
                        </div>
                    <?php 
                            
                        } // FOREACH 1
                    ?> 
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselSegundo" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselSegundo" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- MODAL -->


