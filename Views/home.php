<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo COMPANY; ?></title>
    <?php include "./Views/scripts.php"; ?>
</head>
<body>

<?php 
$peticionAjax=false;
require_once "./Controller/viewProcess.php";
    $vista = new viewProcess();
    $vistaR = $vista->view_Process();

    session_start(['name'=>'asd']);

    if(!isset($_SESSION['tipo_user']) && $vistaR!= null){
        $listaSimple=["inicio","index","home"];
        include "./Views/modules/inicio.php";
        
        if(isset($_GET['page'])){
            if(in_array($_GET['page'],$listaSimple)){
                
                switch ($vistaR) {
                    case "404":
                        include "./Views/modules/404-view.php";
                        break;
                    default:
                        include $vistaR;
                        break;
                }
            }
        }
    }else{
        if(isset($_SESSION['tipo_user'])){
            ?>
            <h3>hello user</h3>
            <?php
        }
    }

?>
    
</body>
</html>