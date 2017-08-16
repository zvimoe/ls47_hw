<?php
 class Street{
     private $id=0;
     private $name="";
     private $c_id;
     public function _construct($name,$c_id){
        $this->name=$name;
       $this->c_id=$c_id;
     }
     public function getAllStreets(){
       $con= new connection();
       $stmt=$con->get('SELECT*FROM streets');
       foreach($stmt as $row){

                echo$row["id"].$row["name"]."<br>";  
       }
     }
     public function insert(){
         $con=new connection(); 
         $con->insert('INSERT INTO streets(name,c_id)VALUES(:name, :city)',["name"=>$this->name,"city"=>$this->c_id]);
         
     }
     public function test1(){
      return $this->name;
     }
 }
    
 ?>