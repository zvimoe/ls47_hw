<?php
 class street{
     private $id=0;
     private $name="";
     private &c_id
     public function _construct($c_id,$name){
         $this->c_id=$c_id;
         $this->name=$name;
     }
     public function getAllStreets(){
       $con= new connection();
       $stmt=$con->get('SELECT*FROM streets')
       foreach($stmt as $row){
           
       }

     }
 }
 ?>