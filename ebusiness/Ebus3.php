<?php
session_start();
$name = $_REQUEST['name'];
$email =$_REQUEST['email'];

?>
<!DOCTYPE html>
<html>
    <head>
        <title>RECEIPT</title>
    </head>
    <body>
        <h4>RECEIPT</h4>
                
        <?php
            // set session variables
            $_SESSION["user_name"] = $_POST["user_name"];
            $_SESSION["user_email"] = $_POST["user_email"];
            ?>
        
        <?php
        // Echo session variables that were set on previous page
        echo "Customer Name: " . $_SESSION["user_name"] . ".";
        ?>
        
        <br/>
        
        <?php
        echo "Customer Email: " . $_SESSION["user_email"] . ".";
        ?>
    
    <br/>
        
        <?php
        echo "Total is $" . $_SESSION["total"] . ".";
        ?>
        
    </body>
</html>