<?php
abstract class Figura {
    abstract public function calcularArea();
}

class Circulo extends Figura {
    private $radio;

    public function __construct($radio) {
        $this->radio = $radio;
    }

    public function calcularArea() {
        return pi() * pow($this->radio, 2);
    }
}

class Cuadrado extends Figura {
    private $lado;

    public function __construct($lado) {
        $this->lado = $lado;
    }

    public function calcularArea() {
        return pow($this->lado, 2);
    }
}

class Rectangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return $this->base * $this->altura;
    }
}

class Triangulo extends Figura {
    private $base;
    private $altura;

    public function __construct($base, $altura) {
        $this->base = $base;
        $this->altura = $altura;
    }

    public function calcularArea() {
        return ($this->base * $this->altura) / 2;
    }
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    switch ($_POST["figura"]) {
        case "circulo":
            $figura = new Circulo($_POST["radio"]);
            break;
        case "cuadrado":
            $figura = new Cuadrado($_POST["lado"]);
            break;
        case "rectangulo":
            $figura = new Rectangulo($_POST["base"], $_POST["altura"]);
            break;
        case "triangulo":
            $figura = new Triangulo($_POST["base"], $_POST["altura"]);
            break;
    }

    echo "El área de la figura es: " . $figura->calcularArea();
}
?>

<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
  <select name="figura">
    <option value="circulo">Círculo</option>
    <option value="cuadrado">Cuadrado</option>
    <option value="rectangulo">Rectángulo</option>
    <option value="triangulo">Triángulo</option>
  </select>
  <br>
  Radio (solo para círculos): <input type="text" name="radio"><br>
  Lado (solo para cuadrados): <input type="text" name="lado"><br>
  Base (para rectángulos y triángulos): <input type="text" name="base"><br>
  Altura (para rectángulos y triángulos): <input type="text" name="altura"><br>
  <input type="submit">
</form>
<div>
        <a href="../main.html">
     <button>Volver</button>
     </a>
     </div>
