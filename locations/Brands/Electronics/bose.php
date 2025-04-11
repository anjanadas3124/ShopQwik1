<?php include '../../../includes/header.php'; ?>

<?php
session_start();

$levisProducts = [
    ["name" => "Bose QuietComfort 45 Wireless Headphones", "price" => 7071, "image" => "https://avstore.in/cdn/shop/files/2.AVStore-Bose-QuietComfort-45-Noise-Right-Side-View.jpg?v=1685695623"],
    ["name" => "Bose Soundlink Max Portable Bluetooth Speaker", "price" => 13098, "image" => "https://m.media-amazon.com/images/I/71L9o0-0SML.jpg"],
    ["name" => "Bose SoundLink Flex - Bluetooth Speaker", "price" => 13599, "image" => "https://avshack.in/cdn/shop/files/bosesoundlinkblue-01.jpg?v=1689750403&width=1500"],
    ["name" => "Bose QuietComfort Ultra Noise Cancelling Earbuds", "price" => 7099, "image" => "https://avstore.in/cdn/shop/files/1.AVStore-Bose-QuietComfort-Ultra-Earbuds-Front-View-With-Case-Hero-Black.jpg?v=1709891969"],
    ["name" => "QuietComfort 35 II Noise Cancelling Smart Headphones", "price" => 8567, "image" => "https://assets.bose.com/content/dam/Bose_DAM/Web/consumer_electronics/global/products/headphones/qc35_ii/images/qc35_ii_product_page_hotspot_silo_1x1.psd/jcr:content/renditions/cq5dam.web.320.320.jpeg"],
    ["name" => "Bose QuietComfort Ultra Wireless Noise Cancelling", "price" => 11299, "image" => "https://images-cdn.ubuy.co.in/6515c47b20392121981cd04c-new-bose-quietcomfort-ultra-wireless.jpg"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bose</title>
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