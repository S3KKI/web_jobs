
<?php
	if($peticionAjax){
		require_once "../Config/configDB.php";
	}else{
		require_once "./Config/configDB.php";
	}
	
class mainModel{
		protected function conectar(){
			try{
				$link = new PDO(SGBD,USER,PASS);
			}catch (Exeption $e){
                echo "Error al conectar a la base de datos error: ".$e;
                //sleep(10000);
			}
			return $link;
		}
		protected function consulta_simple($consulta){
			$respuesta = self::conectar()->prepare($consulta);
            $respuesta->execute();
            //echo var_dump($respuesta);
            //sleep(50);   
			return $respuesta;
		}
		
    }
?>