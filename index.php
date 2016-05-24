<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
$title = "Home";
include("header.html");
?>


            <div class="sidebar">

                <ul class="navigation">
                    <li class="active"><a href="index.php">Home page</a></li>
                    <li><a href="account.php">Create an account</a></li>
                    <li><a href="find_a_dogcat.php">Find a dog/cat</a></li>
                    <li><a href="dog_care.php">Dog Care</a></li>
                    <li><a href="cat_care.php">Cat Care</a></li>
                    <li><?php if ($_SESSION["login"]){ echo "<a href=\"give_away.php\">"; } else { echo "<a href=\"login.php\">"; } ?>Have a pet to give away</a></li>
                    <li><a href="log_out.php">Log out</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>

            </div>


            <div class="content">

                <h2>Welcome to Montreal's finest pet rescue organisation.</h2>
                <img src="media/home/img1.jpg" alt="RIP Colonel meow" style="width:360px;height:auto;border:none;margin:3px;float:left">
                <img src="media/home/img2.jpg" alt="Stupid dog" style="width:290px;height:auto;border:none;margin:3px;float:right">
                <div id="blank"></div>
            
                    <h4>Do you want these animals to die? Adopt a pet before we are forced to end their little lives.</h4>
                

            </div>





        </div>
<?php
include("footer.html");
?>
        