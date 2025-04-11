<?php include '../../../includes/header.php'; ?>

<?php
session_start();

$levisProducts = [
    ["name" => "JBL QuietComfort 45 Wireless Headphones", "price" => 5071, "image" => "https://m.media-amazon.com/images/I/51JNhjr4McL.jpg"],
    ["name" => "JBL Max Portable Bluetooth Speaker", "price" => 3098, "image" => "https://m.media-amazon.com/images/I/71N8si9jomL.jpg"],
    ["name" => "JBL SoundLink Flex - Bluetooth Speaker", "price" => 1599, "image" => "https://dailydeals365.in/wp-content/uploads/2024/05/jbl-go-esstinal-red.webp"],
    ["name" => "JBL Noise Cancelling Earbuds", "price" => 2099, "image" => "https://oxygendigitalshop.com/media/cache/2500x0/catalog/product/1/0/1031154-1_1654597576.webp"],
    ["name" => "JBL Speaker", "price" => 13567, "image" => "https://kh.jbl.com/dw/image/v2/AAUJ_PRD/on/demandware.static/-/Sites-masterCatalog_Harman/default/dw291f5534/JBL_PARTYBOX_STAGE_320_HERO_2_47988_x3.jpg?sw=299&sh=299&sm=fit&sfrm=png"],
    ["name" => "JBL Live Beam 3 Closed-Stick Earbuds", "price" => 1299, "image" => "https://computechstore.in/wp-content/uploads/2024/06/JBL-Live-Beam-3-3.jpg"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JBL</title>
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