<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Skincare products
$skincareProducts = [
    ["name" => "Studio Foundation", "price" => 2299, "image" => "https://i.pinimg.com/736x/c1/93/eb/c193eb1354000a01a3e47972ba79c3b7.jpg"],
    ["name" => "MAC Lipstick", "price" => 1099, "image" => "https://i.pinimg.com/736x/63/3e/b9/633eb98cf51d4cd7443c2a1a1a8c169e.jpg"],
    ["name" => "Setting Spray", "price" => 2199, "image" => "https://i.pinimg.com/736x/b4/54/1a/b4541a3eb91278e67bd89d88070fb847.jpg"],
    ["name" => "MAC Concealer", "price" => 1199, "image" => "https://i.pinimg.com/736x/8a/e8/e5/8ae8e570d5f285a879133689fbfdcfdb.jpg"],
    ["name" => "Powder Blush", "price" => 999, "image" => "https://i.pinimg.com/736x/73/1e/64/731e64b51fa860bd08e410703309601e.jpg"],
    ["name" => "MACStack Mascara", "price" => 1499, "image" => "https://i.pinimg.com/736x/8e/5f/d0/8e5fd0440f70b8b969f9d90c2ba21d24.jpg"]
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