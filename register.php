<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
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
                
                
                <?php 
                
                function userPassCheck(){
                    
                    if (!isset($username) || !isset($password)){
                        echo "<form action=\"register.php\" method=\"post\" id=\"registration\">
                    Username: 
                    <input type=\"text\" name=\"username\"> <br>
                    <br>
                    Password
                    <input type=\"password\" name=\"password\"> <br>
                    <br>
                    <br>
                    <input type=\"submit\" value=\"Submit\">
                    <p>Note: The username can only contain letters and digits.</p>
                    <p>The password must be at least 4 characters long, have at least one letter and one digit and be comprised of only letters and digits.</p>


                </form>
                <script type=\"text/javascript\" src=\"Javascript/registration.js\"></script>";
                        return;
                    }
                    
                    $username = $_POST["username"];
                    
                    $password = $_POST["password"];
                    $passFile = fopen("accounts.txt","r") or die("Unable to open the file!");
                    $flag = false;
                    $regexNonAlpha = "/\W+/";
                    $regexNumber = "/\d{1,}/";
                    $regexChar = "/[a-zA-Z]{1,}/";
                    
                    
                    
                    if(preg_match($regexNonAlpha, $username) != 1 || preg_match($regexNonAlpha, $password) == 1 || preg_match($regexNumber, $password) == 1 || preg_match($regexChar, $username) == 1 || strlen($password) < 4){
                        echo "<form action=\"register.php\" method=\"post\" id=\"registration\">
                    Username: 
                    <input type=\"text\" name=\"username\"> <br>
                    <br>
                    Password
                    <input type=\"password\" name=\"password\"> <br>
                    <br>
                    <br>
                    <input type=\"submit\" value=\"Submit\">
                    <p style=\"color:red;\">Invalid username and / or password. Try again.</p>
                    <p>Note: The username can only contain letters and digits.</p>
                    <p>The password must be at least 4 characters long, have at least one letter and one digit and be comprised of only letters and digits.</p>


                </form>
                <script type=\"text/javascript\" src=\"Javascript/registration.js\"></script>";
                        return;
                    }
                    
                    
                        
                    $username = $username . ":";    
                    $match = "/^" . $username . "/";
                    
                        
                    while(!feof($passFile)){
                        $line = fgets($passFile);
                        if (preg_match($match, $line) == 1){
                            $flag = true;
                        }
                        if ($flag){
                            break;
                        }
                    }
                    
                    if (!$flag){
                        fclose($passFile);
                        $passFile = fopen("accounts.txt","a+");
                        fwrite($passFile, $username . $password . "\n");
                        fclose($passFile);
                        echo "Username created!";
                        }
                    else{
                        echo "<form action=\"register.php\" method=\"post\" id=\"registration\">
                    Username: 
                    <input type=\"text\" name=\"username\"> <br>
                    <br>
                    Password
                    <input type=\"password\" name=\"password\"> <br>
                    <br>
                    <br>
                    <input type=\"submit\" value=\"Submit\">
                    <p style=\"color:red;\">Username already in use. Please register with another username.</p>
                    <p>Note: The username can only contain letters and digits.</p>
                    <p>The password must be at least 4 characters long, have at least one letter and one digit and be comprised of only letters and digits.</p>


                </form>
                <script type=\"text/javascript\" src=\"Javascript/registration.js\"></script>";

                    }
                }
                userPassCheck();    
                    
                    
                
                                
                ?>
                
                
            </div>






        </div>
      
<?php
include("footer.html");
?>