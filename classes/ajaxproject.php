<?php  $filepath=realpath(dirname(__FILE__));?>
<?php include_once($filepath.'/../lib/database.php')?>
<?php
        class AjaxProject{
            private $db;
            public function __construct()
            {
                $this->db=new Database();
               }
           

       

        public function autoComplete($skill){
            $query="SELECT * FROM ajax where name like '%$skill%'";
            $getskill=$this->db->select($query);
            $result= " ";
            $result.="<div class='skill'<ul>";

            if($getskill){
                while ($data=$getskill->fetch_assoc()){
                    $result.='<li>'.$data['name'].'<li>';
                }
            }else{
                     $result.='<li>NO result<li>';
                }
                $result.='</ul></div>';
                echo $result;
            
        }

        public function checkUser($username){
            $query=" SELECT name FROM ajax where name='$username'";
            $result=$this->db->select($query);
            if (empty($username)) {
                echo "Please inter your user name";
                exit();
            }elseif($result){
                echo "not valid ".$username;
                exit();
            }else{
                echo $username." valid";
                exit();
            }
        }
}