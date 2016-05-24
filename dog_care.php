<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
$title = "Dog care";
include("header.html");
?>


            <div class="sidebar">

                <ul class="navigation">
                    <li><a href="index.php">Home page</a></li>
                    <li><a href="account.php">Create an account</a></li>
                    <li><a href="find_a_dogcat.php">Find a dog/cat</a></li>
                    <li class="active"><a href="dog_care.php">Dog Care</a></li>
                    <li><a href="cat_care.php">Cat Care</a></li>
                    <li><?php if ($_SESSION["login"]){ echo "<a href=\"give_away.php\">"; } else { echo "<a href=\"login.php\">"; } ?>Have a pet to give away</a></li>
                    <li><a href="log_out.php">Log out</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>

            </div>


            <div class="content">

                <h1>How to feed your dog!</h1>

                <p>
                    <img src="media/feeddog/img1.jpg" alt="First dog" style="width:250px;height:auto;border:none;float:right;margin:10px;margin-top:0px;">
                    <b>Feed your dog a high quality dog food.</b>
                    Read the label of a prospective food. The first couple ingredients should be some kind of meat, not meat by-product or a grain. This will help you know that the food is high in good protein, not just filler.</p>
                    <ul>
                        <li>
                            Ask your veterinarian for food recommendations. Your vet may be able to steer you towards a food that is just right for your pup and he or she may also have recommendations for how much to feed the dog.
                        </li>
                    </ul>
                

                <p>
                    <b>Feed your dog on a regular schedule.</b>
                    It is recommended that you feed your dog twice a day. Figure out the proper amount you should be feeding your dog daily, which is usually on the dog food package, and divide that amount in two. Feed your dog the first half in the morning and the second half in the evening.</p>
                    <ul>
                        <li>
                            A stable routine of feeding can also help you with house training. Dogs usually have to go to the bathroom 20 - 30 minutes after eating.
                        </li>
                    </ul>
                

                <p>
                    <img src="media/feeddog/img2.jpg" alt="Second dog" style="width:280px;height:auto;border:none;float:left;margin:10px;margin-top:0px">
                    <b>Avoid giving your dog an excessive amount of treats or people food.</b>
                    This can lead to weight gain or health problems for your pet. Stick to the rule of only giving your dog treats when you're training it. Remember, this can be hard to follow, especially if your pup is looking at you with puppy dog eyes. However, stick to your guns!</p>
                    <ul>
                        <li>
                            Don't feed your dog food that is bad for it.
                            There are many foods that are not only bad for your dog but that can be hazardous to its health. Do not give your dog any chocolate, avocado, bread dough, raisins, grapes, onions, or xylitol, which is a non-caloric sweetener.
                        </li>
                    </ul>
                

                <p>
                    <img src="media/feeddog/img3.jpg" alt="Third dog" style="width: 250px; height: auto; border: none; float: right; margin: 10px; margin-top: 0px">
                    <b>Give your dog water.</b> 
                    Food is not the only thing your dog needs to survive. Water is just as, if not more, important. Give your dog open access to water at all times. This doesn't mean that you have to give it access to water when it is unfeasible, for instance when you are in the car, but if it is possible you should supply a bowl of clean drinking water.
                </p>

                <br>
                <br>
                <br>

                <p> <i>Source: </i><cite><a href="http://www.wikihow.com/Take-Care-of-a-Dog"><i>How to take care of a dog</i></a></cite></p>


            </div>





        </div>
<?php
include("footer.html");
?>
      