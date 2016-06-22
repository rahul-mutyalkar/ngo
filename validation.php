<?php 

function check_first_name($value)
		{

					if(is_numeric($value))
				{
					$message="Numbers are not allowed";

				}
				elseif (empty($value)){
					$message="First Name is empty";

				}
				elseif (strlen($value)<=1 || strlen($value)>=24) {

					$message="First Name should be more than 1 charcter and less than 24 characters !!!!";

					
				}
				elseif ((!preg_match("/^[A-Za-z]{2,24}+$/", $value))) {

				$message="Invalid First Name";
				
				}
				else
				{
					$message="valid";
				}
			return $message;


		}

function check_last_name($value)
		{
			if(is_numeric($value))
			{
				$message="Numbers are not allowed";

			}
			elseif (empty($value)){
				$message="Last Name is empty";

			}
			elseif (strlen($value)<=1 || strlen($value)>=24) {

				$message="Last Name should be more than 1 charcter and less than 24 characters !!!!";

				
			}
			elseif ((!preg_match("/^[A-Za-z]{2,24}+$/", $value))) {

			$message="Invalid First Name";
			
			}
			else
			{
				$message="valid";
			}
		return $message;

		}

		function check_email_id($value)
		{

			if (empty($value)){
				$message="Email ID is empty";

			}
			elseif (strlen($value)>=50) {

				$message="E-Mail ID should be less than 50 characters !!!!";

				
			}
			elseif ((!preg_match("/^[a-zA-Z0-9_.]+@[a-zA-Z0-9]+\.[a-zA-Z0-9]+$/", $value))) {

				$message="Invalid E-Mail ID";
				
			}
			else
			{
				$message="valid";
			}
			return $message;
		}


function check_contact_number($value)
		{
			if (empty($value)){
				$message="Contact Number is empty";

			}

			elseif ((!preg_match("/^[0-9]+$/", $value))) {

			$message="Invalid Contact Number";
			
			}
			elseif (strlen($value)<10 || strlen($value)>10) {

				$message="Contact Number should be exactly of 10 Numbers !!!!";

				
			}
			
			else
			{
				$message="valid";
			}
		return $message;

		}

		function check_subject($value)
		{
			if (empty($value)){
				$message="Subject is empty";

			}
			elseif (strlen($value)>=50) {

				$message="Subject should be less than 50 characters!!!!";
				
			}
			
			else
			{
				$message="valid";
			}
		return $message;

		}

		function check_message($value)
		{
			if (empty($value)){
				$message="Message is empty";

			}
			elseif (strlen($value)>=50) {

				$message="Message should be less than 120 characters!!!!";
				
			}
			
			else
			{
				$message="valid";
			}
		return $message;

		}

		function check_select($key,$value)
		{

			if($value=="0")
			{

				$message="Please select ".$key;

			}
			else
			{

				$message="valid";
			}
			return $message;

		}

		function check_address($value)
		{
			if (empty($value)){
				$message="Address is empty";

			}
			elseif (strlen($value)<=10 || strlen($value)>=100) {

				$message="Address should be greater than 10 and  less than 100 characters!!!!";
				
			}			
			else
			{
				$message="valid";
			}
		return $message;
		}

		function check_number($value)
		{


				if (empty($value)){
				$message="Donation amount is empty";

				}

				elseif ((!preg_match("/^[0-9]+$/", $value))) {

					$message="Invalid Contact Number";
			
				}
				elseif ($value<100 || $value>100000) {

				$message="The minimum donation amount is 100 and maximum is 100000 !!!!";

				
				}
			
				else
				{
					$message="valid";
				}
				return $message;

		}

		function check_pincode($value)
		{


			if (empty($value)){
				$message="PinCode is empty";

				}
				elseif(!is_numeric($value))
				{
					$message="Alphabets are not allowed";
				}

				elseif ((!preg_match("/^[0-9]+$/", $value))) {

					$message="Invalid Pincode";
			
				}
				elseif (strlen($value)<7 && strlen($value)>7) {

				$message="The PinCode should be of exactly 7 numbers !!!!";

				
				}
			
				else
				{
					$message="valid";
				}
				return $message;

		}


?>
