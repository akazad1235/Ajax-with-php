<?php  //$filepath=realpath(dirname(__FILE__));?>
<?php //include_once($filepath.'/../classes/ajaxproject.php')?>
<?php include("../../classes/ajaxproject.php")?>
<?php $aj=new AjaxProject()?>



<?php
			if ($_SERVER["REQUEST_METHOD"]=="POST") {
				$username=$_POST['username'];
				$user=$aj->checkUser($username);
			
			}

?>