<?php
require ("process.php");

class processor extends process
{
	
  private $buttons2 = array("Home"   => "orderform.php", 
                        "Order"  => "processor.php"
                    );

  public function Display()
    {
      echo "<html>\n<head>\n";
      $this->DisplayTitle();
      $this->DisplayStyles();
      echo "</head>\n<body>\n";
      $this->DisplayHeader();
      $this->DisplayMenu($this->buttons2);
      echo $this->content;
      //$this->DisplayFooter();
      echo "</body>\n</html>\n";
    }
  }

  $processor = new processor();

  $processor->Display();
  
  
  $book1 = $_POST['book1'];
  $book2 = $_POST['book2'];
  $book3 = $_POST['book3'];
  $book4 = $_POST['book4'];
  $book5 = $_POST['book5'];
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Order Results</title>
  </head>
  <body>
    <h1>Order Results</h1> 
    <?php
    echo "<p>Order processed at ";  
    echo date('H:i, jS F Y');      //time
    echo "</p>";

    echo '<p>Your order is as follows: </p>';

    echo htmlspecialchars($book1).' The Lion, the witch and the Wardrobe<br />';
    echo htmlspecialchars($book2).' bottles of oil<br />';
    echo htmlspecialchars($book3).' Winnie the Pooh<br />';
	echo htmlspecialchars($book4).' Harry Potter<br />';
	echo htmlspecialchars($book5).' Goodnight Moon<br />';

    $totalqty = 0;
    $totalqty = $book1 + $book2 + $book3 + $book4 + $book5;
    echo "<p>Items ordered: ".$totalqty."<br />";
    $total = 0.00;

    define('b1PRICE', 100);
    define('b2PRICE', 50);
    define('b3PRICE', 40);
	define('b4PRICE', 60);
	define('b5PRICE', 80);

    $total = $book1 * b1PRICE
                 + $book2 * b2PRICE
                 + $book3 * b3PRICE
				 + $book4 * b4PRICE
				 + $book5 * b5PRICE;

    echo "Subtotal: $".number_format($total,2)."<br />"; 
    
    $taxrate = 0.12; 
    $total = $total * (1 + $taxrate);
    echo "Total including tax: $".number_format($total,2)."</p>";

    ?>  
  </body>
</html>


