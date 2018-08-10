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
