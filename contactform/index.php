<!DOCTYPE html>
<html>
<head>
    <title>Contact Form</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        .container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        label {
            display: block;
            margin-bottom: 5px;
        }
        input[type="text"], input[type="email"], input[type="tel"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 3px;
        }
        button[type="submit"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
        button[type="check"] {
            background-color: #007BFF;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 3px;
            cursor: pointer;
        }
    </style>
</head>
<body>
    
    <div class="container">
        <h2>Contact Form</h2>
        <form method="POST" action="">
            <label for="fullName">Full Name:</label>
            <input type="text" id="fullName" name="fullName" required>

            <label for="phoneNumber">Phone Number:</label>
            <input type="tel" id="phoneNumber" name="phoneNumber" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="subject">Subject:</label>
            <input type="text" id="subject" name="subject" required>

            <label for="message">Message:</label>
            <textarea id="message" name="message" required></textarea>

            <button type="submit" name="submit">Submit</button>
            <a href="display.php"><button type="check" name="check">Check details</button></a>
        </form>
    </div>
   
    
</body>
</html>



<?php


use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

function sendMail($email,$v_code){
    require ("PHPMailer/PHPMailer.php");
    require ("PHPMailer/SMTP.php");
    require ("PHPMailer/Exception.php");


    $mail = new PHPMailer(true);



    try {
       
        $mail->isSMTP();                                            
        $mail->Host       = 'smtp.gmail.com';                     
        $mail->SMTPAuth   = true;                                   
        $mail->Username   = 'shwetaydv700@gmail.com';                     
        $mail->Password   = 'blnntyheaktsbplm';                               
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            
        $mail->Port       = 465;                                    
    
        //Recipients
        $mail->setFrom('shwetaydv700@gmail.com', 'Shweta yadav');
        $mail->addAddress('test@techsolvservice.com'); 
        
        
        //Content
        $mail->isHTML(true);                                
        $mail->Subject = 'Email verification from shweta yadav';
        $mail->Body    = "Thanks for contacting!
                          Click the link below to verify the email address
                          <a href='http://localhost/contactform/verify.php?email=$email&v_code=$v_code'>Verify</a>";
    
        $mail->send();
           return true;
    } catch (Exception $e) {
        
        return false;
    }
    

}

include 'connection.php';
if(isset($_POST['submit'])){
    $fullName = $_POST["fullName"];
    $phoneNumber = $_POST["phoneNumber"];
    $email = $_POST["email"];
    $subject = $_POST["subject"];
    $message = $_POST["message"];
    $v_code =bin2hex(random_bytes(10));
  
    

    $insertquery="insert into phpform(fullname,phoneNum,email,subject,message,verificationcode, is_verified) values('$fullName','$phoneNumber','$email','$subject','$message','$v_code','0') ";

    $res=mysqli_query($conn,$insertquery);
    
    if($res && sendMail($_POST['email'],$v_code)){
        ?>
        <script>
            alert("data inserted properly");
        </script>
        <?php
    }else{
        ?>
        <script>
            alert("data not inserted ");
        </script>
        <?php
    }
}
?>