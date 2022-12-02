<?php include ("./cabecalho.php");?>

<?php
include "conexao.php";
$pontuação = 0;

?>



<?php
$i=0;
for ($i=0 ; $i<15;$i++ ){
    $query = "select * from questoes where Id=".$_POST['id'.$i] ;  
    $resultado = mysqli_query($conexao, $query);
    $linha = mysqli_fetch_array($resultado)
        ?>


            <div style="width: 100%; border:1px solid;"> 
                <h1><?php echo $linha["pergunta"]; ?></h1>

             
                <h3 <?php if(strtolower( $linha ['correta'])== 'a' ){echo  "style='background-color:#0CCD9B'"; }elseif($_POST['correta'.$i] == 'a'){echo  "style='background-color:#EE3B3B'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; }?>>    
                    <label> a) </label>
                    <?php echo $linha["a"]; ?>
                </h3>
                


                <h3 <?php if(strtolower( $linha ['correta'])== 'b' ){echo  "style='background-color:#0CCD9B'"; }elseif($_POST['correta'.$i] == 'b'){echo  "style='background-color:#EE3B3B'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; }?>>
                    <label> b) </label>
                    <?php echo $linha["b"]; ?>
                </h3>


            
                <h3 <?php if(strtolower( $linha ['correta'])== 'c' ){echo  "style='background-color:#0CCD9B'"; }elseif($_POST['correta'.$i] == 'c'){echo  "style='background-color:#EE3B3B'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; } ?>>
                    <label> c) </label>
                    <?php echo $linha["c"]; ?>
                
                </h3>


                <h3 <?php if(strtolower( $linha ['correta'])== 'd' ){echo  "style='background-color:#0CCD9B'"; }elseif($_POST['correta'.$i] == 'd'){echo  "style='background-color:#EE3B3B'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; }?>>
                    <label> d) </label>
                    <?php echo $linha["d"]; ?>
                </h3>


                <h3 <?php if(strtolower( $linha ['correta'])== 'e' ){echo  "style='background-color:#0CCD9B'"; }elseif($_POST['correta'.$i] == 'e'){echo  "style='background-color:#EE3B3B'"; } if(strtolower( $linha ['correta'])==$_POST['correta'.$i]){$pontuação++; } ?>>
                    <label> e) </label>
                    <?php echo $linha["e"]; ?>
                </h3>   

                <br>


                <?php echo $pontuação?>
            </div>
          <?php
          } 
          ?>   
