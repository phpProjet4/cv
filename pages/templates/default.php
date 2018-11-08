<!doctype html>
<html lang="fr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="stylesheet" href="public/css/main.css">
    <style>
       body {
            margin: 0; padding: 0;
            background: url('public/img/bc2.jpg') no-repeat;
            background-size: cover;
        }
    </style>
 

    <title>Bienvenue sur le portail CV de l'AFIP</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <!-- custom font -->
    <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet"> 
  </head>

  <body>

    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php"><img class='logo' src="public/img/logo_AFIP.png" alt="logo de l'AFIP"></a>
            </div>
            <div class="navbar-header">
            <span class="navbar-text">
                <?php
                    if(empty($_SESSION)) {
                        echo "vous n'êtes pas connecté";
                    } else {
                        echo "Bienvenue " . $_SESSION['mail'];
                    }
                ?>
            </span><br>
            <span><a href="pages/deconnexion.php">Déconnexion</a></span>
            </div>
            
            
        </div>
    </nav>



    <div class="container">
        <div class="starter-template content" style="padding-top: 140px;">
            <?php echo $content;
            ?>
        </div>
    </div>



 
        


  </body>
</html>
