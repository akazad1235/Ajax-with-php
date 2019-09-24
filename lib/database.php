<?php  $filepath=realpath(dirname(__FILE__));?>
<?php include($filepath.'/../config/config.php')?>
<?php
       class Database{
            public $host = DB_HOST;
            public $user = DB_USER;
            public $pass = DB_PASS;
            public $name = DB_NAME;
            public $link;
            public $error;
     
       public function __construct(){
        $this->ConnectionDB();
                
        }
        private function ConnectionDB(){
            $this->link =new mysqli($this->host,$this->user, $this->pass, $this->name);
            if(!$this->link){
                $this->error = "database connection faild".$this->link->connect_error;
                return false;
                }
     
            }
            //data insert 
            public function insert($query){
                    $insert_row=$this->link->query($query) or die ($this->link->error.__LINE__);
                    if ($insert_row) {
                        return true;
                    }else{
                        return false;   
                    }
            }
            //data select method
            public function select($query){
                    $select_row=$this->link->query($query) or die ($this->link->error.__LINE__);
                   
                    if($select_row->num_rows>0){
                        return $select_row;
                    }else{
                        return false; 
                    }
            }
            //update method
            public function update($query){
                    $update_row=$this->link->query($query) or die ($this->link->error.__LINE__);
                    if ($update_row) {
                        return true;
                    }else{
                        return false;
                    }
            }
            //delete method
            public function delete($query){
                    $delete_row=$this->link->query($query) or die ($this->link->error.__LINE__);
                    if ($delete_row) {
                        return true;
                    }else{
                        return false;
                    }
            }
            
       }
?>