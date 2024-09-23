<?php
require_once('database.php');

//getting values for variables
$alcoholic = filter_input(INPUT_GET, 'alcoholic');
if ($alcoholic == NULL || $alcoholic == FALSE){
    $alcoholic = 1;
}

$drink_category = filter_input(INPUT_GET, 'drink_category');
if ($drink_category == NULL || $drink_category == FALSE){
    $drink_category = 1;
}

$glass = filter_input(INPUT_GET, 'glass');
if ($glass == NULL || $glass == FALSE){
    $glass = 1;
}

//getting names for all categories
$queryCategoryNames = 'SELECT DISTINCT strCategory FROM drinks
                        ORDER BY strCategory';
$statement4 = $db->prepare($queryCategoryNames);
$statement4->execute();
$category_names = $statement4->fetchAll();
$statement4->closeCursor();

//getting values for selected category

$queryCategory = 'SELECT * FROM drinks WHERE strCategory = :category';
$statement5 = $db->prepare($queryCategory);
$statement5->bindValue(":category", $drink_category);
$statement5->execute();
$categories = $statement5->fetchAll();
$statement5->closeCursor();

//getting names for all alcoholic
$queryAlcoholicNames = 'SELECT DISTINCT strAlcoholic FROM drinks
                    ORDER BY strAlcoholic';
$statement3 = $db->prepare($queryAlcoholicNames);
$statement3->execute();
$alcoholic_names = $statement3->fetchAll();
$statement3->closeCursor();

//getting values for selected alcoholic
$queryAlcoholic = 'SELECT * FROM drinks WHERE strAlcoholic  = :alcoholic';
$statement2 = $db->prepare($queryAlcoholic);
$statement2->bindValue(":alcoholic", $alcoholic);
$statement2->execute();
$alcoholic_yes_no = $statement2->fetchAll();
$statement2->closeCursor();

//getting names for glasses
$queryGlassNames = "SELECT DISTINCT strGlass FROM drinks ORDER BY strGlass";
$statement6 = $db->prepare($queryGlassNames);
$statement6->execute();
$glass_names = $statement6->fetchAll();
$statement6->closeCursor();

//getting values for selected glass
$queryGlass = "SELECT * from drinks WHERE strGlass = :glass";
$statement7 = $db->prepare($queryGlass);
$statement7->bindValue(":glass", $glass);
$statement7->execute();
$glasses = $statement7->fetchAll();
$statement7->closeCursor();

try{
//get all meals
$queryDrinks = 'SELECT * FROM drinks
               ORDER BY strDrink';
$statement1 = $db->prepare($queryDrinks);
$statement1->execute();
$drinks = $statement1->fetchAll();
$statement1->closeCursor();
}
catch (Exception $e){
    $error_message = $e->getMessage();
    echo "<p>Error Message: $error_message </p>";
}
?>


<!DOCTYPE html>
<html>
    <head>
    <title>All Drinks - MealPrep</title>
        <link rel="stylesheet" href="styles.css">
        <!-- cdnjs font-awesome for fonts/images like magnifier search -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        <style>
        </style>
    </head>
    <body>

        <nav>
        <img src="./images/thymeyboi_2.png" alt="a very cute orange owl" width="4.5%"/>
         <form class="input-container">

             <input type="text" class="input" placeholder="Search"/>
             <i class="fa-solid fa-magnifying-glass magnifier"></i>
         </form>
         <ul>
             <li><a href="all_meals.php">Meals</a></li>
             <li><a href="all_drinks.php">Drinks</a></li>
             <li><a href="popularMealPlans.html">Popular Meal Plans</a></li>
             <li><a href="weekly_meal_plan.php">Plan Your Meals</a></li>
             <li><a href="shoppingList.php">Shopping List</a></li>
         </ul>
     </nav>
     <br>
      <br>
     <br>
     <br>

            <h1>All Drinks</h1>
            <h2>Browse All Drinks</h2>
            <div class = "data_page">
            <div class = "page_selectors" style = "">
            <div class = "view_categories">
                <form action = "all_drinks.php" method = "get">
                    <label for ="drink_category">Sort by Category: </label>
                    <select name = "drink_category">
                        <option value = "1">View All</option>
                        <?php foreach($category_names as $category_name) :?>
                        <option value = <?php echo $category_name['strCategory']; ?>>
                            <?php echo $category_name['strCategory']; ?>
                        </option>
                        <?php endforeach; ?>
                    </select>
                    <input type = "submit" value = "Go">
                </form>
            </div>
            
            <div class = "view_alcoholic">
                <form action = "all_drinks.php" method = "get">
                    <label for "alcoholic">Sort by Alcoholic</label>
                    <select name = "alcoholic">
                        <option value = "1">View All</option>
                        <?php foreach ($alcoholic_names as $alcoholic_name) :?>
                            <option value = <?php echo $alcoholic_name['strAlcoholic']; ?>>
                            <?php echo $alcoholic_name["strAlcoholic"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type = "submit" value = "Go">
                </form>
            </div>
            <div class = "view_glass">
                <form action = "all_drinks.php" method = "get">
                    <label for "glass">Sort by Glass</label>
                    <select name = "glass">
                        <option value = "1">View All</option>
                        <?php foreach ($glass_names as $glass_name) :?>
                            <option value = <?php echo $glass_name['strGlass']; ?>>
                            <?php echo $glass_name["strGlass"]; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <input type = "submit" value = "Go">
                    </form>
            </div>
            </div>
            <div class = "view_data">
                            <?php if($drink_category!=1) : ?>
                                <div class = "all_block">
                                <?php foreach ($categories as $category_info) : ?>
                                        <div class = "recipe_block">
                                            <img src = <?php echo $category_info['strDrinkThumb']; ?>>                   
                                            <h3><?php echo $category_info['strDrink']; ?></h3>                    
                                            <p>Category: <?php echo $category_info['strCategory']; ?></p>                    
                                            <p>Alcoholic: <?php echo $category_info['strAlcoholic']; ?></p>                    
                                            <p>Glass: <?php echo $category_info['strGlass']; ?></p>
                                            <button><form action = "add_to_meal_plan.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $category_info["drinkID"];  ?>">
                                                <input type = "submit" value = "Add to Plan">
                                            </form></button>                    
                                            <button><form action = "view_page.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $category_info["drinkID"];  ?>">
                                                <input type = "submit" value = "View Recipe">
                                            </form></button>                    
                                        </div >
                                <?php endforeach; ?>
                                </div>
                            <?php elseif ($alcoholic != 1) : ?>
                                <div class = "all_block">
                                <?php foreach ($alcoholic_yes_no as $alc) : ?>
                                        <div class = "recipe_block">
                                            <img src = <?php echo $alc['strDrinkThumb']; ?>>                    
                                            <h3><?php echo $alc['strDrink']; ?></h3>                    
                                            <p>Category: <?php echo $alc['strCategory']; ?></p>                    
                                            <p>Alcoholic: <?php echo $alc['strAlcoholic']; ?></p>                    
                                            <p>Glass: <?php echo $alc['strGlass']; ?></p>
                                            <button><form action = "add_to_meal_plan.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $alc["drinkID"];  ?>">
                                                <input type = "submit" value = "Add to plan">
                                            </form></button>                    
                                            <button><form action = "view_page.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $alc["drinkID"];  ?>">
                                                <input type = "submit" value = "View Recipe">
                                            </form></button>                    
                                        </div>
                                <?php endforeach; ?>
                                </div>
                            <?php elseif ($glass != 1) : ?>
                                <div class = "all_block">
                                <?php foreach ($glasses as $glass_value) : ?>
                                        <div class = "recipe_block">
                                            <img src = <?php echo $glass_value['strDrinkThumb']; ?>>                    
                                            <h3><?php echo $glass_value['strDrink']; ?></h3>                    
                                            <p>Category: <?php echo $glass_value['strCategory']; ?></p>                    
                                            <p>Alcoholic: <?php echo $glass_value['strAlcoholic']; ?></p>                    
                                            <p>Glass: <?php echo $glass_value['strGlass']; ?></p>
                                            <button><form action = "add_to_meal_plan.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $glass_value["drinkID"];  ?>">
                                                <input type = "submit" value = "Add to plan">
                                            </form></button>                    
                                            <button><form action = "view_page.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $glass_value["drinkID"];  ?>">
                                                <input type = "submit" value = "View Recipe">
                                            </form></button>                    
                                        </div>
                                <?php endforeach; ?>
                                </div>
                                <?php else : ?>
                                <div class = "all_block">
                                <?php foreach ($drinks as $drink) : ?>
                                        <div class = "recipe_block">
                                            <img src = <?php echo $drink['strDrinkThumb']; ?>>                    
                                            <h3><?php echo $drink['strDrink']; ?></h3>                    
                                            <p>Category: <?php echo $drink['strCategory']; ?></p>                    
                                            <p>Alcoholic: <?php echo $drink['strAlcoholic']; ?></p>                    
                                            <p>Glass: <?php echo $drink['strGlass']; ?></p>
                                            <button><form action = "add_to_meal_plan.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $drink["drinkID"];  ?>">
                                                <input type = "submit" value = "Add to Plan">
                                            </form></button>                    
                                            <button><form action = "view_page.php" method = "post">
                                                <input type = "hidden" name = "drink_id"
                                                    value = "<?php echo $drink["drinkID"];  ?>">
                                                <input type = "submit" value = "View Recipe">
                                            </form></button>                    
                                        </div>
                                <?php endforeach; ?>
                                </div>
                            <?php endif; ?>
            </div>
        </div>               
    </body>

     <footer>
     <ul style="text-align: center; font-size: 18px;">
         <li><a href="about.html" style="text-decoration: none; color: black;">About<a></li>
         <li><a href="contact.html" style="text-decoration: none; color: black;">Contact</a></li>
     </ul>
    </footer>
        <p style="text-align: center; margin-top: 5px;
        ">&copy;<?php echo date("Y"); ?> Caroline Field, Ash Corcoran, Owen Kelley, Troy Kubanka, and Eli Lemons
        </p>
    
</html>
