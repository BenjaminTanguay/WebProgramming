<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
if (!file_exists("availablepets.txt")){
    $temp = fopen("availablepets.txt","w+");
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
                
                
                
                petData();
                function petData(){
                    if (isset($_POST["catordog"]) && isset($_POST["Breed"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["smallChildren"]) && isset($_POST["animalBragging"]) && isset($_POST["FirstName"]) && isset($_POST["LastName"]) && isset($_POST["Email"])){
                        $count = 0;
                        
                        $petsFile = fopen("availablepets.txt", "r") or die("Unable to open the file!");
                        while (!feof($petsFile)){
                        fgets($petsFile);
                        ++$count;
                        }
                        
                        $username = $_SESSION["username"];
                        $catOrDog = $_POST["catordog"] . ":";
                        $breed = $_POST["Breed"] . ":";
                        $age = $_POST["age"] . ":";
                        $gender = $_POST["gender"] . ":";
                        $othercat = "";
                        if (isset($_POST["otherCat"])){
                            $othercat = "GetsAlongCat" . $_POST["otherCat"] . ":";    
                        }
                        else{
                            $othercat = "GetsAlongCat" . "no" . ":";    
                        }
                        $otherdog = "";
                        if (isset($_POST["otherDog"])){
                            $otherdog = "GetsAlongDog" . $_POST["otherDog"] . ":";    
                        }
                        else{
                            $otherdog = "GetsAlongDog" . "no" . ":";
                        }
                        $smallChildren = "SmallChildren" . $_POST["smallChildren"] . ":";
                        $animalDescription = "Description" . $_POST["animalBragging"] . ":";
                        $firstName = "Name" . $_POST["FirstName"] . ":";
                        $lastName = "Last" . $_POST["LastName"] . ":";
                        $email = "email" . $_POST["Email"];
                        
                        $string = $count . ":" . $username . $catOrDog . $breed . $age . $gender . $othercat . $otherdog . $smallChildren . $animalDescription . $firstName . $lastName . $email . "\n";
                        
                        $petsFile = fopen("availablepets.txt", "a+") or die("Unable to open the file!");
                        fwrite($petsFile, $string);    
                        
                        
                        
                        echo "<p style=\"color:green\">Pet added to the database!</p>";
                    }   
               }
                
                
                
                
                    
                
                ?>
                
                <p>Have a pet to give for adoption? Please fill out this form and we'll get back to you as soon as possible!</p><form action= "give_away.php" method="post" id="giveForm">Cat or dog:<input type="radio" name="catordog" value="cat">Cat<input type="radio" name="catordog" value="dog">Dog <br><br>Animal's breed (includes mixed breed) <br><input type="text" name="Breed" id="breed"> <br><br>Animal's age? <select name="age"><option value="">Select an option</option><option value="Less than 1">Less than 1</option><option value="1 to 3">1 to 3</option><option value="4 to 7">4 to 7</option><option value="8 to 12">8 to 12</option><option value="more than 12">more than 12</option></select> <br> <br>Animal's gender:<input type="radio" name="gender" value="male">Male <input type="radio" name="gender" value="female">Female <br><br>Your animal gets along:<br><input type="checkbox" name="otherCat" value="yes">other cats <input type="checkbox" name="otherDog" value="yes">other dogs<br> <br>Is your animal suitable for a family with small children? <input type="radio" name="smallChildren" value="Yes">Yes<input type="radio" name="smallChildren" value="No">No <br><br>Describe your animal: <br><textarea name="animalBragging" rows="5" cols="60"></textarea><br> <br>First name <input type="text" name="FirstName"> <br><br>Family name <input type="text" name="LastName"> <br>   <br>Current owner's email <input type="text" name="Email"><br> <br><input type="submit" value="Submit"> <input type="reset" value="Reset"></form>        <script type="text/javascript" src="Javascript/submitGive.js"></script>

                
                
                
                
                
            </div>
        </div>

<?php
include("footer.html");
?>
    



   