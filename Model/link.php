<?php
    class linkProcess{
        protected function view_link($view){
            $listaSimple=["inicio","index","home"];

            if(in_array($view,$listaSimple)){
                if(is_file("./Views/modules/".$view."-view.php")){
                    $cont = "./Views/modules/".$view."-view.php";
                }else{
                    $cont = "home";
                }
            }else if($view == "Out"){
                $cont = null;
            }else{
                $cont = "404";
            }
            return $cont;
        }
    }
?>