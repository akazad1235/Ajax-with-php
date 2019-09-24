<?php  $filepath=realpath(dirname(__FILE__));?>
<?php include_once($filepath.'/../lib/database.php')?>
<?php
        class Image{
            private $db;
            private $fm;
            public function __construct()
            {
                $this->db=new Database();
                
            }
            public function addimage($data, $file){
                
                    
                       /* 
                            $permited=array('jpg', 'jpeg', 'png', 'gif');
							$image_name=$file['image']['name'];
							$image_size=$file['image']['size'];
							$image_temp=$file['image']['tmp_name'];
							$div=explode('.', $image_name);
							$file_ext=strtolower(end($div));
							$unique_image=substr(md5(time()), 0, 10).'.'.$file_ext;
							$uploaded_image="uploads/".$unique_image;
							
							
							if (empty($image_name)) {
								echo "please select image";
							}
							elseif($image_size>110240){
								echo"pleas upload only 1md less than";
							}elseif(in_array($permited, $permited)){
								echo"you can only upload".implode(", ", $permited);
							}else{
                               move_uploaded_file($image_temp, $uploaded_image);
                               
                                $query="INSERT INTO image(image) values('$uploaded_image')";
                                $result=$this->db->insert($query);
                                if ($result) {
                                    $successMsg="product insert success";
                                    return $successMsg;
                                }else{
                                    $errMsg="prodect insert faild";
                                    return $errMsg;
                                }                    
                } */
            
                
            

            }

            public function selectPic(){
                /* $query="SELECT * FROM image";
                $result=$this->db->select($query);
                return $result; */
            }

            public function insertProduct($data, $random_number){

               
                $productName=$data['productName'];
               // $productId=$data['productId'];
                $image=$data['image'];
                $details=$data['details'];
                $specification=$data['specification'];
                $query1="INSERT INTO product(product_Name, product_Id, image, details) values('$productName','$random_number', '$image', '$details' )";
                $result=$this->db->insert($query1);
                if ($result==1) {
                $query2="INSERT INTO product2(specification, product_Id) values('$productName','$random_number')";
                $result2=$this->db->insert($query2);
                if ($result2==1) {
                $succ="insert success";
                return $succ;
            }

                }else{
                    $err="faild";
                    return $err;
                }
            }










      
        
    }

    
?>