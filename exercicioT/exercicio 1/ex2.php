<link rel="stylesheet" href="style.css">

    <div class="box">
          <nav>
            <a href= "ex1.php "> Exercicio 1</a>
             <a href= "ex2.php "> Exercicio 2</a>
              <a href= "ex3.php "> Exercicio 3</a>
               <a href= "ex4.php "> Exercicio 4</a>

        </nav>
        
        <h2>Classificar Triângulo</h2>

<form method="post">
            <label for="">Digite o numero</label><br><br>
            <input type="number" name="n1" placeholder="Lado 1" required>
            <br><br>

            <input type="number" name="n2" placeholder="Lado 2" required> <br><br>

            <input type="number" name="n3" placeholder="Lado 3"  required><br><br>

            <button>Verificar</button>          
</form> 
<?php
if($_POST){
$n1 = $_POST['n1'];
$n2 = $_POST['n2'];
$n3 = $_POST['n3'];

if ($n1 + $n2 > $n3 && $n1 + $n3 > $n2 && $n2 + $n3 >$n1){

}if($n1 == $n2 && $n2 == $n3){

echo "Forma um Equilátero";

}elseif( $n1 == $n2 || $n1 == $n3 || $n2 == $n3){

   echo "Isósceles";
} else{

    echo "Não forma um Triângulo";
}
}
?>
 </div>