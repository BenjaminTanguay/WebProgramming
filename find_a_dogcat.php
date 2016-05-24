<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
$title = "Find a dog or a cat";
include("header.html");
?>


            <div class="sidebar">

                <ul class="navigation">
                    <li><a href="index.php">Home page</a></li>
                   <li><a href="account.php">Create an account</a></li>
                    <li class="active"><a href="find_a_dogcat.php">Find a dog/cat</a></li>
                    <li><a href="dog_care.php">Dog Care</a></li>
                    <li><a href="cat_care.php">Cat Care</a></li>
                    <li><?php if ($_SESSION["login"]){ echo "<a href=\"give_away.php\">"; } else { echo "<a href=\"login.php\">"; } ?>Have a pet to give away</a></li>
                    <li><a href="log_out.php">Log out</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>

            </div>


            <div class="content">

                
                
                
                
                <?php
                
                function formMatch(){
                    $string = "<h1>Find a cat or a dog!</h1><p>Please fill out this form to find a cat or a dog that will suit you.</p>

                <form method=\"post\" action=\"find_a_dogcat.php\" id=\"findForm\">
                    Cat or dog:
                    <input type=\"radio\" name=\"catordog\" value=\"cat\">Cat
                    <input type=\"radio\" name=\"catordog\" value=\"dog\">Dog <br>
                    <br>
                    Animal's breed (includes mixed breed) <br>
                    <input type=\"text\" name=\"Breed\" id=\"breed\"> <br>
                    <br>
                    Prefered age of the animal?
                    <select name=\"age\">
                        <option value=\"\">Select an option</option>
                        <option value=\"Less than 1\">Less than 1</option>
                        <option value=\"1 to 3\">1 to 3</option>
                        <option value=\"4 to 7\">4 to 7</option>
                        <option value=\"8 to 12\">8 to 12</option>
                        <option value=\"more than 12\">more than 12</option>
                    </select> <br> <br>
                    Prefered gender:
                    <input type=\"radio\" name=\"gender\" value=\"male\">Male
                    <input type=\"radio\" name=\"gender\" value=\"female\">Female <br>
                    <br>
                    The animal needs to get along with:<br>
                    <input type=\"checkbox\" name=\"otherCat\" value=\"cat\">other cats
                    <input type=\"checkbox\" name=\"otherDog\" value=\"dog\">other dogs
                    <br> <br>
                    Does the animal needs to get along with small children?
                    <input type=\"radio\" name=\"smallChildren\" value=\"Yes\">Yes
                    <input type=\"radio\" name=\"smallChildren\" value=\"No\">No <br>
                    <br>
                    <br>
                    <input type=\"submit\" value=\"Submit\"> <input type=\"reset\" value=\"Reset\">


                </form>
                <script type=\"text/javascript\" src=\"Javascript/submitFind.js\"></script>";
                
               
                
                    
                    
                    
                    if (isset($_POST["catordog"]) && isset($_POST["Breed"]) && isset($_POST["age"]) && isset($_POST["gender"]) && isset($_POST["smallChildren"])){
                        $flag = false;
                        $catOrDog = $_POST["catordog"] . ":";
                        $breed = $_POST["Breed"] . ":";
                        $age = $_POST["age"] . ":";
                        $gender = $_POST["gender"] . ":";
                        $othercat = "";
                        if (isset($_POST["otherCat"])){
                            $othercat = true;    
                        }
                        else{
                            $othercat = false;    
                        }
                        $otherdog = "";
                        if (isset($_POST["otherDog"])){
                            $otherdog = true;    
                        }
                        else{
                            $otherdog = false;
                        }
                        $smallChildren = "SmallChildren" . $_POST["smallChildren"] . ":";
                        $match = $catOrDog . $breed . $age . $gender;
                        $title = true;
                        
                        $petsFile = fopen("availablepets.txt","r") or die("Unable to open the file!");
                        $smallChildren = "SmallChildren" . $_POST["smallChildren"] . ":";
                        
                        while (!feof($petsFile)){
                            $line = fgets($petsFile);
                            if (preg_match("/" . $match . "/", $line) == 1 && preg_match("/" . $smallChildren . "/", $line) == 1){
                                if (!$othercat && !$otherdog){
                                    $flag = true;
                                    if ($title){
                                        echo "<h1>Available pets!</h1>";
                                    }
                                    formattedOutput($line);
                                    $title = false;
                                }
                                else if (!$othercat && $otherdog){
                                    if (preg_match("/GetsAlongDogyes/", $line) == 1){
                                        $flag = true;
                                        if ($title){
                                        echo "<h1>Available pets!</h1>";
                                        }
                                        formattedOutput($line);
                                        $title = false;
                                    }
                                }
                                else if ($othercat && !$otherdog){
                                    if (preg_match("/GetsAlongCatyes/", $line) == 1){
                                        $flag = true;
                                        if ($title){
                                            echo "<h1>Available pets!</h1>";
                                        }
                                        formattedOutput($line);
                                        $title = false;
                                    }
                                }
                                else if ($othercat && $otherdog){
                                    if (preg_match("/GetsAlongDogyes/", $line) == 1 && preg_match("/GetsAlongCatyes/", $line) == 1){
                                        $flag = true;
                                        if ($title){
                                            echo "<h1>Available pets!</h1>";
                                        }
                                        formattedOutput($line);
                                        $title = false;
                                    }
                                }
                            }
                        }
                        if (!$flag){
                            echo "<p style=\"color:red\"> No pet matching your specifications was found in our database. </p>" . $string;
                        }
                    }
                    else{
                        echo $string;
                    }
                }
                
                function formattedOutput($line){
                    list($number, $username, $catordog, $breed, $age, $gender, $otherCat, $otherDog, $smallChildren, $animalDescription, $firstName, $lastName, $email) = explode(":", $line);
                    $age = $age . " years old.";
                    if (preg_match("/GetsAlongCatyes/", $otherCat) == 1){
                        $otherCat = "Gets along with other cats.";
                    }
                    else{
                        $otherCat = "Doesn't get along with other cats.";
                    }
                    if (preg_match("/GetsAlongDogyes/", $otherDog) == 1){
                        $otherDog = "Gets along with other dogs.";
                    }
                    else{
                        $otherDog = "Doesn't get along with other dogs.";
                    }
                    if (preg_match("/SmallChildrenYes/", $smallChildren) == 1){
                        $smallChildren = "Suitable for a family of small children";
                    }
                    else{
                        $smallChildren = "Not suitable for a family of small children";
                    }
                    $animalDescription = substr($animalDescription, 11);
                    $firstName = substr($firstName, 4);
                    $lastName = substr($lastName, 4);
                    $email = substr($email, 5);
                    
                    echo "<div class=\"browse\">Pet number: " . $number . "<br />Animal: " . $catordog . "<br />Breed: " . $breed . "<br />Age: " . $age . "<br />Gender: " . $gender . "<br />" . $otherCat . "<br />" . $otherDog . "<br />" . $smallChildren . "<br />Description: " . $animalDescription . "<br />Owner's name: " . $firstName . " " . $lastName . "<br />Owner's email: " . $email . "</div>";
                
                }
                
                formMatch();
                
                
                ?>

                

            </div>





        </div>
       
<?php
include("footer.html");
?>