<?php
$clientes[] = array(
    "img"=>array(
        "img/home/KAJU_65.jpg",
        "img/home/KAJU_41.jpg",
        "img/home/KAJU_61.jpg",
        "img/home/KAJU_72.jpg"
        ),
    "cliente"=>"Kaju",
    "rubro"=>"Indumentaria",
    "contacto"=>"Ramiro Colombo",
    "anio"=>"2019"
);
$clientes[] = array(
    "img"=>array(
        "img/home/PATA_1.jpg",
        "img/home/PATAGONIA_5.jpg",
        "img/home/PATAGONIA_33.jpg",
        "img/home/PATAGONIA_41.jpg"
        ),
    "cliente"=>"Distribuidora del lago",
    "rubro"=>"Cerveza Patagonia",
    "contacto"=>"Santiago Zubillaga",
    "anio"=>"2017"
); 
$clientes[] = array(
    "img"=>array(
        "img/home/DSC_8842.jpg",
        "img/home/CORO_1.jpg",
        "img/home/DSC_8836.jpg",
        "img/home/DSC_8845.jpg"
        ),
    "cliente"=>"Distribuidora del lago",
    "rubro"=>"Cerveza Corona",
    "contacto"=>"Santiago Zubillaga",
    "anio"=>"2017"
); 
$clientes[] = array(
    "img"=>array(
        "img/home/DSC_7517.jpg",
        "img/home/DSC_7733.jpg",
        "img/home/Corona_2.jpg",
        "img/home/DSC_7841.jpg"
        ),
    "cliente"=>"Masa Madre Catering",
    "rubro"=>"Gastronomía",
    "contacto"=>"Mariano Fedulio",
    "anio"=>"2019"
);
/*$clientes[] = array(
    "img"=>array(
        "img/home/Tia-Rosa_10.jpg",
        "img/home/tia-1.jpg",
        "img/home/tia-2.jpg",
        "img/home/tia-3.jpg"
        ),
    "cliente"=>"Grupo Bimbo Argentina",
    "rubro"=>"Alimentos",
    "contacto"=>"Graciela Papaianni",
    "anio"=>"2018"
); */     

$clientes[] = array(
    "img"=>array(
        "img/home/Amo-Vajilla_34.jpg",
        "img/home/Amo-Vajilla_2.jpg",
        "img/home/Amo-Vajilla_3.jpg",
        "img/home/Amo-Vajilla_1.jpg"
        ),
    "cliente"=>"Amo Vajilla",
    "rubro"=>"Bazar",
    "contacto"=>"Marcos Amorisa",
    "anio"=>"2020"
);  
$clientes[] = array(
    "img"=>array(
        "img/home/banda-1.jpg",
        "img/home/ALTEREGO_22.jpg",
        "img/home/falk_5.jpg",
        "img/home/ALTEREGO_10.jpg"
        ),
    "cliente"=>"Alter Ego",
    "rubro"=>"Bandas",
    "contacto"=>"Luciano Batistón",
    "anio"=>"2020"
);     
?>
    <div class="container mt-md-5 mt-2">
        <h3 class="text-white text-center">CLIENTES</h3>
        <?php

            foreach($clientes as $k=>$v){
                //echo $k['cliente']."<br/>";
                //echo $v['cliente']."<br/>";
        ?>
            
                <h3 class="text-white text-start mt-md-0 mt-5"><?php echo $v["cliente"];?></h3>
                <p class="text-white text-start">
                    <?php echo $v["rubro"];?> <!--- <?php //echo $v["anio"];?>-->
                    <br/>
                    Contacto: <?php echo $v["contacto"];?>
                    <br/>
                </p>
                <div class="row row-cols-2 row-cols-md-4 g-0">
                    <?php
                        foreach($v['img'] as $img){ 
                    ?>
                    <div class="col align-self-center">
                        <img src="<?php echo $img;?>" class="mx-auto d-block img-fluid mb-md-5 mb-0" alt="Nico Pisana Fotografía" title="Nico Pisana Fotografía">
                    </div>
                    <?php 
                    }
                    ?>
                    
                </div>    
                <?php
                }
                ?>
            
    </div>     
  