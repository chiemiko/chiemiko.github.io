<?php
  $name = $_POST['Name'];
  $email = $_POST['email'];
  
  
  $email_from = ‘chi3mita@gmail.com’;
  $email_subject = 'New Form Submission';
  $email_body = 'User Name: $name .\n'.
                'User Email: $email .\n'.;
                
  $to = 'Chi3mita@gmail.com';

  mail($to,$email_subject,$email)
  header('Location: contact.html')
              
?>