<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
$title = "Contact us";
include("header.html");
?>


            <div class="sidebar">

                <ul class="navigation">
                    <li><a href="index.php">Home page</a></li>
                    <li><a href="account.php">Create an account</a></li>
                    <li><a href="find_a_dogcat.php">Find a dog/cat</a></li>
                    <li><a href="dog_care.php">Dog Care</a></li>
                    <li><a href="cat_care.php">Cat Care</a></li>
                    <li><?php if ($_SESSION["login"]){ echo "<a href=\"give_away.php\">"; } else { echo "<a href=\"login.php\">"; } ?>Have a pet to give away</a></li>
                    <li><a href="log_out.php">Log out</a></li>
                    <li class="active"><a href="contact_us.php">Contact Us</a></li>
                </ul>

            </div>


            <div class="content">

                <h1>Contact us</h1>

                <p>Benjamin Tanguay</p>
                <p>ID:40009113</p>
                <p>Benjamin.Tanguay at gmail dot com</p>
                
                <hr>
                
                <h1>Credits</h1>
                
                <p>Banner image: <cite><a href="https://www.vocalforpets.org/about/what-is-a-feral-cat/">Vocalforpets.org</a></cite></p>
                <p>Cat picture displayed in the home page: <cite><a href="https://www.facebook.com/colonelmeowinthecity/">Colonel Meow's Facebook page</a></cite></p>
                <p>Dog picture displayed in the home page: <cite><a href="http://www.carefordogs.org/adoptions/dogs-with-special-needs/">Carefordogs.org</a></cite></p>
                <p>First cat displayed in the browse page: <cite><a href="http://www.funnyordie.com/articles/03c8cdc7a3/exclusive-the-script-to-the-grumpy-cat-movie">funnyordie.com</a></cite></p>
                <p>Second cat displayed in the browse page: <cite><a href="http://www.funnyordie.com/slideshows/8a172c3234/20-pictures-of-cats-wearing-tiny-hats">funnyordie.com</a></cite></p>
                <p>Dog displayed in the browse page: <cite><a href="https://www.pinterest.com/pin/527202700102088720/">Pinterest.com</a></cite></p>
                <p>Images and text in the cat care page:<cite><a href="http://www.wikihow.com/Feed-Cats">Wikihow article on how to feed a cat</a></cite></p>
                <p>Image and text in the dog care page: <cite><a href="http://www.wikihow.com/Take-Care-of-a-Dog">Wikihow article on how to take care of a dog</a></cite></p>

            </div>






        </div>


<?php
include("footer.html");
?>
        