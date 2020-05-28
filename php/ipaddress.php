<!DOCTYPE html>
<html>
<head>
    <title>Les Voitures Noires</title>
    <!--<link rel="icon" href="scroll-solid.png">-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="https://kit.fontawesome.com/b01855ebf1.js" crossorigin="anonymous"></script>
    <!--<script src="https://kit.fontawesome.com/92313ceead.js" crossorigin="anonymous"></script>-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="C:\Users\Ahmed_Syed\Pictures\fontawesome-free-5.12.0-web\css\all.css">
</head>
<body>

    <h1 style="text-align:center;color: #333;">Ce site est en maintenance</h1>
    <?php 
    
        $to = "ahmed@lesvoituresnoires.com";
        
        $subject = "IP Test";
        
        //$header = "From: webmaster@example.com\r\n" .
        //            "Reply-To: webmaster@example.com\r\n" .
        //            "X-Mailer: PHP/" . phpversion() . "Content-Type: text/html; charset=ISO-8859-1" . "\r\n";
        
        $headers[] = "From: webmaster@example.com";
        $headers[] = "Reply-To: webmaster@example.com";
        $headers[] = "X-Mailer: PHP/" . phpversion();
        $headers[] = 'MIME-Version: 1.0';
        $headers[] = 'Content-type: text/html; charset=iso-8859-1';
        
        //get user ip address
        
        $ip_address = $_SERVER['REMOTE_ADDR'];

        //$query = unserialize(file_get_contents('http://ip-api.com/php/'.$ip_address)); //connection au serveur de ip-api.com et recuperation des données

        //get user ip address details with geoplugin.net
        $geopluginURL = 'http://www.geoplugin.net/php.gp?ip=' . $ip_address;
        $geoArray = unserialize(file_get_contents($geopluginURL));
 
        //Message 
        
        //$message = "Notre Adresse IP est : 92.163.107.157" . "\n" ;
        //$message .= "IP Adresse : " . $ip_address . "\r\n";
        //$message .= "Localisation : " . $geoArray["geoplugin_city"] . ", " . $geoArray["geoplugin_region"] . ", " . $geoArray["geoplugin_countryName"] . ", " . $geoArray["geoplugin_countryCode"] . "\r\n";
        //$message .= "Horaire : " . date("l d M Y - H:i:s") . "\n\n";
        
        
        date_default_timezone_set($geoArray["geoplugin_timezone"]);
        //date_default_timezone_set($query["timezone"]);
        
        $message = "Vous avez reçu un message : \n\n".
        "<html>
            <body>
                <div>
                    <p><u>Notre Adresse IP est</u>: 92.163.107.157</p>
                    <p><u>Adresse IP</u>: " . $ip_address . "</p>
                    <p><u>Localisation</u>: " . $geoArray['geoplugin_city'] /*$query["city"]*/ . " " . $geoArray['geoplugin_region'] /*$query["region"]*/. " " . $geoArray['geoplugin_countryName'] /*$query["country"]*/ . " " . $geoArray['geoplugin_countryCode'] /*$query["countryCode"]*/ . " " . 
                        " </p>
                    <p><u>Horaire Locale</u>: " . date('l d M Y - H:i:s') . "</p>
                </div>
                <div align='center'>
                    <h1>Nouveau Visiteur</h1>
                    <p>Une personne voulais entrer en contact</p>
                </div>
            </body>
        </html>\r\n";
        
        echo date("l d M Y - H:i:s") . "\n";
        
        mail($to, $subject, $message, implode("\r\n", $headers));
      
      //$ip_address = $_SERVER['REMOTE_ADDR'];
    //$geopluginURL = 'http://www.geoplugin.net/php.gp?ip=' . $ip_address;
    //$geoArray = unserialize(file_get_contents($geopluginURL));
    //date_default_timezone_set($geoArray["geoplugin_timezone"]);
    //$emailText .= "IP Address : {$ip_address}\n";
    //$emailText .= "Location : {$geoArray["geoplugin_city"]}, {$geoArray["geoplugin_region"]}, {$geoArray["geoplugin_countryName"]}, {$geoArray["geoplugin_countryCode"]}\n";
      
        
    ?>
   
</body>
</html>