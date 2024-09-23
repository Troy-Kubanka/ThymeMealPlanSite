<?php 
require_once('database.php');
$meal_id = filter_input(INPUT_POST, 'meal_id', FILTER_VALIDATE_INT);
$drink_id = filter_input(INPUT_POST, 'drink_id', FILTER_VALIDATE_INT);

try{
    if ($meal_id != null && $meal_id != false){
    $query = 'SELECT * FROM meals WHERE mealID = :meal_id';
    $statement = $db->prepare($query);
    $statement->bindValue(":meal_id", $meal_id);
    $statement->execute();
    $meal = $statement->fetch();
    $statement->closeCursor();
    }
    else{
        $queryDrink = "SELECT * FROM drinks WHERE drinkID = :drink_id";
        $statement2 = $db->prepare($queryDrink);
        $statement2->bindValue(":drink_id", $drink_id);
        $statement2->execute();
        $drink = $statement2->fetch();
        $statement2->closeCursor();
    }
}
catch(Exception $e){
    $error_message = $e->getMessage();
    echo "<p>Error Message: $error_message </p>";
}

$php_index = 1;

?>

<!DOCTYPE html>
<html>
<head>
    <title>View Information</title>
    <link rel = "stylesheet" href = "styles.css">
    <!-- cdnjs font-awesome for fonts/images like magnifier search -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css" 
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A==" 
        crossorigin="anonymous" referrerpolicy="no-referrer" />
        
        <style>
                /* Instructions + Ingredients Boxes */
                .flex-container {
                    display: flex;
                }
                .half-width {
                    width: 50%;
                    
                    box-sizing: border-box; /* Include padding and border in the width */
                    }
            
                .content-box {
                    /* 
                        TRYING TO HAVE ORANGE BORDER AROUND EACH BUT SIZE CHANGES

                   border: 2px solid #ff6e00; 
                    border-radius: 50px;
                    */
                }

                /*   Go Back Button   */
    
                .orange-line {
                    height: 2px; /* Adjust the height as needed */
                    background-color: #ff6e00; /* Set the background color */
                    width: 100%; /* Make it span the entire width of the page */
                }
                .goBack{
                        color: black; 
                        padding-top: 20px;
                        font-size: 24px;
                        text-decoration: none;
                    }
                    .goBack:hover{
                        text-decoration: underline;
                    }
               
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
    <div class = "recipe_page">
    <?php if($meal_id != null) :?>
        <h1><?php echo $meal['strMeal'];?></h1>
        <img src = "<?php echo $meal['strMealThumb'];?>">
        <h2>Category: <?php echo $meal['strCategory'];?></h2>
        <h2>Area: <?php echo $meal['strArea'];?></h2>
        <h2>Tags: <?php echo $meal['strTags'];?></h2><br>
        

      

        <div class="flex-container">
            <div class="half-width">
                <div class="content-box">
        
                    <h1>Instructions</h1>  
                        <p style="padding-right:15px; padding-left:15px; padding-bottom: 20px;"><?php echo $meal['strInstructions'];?></p>
                </div>
            </div>
            
           &nbsp;
            <div class="half-width">
                <div class="content-box">
            
                    <h1>Ingredients</h1>
                    
                    <?php $IngredientIndex = 'strIngredient' . $php_index;?>
            <?php while($php_index <=20 && $meal[$IngredientIndex] != null): ?>
                <?php $IngredientIndex = 'strIngredient' . $php_index;?>
                <?php $MeasureIndex = 'strMeasure' . $php_index;?>
                <p><?php echo $meal[$MeasureIndex];?>
                <?php echo $meal[$IngredientIndex];?></p>        
                <?php $php_index = $php_index +1; ?>
            <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="orange-line"></div>
        <a href = "all_meals.php" class="goBack">Back to Meal Page</a>    
            
        
        
    <?php else: ?>
        <h1><?php echo $drink['strDrink'];?></h1>
        <img src = "<?php echo $drink['strDrinkThumb'];?>">
        <h2>Category: <?php echo $drink['strCategory'];?></h2>
        <h2>Alcoholic: <?php echo $drink['strAlcoholic'];?></h2>
        <h2>Glass: <?php echo $drink['strGlass'];?></h2>

        <div class="flex-container">
            <div class="half-width">
                <div class="content-box">
                    <h1>Instructions</h1>
                     <p style="padding-right:15px; padding-left:15px; padding-bottom: 20px;"><?php echo $drink['strInstructions'];?></p>
                </div>
            </div>
            &nbsp; &nbsp; &nbsp; &nbsp;
            <div class="half-width">
                <div class="content-box">
                <h1>Ingredients</h1>
        <?php $IngredientIndex = 'strIngredient' . $php_index;?>
        <?php while($php_index <=20 && $drink[$IngredientIndex] != null): ?>
            <?php $IngredientIndex = 'strIngredient' . $php_index;?>
            <?php $MeasureIndex = 'strMeasure' . $php_index;?>
            <p><?php echo $drink[$MeasureIndex];?>
            <?php echo $drink[$IngredientIndex];?></p>        
            <?php $php_index = $php_index +1; ?>
        <?php endwhile; ?>
                </div>
            </div>
        </div>
        <div class="orange-line"></div>
        <a href = "all_drinks.php" class="goBack">Back to Drinks Page</a>
    <?php endif; ?>
    </div>
</body>
    <footer>
   <p>&copy;<?php echo date("Y"); ?> Caroline Fields, Ash Corcoran, Owen Kelley, Troy Kubanka, a    nd Eli Lemons
 
     <ul>
         <li style="float:right; text-decoration: none; color: black;"><a href="about.html">About<a></li>
         <li style="float:right; text-decoration: none; color: black;"><a href="contact.html ">Contact</a></li>
     </ul>
  </footer>
</html>
