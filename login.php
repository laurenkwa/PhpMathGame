<?php 

    if($_POST["login"]) {
        header("Location:authenticate.php");
        die();
    } else {
        echo '<h1>
                Please login to enjoy our Math Game. 
            </h1> 
        <br/><br/>
        <div class="container">
            <form action="authenticate.php" method="post">
                <div class="row">
                    <div class="col-md-2 col-md-offset-4">Email: </div>
                    <div class="col-md-1">
                        <input name="email" type="email" required/>
                    </div>   
                </div>
                <div class="row">
                    <br/>
                    <div class="col-md-2 col-md-offset-4">Password: </div>
                    <div class="col-md-1">
                        <input name="password" type="password" required/>
                    </div>   
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <br/><br/>
                        <input type="submit" name="login" value="LOGIN"/>
                    </div>   
                </div>
            </form>
        </div>';
        }
   
   

?>
<html>
    <head>
        <title>Math Game</title>
        <meta charset="UTF-8"/>
        <link rel = "stylesheet" type = "text/css" href = "style/bootstrap.min.css"/>
        <link rel="stylesheet" type="text/css" href="Style/style.css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1" />
    </head>
    
    <body>
        <?php 
        
        
        ?>
        
        
        
    </body>
    
</html>