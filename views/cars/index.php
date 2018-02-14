<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Cars</title>
</head>
<body>
	<h1>Cars Index Page</h1>
	<a href="../controllers/cars.php?action=new"><button>New Car</button></a>
	<section>
	  <ul>
		  <?php while($row = $cars->fetch_object()): ?>
		    <li>Here is a <?php echo $row->car ?> for <?php echo $row->owner?></li>
		    <a href="../controllers/cars.php?action=delete&id=<?= $row->id ?>"><button>DELETE</button></a>
		  <?php endwhile; ?>
	  </ul>
	</section>
</body>
</html>