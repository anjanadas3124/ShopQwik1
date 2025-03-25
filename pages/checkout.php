<?php include '../includes/header.php'; ?>
<?php include '../includes/arrays.php'; ?>

<div class="max-w-lg mx-auto my-10 p-6 bg-white rounded-lg shadow-lg">
    <h2 class="text-2xl font-semibold mb-4 text-center">Checkout</h2>
    
    <form method="post" class="space-y-4">
        <label class="block font-medium">Payment Method:</label>
        <select name="payment" class="w-full border border-gray-300 rounded-lg p-2 focus:ring focus:ring-blue-300">
            <option value="razorpay">Online (Razorpay)</option>
            <option value="store">Pay at Store</option>
        </select>
        
        <button type="submit" name="place_order" class="w-full bg-blue-500 text-white py-2 rounded-lg hover:bg-blue-600 transition">
            Place Order
        </button>
    </form>

    <?php
    if (isset($_POST['place_order'])) {
        echo "<p class='mt-4 text-green-600 font-semibold text-center'>✅ Order Placed! (This is a mock — real payment can be added later)</p>";
    }
    ?>
</div>

<?php include '../includes/footer.php'; ?>
