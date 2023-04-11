<?php
include 'classes/Product.php';

$products = Product::$products;

$product = new Product($products);

if ((isset($_REQUEST['enter']))) {
  $maxValue = $_REQUEST['maxValue'];
  $product->setThressHold($maxValue);
  $products = $product->getHigherProduct();
  $sum = $product->calclualteSum($maxValue);
}

?>
<form action="" method="post">
  <input type="number" name="maxValue" value="<?php echo ($_POST['maxValue']) ?? '' ?>" />
  <input type="submit" name="enter" value="enter" />
</form>
<table border='1'>
  <tr>
    <th>ID</th>
    <th>Price</th>
  </tr>
  <?php foreach ($products as $product) {
    echo "<tr> <td>" . $product['id'] . "</td><td>" . $product['price'] . "</td></tr>";
  }
  ?>
</table>
<?php
if (isset($_REQUEST['maxValue'])) {
  echo  "<h5>Sum: $sum</h5>";
}
?>