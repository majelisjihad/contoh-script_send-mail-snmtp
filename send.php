<?php 

	    	$message = "Halo.. ini contoh penerapan pengiriman email melalui port snmtp dari email server";   
			    
                include "classes/class.phpmailer.php";
                $mail = new PHPMailer; 
                $mail->IsSMTP();
                $mail->SMTPSecure = 'tls'; 
                $mail->Host = "ukmldkmajelisjihad.com"; //host masing2 provider email
                $mail->SMTPDebug = 2;
                $mail->Port = 587;
                $mail->SMTPAuth = true;
                $mail->Username = "info@ukmldkmajelisjihad.com"; //user email
                $mail->Password = "#######"; //password email 
                $mail->SetFrom("info@ukmldkmajelisjihad.com"); //set email pengirim
                $mail->Subject = "Notifikasi Email"; //subyek email
                $mail->AddAddress("ukmldkmajelisjihad95@gmail.com");  //tujuan email
                $mail->MsgHTML($message);
                if($mail->Send()) echo "Message has been sent";
                else echo "Failed to sending message";

?>
