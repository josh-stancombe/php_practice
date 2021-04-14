// Details: https://www.codecademy.com/courses/learn-php/projects/repetitive-cafe
// Make use of some of the PHP loop shorthand to create HTML for a restaurant menu. Practice using the different loop types with HTML.


<?php

$drinks = [
  "Latte" => 3.99,
  "Americano" => 2.99,
  "Tea" => 2.49,
  "Mocha" => 4.49
];

$pastries = [
  "Croissant",
  "Brownie",
  "Slice of Cake",
  "Muffin",
  "Cupcake"
]

?>

<h1>Welcome to the Repetitive Cafe</h1>

<h3>Drinks!</h3>
<ul>
  <?php foreach($drinks as $drink => $price): ?>
    <li><?php echo "$drink: £$price"?></li>
  <?php endforeach;?>
</ul>

<h3>Pastries! ($2 each)</h3>
<ul>
  <?php for($i=0; $i<count($pastries); $i++): ?>
    <li><?php echo $pastries[$i]?></li>
  <?php endfor;?>
</ul>
