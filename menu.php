<!-- included header -->
<?php 

// page title
$pageTitle = 'Menu';

//page image
$pageImg = 'pexels-fwstudio-172289.jpg';

include './includes/header.inc.php' ?>

<h1>Our menu</h1>

<?php 

$selectedCoffee;

if(!isset($selectedCoffee)){
  $selectedCoffee = 'drip';

  echo '<div class="coffee-info">
    <div id="drip-coffee-info">
        <h1>Drip Coffee ☕</h1>
        <p>Drip coffee, a staple in many routines, is known for its straightforward brewing process and comforting, familiar taste. Perfect for starting your morning or as a midday pick-me-up. ☕️🌅</p>
    </div>
</div>';
} elseif($selectedCoffee = 'espresso'){
    echo '<div class="coffee-info">
    <div id="espresso-info">
        <h1>Espresso ☕</h1>
        <p>Espresso is a concentrated coffee drink with a bold flavor. It pairs perfectly with a chocolate croissant. 🍫🥐</p>
    </div>
</div>';
}

?>
  
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