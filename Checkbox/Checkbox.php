<html lang="es-ES">
    
<head>
<meta charset="UTF-8">
</head>
    
<body background =" https://cdn.hobbyconsolas.com/sites/navi.axelspringer.es/public/media/image/2020/07/mejores-juegos-ps4-1996397.jpg"
   style="color:#003C99  ";>
<?php
     if (isset($_REQUEST['Futbol']))
     {
       $t= $_REQUEST['h']+ $_REQUEST['m'];
        $porch = ($_REQUEST['h']*100)/ $t;
        $porcm = ($_REQUEST['m']*100)/ $t;
        echo "El porcentaje de hombres es de $porch % <br>";
        echo "El porcentaje de mujeres es de $porcm % <br>";
     }
     if (isset($_REQUEST['Basquetbol']))
     {
       $t= $_REQUEST['h']+ $_REQUEST['m'];
        $porch = ($_REQUEST['h']*100)/ $t;
        $porcm = ($_REQUEST['m']*100)/ $t;
        echo "El porcentaje de hombres es de $porch % <br>";
        echo "El porcentaje de mujeres es de $porcm % <br>";
     }
     if (isset($_REQUEST['Tenis']))
     {
       $t= $_REQUEST['h']+ $_REQUEST['m'];
        $porch = ($_REQUEST['h']*100)/ $t;
        $porcm = ($_REQUEST['m']*100)/ $t;
        echo "El porcentaje de hombres es de $porch % <br>";
        echo "El porcentaje de mujeres es de $porcm % <br>";
     }
     if (isset($_REQUEST['Padel']))
     {
       $t= $_REQUEST['h']+ $_REQUEST['m'];
        $porch = ($_REQUEST['h']*100)/ $t;
        $porcm = ($_REQUEST['m']*100)/ $t;
        echo "El porcentaje de hombres es de $porch % <br>";
        echo "El porcentaje de mujeres es de $porcm % <br>";
     }
?>