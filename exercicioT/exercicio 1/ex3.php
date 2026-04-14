<link rel="stylesheet" href="style.css">
    <div class="box">
          <nav>
            <a href= "ex1.php "> Exercicio 1</a>
             <a href= "ex2.php "> Exercicio 2</a>
              <a href= "ex3.php "> Exercicio 3</a>
               <a href= "ex4.php "> Exercicio 4</a>

        </nav>
        <h2>Classificar por Ângulo</h2>

<form method="post">
            <label for="">Digite o numero</label><br><br>
            <input type="number" name="num1" placeholder="Lado 1" step="any" required>
            <br><br>

            <input type="number" name="num2" placeholder="Lado 2" step="any" required> <br><br>

            <input type="number" name="num3" placeholder="Lado 3" step="any" required><br><br>

            <button>Verificar</button>
         
            
</form> 
<?php
if($_POST){
$num1 = $_POST['num1'];
$num2 = $_POST['num2'];
$num3 = $_POST['num3'];
    
    $lados = [$num1, $num2, $num3];
    rsort($lados);

if ($num1*$num1 == $num2*$num2 + $num3*$num3){
echo "Triângulo Retângulo";
}else{
    echo "Triângulo Obtusângulo";
}else{  
    echo "Triângulo Acultângulo";
}}
?>
  </div>
