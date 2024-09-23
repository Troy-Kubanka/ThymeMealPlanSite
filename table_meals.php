<?php
require_once('database.php');

//getting values for variables
$meal_area = filter_input(INPUT_GET, 'meal_area');
if ($meal_area == NULL || $meal_area == FALSE){
    $meal_area = 1;
}

$meal_category = filter_input(INPUT_GET, 'meal_category');
if ($meal_category == NULL || $meal_category == FALSE){
    $meal_category = 1;
}

$view = filter_input(INPUT_GET, 'view');
if ($view == NULL || $view == FALSE){
    $view = 1;
}

//getting names for all categories
$queryCategoryNames = 'SELECT DISTINCT strCategory FROM meals
                        ORDER BY strCategory';
$statement4 = $db->prepare($queryCategoryNames);
$statement4->execute();
$category_names = $statement4->fetchAll();
$statement4->closeCursor();

//getting values for selected category

$queryCategory = 'SELECT * FROM meals WHERE strCategory = :category';
$statement5 = $db->prepare($queryCategory);
$statement5->bindValue(":category", $meal_category);
$statement5->execute();
$categories = $statement5->fetchAll();
$statement5->closeCursor();

//getting names for all areas
$queryAreaNames = 'SELECT DISTINCT strArea FROM meals
                    ORDER BY strArea';
$statement3 = $db->prepare($queryAreaNames);
$statement3->execute();
$area_names = $statement3->fetchAll();
$statement3->closeCursor();

//getting values for selected area
$queryArea = 'SELECT * FROM meals WHERE strArea = :mealArea';
$statement2 = $db->prepare($queryArea);
$statement2->bindValue(":mealArea", $meal_area);
$statement2->execute();
$areas = $statement2->fetchAll();
$statement2->closeCursor();


try{
//get all meals
$queryMeals = 'SELECT * FROM meals
               ORDER BY mealID';
$statement1 = $db->prepare($queryMeals);
$statement1->execute();
$meals = $statement1->fetchAll();
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
    <title>All Meals - MealPrep</title>
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

    <h1>All Meals</h1>
    <h2>Browse All Meals</h2>
        <div class = "data_page">
            <div class = "view_page_option">
                <h4><a href = "?view=1">Table View</a></h4>
                <h4><a href = "?view=2">Icon View</a></h4>
            </div>
            <?php if ($view==1) :?>
                <div class = "table_selectors">
            <?php else :?>
                <div class = "page_selectors">
            <?php endif;?>
            <div class = "view_categories">
                <form action = "all_meals.php" method = "get">
                    <label for ="meal_category">Sort by Category: </label>
                    <select name = "meal_category">
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
            
            <div class = "view_areas">
                <form action = "all_meals.php" method = "get">
                    <label for "meal_area">Sort by Meal Area</label>
                    <select name = "meal_area">
                        <option value = "1">View All</option>
                        <?php foreach ($area_names as $area_name) :?>
                            <option value = <?php echo $area_name['strArea']; ?>>
                            <?php echo $area_name["strArea"]; ?></option>
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
                                    <th>Area</th>                    
                                    <th>Tags </th>
                                    <th>Add Recipe</th>
                                    <th>View Recipe</th>
                                </tr>
                            <?php if($meal_category!=1) : ?>
                                <?php foreach ($categories as $category_info) : ?>
                                <tr>
                                        <td><?php echo $category_info['mealID']; ?></td>                    
                                        <td><?php echo $category_info['strMeal']; ?></td>                    
                                        <td><?php echo $category_info['strCategory']; ?></td>                    
                                        <td><?php echo $category_info['strArea']; ?></td>                    
                                        <td><?php echo $category_info['strTags']; ?></td>
                                        <td><form action = "add_to_meal_plan.php" method = "post">
                                            <input type = "hidden" name = "meal_id"
                                                value = "<?php echo $category_info["mealID"];  ?>">
                                            <input type = "submit" value = "Add to Plan">
                                        </form></td>                    
                                        <td><form action = "view_page.php" method = "post">
                                            <input type = "hidden" name = "meal_id"
                                                value = "<?php echo $category_info["mealID"];  ?>">
                                            <input type = "submit" value = "View Recipe">
                                        </form></td>                    
                                    </tr>
                                <?php endforeach; ?>
                            <?php elseif ($meal_area != 1) : ?>
                                <?php foreach ($areas as $area_meal) : ?>
                                    <tr>
                                        <td><?php echo $area_meal['mealID']; ?></td>                    
                                        <td><?php echo $area_meal['strMeal']; ?></td>                    
                                        <td><?php echo $area_meal['strCategory']; ?></td>                    
                                        <td><?php echo $area_meal['strArea']; ?></td>                    
                                        <td><?php echo $area_meal['strTags']; ?></td>
                                        <td><form action = "add_to_meal_plan.php" method = "post">
                                            <input type = "hidden" name = "meal_id"
                                                value = "<?php echo $area_meal["mealID"];  ?>">
                                            <input type = "submit" value = "Add to Plan">
                                        </form></td>                    
                                        <td><form action = "view_page.php" method = "post">
                                            <input type = "hidden" name = "meal_id"
                                                value = "<?php echo $area_meal["mealID"];  ?>">
                                            <input type = "submit" value = "View Recipe">
                                        </form></td>                    
                                    </tr>
                                <?php endforeach; ?>
                            <?php else : ?>
                                <?php foreach ($meals as $meal) : ?>
                                <tr>
                                    <td><?php echo $meal['mealID']; ?></td>                    
                                    <td><?php echo $meal['strMeal']; ?></td>                    
                                    <td><?php echo $meal['strCategory']; ?></td>                    
                                    <td><?php echo $meal['strArea']; ?></td>                    
                                    <td><?php echo $meal['strTags']; ?></td>
                                    <td><form action = "add_to_meal_plan.php" method = "post">
                                        <input type = "hidden" name = "meal_id"
                                            value = "<?php echo $meal["mealID"];  ?>">
                                        <input type = "submit" value = "Add to Plan">
                                    </form></td>                    
                                    <td><form action = "view_page.php" method = "post">
                                        <input type = "hidden" name = "meal_id"
                                            value = "<?php echo $meal["mealID"];  ?>">
                                        <input type = "submit" value = "View Recipe">
                                    </form></td>                    
                                </tr>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        </table>
                        </div>
                        <?php endif; ?>
                        <?php if ($view==2) : ?>
                            <?php if($meal_category!=1) : ?>
                                <?php foreach ($categories as $category_info) : ?>
                                    <div class = "all_block">
                                        <div class = "recipe_block">
                                            <img src = <?php echo $category_info['strMealThumb']; ?>>                   
                                            <h3><?php echo $category_info['strMeal']; ?></h3>                    
                                            <p>Category: <?php echo $category_info['strCategory']; ?></p>                    
                                            <p>Area: <?php echo $category_info['strArea']; ?></p>                    
                                            <p>Tags: <?php echo $category_info['strTags']; ?></p>
                                            <button><form action = "add_to_meal_plan.php" method = "post">
                                                <input type = "hidden" name = "meal_id"
                                                    value = "<?php echo $category_info["mealID"];  ?>">
                                                <input type = "submit" value = "Add to Plan">
                                            </form></button>                    
                                            <button><form action = "view_page.php" method = "post">
                                                <input type = "hidden" name = "meal_id"
                                                    value = "<?php echo $category_info["mealID"];  ?>">
                                                <input type = "submit" value = "View Recipe">
                                            </form></button>                    
                                        </div >
                                    </div>
                                <?php endforeach; ?>
                            <?php elseif ($meal_area != 1) : ?>
                                <?php foreach ($areas as $area_meal) : ?>
                                    <div class = "all_block">
                                        <div class = "recipe_block">
                                            <img src = <?php echo $area_meal['strMealThumb']; ?>>                    
                                            <h3><?php echo $area_meal['strMeal']; ?></h3>                    
                                            <p>Category: <?php echo $area_meal['strCategory']; ?></p>                    
                                            <p>Area: <?php echo $area_meal['strArea']; ?></p>                    
                                            <p>Tags: <?php echo $area_meal['strTags']; ?></p>
                                            <button><form action = "add_to_meal_plan.php" method = "post">
                                                <input type = "hidden" name = "meal_id"
                                                    value = "<?php echo $area_meal["mealID"];  ?>">
                                                <input type = "submit" value = "Add to Plan">
                                            </form></button>                    
                                            <button><form action = "view_page.php" method = "post">
                                                <input type = "hidden" name = "meal_id"
                                                    value = "<?php echo $area_meal["mealID"];  ?>">
                                                <input type = "submit" value = "View Recipe">
                                            </form></button>                    
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                                <?php else : ?>
                                <?php foreach ($meals as $meal) : ?>
                                    <div class = "all_block">
                                        <div class = "recipe_block">
                                            <img src = <?php echo $meal['strMealThumb']; ?>>                    
                                            <h3><?php echo $meal['strMeal']; ?></h3>                    
                                            <p>Category: <?php echo $meal['strCategory']; ?></p>                    
                                            <p>Area: <?php echo $meal['strArea']; ?></p>                    
                                            <p>Tags: <?php echo $meal['strTags']; ?></p>
                                            <button><form action = "add_to_meal_plan.php" method = "post">
                                                <input type = "hidden" name = "meal_id"
                                                    value = "<?php echo $meal["mealID"];  ?>">
                                                <input type = "submit" value = "Add to Plan">
                                            </form></button>                    
                                            <button><form action = "view_page.php" method = "post">
                                                <input type = "hidden" name = "meal_id"
                                                    value = "<?php echo $meal["mealID"];  ?>">
                                                <input type = "submit" value = "View Recipe">
                                            </form></button>                    
                                        </div>
                                    </div>
                                <?php endforeach; ?>
                            <?php endif; ?>
                        <?php endif; ?>
            </div>
        </div>
    </body>
</html>
