<?php
class City{
    public static function getAllCiteis(){
           $con= new connection();
           $stmt=$con->get('SELECT*FROM cities');
            foreach($stmt as $row){
                echo"<option value='" .$row["id"]."'>".$row["name"]." </option>";
           
            }
    
    }


}

   
   ?>