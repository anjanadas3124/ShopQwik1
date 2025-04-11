<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Skincare products
$skincareProducts = [
    ["name" => "The Ordinary Glycolic Acid ", "price" => 1299, "image" => "https://images-cdn.ubuy.co.in/676a5f994835c90367427ed2-the-ordinary-glycolic-acid-7.jpg"],
    ["name" => "Ordinary AHA BHA Peeling solution", "price" => 899, "image" => "https://i.pinimg.com/736x/a0/34/c3/a034c3327cfe43461cdddc88d9d5ed9e.jpg"],
    ["name" => "The Ordinary Cleanser", "price" => 599, "image" => "https://i.pinimg.com/736x/63/a8/ea/63a8ea3289ae95aa35c8afcb1cb6908b.jpg"],
    ["name" => "The Ordinary Lip Balm", "price" => 799, "image" => "https://cdn.shopify.com/s/files/1/1588/9573/files/TheOrdinarySqualane_AminoAcidsLipBalm15ml_1.webp?v=1720400748"],
    ["name" => "The Ordinary Eye Serum", "price" => 999, "image" => "https://m.media-amazon.com/images/I/61moVrHXW6L.jpg"],
    ["name" => "The Ordinary Mineral UV Filters SPF 30 ", "price" => 499, "image" => "https://images-cdn.ubuy.co.in/660a5828fee913050e1300e8-the-ordinary-mineral-uv-filters-spf-30.jpg"]
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