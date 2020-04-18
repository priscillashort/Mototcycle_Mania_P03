<?php 
	include '../header.php'; 
	
	$capture_category_id = $_POST['category_id'];
	$capture_manufacturer_id = $_POST['manufacturer_id'];

	switch ($capture_category_id) {
		case "":
			$category_id = "Select...";
			break;
		case 1:
			$category_id = "Naked";
			break;
		case 2:
			$category_id = "Dual-Sport";
			break;
		case 3:
			$category_id = "Cruiser";
			break;
		case 4:
			$category_id = "Sport";
			break;
	}

	switch ($capture_manufacturer_id) {
		case "":
			$manufacturer_id = "Select...";
			break;
		case 1:
			$manufacturer_id = "Indian";
			break;
		case 2:
			$manufacturer_id = "Honda";
			break;
		case 3:
			$manufacturer_id = "Triumph";
			break;
		case 4:
			$manufacturer_id = "Victory";
			break;
		case 5:
			$manufacturer_id = "BMW";
			break;
	}

	$model = $_POST['model'];
	$year = $_POST['year'];
	$motor_cc = $_POST['motor_cc'];
	$motor_hp = $_POST['motor_hp'];
?>
    <div>
    <h2>Motorcycle Saved</h2>
    <p>The new motorcycle has been added to the list.</p>
    <h3>Category:</h3>
    <p><?= $category_id ?></p>
    <h3>Manufacturer:</h3>
    <p><?= $manufacturer_id ?></p>
    <h3>Model:</h3>
    <p><?= $model ?></p>
    <h3>Year:</h3>
    <p><?= $year ?></p>
    <h3>Motor cc:</h3>
    <p><?= $motor_cc ?></p>
    <h3>Motor hp:</h3>
    <p><?= $motor_hp ?></p>
    <h3>Image:</h3>
    <p>(save for later / try doing it as a bonus challenge)</p>
    </div>
<?php include '../footer.php'; ?>
