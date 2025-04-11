<?php include '../../../includes/header.php'; ?>

<?php
session_start();

// Sample Levi's products
$levisProducts = [
    ["name" => "Nike Black & White Air Force 1 '07 Sneakers", "price" => 2071, "image" => "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/3f3e7049-5c99-428c-abcd-e246b086f2ed/AIR+FORCE+1+%2707.png"],
    ["name" => "Nike Air Max Plus Men's Shoes", "price" => 3098, "image" => "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/47b7945e-a379-4c24-b9df-98f4eef178e5/NIKE+AIR+MAX+PLUS.png"],
    ["name" => "Nike Dunk High By You Custom Men's Shoes", "price" => 2599, "image" => "https://static.nike.com/a/images/t_PDP_1280_v1/f_auto,q_auto:eco/99486859-0ff3-46b4-949b-2d16af2ad421/custom-nike-dunk-high-by-you-shoes.png"],
    ["name" => "Nike BLAZER LOW '77 VINTAGE White", "price" => 3099, "image" => "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/fca59736-ff84-4797-9e64-0978d3b43731/BLAZER+LOW+%2777+VNTG.png"],
    ["name" => "Nike SB Zoom Blazer Low x Dancer Skateboards", "price" => 3567, "image" => "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/335f247d-3ada-4a0f-8914-43ad536cc92b/NK+SB+ZM+BLAZER+LOW+QS.png"],
    ["name" => "Nike Air Max 90 Premium Men's Shoes", "price" => 4299, "image" => "https://static.nike.com/a/images/t_PDP_936_v1/f_auto,q_auto:eco/f8f3dda4-1c9f-40b4-83da-ad99f2eabfe5/NIKE+AIR+MAX+90+PRM.png"]


];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nike</title>
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