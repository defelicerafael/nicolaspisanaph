<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: Authorization,Content-Type,Accept,Origin,User-Agent,DNT,Cache-Control,X-Mx-ReqToken,Keep-Alive,X-Requested-With,If-Modified-Since");
header('Access-Control-Allow-Methods: GET, POST, PUT');
include_once 'class_sql.php';

$objDatos = json_decode(file_get_contents("php://input"));

$tabla = $objDatos->tabla;
$datos = $objDatos->datos;
$id = $objDatos->id;
$where = $objDatos->where;

$array = json_decode(json_encode($datos), True);

//print_r($array);

$hoy = date("Y-m-d H:i:s");   
$fotos = "";
$i = 0;
$len = count($array['fotos']);
//echo $len;


foreach ($array['fotos'] as $key => $value) {
    if($len == 1){
        $fotos = '["img/home/articulos/'.$id.'/carousel/'.$value['img'].'"]';
    }else{
        if ($i == 0) {
            $fotos .= '["img/home/articulos/'.$id.'/carousel/'.$value['img'].'",';
        } else if (($i == $len - 1)||($len == 1)) {
            $fotos .= '"img/home/articulos/'.$id.'/carousel/'.$value['img'].'"]';
        } else{
            $fotos .= '"img/home/articulos/'.$id.'/carousel/'.$value['img'].'",';
        }
    }
    $i++;
}

$ccsi = new Sql;

$ccsi->edit($tabla,'img',$fotos,'id',$id);
$mal = $ccsi->getMal();
if($mal>0){
    echo "Hubo $mal errores, pruebe mas tarde...";
}else{
    echo "Realizamos la edicion con exito!";
}





