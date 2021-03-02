<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page Title</title>
        <link rel="stylesheet" href="login.css" />
    </head>
    <body>
        <?php 
            function user_login_view($is_wrong_message_)
            {
                echo"
                    <form class=\"form1\"action=\"login.php\" method=\"POST\">
                        <div class=\"user_login_box\">
                            <h1 class=\"user_login_header\">Welcome</h1>
                            <input class=\"un \" type=\"text\" placeholder=\"Username\" name=\"user_name\"/>
                            <input class=\"pass\" type=\"text\" placeholder=\"Password\" name=\"password_\"/>
                            <input class=\"submit_\" type=\"submit\" name=\"submit\" value=\"Sign-in\"/>
                            <input class=\"switching_login\" type=\"submit\" name=\"calling_func_ins\" value=\"Admin Sign-in\"/>
                            <p class=\"forgot\" align=\"center\"><a href=\"CreateAcctUI.html\">Forgot Password?</p>
                        </div>
                        
                    </form>
                    
                ";
            }
            function admin_login_view()
            {
                echo"
                <form class=\"form1\"action=\"login.php\" method=\"POST\">
                    <div class=\"user_login_box\">
                        <h1 class=\"user_login_header\">Welcome</h1>
                        <input class=\"un \" type=\"text\" placeholder=\"Username\" name=\"user_name\"/>
                        <input class=\"pass\" type=\"text\" placeholder=\"Password\" name=\"password_\"/>
                        <input class=\"submit_\" type=\"submit\" name=\"submit\" value=\"Sign-in\"/>
                        <input class=\"switching_login\" type=\"submit\" name=\"calling_func_ins\" value=\"User Sign-in\"/>
                    </div>
                    
                </form>
                
                ";
            }
            function verifying($user_name, $password_)
            {
                echo"Reached here";

            }
            function main()
            {
                $user_name=$_POST['user_name'];
                $password_=$_POST['password_'];
                $submit=$_POST['submit'];
                $calling_func_ins = $_POST['calling_func_ins'];
                $is_wrong_message=False;
                if($submit)
                {
                        verifying($user_name, $password);
                }
                elseif((!$calling_func_ins) and (!$submit) or $calling_func_ins== "User Sign-in"){user_login_view($is_wrong_message);}
                elseif($calling_func_ins == "Admin Sign-in" and (!$submit)){admin_login_view();}
            }
           @main();
        ?>
    </body>
</html>