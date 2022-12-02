<?php include ("./cabecalho.php");?>

<?php
include "conexao.php";

if(isset ($_POST) && !empty($_POST)){
    $pergunta = $_POST["pergunta"];
    $a = $_POST["a"];
    $b = $_POST["b"];
    $c = $_POST["c"];
    $d = $_POST["d"];
    $e = $_POST["e"];
    $correta = $_POST["correta"];

    $query = "insert into questoes (pergunta,a,b,c,d,e,correta) "; 
    $query = $query." values('$pergunta','$a','$b','$c','$d','$e','$correta')";
    $resultado = mysqli_query($conexao,$query);
}
?>

<form action= "./resultado.php" method= "post">



<?php
    $query = "select * from questoes order by rand() limit 15";  
    $resultado = mysqli_query($conexao, $query);
  
    $i=0;
    while($linha = mysqli_fetch_array($resultado)){ 
        
        ?>

            <div style="width: 100%; border:1px solid;"> 
                <h1><?php echo $linha["pergunta"]; ?></h1>

             
                <h3>    
                     
                    <input type="radio" name="correta<?php echo $i ?>" value="a" />
                    <label> A) </label>
                    <?php echo $linha["a"]; ?>
                </h3>
                


                <h3>
                    
                    <input type="radio" name="correta<?php echo $i?>" value="b" />
                    <label> B) </label>
                    <?php echo $linha["b"]; ?>
                </h3>


            
                <h3>
                    
                    <input type="radio" name="correta<?php echo $i?>" value="c" />
                    <label> C) </label>
                    <?php echo $linha["c"]; ?>
                
                </h3>


                <h3>
                    
                    <input type="radio" name="correta<?php echo $i?>" value="d" />
                    <label> D) </label>
                    <?php echo $linha["d"]; ?>
                </h3>


                <h3>
                    
                    <input type="radio" name="correta<?php echo $i?>" value="e" />
                    <label> E) </label>
                    <?php echo $linha["e"]; ?>
                </h3>   
                <input type="hidden" name="id<?php echo $i?>" value="<?php echo $linha['id']; ?>" >
                <br><br>

            </div>
        <?php
        $i++;
    }
?>
<button type="submit" class="btn btn-outline-dark">Enviar Respostas</button>