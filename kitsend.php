<?php
	require_once("phpmail.php");

	$email_admin = "beatbox787@gmail.com,p_e_a_c_e@mail.ru,sale@500lux.ru";
	// $email_admin = "soc.taxi.35@gmail.com";

	$from = "“500lux”";
	$email_from = "robot@500lux.ru";

	$deafult = array("name"=>"Имя","phone"=>"Телефон", "email"=>"E-mail");

	$fields = array();

	if( count($_POST) ){

		foreach ($deafult  as $key => $value){
			if( isset($_POST[$key]) ){
				$fields[$value] = $_POST[$key];
			}
		}

		$i = 1;
		while( isset($_POST[''.$i]) ){
			$fields[$_POST[$i."-name"]] = $_POST[''.$i];
			$i++;
		}

		$subject = $_POST["subject"];

		$title = "Поступила заявка с сайта ".$from.":\n";

		$message = "<div><h3 style=\"color: #333;\">".$title."</h3>";

		foreach ($fields  as $key => $value){
			$message .= "<div><p><b>".$key.": </b>".$value."</p></div>";
		}
		$message .=  "<div><br><br>" .
	        $_POST['ref_info'] .
	        "<br><br>" .
	        $_POST['lpm_ref_info'] .
	        "<br><br>" .
	        $_POST['lpm_city_info'] .
	        "<br><br>" .

	        '</div>';	

		$message .= "</div>";
		
		if(send_mime_mail("Сайт ".$from,$email_from,$name,$email_admin,'UTF-8','UTF-8',$subject,$message,true)){	
			echo "1";
		}else{
			echo "0";
		}
	}
?>