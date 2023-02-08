<?php
    // phpinfo();
    $title = " How to Make brownies";

    $ingredients = [

       "½ cup butter",

       "1 cup white sugar",

        "2 eggs",

        "1 teaspoon vanilla extract",

        "⅓ cup unsweetened cocoa powder",

        "½ cup all-purpose flour",

        "¼ teaspoon salt",

        "¼ teaspoon baking powder"
    ];

    $steps = [
            
    "Preheat the oven to 350 degrees F (175 degrees C). Grease and flour an 8-inch square pan.",

    "Melt 1/2 cup butter in a large saucepan. Remove from heat, and stir in sugar, eggs, and 1 teaspoon vanilla. Beat in 1/3 cup cocoa, flour, salt, and baking powder. Spread batter into prepared pan.",

    "Bake in the preheated oven until top is dry and edges have started to pull away from the sides of the pan, about 25 to 30 minutes. Let cool briefly before frosting.",

    "To make the frosting: Combine softened butter, confectioners' sugar, 3 tablespoons cocoa, honey, and 1 teaspoon vanilla extract in a bowl. Stir until smooth. Frost brownies while they are still warm"

    ];
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>echo $title</title>
</head>
<body>
    <h1><?= $title ?></h1>
    <ul>
      <h2>Ingredients</h2>
        <?php
        foreach ($ingredients as $ingredients) {
            echo "<li>{$ingredients}</li>";
        }
        ?>
      <h2>Steps</h2>
        <?php
        foreach ($steps as $step) {
            echo "<li>{$step}</li>";
        }
        ?>

        <?php foreach ($steps as $step): ?>
            <li><?= $step ?></li>
        <?php endforeach ?>
    </ul>
</body>
</html>