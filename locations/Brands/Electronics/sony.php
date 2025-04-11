<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Levi's products
$levisProducts = [
    ["name" => "Sony Noise-Canceling Headphones", "price" => 5071, "image" => "https://m.media-amazon.com/images/I/61oqO1AMbdL.jpg"],
    ["name" => "Sony A7R V Mirrorless Camera", "price" => 103098, "image" => "https://fotocentreindia.com/wp-content/uploads/Sony-A7R-V-Mirrorless-Camera-Body-Only-Online-Buy-India_1.jpg"],
    ["name" => "TV 65 BRAVIA 3 | 4K HDR Processor X1", "price" => 160599, "image" => "https://vasanthandco.in/UploadedFiles/productimages/20240911122536-Untitled-1.png"],
    ["name" => "SONY LED TV 32W830K", "price" => 150099, "image" => "https://www.rajanandco.in/pub/media/catalog/product/cache/b2b3ac1ef1a04b817c00e4f06dc68c15/w/8/w830-02.jpg"],
    ["name" => "Sony Alpha a7C Mirrorless Camera with 28-60mm Lens", "price" => 171567, "image" => "https://x.imastudent.com/content/0021822_sony-alpha-a7c-mirrorless-camera-with-28-60mm-lens_500.jpeg"],
    ["name" => "Sony Ultra Portable Bluetooth Speaker", "price" => 7299, "image" => "https://m.media-amazon.com/images/I/71mq+2EjRfL.jpg"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sony</title>
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