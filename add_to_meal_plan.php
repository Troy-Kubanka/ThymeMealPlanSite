<?php 
   require_once('database.php');
    
    $meal_id = filter_input(INPUT_POST, 'meal_id', FILTER_VALIDATE_INT);
    $drink_id = filter_input(INPUT_POST, 'drink_id', FILTER_VALIDATE_INT);

//add the recipe to meal plan - NOT WORKING
try{
    if ($meal_id != false && $meal_id !=NULL){
        $query = "INSERT INTO mealPlan(mealID)
              VALUES (:mealID)";
        $statement = $db->prepare($query);
        $statement->bindValue(':mealID', $meal_id);
        $statement->execute();
        $statement->closeCursor();
        include("all_meals.php");
    }
    if ($drink_id != false && $drink_id != NULL){
        $queryDrink = "INSERT INTO mealPlan(drinkID)
                        VALUES(:drinkID)";
        $statement1 = $db->prepare($queryDrink);
        $statement1->bindValue(":drinkID", $drink_id);
        $statement1->execute();
        $statement1->closeCursor();
        include("all_drinks.php");
    }
}
catch (Exception $e){
    $error_message = "Recipe is already in the meal plan, you cannot
                      add duplicates to the plan.";
    echo "<p>Error Message: $error_message </p>";
    include("view_plan.php");
}
    

?>
