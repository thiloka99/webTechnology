<?php
session_start();
class Product {
 private $productId;
 private $productName;
 private $price;
 public function __construct( $productId, $productName, $price ) {
 $this-> productId = $productId;
 $this-> productName = $productName;
 $this-> price = $price;
 }
 public function getId() {
 return $this-> productId;
 }
 public function getName() {
 return $this-> productName;
 }
 public function getPrice() {
 return $this-> price;
 }
}
$products = array(
 1 => new Product( 1, "SuperWidget", 19.99 ),
 2 => new Product( 2, "MegaWidget", 29.99 ),
 3 => new Product( 3, "WonderWidget", 39.99 )
);
if ( !isset( $_SESSION["cart"] ) ) $_SESSION["cart"] = array();
if ( isset( $_GET["action"] ) and $_GET["action"] == "addItem" ) {
 addItem();
} elseif ( isset( $_GET["action"] ) and $_GET["action"] == "removeItem" ) {
 removeItem();
} else {
 displayCart();
}

function addItem() {
 global $products;
 if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
 $productId = (int) $_GET["productId"];
 if ( !isset( $_SESSION["cart"][$productId] ) ) {
 $_SESSION["cart"][$productId] = $products[$productId];
 }
 }
 session_write_close();
 header( "Location: shoppingcart.php" );
}
function removeItem() {
 global $products;
 if ( isset( $_GET["productId"] ) and $_GET["productId"] >= 1 and $_GET["productId"] <= 3 ) {
 $productId = (int) $_GET["productId"];
 if ( isset( $_SESSION["cart"][$productId] ) ) {
 unset( $_SESSION["cart"][$productId] );
 }
 }
 session_write_close();
 header( "Location: shoppingcart.php" );
}
function displayCart() {
 global $products;
?> 
 <html> 
 <head> 
 <title> A shopping cart using sessions </title > 
 </head> 
 <body> 
 <h1> Your shopping cart </h1 > 
 <dl> 
<?php
$totalPrice = 0;
foreach ( $_SESSION["cart"] as $product ) {
 $totalPrice += $product-> getPrice();
?> 
 <dt> <?php echo $product-> getName() ?> </dt> 
 <dd> $ <?php echo number_format( $product-> getPrice(), 2 ) ?> 
 
  <a href="shoppingcart.php?action=removeItem&productId=<?php echo $product-> getId() ?>" > Remove </a > </dd > 
 <?php } ?> 
 <dt> Cart Total: </dt > 
 <dd> <strong> $ <?php echo number_format( $totalPrice, 2 ) ?> </strong> </dd> 
 </dl> 
 <h1> Product list </h1 > 
 <dl> 
 <?php foreach ( $products as $product ) { ?> 
 <dt> <?php echo $product-> getName() ?> </dt > 
 <dd> $ <?php echo number_format( $product-> getPrice(), 2 ) ?> 
 <a href="shoppingcart.php?action=addItem&amp;productId= <?php echo 
$product-> getId() ?> " > Add Item </a> </dd > 
 <?php } ?> 
 </dl> 
 <?php
}
echo ini_get("session.save_path");
?> 

 </body> 
 </html>