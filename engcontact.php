<!DOCTYPE html>
<html>
    <head>
        <title>Formulaire Contact</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- JQuery -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <!-- Bootstraps -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <!-- Google fonts -->
        <link href="https://fonts.googleapis.com/css?family=Lato|Roboto&display=swap" rel="stylesheet">
        <!-- Font awesome -->
        <script src="https://kit.fontawesome.com/92313ceead.js" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="C:\Users\Ahmed_Syed\Pictures\fontawesome-free-5.12.0-web\css\all.css">
        <!-- fichier css et js -->
        <link rel="stylesheet" href="css/style_contact.css"> 
        <script src="js/script.js"></script>
    </head>
    <body class="body">
        
        <div class="container">

            <div class="row text-light">
                <div class="col-md-8 m-auto">
                <div class="white_hr bg-light mt-5"></div>
                    <h1>Contact US</h1>
                    <form action="php/engmail.php" method="POST" class="form-group mt-5">

                    <?php if(isset($_GET["mailsend"])): ?>
                            <div class="alert alert-success mt-3 font-weight-bolder">Message sent successfully</div>
                            
                        <?php endif;?>  
                        <?php if (isset($_GET["fail"])): ?>
                            <div class="alert alert-danger mt-3 font-weight-bolder">Please verify your enter fields</div>
                        <?php endif;?>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="prenom">First Name<span class="red"> *<span></label>
                                    <input type="text" name="prenom" class="form-control" placeholder="First name" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email<span class="red"> *<span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Email" required>
                                </div>
        
                            </div>
                
                            <div class="col">
                                <div class="form-group">
                                    <label for="nom">Name<span class="red"> *<span></label>
                                    <input type="text" name="nom" class="form-control" placeholder="Name" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="phone">Phone No</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Phone Number">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select">Select<span class="red"> *<span></label>
                            <select class="form-control" id="select" name="select">
                              <option>Suggestion / Report a Bug</option>
                              <option>Booking</option>
                              <option>Other</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Message<span class="red"> *<span></label>
                            <textarea type="text" name="msg" id="msg" class="form-control" placeholder="Enter your message Here" rows="5" required></textarea>
                        </div>
                        
                            <p class="red">* Information are required</p>

                        <button type="submit" name="submit" class="btn btn-success text-center">Submit</button><br><br>

                        
                        <a href="eng.php" class="text-light">Back to LVN Home Page</a>
                    </form>
                </div>
            </div>

            
            
        </div>

    </body>
</html>