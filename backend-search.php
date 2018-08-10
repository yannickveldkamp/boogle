<?php

$link = mysqli_connect("localhost", "root", "root", "Boogle"); 
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
<?php
// beer search style 
if (isset($_POST['style__beer'])) {
    $styleName = $_POST['style__beer'];
    $Query = "SELECT * FROM style WHERE name LIKE '%$styleName%' LIMIT 10";
    $ExecQuery = MySQLi_query($link, $Query);
    echo '<ul>';
        while ($result = MySQLi_fetch_array($ExecQuery)){
    ?>
    <li class='tag' onclick='fill("<?php echo $result['name']; ?>")'>
    <a> <?php echo $result['name']; ?>
   </li></a>
   <?php
    }}
    echo '</ul>';
// beer search style 
?>

<?php
// country search style 
if (isset($_POST['countryName'])) {
    $add__country = $_POST['countryName'];
    $Query = "SELECT * FROM countries WHERE name LIKE '%$add__country%' LIMIT 10";
    $ExecQuery = MySQLi_query($link, $Query);
    echo '<ul>';
        while ($result = MySQLi_fetch_array($ExecQuery)){
    ?>
    <li class='tag' onclick='fillCountry("<?php echo $result['name']; ?>")'>
    <a> <?php echo $result['name']; ?>
   </li></a>
   <?php
    }}
    echo '</ul>';
// country search style 
?>

<?php
// brewery search style 
if (isset($_POST['breweryName'])) {
    $add__brewery = $_POST['breweryName'];
    $Query = "SELECT * FROM breweries WHERE name LIKE '%$add__brewery%' LIMIT 10";
    $ExecQuery = MySQLi_query($link, $Query);
    echo '<ul>';
        while ($result = MySQLi_fetch_array($ExecQuery)){
    ?>
    <li class='tag' onclick='fillBrewery("<?php echo $result['name']; ?>")'>
    <a> <?php echo $result['name']; ?>
   </li></a>
   <?php
    }}
    echo '</ul>';
// brewery search style 
?>
