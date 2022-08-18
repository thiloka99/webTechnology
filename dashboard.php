<a href="dashboard.php?action=logout"><button style="float:right" type="button" name="logout">Logout</button></a>
<br><br>
welcome!
<?php
//session_start();
//echo $SESSION["username"];

class Product{
	private $productID;
	private $productName;
	private $price;
	
	public function __construct($id, $name, $price){
		$this->productID = $id;
		$this->productName = $name;
		$this->price = $price;
	}
	public function getProductID(){
		return $this->productID;
	}
	public function getProductName(){
		return $this->productName;
	}
	public function getPrice(){
		return $this->price;
	}
}

$products = array("1" => new Product(1, "Bag", 2000.00),
                  "2" => new Product(2, "Watch", 1000.00),
                  "3" => new Product(3, "Ball", 500.00),
                  "4" => new Product(4, "Clock", 800.00)
				);
				  
?>

<h1> Product List </h1>

<table border="solid 1px" >
	<tr>
	   <th>Product ID</th>
	   <th>Product Name</th>
	   <th>Price</th>
	   <th>Action</th>
	</tr> 
<?php
   foreach($products as $product){
	?>
	<tr>
	  <td><?php echo $product->getProductID(); ?></td>
	  <td><?php echo $product->getProductName(); ?></td>
	  <td><?php echo $product->getPrice(); ?></td>
	  <td><a href="dashboard.php?action=add&amp;productID=<?php echo $product->getProductID(); ?>">Add</a></td>
	</tr>
   <?php
   }
?>	
</table>

<?php
    if(isset($_GET["action"]) and $_GET["action"] == "logout"){
        $_SESSION = array();
        session_destroy();
    }
?>

