<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Skincare products
$skincareProducts = [
    ["name" => "Moisturizing Cream", "price" => 1299, "image" => "https://m.media-amazon.com/images/I/71kq8bqJnFL.jpg"],
    ["name" => "Oil Free Acne Face Wash", "price" => 899, "image" => "https://images.ctfassets.net/aub2fvcyp2t8/6VC8vvmJIlvWJ0hxWdxDOj/c65c7d4cec0e00e11659a0940f11cfe5/oil_free_acne_wash_175ml-min-en-in"],
    ["name" => "Neutrogena Sunscreen", "price" => 599, "image" => "https://m.media-amazon.com/images/I/419OyAFefYL.jpg"],
    ["name" => "Neutrogena Hydro Boost", "price" => 799, "image" => "https://images.ctfassets.net/xvcg1y2kwpfh/5DVHhZ5u2JMbNrjWA42E1q/9fceb49f8f057d63131345cc8ec8c690/Hydro_BoostWater_Gel_Moisturiser-en-ae"],
    ["name" => "Eye Cream", "price" => 299, "image" => "https://images.ctfassets.net/xvcg1y2kwpfh/5EwaNtkoXQMFUMln3dkWj2/df5acad2be4b746f55149a76a59c0bfe/Hydro_Boost_Eye-Refreshing_Gel_Cream-en-ae"],
    ["name" => "Face Serum", "price" => 499, "image" => "https://m.media-amazon.com/images/I/51+rZQwPepL.jpg"]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Skincare Products</title>
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
            height: 100%;
            transition: transform 0.3s ease;
        }

        .product-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 20px rgba(0,0,0,0.1);
        }

        .product-card img {
            max-width: 100%;
            height: 200px;
            object-fit: contain; /* Changed to contain for skincare products */
            border-radius: 8px;
            margin-bottom: 15px;
        }

        .product-card h3 {
            font-size: 18px;
            min-height: 50px;
            color: #333;
        }

        .product-card p {
            font-size: 16px;
            font-weight: bold;
            margin-bottom: 15px;
            color: #e53935;
        }

        .product-card button {
            background-color: rgb(133, 111, 74);
            color: white;
            border: none;
            padding: 10px 15px;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            transition: background-color 0.3s;
        }

        .product-card button:hover {
            background-color: rgb(61, 52, 29);
        }

        .page-header {
            text-align: center;
            margin: 30px 0;
            color: rgb(85, 83, 83);
        }
    </style>
</head>
<body>

<div class="container" style="margin-top: 60px;">
    <div class="row">
        <?php foreach ($skincareProducts as $id => $product): ?>
            <div class="col-md-4 mb-4 d-flex">
                <div class="product-card w-100">
                    <img src="<?= $product['image'] ?>" alt="<?= htmlspecialchars($product['name']) ?>">
                    <h3><?= htmlspecialchars($product['name']) ?></h3>
                    <p>₹<?= number_format($product['price'], 2) ?></p>
                    <form method="POST" action="/PROJECTT/anj/ShopQwik-main/ShopQwik/pages/cart.php">
                        <input type="hidden" name="product_id" value="skincare_<?= $id ?>">
                        <input type="hidden" name="product_name" value="<?= htmlspecialchars($product['name']) ?>">
                        <input type="hidden" name="product_price" value="<?= $product['price'] ?>">
                        <button type="submit" name="add_to_cart" class="btn-add-to-cart">Add to Cart</button>
                    </form>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>

</body>
</html>

<?php include '../../../includes/footer.php'; ?>