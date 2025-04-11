<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Levi's products
$levisProducts = [
    ["name" => "Xiaomi 12 Pro", "price" => 35071, "image" => "https://m.media-amazon.com/images/I/71lYm08fIZL._AC_UF1000,1000_QL80_.jpg"],
    ["name" => "Xiaomi 14 Ultra", "price" => 43098, "image" => "https://www.dxomark.com/wp-content/uploads/medias/post-167787/Xiaomi-14-Ultra_featured-image-packshot-review.jpg"],
    ["name" => "Xiaomi Redmi Watch 4 Smartwatch", "price" => 9599, "image" => "https://m.media-amazon.com/images/I/71tozl-916L._AC_UF894,1000_QL80_.jpg"],
    ["name" => "Xiaomi unbeatable In Ear Headphones", "price" => 1099, "image" => "https://www.paradigit.ie/picture/21058846/1000/750/HighResolution/PRIE/false"],
    ["name" => "MI PLM18ZM 3I 20000MAH POWER BANK", "price" => 1567, "image" => "https://dailydeals365.in/wp-content/uploads/2023/04/71lVwl3q-kL._SL1500_-1.jpg"],
    ["name" => "Xiaomi Mi 10 Pro 5G", "price" => 50299, "image" => "https://www.gizmochina.com/wp-content/uploads/2020/01/Xiaomi-Mi-10-Pro-5G-1-500x500.jpg"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Xiaomi</title>
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