<?php
include_once 'class_sql.php';

$sql = new Sql;
$columnas = $sql->showColumnNames('bio');

$array = array('mostrar'=>'si');    
$select = $sql->selectTablaNew('bio',$array,'id','ASC','1');
    //echo "entre en si el ID esta vacio";

//print_r($select);

$null = is_null($select);
if($null==true){
    echo "[]";
}else{
$sql->jsonConverter($select); 
}
