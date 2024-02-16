<?php
// Initialize an empty shopping cart
$cart = [];

// Add items to the cart (you can customize this part)
$cart[] = ["item" => "Laptop", "price" => 6000];
$cart[] = ["item" => "Phone", "price" => 4500];
$cart[] = ["item" => "Headphones", "price" => 800];

// Calculate the total price
$totalPrice = 0;
foreach ($cart as $item) {
    $totalPrice += $item["price"];
}

// Check if the total price is over ₹5000
if ($totalPrice > 5000) {
    // Apply a 10% discount
    $discount = 0.10 * $totalPrice;
    $discountedPrice = $totalPrice - $discount;
    echo "Total price (after 10% discount): ₹" . number_format($discountedPrice, 2);
} else {
    // Log the original price
    echo "Total price: ₹" . number_format($totalPrice, 2);
}
?>
