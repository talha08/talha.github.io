		     <?php
					//if "email" variable is filled out, send email
					  if (isset($_REQUEST['email']))  {
					  
					  //Email information
					  $admin_email = "talhaqc@gmail.com";
					  $email = $_REQUEST['email'];
					  $name = $_REQUEST['name'];
					  $subject = $_REQUEST['subject'];
					  $message = $_REQUEST['message'];
					  
					  //send email
					  mail($admin_email, "$subject", $subject, "Message:". $message, "From:" . $email, "Name:" .$name );
					  
					  //Email response
					  echo "Thank you for contacting us!";
					  }
					  
					  //if "email" variable is not filled out, display the form
					  else  {
						  echo "Thank you for contacting us!";
					  }
		    ?>