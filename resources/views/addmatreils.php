<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <title>ADD MATRIEL</title>	
    <link rel="stylesheet" href="../css/style2.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

</head>  
<body><div class="container">
	<br>
			   <form action="../controleurs/products.php" method="post">
			   
			           <h1>Add Matreil</h1>
					   <label><b>Matreil</b></label>
			      <input type="text" name="name" placeholder="Add Name Product" required /> 
				  <label><b>Price</b></label>
				  <input type="text" name="price" placeholder="Add Old Price" required />
				    <div class="form-group">
                <label for="image">image</label>
                <input type='file' name="image" class="form-control" id="image" placeholder="image" >
            </div>
				   
				     <input type="submit" id='submit' value='Add Product' >
			   </form>
		  </div>
	</body>
	</html>