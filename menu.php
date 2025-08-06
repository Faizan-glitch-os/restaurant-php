<!-- included header -->
<?php 

// page title
$pageTitle = 'Menu';

//page image
$pageImg = 'pexels-fwstudio-172289.jpg';

include './includes/header.inc.php' ?>

<h1>Our menu</h1>

<pre><?php 

$item = 'football';
$price = 1500;

//8% tax
$tax = round((8 * $price) / 100);

//total price + tax
$totalPrice = $price + $tax;

//5% discount
$discount3000 =  $totalPrice - round((5 * $price) / 100);
//15% discount
$discount6000 =  $totalPrice - round((15 * $price) / 100);

//total price with 5% discount
$priceMinusDiscount = $totalPrice - $discount3000;

//total price with 15% discount
$priceMinusDiscount = $totalPrice - $discount6000;

//loyalty points
$loyaltyPoints = 6000;

//new loyalty points based on item price
$newLoyaltyPoints = round($price / 10);

if($loyaltyPoints < 3000){
    echo "You have fewer than 3000 Loyalty Points. No discount is available.
    Your final price (after taxes) would be $totalPrice.\nYour new Loyalty Balance would be: ". ($loyaltyPoints += $newLoyaltyPoints);
} elseif($loyaltyPoints >= 3000 && $loyaltyPoints < 6000){
    echo "You can spend 3000 Loyalty Points for a discount of 5%.
    Your final price (after discount and taxes) would be " . ($discount3000) . "\nYour new Loyalty Balance would be: " . ($loyaltyPoints += $newLoyaltyPoints);
} elseif($loyaltyPoints >= 6000){
    echo "You can spend 3000 Loyalty Points for a discount of 5%.
    \nYour final price (after discount and taxes) would be $discount3000.\nYour new Loyalty Balance would be: " . ($loyaltyPoints += $newLoyaltyPoints);

echo "\n \nYou can spend 6000 Loyalty Points for a discount of 15%.\n
Your final price (after discount and taxes) would be $discount6000.\nYour new Loyalty Balance would be: " . ($loyaltyPoints += $newLoyaltyPoints);
}

?></pre>
  
<h2>Starters</h2>
<ul>
    <li><strong>Forest Mushroom Medley</strong> - A seasonal selection of wild mushrooms sautéed with garlic, fresh herbs, and a touch of white wine.</li>
    <li><strong>Citrus Ceviche</strong> - Freshly caught fish marinated in a blend of citrus juices, served with avocado and homemade tortilla chips.</li>
</ul>

<h2>Soups</h2>
<ul>
    <li><strong>Roasted Root Vegetable Soup</strong> - A comforting blend of seasonal root vegetables, slow-roasted and pureed into a creamy soup.</li>
    <li><strong>Lemongrass Coconut Broth</strong> - A fragrant blend of lemongrass, ginger, and coconut milk, featuring sustainably sourced shrimp.</li>
</ul>

<figure style="text-align: center;">
  <img style="max-width: 20rem;" 
       src="images/pexels-rachel-claire-4577740.jpg" 
       alt="Our amazing restaurant" />
  <figcaption>Our amazing restaurant</figcaption>
</figure>

<h2>Main Courses</h2>
<ul>
    <li><strong>Farm-to-Table Herb Chicken</strong> - Free-range chicken marinated in a medley of garden herbs, oven-roasted to perfection.</li>
    <li><strong>Grass-Fed Beef Tenderloin</strong> - Served with organic roasted vegetables and a red wine reduction.</li>
    <li><strong>Wild-Caught Salmon Fillet</strong> - Pan-seared salmon served on a bed of quinoa and seasonal greens, drizzled with a lemon-dill sauce.</li>
    <li><strong>Vegan Harvest Bowl</strong> - A hearty bowl filled with quinoa, roasted seasonal vegetables, and a tahini-lemon dressing.</li>
</ul>

<h2>Desserts</h2>
<ul>
    <li><strong>Raw Berry Cheesecake</strong> - A dairy-free cheesecake made from cashews, with a fresh berry compote.</li>
    <li><strong>Honey Lavender Panna Cotta</strong> - A creamy Italian dessert infused with organic lavender and sweetened with local honey.</li>
</ul>

<!-- included footer -->
<?php include './includes/footer.inc.php' ?>