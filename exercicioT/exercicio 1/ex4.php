<link rel="stylesheet" href="style.css">
    <div class="box">
        <h2>Classificação Completa</h2>
  <nav>
            <a href= "ex1.php "> Exercicio 1</a>
             <a href= "ex2.php "> Exercicio 2</a>
              <a href= "ex3.php "> Exercicio 3</a>
               <a href= "ex4.php "> Exercicio 4</a>

        </nav>
<form method="post">
            <label for="">Digite o numero</label><br><br>
            <input type="number" name="numero1" placeholder="Lado 1" step="any" required>
            <br><br>

            <input type="number" name="numero2" placeholder="Lado 2" step="any" required> <br><br>

            <input type="number" name="numero3" placeholder="Lado 3" step="any" required><br><br>

            <button>Verificar</button>
         
            
</form> 
<?php
if($_POST){
$numero1 = $_POST['numero1'];
$numero2 = $_POST['numero2'];
$numero3 = $_POST['numero3'];

if ($numero1 <= 0 || $numero2 <= 0 || $numero3 <= 0) {
    echo "Erro: valores negativos ou zero";
    exit;
}

if (!($numero1 + $numero2 > $numero3 && $numero1 + $numero3 > $numero2 && $numero2 + $numero3 > $numero1)) {
    echo "Erro: lados inválidos";
    exit;
}

    
    

if ($numero1*$numero1 == $numero2*$numero2 + $numero3*$numro3) {
    $tipoAngulo = "Retângulo";
} elseif ($numero1*$numero2 > $numero2*$numero2 + $numero3*$numero3) {
    $tipoAngulo = "Obtusângulo";
} else {
    $tipoAngulo = "Acutângulo";
}

echo "Triângulo válido<br>";
echo "Classificação: $tipoLado e $tipoAngulo";
}}
?>
  </div>
