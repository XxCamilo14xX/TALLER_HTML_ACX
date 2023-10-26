<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $materia = $_POST["materia"];
  $cantidad_notas = $_POST["cantidad_notas"];
  $minima = str_replace(',', '.', $_POST["minima"]);
  $maxima = str_replace(',', '.', $_POST["maxima"]);

  if (!is_numeric($minima) || !is_numeric($maxima)) {
    echo "El rango de calificación debe ser un número.<br>";
    return;
  }

  $suma = 0;
  for ($i = 1; $i <= $cantidad_notas; $i++) {
    $nota = str_replace(',', '.', $_POST["nota".$i]);
    if (!is_numeric($nota) || $nota < $minima || $nota > $maxima) {
      echo "La nota ".$i." no es un número válido o está fuera del rango permitido.<br>";
      return;
    }
    $suma += $nota;
  }

  $promedio = $suma / $cantidad_notas;
  echo "El promedio de la materia ".$materia." es: ".$promedio."<br>";

  if ($promedio >= 3.0) {
    echo "¡Felicidades! Has aprobado la materia.<br>";
  } else {
    echo "Lo siento, no has aprobado la materia.<br>";
  }
}
?>

