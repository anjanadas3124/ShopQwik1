<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Levi's products
$levisProducts = [
    ["name" => "Tommy Hilfiger Analog Watch", "price" => 2071, "image" => "https://m.media-amazon.com/images/I/51PG7tuqdEL._AC_UY1000_.jpg"],
    ["name" => "Tommy Hilfiger X-Body Bag", "price" => 3098, "image" => "https://cdn11.nnnow.com/web-images/large/styles/ZM4L0GJVJA5/1717048783782/1.JPG"],
    ["name" => "T-Shirt", "price" => 599, "image" => "https://tommy-europe.scene7.com/is/image/TommyEurope/MW0MW11465_403_alternate6?$b2c_updp_m_mainImage_1920$"],
    ["name" => "Tommy Hilfiger Essential Stripes Sneakers", "price" => 1099, "image" => "https://cdn-images.farfetch-contents.com/19/15/06/94/19150694_43292940_600.jpg"],
    ["name" => "Sweatshirt", "price" => 1567, "image" => "https://cdn.laredoute.com/cdn-cgi/image/width=500,height=500,fit=pad,dpr=1/products/2/8/4/284472b2ecde7d3468812e339f0f40fc.jpg"],
    ["name" => "Laptop  Backpack", "price" => 1299, "image" => "https://assets.myntassets.com/w_412,q_60,dpr_2,fl_progressive/assets/images/9137517/2019/4/24/3faa54a1-0dd6-47fd-9027-40c4f8e77c0c1556107187029-Tommy-Hilfiger-Branded-fine-lining-Water-resistance-77215561-1.jpg"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>TH Products</title>
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