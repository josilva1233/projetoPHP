<?php

 //if(!isset($_SESSION)){
 //  session_start();

 // }

 // if(!isset($_SESSION['id'])){
  //  die("Vocé não pode acessar essa pagina. porque não está logado. <p> <a href=\"index.php\">Entrar</a> </p>");

 //  }
  
 if(!function_exists("protect")){
    function protect(){
        if(!isset($_SESSION))
        session_start();

        if(!isset($_SESSION['id']) || !is_numeric($_SESSION['id'])){
        
           header("Location: index.php");
        }
    }
 }




?>