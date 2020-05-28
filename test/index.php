<!DOCTYPE html>
<html style="scroll-behavior: smooth;">
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
    <link rel="stylesheet" href="css/style_papa.css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="C:\Users\Ahmed_Syed\Pictures\fontawesome-free-5.12.0-web\css\all.css">
    <!-- SCRIPT LINK -->
    <script src="js/main.js"></script>
</head>

<body>

    <div class="container-fluid">
        <div class="row">

            <div class="col-md-4 m-auto">
            <form action="gestiondata.php" method="post">
                <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" name="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
                </div>
                <div class="form-group">
                    <label for="mdp">Password</label>
                    <input type="password" name="mdp" class="form-control" id="exampleInputPassword1">
                </div>
                <div class="form-group">
                    <label for="exampleFormControlSelect1">Example select</label>
                <select class="form-control" id="exampleFormControlSelect1" name="select">
                    <option>Suggestion</option>
                    <option>Prise de RDV</option>
                    <option>Autre</option>
                </select>
                <div class="form-group">
                    <label for="name">Message</label>
                    <textarea name="msg" id="msg" class="form-control"></textarea>
                </div>
                <button type="submit" name="submit" class="btn btn-primary">Submit</button>


                <?php if(isset($_GET["mailsend"])): ?>
                    <div class="alert alert-success mt-3">GG</div>
                    <a href="index.php">Go back to website</a>
                <?php endif;?>  
                <?php if (isset($_GET["fail"])): ?>
                    <div class="alert alert-danger mt-3">Nope</div>
                <?php endif;?>    
            </form>
            </div>

        </div>
    </div>

</body>
</html>

