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
                    <h1>Nous Contacter</h1>
                    <form action="php/mail.php" method="POST" class="form-group mt-5">

                    <?php if(isset($_GET["mailsend"])): ?>
                            <div class="alert alert-success mt-3 font-weight-bolder">Message envoyé avec succes</div>
                            
                        <?php endif;?>  
                        <?php if (isset($_GET["fail"])): ?>
                            <div class="alert alert-danger mt-3 font-weight-bolder">Vérifier vos champs de Saisi</div>
                        <?php endif;?>

                        <div class="row">
                            <div class="col">
                                <div class="form-group">
                                    <label for="prenom">Prénom<span class="red"> *<span></label>
                                    <input type="text" name="prenom" class="form-control" placeholder="Votre Prénom" required>
                                </div>
                                
                                <div class="form-group">
                                    <label for="email">Email<span class="red"> *<span></label>
                                    <input type="email" name="email" class="form-control" placeholder="Votre Email" required>
                                </div>
        
                            </div>
                
                            <div class="col">
                                <div class="form-group">
                                    <label for="nom">Nom<span class="red"> *<span></label>
                                    <input type="text" name="nom" class="form-control" placeholder="Votre Nom" required>
                                </div>
        
                                <div class="form-group">
                                    <label for="phone">Télephone</label>
                                    <input type="number" name="phone" class="form-control" placeholder="Votre Téléphone">
                                </div>
                                
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="select">Selection<span class="red"> *<span></label>
                            <select class="form-control" id="select" name="select">
                              <option>Suggestion / Rapport Bug</option>
                              <option>Réservation</option>
                              <option>Autre</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="name">Message<span class="red"> *<span></label>
                            <textarea type="text" name="msg" id="msg" class="form-control" placeholder="Saisisez votre Message ici" rows="5" required></textarea>
                        </div>

                        <p class="red">* Information requise</p>

                        <button type="submit" name="submit" class="btn btn-success">Submit</button><br><br>

                        
                        <a href="index.php" class="text-light">Retour au site LVN</a>
                    </form>
                </div>
            </div>

            
            
        </div>

    </body>
</html>