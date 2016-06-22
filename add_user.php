<?php
require_once('connection.php');
require_once('validation.php');
$count=0;
$error=[''=>''];
$success="";
$message="";
if(isset($_POST['submit']))
{

	//echo "Form submitted";
		
		foreach ($_POST as $key => $value) {

			if($key=='first_name' || $key=='last_name' || $key=='email_id' || $key=='contact_number' || $key=='subject' || $key=='message')
			{
				 $function="check_".$key;
				
				$getError=$function($value);
				if($getError!="valid")
				{
					$error[$key]=$getError;
					
				}
				else
				{
					unset($error[$key]);
					

				}				
				
			}

			
			
		}

		if(count($error)<=1)
		{
			
			
			$conn=mysqli_connect(DB_HOST,DB_USER,DB_PWD,DB_NAME)
			  		or die('connection not established');
			  	

			  		$query="INSERT INTO feedback (id ,first_name ,last_name ,email_id ,contact_number ,subject ,message) VALUES (0,'".$_POST['first_name']."' ,'".$_POST['last_name']."' ,'".$_POST['email_id']."' ,".$_POST['contact_number'].",'".$_POST['subject']."','".$_POST['message']."')";
				  	if(mysqli_query($conn,$query))
				  	{
				  		$success="true";
				  		foreach ($_POST as $key => $value) {

								$_POST[$key]='';
							}
					}		  		

				  	

			

				




		}
		

}


	

?>