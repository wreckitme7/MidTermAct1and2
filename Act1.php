<?php
echo "GadgetGrove Catalog\n";

echo "Basic Product List:\n";
$productNames = ["wireless mouse","mechanical keyboard","USB drive","jablutoot speaker","wireless headset"];
$productPrices = [1234567.89, 77.99, 2300.57, 619.69, 69.69];

echo "Product Names: " . implode(", ", $productNames) . "\n";
echo "First product price: ₱" . $productPrices[0] . "\n";
echo "Last product price: ₱" . $productPrices[count($productPrices)-1]."\n\n";


echo "detailed product view:\n";
$keyboard = [
    "name" => "mechanical keyboard",
    "price" => 77.99,
    "brand" => "RAKK",
    "inStock" => true,
    "description" => "malupit, gawang pinoy!"
];


echo "product: " . $keyboard["name"] . "\n";
echo "brand: " . $keyboard["brand"] . "\n";
echo "price: ₱" . $keyboard["price"] . "\n";
echo "in stock: " . ($keyboard["inStock"] ? "Yes" : "No") . "\n";

$keyboard["warranty"] = "69 years";
echo "warranty: " . $keyboard["warranty"] . "\n\n";


$catalog = [
    [
        "id" => 1,
        "name" => "wireless mouse",
        "price" => 1234567.89,
        "inStock" => true
    ],
    [
        "id" => 2,
        "name" => "mechanical keyboard",
        "price" => 77.99,
        "inStock" => true
    ],
    [
        "id" => 3,
        "name" => "USB drive",
        "price" => 2300.57,
        "inStock" => false
    ],
    [
        "id" => 4,
        "name" => "jablutoot speaker",
        "price" => 619.69,
        "inStock" => true
    ],
    [
        "id" => 5,
        "name" => "wireless headset",
        "price" => 69.69,
        "inStock" => true
    ]
];

echo "full catalog:\n";
foreach ($catalog as $product) {
    echo "Product: " . $product["name"] . " - Price: ₱" . $product["price"];
    echo " - " . ($product["inStock"] ? "In Stock" : "Out of Stock") . "\n";
}

echo "\nend of catalog.\n";
?>