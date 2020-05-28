<?php 

    $ip_address = $_SERVER['REMOTE_ADDR'];
    $geopluginURL = 'http://www.geoplugin.net/php.gp?ip=' . $ip_address;
    $geoArray = unserialize(file_get_contents($geopluginURL));
    date_default_timezone_set($geoArray["geoplugin_timezone"]);


    
    $emailTo = "ahmedfrancilien@gmail.com";

    
    if (isset($_POST['submit'])) {

        $isSucces = true;
        $body = "";

        $prenom = test_input($_POST["prenom"]);
        $nom = test_input($_POST["nom"]);
        $email = test_input($_POST["email"]);
        $phone = test_input($_POST["phone"]);
        //$mdp = test_input($_POST["mdp"]);
        $select = test_input($_POST["select"]);
        $msg = test_input($_POST["msg"]);

        if (empty($prenom)) {
            $isSucces = false;
            //echo "failed prenom";
        }
        else {
            $body .= $prenom;
        }

        if (empty($nom)) {
            $isSucces = false;
            //echo "failed prenom";
        }
        else {
            $body .= " " . $nom . "\n" ;
        }
        
        if (!isEmail($email)) {
            $isSucces = false;
            //echo "failed email";
        }
        else {
            $body .= "From: ".$email."\r\n";
        }

        if (!isPhone($phone)) {
            $isSucces = false;
            //echo "failed phone";
        }
        else {
            $body .= "Tel: ".$phone."\r\n";
        }

        /*if (empty($mdp)) {
            $isSucces = false;
            echo "failed mdp";
        }
        else {
            $body .= "Password: ".$mdp."\r\n";
        }
        */

        $body .= "Selection: " . $select ."\r\n";


        if (empty($msg)) {
            $isSucces = false;
            //echo "failed msg";
            var_dump($_POST);
        }
        else {
            $body .= "IP Address: " . $ip_address . "\r\n";
            $body .= "Heure: " .date("H:i:s") ."\r\n";
            $body .= "You have recieve a message: \n".$msg."\r\n\n\n";
        }


        if ($isSucces) {
            //echo $body;
            header("Location: ../engcontact.php?mailsend");

            // Create a file
            $file = "..".DIRECTORY_SEPARATOR."MailBox".DIRECTORY_SEPARATOR.date('Y-m-d').".txt";
                file_put_contents($file, $body, FILE_APPEND);
            // send a email
            mail("contact-ahmed@lesvoituresnoires.com", "Contact Client", $body);

        }
        else {
            //echo "failed";
            header("Location: ../engcontact.php?fail");
        }
        
        

    }




    // Functions

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
