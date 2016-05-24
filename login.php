<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
if (!file_exists("accounts.txt")){
    $temp = fopen("accounts.txt","w+");
}
$title = "Give a pet";
include("header.html");
?>


        
            <div class="sidebar">

                <ul class="navigation">
                    <li><a href="index.php">Home page</a></li>
                    <li><a href="account.php">Create an account</a></li>
                    <li><a href="find_a_dogcat.php">Find a dog/cat</a></li>
                    <li><a href="dog_care.php">Dog Care</a></li>
                    <li><a href="cat_care.php">Cat Care</a></li>
                    <li class="active"><?php if ($_SESSION["login"]){ echo "<a href=\"give_away.php\">"; } else { echo "<a href=\"login.php\">"; } ?>Have a pet to give away</a></li>
                    <li><a href="log_out.php">Log out</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>

            </div>

            <div class="content">

            <?php
                
            function login(){
                    if (isset($_POST["username"]) && $_POST["password"]){
                        $username = $_POST["username"] . ":";
                        $password = $_POST["password"];
                        $match = $username . $password;
                        $flag = false;
                        if (strlen($match) > 1){
                            $passFile = fopen("accounts.txt","r") or die("Unable to open the file!");
                            $flag = false;
                            while(!feof($passFile)){
                                $line = fgets($passFile);
                                if (preg_match("/^" . $match . "$/", $line) == 1){
                                    $flag = true;
                                }
                                if ($flag){
                                    break;
                                }
                            }
                            fclose($passFile);
                            
                            if (!$flag){
                                echo "<p style=\"color:red\"> Invalid username and / or password. Try again! </p>";
                            }
                            else{
                                $_SESSION["login"] = true;
                                $_SESSION["username"] = $username;
                                header("Location: give_away.php");
                                exit;
                            }
                        }
                    }
                }
                login();
                
                ?>


            
			<h1>Log in informations</h1><form action="login.php" method="post" id="registration">Username: <input type="text" name="username"> <br><br>Password: <input type="password" name="password"> <br><br><br><input type="submit" value="Submit"></form><script type="text/javascript" src="Javascript/registration.js"></script>
            
            
                
			 </div>
        </div>

<?php
include("footer.html");
?>