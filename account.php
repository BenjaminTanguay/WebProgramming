<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
if (!file_exists("accounts.txt")){
    $temp = fopen("accounts.txt","w+");
}
$title = "Browse available pets";
include("header.html");
?>


            <div class="sidebar">

                <ul class="navigation">
                    <li><a href="index.php">Home page</a></li>
                    <li class="active"><a href="account.php">Create an account</a></li>
                    <li><a href="find_a_dogcat.php">Find a dog/cat</a></li>
                    <li><a href="dog_care.php">Dog Care</a></li>
                    <li><a href="cat_care.php">Cat Care</a></li>
                    <li><?php if ($_SESSION["login"]){ echo "<a href=\"give_away.php\">"; } else { echo "<a href=\"login.php\">"; } ?>Have a pet to give away</a></li>
                    <li><a href="log_out.php">Log out</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>

            </div>


            <div class="content">
               <h1>Account creation</h1>
                
                <form action="register.php" onSubmit="return registrationCheck(event);" method="post" id="registration">
                    Username: 
                    <input type="text" name="username"> <br>
                    <br>
                    Password: 
                    <input type="password" name="password"> <br>
                    <br>
                    <br>
                    <input type="submit" value="Submit"> 
                    <p>Note: The username can only contain letters and digits.</p>
                    <p>The password must be at least 4 characters long, have at least one letter and one digit and be comprised of only letters and digits.</p>


                </form>
                

            </div>






        </div>
      
<?php
include("footer.html");
?>