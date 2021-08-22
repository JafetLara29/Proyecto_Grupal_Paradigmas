<?php
//Conexion a la base de datos
    class Data{
        private static $instancia = NULL;
        
        public static function createInstance(){
            if(!isset(self::$instancia)){//Hacemos referencia a nuestra instancia
                $optionsPDO[PDO::ATTR_ERRMODE] = PDO::ERRMODE_EXCEPTION; 
                self::$instancia = new PDO('mysql:host=localhost;dbname=dbusers', 'root', '', $optionsPDO);
                //  echo "Conexion realizada";
            }
            return self::$instancia;
        }
    
    }
?>