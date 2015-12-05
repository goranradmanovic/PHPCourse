<?php

//Pokretanje sesija na ovom fajlu tj. stranici
session_start();

//Ukljucivanje fajla sa sigurnosnom funkcijom
require_once '../functions/security.php';

//Provjera da li postoje neki podatci u sesiji koji se prenose sa calculation.php fajla za obradu podataka
//i ako postoje smijstamo te podatake u varijable da bi ih lakse mogli korsititi na ovoj stranici
$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : array(); //Greske
$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : array(); //Vrijednosti iz polja od forme
$result = isset($_SESSION['result']) ? $_SESSION['result'] : ''; //Rezultat racunanja

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Calculator</title>
		<!-- Latest compiled and minified CSS Bootstrap-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
	</head>
	<body>
		<div class="container">
		<!--Dio za ispis gresaka ako forma nije dobro popunjena-->
		<!--Ako errors niz nije prazan prikazi ovaj panel sa errorsom-->
			<?php if (!empty($errors)) : ?>
				<div class="row">
					<h1 class="text-center text-danger">Errors</h1>
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<div class="panel-body bg-danger">
								<ul class="text-danger">
									<li><?php echo implode('</li><li>', $errors); ?></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>

			<!--Forma za unos podataka-->
			<h1 class="text-center">Calculator</h1>
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="../app/calculation.php" method="post" autocomplete="off">
							<div class="form-group">
								<label for="exampleInputEmail1">Enter First Number</label>
								<input type="text" name="number1" class="form-control" id="exampleInputEmail1" placeholder="Enter some number" <?php echo isset($fields['number1']) ? ' value="' . escape($fields['number1']) . '"' : ''; ?> >
							</div>

							<div class="form-group">
								<label for="exampleInputEmail1">Enter Second Number</label>
								<input type="text" name="number2" class="form-control" id="exampleInputEmail1" placeholder="Enter some number" <?php echo isset($fields['number2']) ? ' value="' . escape($fields['number2']) . '"' : ''; ?>>
							</div>

							<div class="form-group">
								<label for="operations">Math Operations</label>
								<select class="form-control" id="operations" name="operation">
									<option></option>
									<option value="+">+</option>
									<option value="-">-</option>
									<option value="*">*</option>
									<option value="/">/</option>
								</select>
							</div>
							
							<button type="submit" class="btn btn-default">Submit</button>
						</form>
					</div>
				</div>
			</div>

			<!--Ako postoji rezultat,onda prikazi textbox-->
			<?php if ($result) : ?>
				<div class="row">
					<div class="col-md-6 col-md-offset-3">
						<div class="panel panel-default">
							<div class="panel-body bg-success">
								<h3 class="text-center text-success">Results</h3>
								<!--Ispis rezultata u textboxu-->
								<textarea class="form-control" rows="3"><?php echo $result; ?></textarea>
							</div>
						</div>
					</div>
				</div>
			<?php endif; ?>
		</div>
	</body>
</html>

<?php

//Ponistavamo vrijednosti iz SESSIJE
unset($_SESSION['errors']);
unset($_SESSION['fields']);
unset($_SESSION['result']);

?>