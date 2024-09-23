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

$view = filter_input(INPUT_GET, 'view');
if ($view == NULL || $view == FALSE){
    $view = 1;
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

//getting names for all areas
$queryAlcoholicNames = 'SELECT DISTINCT strAlcoholic FROM drinks
                    ORDER BY strAlcoholic';
$statement3 = $db->prepare($queryAlcoholicNames);
$statement3->execute();
$alcoholic_names = $statement3->fetchAll();
$statement3->closeCursor();

//getting values for selected area
$queryAlcoholic = 'SELECT * FROM drinks WHERE strAlcoholic  = :alcoholic';
$statement2 = $db->prepare($queryAlcoholic);
$statement2->bindValue(":alcoholic", $alcoholic);
$statement2->execute();
$alcoholic_yes_no = $statement2->fetchAll();
$statement2->closeCursor();


try{
//get all meals
$queryDrinks = 'SELECT * FROM drinks
               ORDER BY drinkID';
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
        <form class="input-container">
            <input type="text" class="input" placeholder="Search"/>
            <i class="fa-solid fa-magnifying-glass magnifier"></i>
        </form>

        <ul>
            <li>Breakfast</li>
            <li>Lunch</li>
            <li>Dinner</li>
        </ul>
        <br>
    </nav>

            <ul style="text-align: center;">
                <li><a href="all_meals.php" style="text-decoration: none; color: black;">All Meals</a></li>
                <li><a href="all_drinks.php" style="text-decoration: none; color: black;">All Drinks</a></li>
                <li><a href="popularMeals.html" style="text-decoration: none; color: black;">Meals</a></li>
                <li><a href="popularDrinks.html" style="text-decoration: none; color: black;">Drinks</a></li>
                <li><a href="popularDesserts.html" style="text-decoration: none; color: black;">Desserts</a></li>
                <li><a href="" style="border-color: black; border-bottom: 2px solid; text-decoration: none; color: black;">Appetizers</a></li>
                <li><a href="popularMealPlans.html" style="text-decoration: none; color: black;">Popular Meal Plan</a></li>
                <li><a href="view_plan.php" style="text-decoration: none; color: black;">Meal Plan</a></li>
            </ul>

            <h1>All Drinks</h1>
            <h2>Browse All Drinks</h2>
            <div class = "data_page">
            <div class = "view_page_option">
                <h4><a href = "?view=1">Table View</a></h4>
                <h4><a href = "?view=2">Icon View</a></h4>
            </div>
            <?php if($view==1) :?>
                <div class = "table_selectors">
            <?php else :?>
                <div class = "page_selectors" style = "">
            <?php endif; ?>
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
            </div>
            <div class = "view_data">
                        <?php if($view == 1) :?>
                            <div class = "table_view">
                            <table>
                                <tr>
                                    <th>Code</th>
                                    <th>Name</th>
                                    <th>Category</th>                    
                                    <th>Alcoholic</th>                    
                                    <th>Glass </th>
                                    <th>Add Drink</th>
                                    <th>View Recipe</th>
                                </tr>
                            <?php if($drink_category!=1) : ?>
                                <?php foreach ($categories as $category_info) : ?>
                                    <tr>
                                        <td><?php echo $category_info['drinkID']; ?></td>                    
                                        <td><?php echo $category_info['strDrink']; ?></td>                    
                                        <td><?php echo $category_info['strCategory']; ?></td>                    
                                        <td><?php echo $category_info['strAlcoholic']; ?></td>                    
                                        <td><?php echo $category_info['strGlass']; ?></td>
                                        <td><form action = "add_to_meal_plan.php" method = "post">
                                            <input type = "hidden" name = "drink_id"
                                                value = "<?php echo $category_info["drinkID"];  ?>">
                                            <input type = "submit" value = "Add to Plan">
                                        </form></td>                    
                                        <td><form action = "view_page.php" method = "post">
                                            <input type = "hidden" name = "drink_id"
                                                value = "<?php echo $category_info["drinkID"];  ?>">
                                            <input type = "submit" value = "View Recipe">
                                        </form></td>                    
                                    </tr>
                                <?php endforeach; ?>
                            <?php elseif ($alcoholic != 1) : ?>
                                <?php foreach ($alcoholic_yes_no as $alc) : ?>
                                    <tr>
                                        <td><?php echo $alc['drinkID']; ?></td>                    
                                        <td><?php echo $alc['strDrink']; ?></td>                    
                                        <td><?php echo $alc['strCategory']; ?></td>                    
                                        <td><?php echo $alc['strAlcoholic']; ?></td>                    
                                        <td><?php echo $alc['strGlass']; ?></td>
                                        <td><form action = "add_to_meal_plan.php" method = "post">
                                            <input type = "hidden" name = "drink_id"
                                                value = "<?php echo $alc["drinkID"];  ?>">
                                            <input type = "submit" value = "Add to Plan">
                                        </form></td>                    
                                        <td><form action = "view_page.php" method = "post">
                                            <input type = "hidden" name = "drink_id"
                                                value = "<?php echo $alc["drinkID"];  ?>">
                                            <input type = "submit" value = "View Recipe">
                                        </form></td>                    
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <?php foreach ($drinks as $drink) : ?>
                                <tr>
                                    <td><?php echo $drink['drinkID']; ?></td>                    
                                    <td><?php echo $drink['strDrink']; ?></td>                    
                                    <td><?php echo $drink['strCategory']; ?></td>                    
                                    <td><?php echo $drink['strAlcoholic']; ?></td>                    
                                    <td><?php echo $drink['strGlass']; ?></td>
                                    <td><form action = "add_to_meal_plan.php" method = "post">
                                        <input type = "hidden" name = "drink_id"
                                            value = "<?php echo $drink["drinkID"];  ?>">
                                        <input type = "submit" value = "Add to Plan">
                                    </form></td>                    
                                    <td><form action = "view_page.php" method = "post">
                                        <input type = "hidden" name = "drink_id"
                                            value = "<?php echo $drink["drinkID"];  ?>">
                                        <input type = "submit" value = "View Recipe">
                                    </form></td>                    
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
                        <?php endif; ?>
                        <?php if ($view==2) : ?>
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
                        <?php endif; ?>
            </div>
        </div>               
    </body>
</html>
