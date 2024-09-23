<?php
require_once('database.php');
try{
$query = "SELECT meals.mealID, meals.strMeal, meals.strCategory,
                meals.strArea, meals.strTags 
          FROM mealPlan, meals
          WHERE meals.mealID = mealPlan.mealID";
    $statement = $db->prepare($query);
    $statement->execute();
    $mealplans = $statement->fetchAll();
    $statement->closeCursor();


$qwery = "SELECT meals.strMeal 
          FROM mealPlan, meals
          WHERE meals.mealID = mealPlan.mealID";
    $statement2 = $db->prepare($qwery);
    $statement2->execute();
    $weeklyMealPlan = $statement2->fetchAll();
    $statement2->closeCursor();   

$qwaary = "SELECT drinks.strDrink 
           FROM mealPlan, drinks
           WHERE drinks.drinkID = mealPlan.drinkID";
$statement8=$db->prepare($qwaary);
$statement8->execute();
$weeklyDrinkPlan = $statement8->fetchAll();
$statement8->closeCursor();



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


/* Meals for days */
//$sunday_meal_plan[] = $_GET('sunday_meal_plan')

$sunday_meal_plan = filter_input(INPUT_GET, 'sunday_meal_plan'); 
if ($sunday_meal_plan == NULL || $sunday_meal_plan == FALSE){
    $sunday_meal_plan = 'default';
}
$sunday1_meal_plan = filter_input(INPUT_GET, 'sunday1_meal_plan'); 
if ($sunday_meal_plan == NULL || $sunday_meal_plan == FALSE){
    $sunday_meal_plan = 'default';
}
$sunday2_meal_plan = filter_input(INPUT_GET, 'sunday2_meal_plan'); 
if ($sunday_meal_plan == NULL || $sunday_meal_plan == FALSE){
    $sunday_meal_plan = 'default';
}
$sunday3_meal_plan = filter_input(INPUT_GET, 'sunday3_meal_plan'); 
if ($sunday_meal_plan == NULL || $sunday_meal_plan == FALSE){
    $sunday_meal_plan = 'default';
}



$monday_meal_plan = filter_input(INPUT_GET, 'monday_meal_plan'); 
if ($monday_meal_plan == NULL || $monday_meal_plan == FALSE){
    $monday_meal_plan = 'default';
}
$monday1_meal_plan = filter_input(INPUT_GET, 'monday1_meal_plan'); 
if ($monday_meal_plan == NULL || $monday_meal_plan == FALSE){
    $monday_meal_plan = 'default';
}
$monday2_meal_plan = filter_input(INPUT_GET, 'monday2_meal_plan'); 
if ($monday_meal_plan == NULL || $monday_meal_plan == FALSE){
    $monday_meal_plan = 'default';
}
$monday3_meal_plan = filter_input(INPUT_GET, 'monday3_meal_plan'); 
if ($monday_meal_plan == NULL || $monday_meal_plan == FALSE){
    $monday_meal_plan = 'default';
}



$tuesday_meal_plan = filter_input(INPUT_GET, 'tuesday_meal_plan'); 
if ($tuesday_meal_plan == NULL || $tuesday_meal_plan == FALSE){
    $tuesday_meal_plan = 'default';
}
$tuesday1_meal_plan = filter_input(INPUT_GET, 'tuesday1_meal_plan'); 
if ($tuesday_meal_plan == NULL || $tuesday_meal_plan == FALSE){
    $tuesday_meal_plan = 'default';
}
$tuesday2_meal_plan = filter_input(INPUT_GET, 'tuesday2_meal_plan'); 
if ($tuesday_meal_plan == NULL || $tuesday_meal_plan == FALSE){
    $tuesday_meal_plan = 'default';
}
$tuesday3_meal_plan = filter_input(INPUT_GET, 'tuesday3_meal_plan'); 
if ($tuesday_meal_plan == NULL || $tuesday_meal_plan == FALSE){
    $tuesday_meal_plan = 'default';
}



$wednesday_meal_plan = filter_input(INPUT_GET, 'wednesday_meal_plan'); 
if ($wednesday_meal_plan == NULL || $wednesday_meal_plan == FALSE){
    $wednesday_meal_plan = 'default';
}
$wednesday1_meal_plan = filter_input(INPUT_GET, 'wednesday1_meal_plan'); 
if ($wednesday_meal_plan == NULL || $wednesday_meal_plan == FALSE){
    $wednesday_meal_plan = 'default';
}
$wednesday2_meal_plan = filter_input(INPUT_GET, 'wednesday2_meal_plan'); 
if ($wednesday_meal_plan == NULL || $wednesday_meal_plan == FALSE){
    $wednesday_meal_plan = 'default';
}
$wednesday3_meal_plan = filter_input(INPUT_GET, 'wednesday3_meal_plan'); 
if ($wednesday_meal_plan == NULL || $wednesday_meal_plan == FALSE){
    $wednesday_meal_plan = 'default';
}



$thursday_meal_plan = filter_input(INPUT_GET, 'thursday_meal_plan'); 
if ($thursday_meal_plan == NULL || $thursday_meal_plan == FALSE){
    $thursday_meal_plan = 'default';
}
$thursday1_meal_plan = filter_input(INPUT_GET, 'thursday1_meal_plan'); 
if ($thursday_meal_plan == NULL || $thursday_meal_plan == FALSE){
    $thursday_meal_plan = 'default';
}
$thursday2_meal_plan = filter_input(INPUT_GET, 'thursday2_meal_plan'); 
if ($thursday_meal_plan == NULL || $thursday_meal_plan == FALSE){
    $thursday_meal_plan = 'default';
}
$thursday3_meal_plan = filter_input(INPUT_GET, 'thursday3_meal_plan'); 
if ($thursday_meal_plan == NULL || $thursday_meal_plan == FALSE){
    $thursday_meal_plan = 'default';
}



$friday_meal_plan = filter_input(INPUT_GET, 'friday_meal_plan'); 
if ($friday_meal_plan == NULL || $friday_meal_plan == FALSE){
    $friday_meal_plan = 'default';
}
$friday1_meal_plan = filter_input(INPUT_GET, 'friday1_meal_plan'); 
if ($friday_meal_plan == NULL || $friday_meal_plan == FALSE){
    $friday_meal_plan = 'default';
}
$friday2_meal_plan = filter_input(INPUT_GET, 'friday2_meal_plan'); 
if ($friday_meal_plan == NULL || $friday_meal_plan == FALSE){
    $friday_meal_plan = 'default';
}
$friday3_meal_plan = filter_input(INPUT_GET, 'friday3_meal_plan'); 
if ($friday_meal_plan == NULL || $friday_meal_plan == FALSE){
    $friday_meal_plan = 'default';
}



$saturday_meal_plan = filter_input(INPUT_GET, 'saturday_meal_plan'); 
if ($saturday_meal_plan == NULL || $saturday_meal_plan == FALSE){
    $saturday_meal_plan = 'default';
}
$saturday1_meal_plan = filter_input(INPUT_GET, 'saturday1_meal_plan'); 
if ($saturday_meal_plan == NULL || $saturday_meal_plan == FALSE){
    $saturday_meal_plan = 'default';
}
$saturday2_meal_plan = filter_input(INPUT_GET, 'saturday2_meal_plan'); 
if ($saturday_meal_plan == NULL || $saturday_meal_plan == FALSE){
    $saturday_meal_plan = 'default';
}
$saturday3_meal_plan = filter_input(INPUT_GET, 'saturday3_meal_plan'); 
if ($saturday_meal_plan == NULL || $saturday_meal_plan == FALSE){
    $saturday_meal_plan = 'default';
}


?>



<!DOCTYPE html>
<html>
<style>
    #sunday_meal_plan{
    width:125px;   
    }
    #sunday1_meal_plan{
    width:125px;   
    }
    #sunday2_meal_plan{
    width:125px;   
    }
    #sunday3_meal_plan{
    width:125px;   
    }

    #monday_meal_plan{
    width:125px;   
    }
    #monday1_meal_plan{
    width:125px;   
    }
    #monday2_meal_plan{
    width:125px;   
    }
    #monday3_meal_plan{
    width:125px;   
    }

    #tuesday_meal_plan{
    width:125px;   
    }
    #tuesday1_meal_plan{
    width:125px;   
    }
    #tuesday2_meal_plan{
    width:125px;   
    }
    #tuesday3_meal_plan{
    width:125px;   
    }

    #wednesday_meal_plan{
    width:125px;   
    }
    #wednesday1_meal_plan{
    width:125px;   
    }
    #wednesday2_meal_plan{
    width:125px;   
    }
    #wednesday3_meal_plan{
    width:125px;   
    }

    #thursday_meal_plan{
    width:125px;   
    }
    #thursday1_meal_plan{
    width:125px;   
    }
    #thursday2_meal_plan{
    width:125px;   
    }
    #thursday3_meal_plan{
    width:125px;   
    }

    #friday_meal_plan{
    width:125px;   
    }
    #friday1_meal_plan{
    width:125px;   
    }
    #friday2_meal_plan{
    width:125px;   
    }
    #friday3_meal_plan{
    width:125px;   
    }

    #saturday_meal_plan{
    width:125px;   
    }
    #saturday1_meal_plan{
    width:125px;   
    }
    #saturday2_meal_plan{
    width:125px;   
    }
    #saturday3_meal_plan{
    width:125px;   
    }


    .center {
    margin-left: auto;
    margin-right: auto;
    }


</style>
<head>
    <title>View Meal Plan - MealPrep</title>
    <!-- Added icon -->
        <link rel="icon" type="image/x-icon" href="./images/favicon.ico">
    <!-- Added icon -->

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

   

    <h1>Add to Weekly Meal Plan</h1>
<!--    <h2>View your Current Meal Plan</h2> --> 

<div class = "data_page">
<!--             <h3>Meals</h3>     --> 
            <table class="center">
                <tr>
                    <th>Sunday</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>

                <tr>
                    <form action = "weekly_meal_plan.php" method = "get">
                    <td>
                            <label for ="sunday_meal_plan">Breakfast: </label>
                            <select name = 'sunday_meal_plan' id = 'sunday_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>
                            
                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="monday_meal_plan">Breakfast: </label>
                            <select name = 'monday_meal_plan' id = 'monday_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="tuesday_meal_plan">Breakfast: </label>
                            <select name = 'tuesday_meal_plan' id = 'tuesday_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="wednesday_meal_plan">Breakfast: </label>
                            <select name = 'wednesday_meal_plan' id = 'wednesday_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="thursday_meal_plan">Breakfast: </label>
                            <select name = 'thursday_meal_plan' id = 'thursday_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="friday_meal_plan">Breakfast: </label>
                            <select name = 'friday_meal_plan' id = 'friday_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="saturday_meal_plan">Breakfast: </label>
                            <select name = 'saturday_meal_plan' id = 'saturday_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>
                </tr>


<!-- Lunch -->


                <tr>
                    <form action = "weekly_meal_plan.php" method = "get">
                    <td>
                            <label for ="sunday1_meal_plan">Lunch: </label>
                            <select name = 'sunday1_meal_plan' id = 'sunday1_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="monday1_meal_plan">Lunch: </label>
                            <select name = 'monday1_meal_plan' id = 'monday1_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="tuesday1_meal_plan">Lunch: </label>
                            <select name = 'tuesday1_meal_plan' id = 'tuesday1_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="wednesday1_meal_plan">Lunch: </label>
                            <select name = 'wednesday1_meal_plan' id = 'wednesday1_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="thursday1_meal_plan">Lunch: </label>
                            <select name = 'thursday1_meal_plan' id = 'thursday1_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="friday1_meal_plan">Lunch: </label>
                            <select name = 'friday1_meal_plan' id = 'friday1_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="saturday1_meal_plan">Lunch: </label>
                            <select name = 'saturday1_meal_plan' id = 'saturday1_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>
                </tr>


<!-- Dinner -->


                <tr>
                    <form action = "weekly_meal_plan.php" method = "get">
                    <td>
                            <label for ="sunday2_meal_plan">Dinner: </label>
                            <select name = 'sunday2_meal_plan' id = 'sunday2_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="monday2_meal_plan">Dinner: </label>
                            <select name = 'monday2_meal_plan' id = 'monday2_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="tuesday2_meal_plan">Dinner: </label>
                            <select name = 'tuesday2_meal_plan' id = 'tuesday2_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="wednesday2_meal_plan">Dinner: </label>
                            <select name = 'wednesday2_meal_plan' id = 'wednesday2_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="thursday2_meal_plan">Dinner: </label>
                            <select name = 'thursday2_meal_plan' id = 'thursday2_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="friday2_meal_plan">Dinner: </label>
                            <select name = 'friday2_meal_plan' id = 'friday2_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="saturday2_meal_plan">Dinner: </label>
                            <select name = 'saturday2_meal_plan' id = 'saturday2_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>
                </tr>


<!-- Dessert -->


                <tr>
                    <form action = "weekly_meal_plan.php" method = "get">
                    <td>
                            <label for ="sunday3_meal_plan">Dessert: </label>
                            <select name = 'sunday3_meal_plan' id = 'sunday3_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="monday3_meal_plan">Dessert: </label>
                            <select name = 'monday3_meal_plan' id = 'monday3_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="tuesday3_meal_plan">Dessert: </label>
                            <select name = 'tuesday3_meal_plan' id = 'tuesday3_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="wednesday3_meal_plan">Dessert: </label>
                            <select name = 'wednesday3_meal_plan' id = 'wednesday3_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="thursday3_meal_plan">Dessert: </label>
                            <select name = 'thursday3_meal_plan' id = 'thursday3_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="friday3_meal_plan">Dessert: </label>
                            <select name = 'friday3_meal_plan' id = 'friday3_meal_plan'> 
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>

                    <td>
                            <label for ="saturday3_meal_plan">Dessert: </label>
                            <select name = 'saturday3_meal_plan' id = 'saturday3_meal_plan'>
                            <option value = '1'>View All</option>
                            <?php foreach($weeklyMealPlan as $MealPlan) :?>
                                <option value ='<?php echo $MealPlan['strMeal']; ?>'>
                                <?php echo $MealPlan['strMeal']; ?>
                                </option>
                            <?php endforeach; ?>

                            <?php foreach($weeklyDrinkPlan as $MeePlan) :?>
                                <option value ='<?php echo $MeePlan['strDrink']; ?>'>
                                <?php echo $MeePlan['strDrink']; ?>
                                </option>
                            <?php endforeach; ?>

                            </select>  
                    </td>
                </tr>


                <tr>
                    <td>
                            <input type = "submit" value = "Go">      
                    </td>
                </tr>
                    </form>  
            </table>
        </div>



















































<h1>Current Weekly Meal Plan</h1>
        <div class = "data_page">

            <table class="center">
                <tr>
                    <th>Sunday</th>
                    <th>Monday</th>
                    <th>Tuesday</th>
                    <th>Wednesday</th>
                    <th>Thursday</th>
                    <th>Friday</th>
                    <th>Saturday</th>
                </tr>
                    <tr>
                        <td><?php echo $sunday_meal_plan; ?> <br>
                            <?php echo $sunday1_meal_plan; ?> <br>
                            <?php echo $sunday2_meal_plan; ?> <br>
                            <?php echo $sunday3_meal_plan; ?> <br>
                        </td>
                        <td><?php echo $monday_meal_plan; ?> <br>
                            <?php echo $monday1_meal_plan; ?> <br>
                            <?php echo $monday2_meal_plan; ?> <br>
                            <?php echo $monday3_meal_plan; ?> <br>
                        </td>
                        <td><?php echo $tuesday_meal_plan; ?> <br>
                            <?php echo $tuesday1_meal_plan; ?> <br>
                            <?php echo $tuesday2_meal_plan; ?> <br>
                            <?php echo $tuesday3_meal_plan; ?> <br>
                        </td>
                        <td><?php echo $wednesday_meal_plan; ?> <br>
                            <?php echo $wednesday1_meal_plan; ?> <br>
                            <?php echo $wednesday2_meal_plan; ?> <br>
                            <?php echo $wednesday3_meal_plan; ?> <br>
                        </td>
                        <td><?php echo $thursday_meal_plan; ?> <br>
                            <?php echo $thursday1_meal_plan; ?> <br>
                            <?php echo $thursday2_meal_plan; ?> <br>
                            <?php echo $thursday3_meal_plan; ?> <br>
                        </td>
                        <td><?php echo $friday_meal_plan; ?> <br>
                            <?php echo $friday1_meal_plan; ?> <br>
                            <?php echo $friday2_meal_plan; ?> <br>
                            <?php echo $friday3_meal_plan; ?> <br>
                        </td>
                        <td><?php echo $saturday_meal_plan; ?> <br>
                            <?php echo $saturday1_meal_plan; ?> <br>
                            <?php echo $saturday2_meal_plan; ?> <br>
                            <?php echo $saturday3_meal_plan; ?> <br>
                        </td>
                    </tr>
            </table>
        </div>
        <br>
        <br>
        <br>
        <br>


</body>
</section>
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
