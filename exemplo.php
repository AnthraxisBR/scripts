<?php 

/** 
  * Arquivo de classe
  * Classe para validar string
  *
  * @author Fulano <email@gmail.com>
  * @version 0.1
  * @example Classe Examplos\ValidarString. 
  */ 
  
  class ValidarString {
    
    /**  
      * Variável que recebe a string. 
      * @access private 
      * @name $string
     */ 
     
     var $string = "" ;
     
     /** 
        * Função testar string 
        * @access public 
        * @param String $string 
        * @return bool
       */ 
       
     function upload_up($string) 
     { 
        return is_string($string);
        
     } 

}
