<!DOCTYPE html>
<html lang="en" dir="ltr">
    <head>
        <meta charset="utf-8">
        <title></title>
        <style media="screen"></style>
    </head>
    <body>
        <?php
            function login_main()
            {
                $submit = False;
                $submit = $_POST['Open_Sesame'];
                $user_name=$_POST['user_name'];
                $passw=$_POST['passw'];
                if(!$submit){
                    echo"
                    <form action=\"login.php\" method=\"POST\">
                        <h1>Login</h1>
                        <input type=\"text\" name=\"user_name\"/>
                        <input type=\"text\" name=\"passw\"/>
                        <input type=\"submit\" name=\"Open_Sesame\">

                    </form>
                    ";
                }
                elseif($submit)
                {
                    echo"Reached, this line of code needed to be changed to like header, so this page can be routed to a different one. ";
                }
            }
            @login_main();

        ?>
    </body>

</html>