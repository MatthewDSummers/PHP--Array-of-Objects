<!-- Looping through objects -->

<?php
$shirts = array(
    (object) array(
        "ID" => 1,
        "name" => "Red Dress Shirt",
        "size" => "Small",
        "price"=> 24.25
    ),
    (object) array(
        "ID" => 2,
        "name" => "Blue T-Shirt",
        "size" => "Medium",
        "price"=> 8.95
    ),
    (object) array(
        "ID" => 3,
        "name" => "Orange Western Shirt",
        "size" => "Large",
        "price"=> 25.50
    ),
);

foreach ($shirts as $shirt) {
    echo sprintf("<p id='%s'>Name: %s<br>Size: %s<br>Price: %s<br></p>", $shirt->ID, $shirt->name, $shirt->size, $shirt->price );
}
?>