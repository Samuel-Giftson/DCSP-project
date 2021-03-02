<!DOCTYPE HTML>
<html>
    <head>
        <meta charset="utf-8">
        <title>Page Title</title>
        <link rel="stylesheet" href="user_home_page.css" />
    </head>
    <body >
        <?php
            echo"
        
            <form action=\"login.php\" method=\"POST\">
                <input class=\"logout_button\" type=\"submit\" name=\"logout\" value=\"Log out\"/>
            </form>
            
            <p class=\"dashboard\"> Welcome to Dashboard <p>
            <form action=\"temporary_action_link.php\" method=\"POST\">
                <input id=\"notification__\" class=\"user_feature_button\" type=\"submit\" name=\"notifications\" value=\"Notification\" />
                <input id=\"fav_place\" class=\"user_feature_button\" type=\"submit\" name=\"my_fav\" value=\"Favorite PlaceS\" />
                <input id=\"place_visi\" class=\"user_feature_button\" type=\"submit\" name=\"view_place_visited\" value=\"Places Traveled\" />
                <input id=\"explore_place\" class=\"user_feature_button\" type=\"submit\" name=\"explor_places\" value=\"Explore Places\" />
                <input id=\"com_h\" class=\"user_feature_button\" type=\"submit\" name=\"comment_history\" value=\"Comment History\" />
                <input id=\"calendar\" class=\"user_feature_button\" type=\"submit\" name=\"calendar_\" value=\"Future Events\" />

            </form>
           
            "; 
        ?>
    </body>
</html>