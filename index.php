<?php


    if(!empty($_POST['op']) && !empty($_POST['email']) && !empty($_POST['pass'])) {

        
        $op = $_POST['op'];
        $email = $_POST['email'];
        $pass = $_POST['pass'];

        echo "<div style='margin-left: 15px'>";

        if ($op=="register")
        {
            //Sensible à l'injection de code SQL 
            // Il faut maintenant créer plusieurs tables 

            echo "<h2>" . " Valid Option " . "</h2>";
            echo "<p>" . " Let's See If you can find me ! " . "</p>";

            $servername = "127.0.0.1";
            $username = "root";
            $password = "";
            $dbname = "sqli";

            // Créer une connexion à la base de données
            $conn = new mysqli($servername, $username, $password, $dbname);

            // Vérifier la connexion
            if ($conn->connect_error) {
                die("Connection failed: " . $conn->connect_error);
            }

            

            // Exécuter une requête SQL pour récupérer les données de l'article
            $sql = "SELECT * FROM users WHERE email = '$email' ";
            //echo "<p>" . $sql . "</p>";

            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                // Afficher les données de l'article
                echo " ------------------------------------------------------------------------------------------------------------------------------ ";
                while($row = $result->fetch_assoc()) {
                    echo "<p>" .  $row["id"]  . " || " . $row["name"] . " || " . $row["email"] . " || " .   $row["password"] . "  </p>" ;
                }
                //echo "Done ! ";

      
            } else {
                // echo "Aucun utilisateur trouvé.";
                $failed = 1;
                $message = "Wrong UserName or Password ! ";
            }

            // Fermer la connexion
            $conn->close();


        }
        elseif ($op=="login") {
            echo "<h2>" . "ACTION NOT ALLOWED" . "</h2>";
            echo "<p>" . "We don't let people Login right now ! " . "</p>";
        }
        elseif ($op == "signin" ) {
            
            echo "<h2>" . "Nice Try" . "</h2>";
            echo "<p>" . "Search with the other Options ". "</p>";
        }
        elseif ($op == "signout") {
             
            echo "<h2>" . "Nice Try" . "</h2>";
            echo "<p>" . "Search with the other Options ". "</p>";
        }
        else {
             
            echo "<h2>" . "Invalid Option" . "</h2>";
            echo "<p>" . "Look around you ! ". "</p>";
            phpinfo();
        }
        echo "</div>";


    }
      

?>

<!DOCTYPE HTML>

<html>

<head>
    <title>Login</title>

            <!-- Latest compiled and minified CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

        <!-- Latest compiled JavaScript -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
        <script src="script.js" defer></script>
        <style>
            #myText{
                margin-left: 30vw;
                margin-top: 30vh;
            }
        </style>

</head>

<body>



<div class="container p-3 col-md-4" id="myText" style="height: 100vh;">

    <?php
        if (isset($failed) && $failed==1)
        {
        ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">Login error</div>
                    <div class="panel-body"><?php echo $message ?></div>
                </div>

        <?php
        }

    
    ?>

    <div class="panel panel-default ">
    <div class="panel-heading">Login page</div>
    <div class="panel-body">


        <form method=POST action=index.php>

            <div class="form-group">
                <label>Email:</label>
                <input type="text" class="form-control" autocomplete=off required name="email"/>
            </div>

            <div class="form-group">
                <label>Password:</label>
                <input type="password" class="form-control"  required name="pass"/>
            </div>


            <div class="form-group">
                <label></label>
                <input type="submit" class="btn btn-primary" value="Login"/>
            </div>

            <input type="hidden" name="op" value="login" />
            

        </form>
    </div>
    </div>
</div>

</body>

</html>