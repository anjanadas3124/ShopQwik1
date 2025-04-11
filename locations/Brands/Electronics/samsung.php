<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Levi's products
$levisProducts = [
    ["name" => "Samsung Galaxy S24 Ultra", "price" => 75071, "image" => "https://www.dxomark.com/wp-content/uploads/medias/post-164446/Samsung-Galaxy-S24-Ultra_A_featured-image-packshot-review.jpg"],
    ["name" => "Galaxy A35 5G ", "price" => 30098, "image" => "https://image-us.samsung.com/SamsungUS/home/smartphones/galaxy-a35/awesome-lilac/1_SDSAC-7229-SM-A356_Galaxy-A35_Awesome-Lilac_Lockup-1600x1200.jpg?$product-details-jpg$"],
    ["name" => "Galaxy Tab S9 FE", "price" => 60599, "image" => "https://m.media-amazon.com/images/I/61l5a94VKkL.jpg"],
    ["name" => "Galaxy Book5 Pro, 14", "price" => 60099, "image" => "https://image-us.samsung.com/SamsungUS/home/computing/galaxy-books/galaxy-book5-pro/gb5-pro/SDSAC-8554-Book5-Pro_14_US_Gray_001_Front_RGB-1600x1200.jpg"],
    ["name" => "SAMSUNG Galaxy S25 Ultra 5G", "price" => 71567, "image" => "https://rukminim3.flixcart.com/image/850/1000/xif0q/mobile/1/x/3/-original-imah8pdnxdwzazyy.jpeg?q=90&crop=false"],
    ["name" => "SAMSUNG Galaxy Watch FE", "price" => 91299, "image" => "https://rukminim2.flixcart.com/image/850/1000/xif0q/smartwatch/1/r/h/-original-imah5fafm32rfa7n.jpeg?q=90&crop=false"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Samsung</title>
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