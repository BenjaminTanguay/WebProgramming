<?php
session_start();
if (!isset($_SESSION["login"])){
    $_SESSION["login"] = false;
}
$title = "Cat care";
include("header.html");
?>


            <div class="sidebar">

                <ul class="navigation">
                    <li><a href="index.php">Home page</a></li>
                    <li><a href="account.php">Create an account</a></li>
                    <li><a href="find_a_dogcat.php">Find a dog/cat</a></li>
                    <li><a href="dog_care.php">Dog Care</a></li>
                    <li class="active"><a href="cat_care.php">Cat Care</a></li>
                    <li><?php if ($_SESSION["login"]){ echo "<a href=\"give_away.php\">"; } else { echo "<a href=\"login.php\">"; } ?>Have a pet to give away</a></li>
                    <li><a href="log_out.php">Log out</a></li>
                    <li><a href="contact_us.php">Contact Us</a></li>
                </ul>

            </div>


            <div class="content">

                <h1>How to feed your cat!</h1>


            
                <p>
                    <img src="media/feedcat/img1.jpg" alt="First cat" style="width:250px;height:auto;border:none;float:left;margin:10px;">
                    <b>Know a cat’s basic nutritional needs. </b>
                    An average sized adult cat needs around 250 calories a day with a
                    balance of proteins, carbohydrates, fats, vitamins, and minerals.
                    Your cat’s particular calorie needs will depend on its size,
                    weight, and activity level.</p>
                    <ul>
                        <li>
                            Cats are “obligate carnivores.” They need to consume animal fats and proteins to get adequate nutrition. Make sure that your cat food meets your cat’s nutritional needs.
                        </li>
                        <li>
                            Don't neglect hydration. Water is extremely important to a cat’s diet, and cats that eat a dry-food diet need to drink more because they aren’t getting extra moisture from their food. Clean your cat’s water bowl and change the water regularly. A water fountain or dripping water source can also help increase your cat’s water intake by keeping the cat entertained.
                        </li>
                    </ul>
                

                <p>
                    <img src="media/feedcat/img2.jpg" alt="Second cat" style="width:250px;height:auto;border:none;float:right;margin:10px;">
                    <b>Decide whether to use canned or dry food. </b>
                    Both canned and dry cat food have benefits for your cat. In many cases, cats are fine eating dry cat food, supplemented with plenty of clean water. If you are concerned about your cat’s needs, consult with your vet to help you decide what food is best for your cat.</p>
                    <ul>
                        <li>
                            If your cat has urinary tract problems, diabetes, or kidney disease, the extra moisture in canned cat food can be helpful to help it stay hydrated. Canned cat food can be up to 78% water.
                        </li>
                        <li>
                            Dry food is usually a better value because you are paying for less moisture.
                        </li>
                        <li>
                            The protein and carbohydrate content of both dry and wet foods varies according to the recipe. Dry food tends to be more "calorie dense," having more calories per portion because it does not have the high moisture content of wet food.
                        </li>
                    </ul>
                

                <p>
                    <b>Consider feeding your cat a combination of canned and dry food. </b>
                    Using a combination of wet and dry food can help your cat stay hydrated better than dry food alone.[7] Cats, who can be picky eaters, may also enjoy the variation in their diets.</p>
                    <ul>
                        <li>
                            If you decide to feed your cat a combination of foods, be particularly careful not to overfeed. Make sure that the food you offer your cat at mealtimes provides adequate calories and nutrition.
                        </li>
                    </ul>
                

                <p>
                    <b>Purchase high quality food. </b>
                    Just like human foods, quality cat food will have a healthy balance of protein, fat, carbohydrates, vitamins, and minerals. Choose a cat food that uses animal protein and fat. Cats need animal sources in order to get essential nutrients such as taurine and arachidonic acid, which they can’t get from plant-based food.</p>
                    <ul>
                        <li>
                            Look for a statement from AAFCO (American Association of Feed Control Officials) on your cat food. This organization helps ensure that the food will meet your cat’s nutritional needs.
                        </li>
                        <li>
                            Avoid foods that contain artificial colors and flavors or harmful chemicals.
                        </li>
                    </ul>
                

                <p>
                    <img src="media/feedcat/img3.jpg" alt="Third cat" style="width:250px;height:auto;border:none;float:right;margin:10px;">
                    <b>Know how to interpret food labeling. </b>
                    Trying to understand what’s actually in that cat food you’re buying can be complicated. It’s important to look for a few things when purchasing any cat food:</p>
                    <ul>
                        <li>
                            If the product name uses a word like “tuna” or “chicken” before the words “cat food” that product must contain at least 95% of that ingredient. For example, “Chicken Cat Food” must be at least 95% chicken.
                        </li>
                        <li>
                            The word “with” in a product name means that the product can contain as little as 3% of that ingredient. “Cat Food with Chicken” may only contain 3% chicken, whereas “Chicken Cat Food” is at least 95% chicken.
                        </li>
                        <li>
                            Cat foods that contain words like “dinner” or “entrée” contain less than 95% meat but more than 25% meat. Often, these products use grains or other protein sources, such as byproducts, to add body to the food.
                        </li>
                        <li>
                            There’s also a difference between “meat,” “meat by-products,” and “meal.” “Meat” refers to the “flesh” (muscle and fat) of an animal and is generally considered the highest-quality protein source. “Meat by-products” are clean, non-flesh parts, such as organs, bones, brain, and blood. These are not necessarily bad for your cat (remember, many humans eat organ meat too!), but they may be lower-quality protein than meat. “Meal” is finely-ground tissue or bone and is often considered the lowest-quality protein source.
                        </li>
                    </ul>
                



                <p> <i>Source: </i><cite><a href="http://www.wikihow.com/Feed-Cats"><i>How to feed cats</i></a></cite></p>

            </div>






        </div>

<?php
include("footer.html");
?>
    