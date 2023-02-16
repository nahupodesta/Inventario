<?php 
// //coneccion a base de datos!
function conexion(){
    $pdo = new PDO('mysql:host=localhost;dbname=inventario', 'root', '');
    return $pdo;
}

// verificar datos
function VerficarDatos($filtro, $cadena){
    if(preg_match("/^".$filtro."$/",$cadena)){
        return false;
    }else{
        return true;
    }
}

// limpiar cadenas de texto 
function LimpiarCadenas($cadena){
    //elimina los espacios en blanco del inicio y final de cadena "trim()"
    $cadena = trim($cadena);
    //quita la barras de un string con comillas escapada
    $cadena = stripslashes($cadena);
    //
    $cadena = str_ireplace($cadena);
    $cadena = str_ireplace("<script>", "",$cadena);
    $cadena = str_ireplace("</script>", "",$cadena);
    $cadena = str_ireplace("<script src", "",$cadena);
    $cadena = str_ireplace("<script type=", "",$cadena);
    $cadena = str_ireplace("SELECT * FROM", "",$cadena);
    $cadena = str_ireplace("DELETE FROM", "",$cadena);
    $cadena = str_ireplace("INSERT INTO", "",$cadena);
    $cadena = str_ireplace("DROP TABLE", "",$cadena);
    $cadena = str_ireplace("DROP DATABASE","",$cadena);
    $cadena = str_ireplace("TRUNCATE TABLE", "",$cadena);

    return $cadena;
}

