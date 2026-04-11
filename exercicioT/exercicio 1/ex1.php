<link rel="stylesheet" href="style.css">


    <div class="box">
        <nav>
            <a href= "ex1.php "> Exercicio 1</a>
             <a href= "ex2.php "> Exercicio 2</a>
              <a href= "ex3.php "> Exercicio 3</a>
               <a href= "ex4.php "> Exercicio 4</a>

        </nav>
        <h2>Verificar Triângulo</h2>

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

if ($numero1 + $numero2 +$numero3 && $numero1 + $numero3 +$numero2 && $numero2 + $numero3 +$numero1){
echo "Forma um Triângulo";
}else{
    echo "Não forma um Triângulo";
}}
?>
  </div>