<?php  $filepath= realpath(dirname(__FILE__));?>
<?php include_once($filepath.'/../lib/database.php');?>
<?php
  class Product{

  		public $db;

  		public function __construct(){

  			$this->db= new Database();
  		}

  		public function addPro($data){
  			$name=$data['name'];
  			$email=$data['email'];
  			$age=$data['age'];

  			$query="INSERT INTO test(name, email, age) values('$name', '$email', '$age')";
  			$result=$this->db->insert($query);
  			if ($result) {
  				$succ="succes";
  				return $succ;
  			}else{
  				$err="faild";
  				return $err;
  			}

  		}

  		public function getAllData(){
  			$query="SELECT * FROM test";
  			$result=$this->db->select($query);
  			return $result;
  		}



  }

?>