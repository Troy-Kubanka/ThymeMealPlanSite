<?php
    require_once('database.php');
try{
    $query = "SELECT meals.mealID, meals.strMeal, meals.strCategory,
                meals.strArea, meals.strTags FROM mealPlan, meals
                WHERE meals.mealID = mealPlan.mealID
              ";
    $statement = $db->prepare($query);
    $statement->execute();
    $mealplans = $statement->fetchAll();
    $statement->closeCursor();

$queryDrinks = "SELECT drinks.drinkID, drinks.strDrink, drinks.strCategory,
                drinks.strAlcoholic, drinks.strGlass FROM mealPlan, drinks
                WHERE drinks.drinkID = mealPlan.drinkID";
    $statement1=$db->prepare($queryDrinks);
    $statement1->execute();
    $mealplans_drinks = $statement1->fetchAll();
    $statement1->closeCursor();
}

catch(Exception $e){
    $error_message = $e->getMessage();
    echo "<p>Error Message: $error_message </p>";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Meal Plan - MealPrep</title>
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

    <h1>Meal Plan</h1>
    <h2>View your Current Meal Plan</h2>
        <div class = "data_page">
            <h3>Meals</h3>
            <table>
                <tr>
                    <th>Meal ID</th>
                    <th>Meal Name</th>
                    <th>Category</th>
                    <th>Area</th>
                    <th>Tags</th>
                </tr>
                <?php foreach ($mealplans as $mealplan) :?>
                    <tr>
                        <td><?php echo $mealplan["mealID"]; ?></td>
                        <td><?php echo $mealplan["strMeal"]; ?></td>
                        <td><?php echo $mealplan["strCategory"]; ?></td>
                        <td><?php echo $mealplan["strArea"]; ?></td>
                        <td><?php echo $mealplan["strTags"]; ?></td>
                        <td><form action = "delete_recipe.php" method = "post">
                            <input type = "hidden" name = "meal_id"
                             value = "<?php echo $mealplan["mealID"]; ?>">
                             <input type = "submit" value = "Delete From Plan">
                        </form></td>
                    </tr>
                <?php endforeach; ?>
            </table>
            <h3>Drinks</h3>
            <table>
                <tr>
                    <th>Drink ID</th>
                    <th>Drink Name</th>
                    <th>Category</th>
                    <th>Alcoholic</th>
                    <th>Glass</th>
                </tr>
                <?php foreach ($mealplans_drinks as $drinkplan) :?>
                    <tr>
                        <td><?php echo $drinkplan["drinkID"]; ?></td>
                        <td><?php echo $drinkplan["strDrink"]; ?></td>
                        <td><?php echo $drinkplan["strCategory"]; ?></td>
                        <td><?php echo $drinkplan["strAlcoholic"]; ?></td>
                        <td><?php echo $drinkplan["strGlass"]; ?></td>
                        <td><form action = "delete_recipe.php" method = "post">
                            <input type = "hidden" name = "drink_id"
                             value = "<?php echo $drinkplan["drinkID"]; ?>">
                             <input type = "submit" value = "Delete From Plan">
                        </form></td>
                    </tr>
                <?php endforeach; ?>
        </div>
</body>
</section>
                        
