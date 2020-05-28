<?php 

    if (isset($_POST['submit'])) {

        $isSucces = true;
        $body = "";


        $email = test_input($_POST["email"]);
        $mdp = test_input($_POST["mdp"]);
        $select = test_input($_POST["select"]);
        $msg = test_input($_POST["msg"]);

        if (!isEmail($email)) {
            $isSucces = false;
            echo "failed email";
        }
        else {
            $body .= "From: ".$email."\r\n";
        }

        if (empty($mdp)) {
            $isSucces = false;
            echo "failed mdp";
        }
        else {
            $body .= "Password: ".$mdp."\r\n";
        }

        $body .= "Selection: " . $select ."\r\n";

        if (empty($msg)) {
            $isSucces = false;
            echo "failed msg";
            var_dump($_POST);
        }
        else {
            $body .= "You have recieve a message: \n".$msg."\r\n\n\n";
        }

        if ($isSucces) {
            echo $body;
            header("Location: index.php?mailsend");

            // Create a file
            $file = date('Y-m-d');
                file_put_contents($file, $body, FILE_APPEND);

        }
        else {
            echo "failed";
            header("Location: index.php?fail");
        }

        

    }






    function isEmail($email) 
    {
        return filter_var($email, FILTER_VALIDATE_EMAIL);
    }
    function isPhone($phone) 
    {
        return preg_match("/^[0-9 ]*$/",$phone);
    }
    function test_input($data) 
    {
      $data = trim($data);
      $data = stripslashes($data);
      $data = htmlspecialchars($data);
      return $data;
    }

?>
