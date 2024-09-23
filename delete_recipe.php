<?php
try{
    require_once('database.php');

    $meal_id = filter_input(INPUT_POST, "meal_id", FILTER_VALIDATE_INT);
    $drink_id = filter_input(INPUT_POST, "drink_id", FILTER_VALIDATE_INT);

    //query

    if ($meal_id !== false){
        $query = "DELETE FROM mealPlan WHERE mealID = :meal_id";
        $statement2 = $db->prepare($query);
        $statement2->bindValue(":meal_id", $meal_id);
        $statement2->execute();
        $statement2->closeCursor();
    }
    if($drink_id !== false){
        $queryDrinks = "DELETE FROM mealPlan where drinkID = :drink_id";
        $statement3 = $db->prepare($queryDrinks);
        $statement3->bindValue(":drink_id", $drink_id);
        $statement3->execute();
        $statement3->closeCursor();
    }

    //display meal plan page
    include('view_plan.php');
}catch(Exception $e){
    $error_message = $e->getMessage();
    echo "<p>Error Message: $error_message </p>";
}
?>
