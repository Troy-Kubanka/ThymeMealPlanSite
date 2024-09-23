<?php 

require_once('database.php');

$query = "SELECT DISTINCT meals.strIngredient1, meals.strIngredient2, meals.strIngredient3,
    meals.strIngredient4, meals.strIngredient5, strIngredient6, strIngredient7,
    strIngredient8, strIngredient9, strIngredient10, strIngredient11,
     strIngredient12, strIngredient13, strIngredient14, strIngredient15,
    strIngredient16, strIngredient17, strIngredient18, strIngredient19,
    strIngredient20 FROM mealPlan, meals WHERE meals.mealID = mealPlan.mealID";

$statement = $db->prepare($query);
$statement->execute();
$shoppingList= $statement->fetchAll();
$statement->closeCursor();

?>

<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" href="styles.css" />
    <title>Shopping List</title>
    <style>
        .center {
            margin-left: auto;
            margin-right: auto;
        }

        th {
            font-size: 25px;
        }

        td {
            font-size: 17px;
        }

        .flex {
            display: flex;
        }

	tr:nth-child(even) {
	   background-color: grey;
	   color: white;
	   }
    </style>
</head>

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

<body>



    <div class="flex"></div>
    <h1>Shopping List</h1>
    <h2>All the ingredients for all the recipes you've added</h2>
    <table class="center" >
        <tr>
            <th>Ingredients</th>
        </tr>
	<tr>
            <?php foreach ($shoppingList as $list): ?>
<?php if($list['strIngredient1']!=NULL AND $list['strIngredient1']!=' None'): ?>
<tr><td> <?php echo $list["strIngredient1"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient2']!=NULL AND $list['strIngredient1']!=' None'): ?>
<tr><td> <?php echo $list["strIngredient2"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient3']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient3"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient4']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient4"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient5']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient5"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient6']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient6"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient7']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient7"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient8']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient8"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient9']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient9"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient10']!=NULL AND $list['strIngredient1']!=' None'): ?>            
<tr><td> <?php echo $list["strIngredient10"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient11']!=NULL AND $list['strIngredient1']!=' None'): ?>
           <tr><td> <?php echo $list["strIngredient11"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient12']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient12"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient13']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient13"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient14']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient14"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient15']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient15"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient16']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient16"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient17']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient17"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient18']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient18"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient19']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient19"]; ?></td></tr>
<?php endif; ?>

<?php if($list['strIngredient20']!=NULL AND $list['strIngredient1']!=' None'): ?>
            <tr><td> <?php echo $list["strIngredient20"]; ?></td></tr>
<?php endif; ?>

        </tr>
            <?php endforeach; ?>
    </table>
    </div>
    </br></br></br>
    

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

