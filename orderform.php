<?php
  require("process.php");

  $homepage = new process();

  $homepage->content ="<!-- page content -->
                       <section>
                       <h2>Welcome to the order page.</p>
                       </section>";
  $homepage->Display();
?>
<html>
  <body>
  <form action="processor.php" method="post">
    <table style="border: 0px;">
    <tr style="background: #cccccc;">
      <td style="width: 150px; text-align: center;">Item</td>
      <td style="width: 15px; text-align: center;">Quantity</td>
    </tr>
    <tr>
      <td> The Lion, the witch and the Wardrobe (Unit Price: $100)</td>
      <td><input type="text" name="book1" size="3" maxlength="3" /></td>
    </tr>
    <tr>
     <td> Charlotte's Web (Unit Price: $50)</td>
     <td><input type="text" name="book2" size="3" maxlength="3" /></td>
    </tr>
    <tr>
     <td> Winnie-the-Pooh (Unit Price: $40)</td>
     <td><input type="text" name="book3" size="3" maxlength="3" /></td>
    </tr>
	<tr>
     <td> Harry Potter (Unit Price: $80)</td>
     <td><input type="text" name="book4" size="3" maxlength="3" /></td>
    </tr>
	<tr>
     <td> Goodnight Moon (Unit Price: $60)</td>
     <td><input type="text" name="book5" size="3" maxlength="3" /></td>
    </tr>
	<tr>
      <td>Other books: </td>
      <td><select name="others">
      <option value = "a">The cat in the hat</option>
      <option value = "b">A Wrinkle in Time</option>
      <option value = "c">Alice's Adventures in Wonderland</option>
      <option value = "d">The little Prince</option>
	  <option value = "e">The Secret Garden</option>
	  <option value = "f">The tale of Peter Rabbit</option>
	  <option value = "g">The Hobbit</option>
	  <option value = "h">The giving tree</option>
	  <option value = "i">Matilada</option>
	  <option value = "j">The Phantom Tollbooth</option>
      </select>
      </td>
    </tr>    
    <tr>
     <td colspan="2" style="text-align: center;"><input type="submit" value="Submit Order" /></td>
    </tr>
    </table>
    </form>
	
  </body>
</html>
<?php
  $homepage = new footer();
  $homepage->Display();
?>