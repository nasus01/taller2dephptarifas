  
<?php 

if(isset($_POST["btncalcular"])){

    require_once "Tallerdos.php";
    $taller = new Taller();
    $valor =$_POST["txtvalor"];
    $taller ->setValorSerie($valor);
    $taller ->tallerdos();

    


}else{
    echo"Valor invalido";
}


?>