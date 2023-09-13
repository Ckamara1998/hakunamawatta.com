<?php
class crud{
    public static function conect()
     {
        try{
            $con=new PDO('mysql:localhost=host; dbname=crudsystem', 'root', '');  
            return $con;
        } catch (PDOException $error1){
            echo 'Error'.$error1->getMessage();
        }catch(Exception $error2){
            echo 'Have problem'.$error2->getMessage();
        }
       
    }
}

?>



