<?php

include_once '../admin/server/class_sql.php';


$categoria = filter_input(INPUT_GET, 'categoria', FILTER_SANITIZE_SPECIAL_CHARS);
$limite1 = filter_input(INPUT_GET, 'limite1', FILTER_SANITIZE_SPECIAL_CHARS);
$limite2 = filter_input(INPUT_GET, 'limite2', FILTER_SANITIZE_SPECIAL_CHARS);
$column = filter_input(INPUT_GET, 'columnas', FILTER_SANITIZE_SPECIAL_CHARS);

/*$categoria = "novias";
$limite1 = 9;
$limite2 = 9;
$column = 3;*/



if(!empty($categoria)){
    $array['categoria'] = $categoria;
}else{
    $array =[];
}



$sql = new Sql;
$columnas = $sql->showColumnNames('imagenes');
$array['mostrar'] = 'si';    
$select = $sql->selectTablaFromTo('imagenes',$array,'orden','asc',$limite1,$limite2);
$null = is_null($select);

if($null==true){
    echo "[]";
}else{
    //echo count($select);
    $divido = count($select)/$column;
    
    //echo  $divido;
    
    $divididos = array_chunk($select, $divido, true);
    
    /*echo "<pre>"; 
    print_r($divididos);
    echo "</pre>";*/
    
    $sql->jsonConverter($divididos); 
}
?>