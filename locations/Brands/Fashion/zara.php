<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Levi's products
$levisProducts = [
    ["name" => "ZARA Jeans", "price" => 2071, "image" => "https://static.zara.net/assets/public/5f91/61ca/b19b4b8e81b5/53944788251d/04365310400-e2/04365310400-e2.jpg?ts=1725019166319"],
    ["name" => "Blue Striped Shirt", "price" => 1098, "image" => "https://i.pinimg.com/736x/c9/95/37/c99537ace00d65b9150b5a54b6d2dffb.jpg"],
    ["name" => "Long Sleeved Sweater", "price" => 599, "image" => "https://i.pinimg.com/736x/d4/c8/5a/d4c85a5a84e71f2bdbecb9770cfbd9ba.jpg"],
    ["name" => "Pink Dress", "price" => 1099, "image" => "https://i.pinimg.com/736x/03/52/fe/0352fe6d70a12c2b08574ba5df6a4538.jpg"],
    ["name" => "Long Dress", "price" => 1567, "image" => "https://i.pinimg.com/736x/22/bd/f9/22bdf984c4c496a1074169e5a0839de5.jpg"],
    ["name" => "Casual Shirt", "price" => 1299, "image" => "https://i.pinimg.com/736x/d4/16/7a/d4167af07aeaa631e49dadfd84022388.jpg"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ZARA Products</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .product-card {
            border: 1px solid #ddd;
            padding: 15px;
            text-align: center;
            border-radius: 8px;
            background-color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: space-between;
            height: 100%; /* Ensure all cards have equal height */
        }

        .product-card img {
            max-width: 100%;
            height: 200px; /* Fixed height for uniformity */
            object-fit: cover; /* Ensures the image fills the space properly */
            border-radius: 8px;
        }

        .product-card h3 {
            font-size: 18px;
            min-height: 50px; /* Ensures text alignment */
        }

        .product-card p {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 10px;
        }

        .product-card button {
            background-color: rgb(90, 84, 65);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
        }

        .product-card button:hover {
            background-color: rgb(34, 32, 23);
        }
    </style>
</head>
<body>

<div class="container" style="margin-top: 60px;">
    <div class="row">
        <?php foreach ($levisProducts as $id => $product): ?>
            <div class="col-md-4 d-flex">
                <div class="product-card w-100">
                    <img src="<?= $product['image'] ?>" alt="<?= $product['name'] ?>">
                    <h3><?= $product['name'] ?></h3>
                    <p>₹<?= $product['price'] ?></p>
                    <form method="POST" action="/PROJECTT/anj/ShopQwik-main/ShopQwik/pages/cart.php">
                        <input type="hidden" name="product_id" value="<?= $id ?>">
                        <button type="submit" name="add_to_cart">Add to Cart</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

<?php include '../../../includes/footer.php'; ?>