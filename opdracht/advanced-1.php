<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		.form-group{
			margin-top: 24px;
		}
	</style>
</head>
<body>
  	<form name="Form"  action = "advanced-2.php" method = "POST">
		<div class="form-group">
			<label for="border">Tabel-border dikte (px): </label>
			<input type = "text" name="border" id="border">
		</div>
    	<div class="form-group">
			<label for="padding">Cel-padding (px): </label>
			<input type = "text" name = "padding" id="padding">
		</div>
		<div class="form-group">
			<label for="background">Achtergrondkleur:</label>
			<select name="background" id="background">
				<?php
				$kleuren = array("red", "blue", "green", "black", "brown");
				foreach ($kleuren as $achtergroundkleur) {
					echo "<option> $achtergroundkleur </option>";
				}
				
				?>
			</select>
		</div>
    	<br> <br>
    	
        <br> <br>
      	<label for="tekstkleuren">Tekstkleur:</label>
      	<select name="tekstkleuren" >
			<?php
		
			foreach ($kleuren as $tekstkleur) {
				echo "<option> $tekstkleur </option>";
			}
			
			?>
        </select>
      	<br> <br>
      	<input type = "submit" value = "Verzend">
  </form>
</body>
</html>