<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    $numerosArray = $_POST["numeros"];
    $numeros = explode(",", $numerosArray);
    sort($numeros);
    echo "Números ordenados de menor a mayor: ";
    foreach ($numeros as $numero) {
        echo $numero." ";
    }
    echo "<br>";

    $pares = array();
    $impares = array();
    foreach($numeros as $numero){
        if($numero % 2 == 0){
            $pares[] = $numero;
        }else{
            $impares[] = $numero;
        }
    }

    rsort($pares);
    echo "Números pares ordenados de mayor a menor: ";
    foreach($pares as $par){
        echo $par. " ";
    }
    echo "<br>";

    sort($impares);
    echo "Números impares ordenados de menor a mayor: ";
    foreach($impares as $impar){
        echo $impar. " ";
    }
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
</head>
<body>
</details>
     
     <details>
       <summary>Area figuras</summary>
       <p><a rel="stylesheet" type="text/css" href="../areafig.html">Segundo ejercicio</a></p>
     </details>
    
     <details>
       <summary>Promedio notas</summary>
       <p><a rel="stylesheet" type="text/css" href="../prom.html">Tercer ejercicio</a></p>
     </details>

     <details>
       <summary>Gestión docentes</summary>
       <p><a rel="stylesheet" type="text/css" href="../gestdoc.html">Cuarto ejercicio</a></p>
     </details>
     <div>
        <a href="../main.html">
     <button>Volver</button>
     </a>
     </div>
    

</body>
</html>
