<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>sam 1 var 1</title>
</head>
<body>

	<?php
	$table = [
	[
		'id' => '1',
		'name' => 'Дима',
		'age' => '23',
		'salary' => '400'
	],
	[
		'id' => '2',
		'name' => 'Петя',
		'age' => '25',
		'salary' => '500'
	],
	[
		'id' => '3',
		'name' => 'Вася',
		'age' => '23',
		'salary' => '500'
	],
	[
		'id' => '4',
		'name' => 'Коля',
		'age' => '30',
		'salary' => '1000'
	],
	[
		'id' => '5',
		'name' => 'Иван',
		'age' => '27',
		'salary' => '500'
	],
	[
		'id' => '6',
		'name' => 'Кирил',
		'age' => '28',
		'salary' => '1000'
	]
	]
	?>

		<?php
			$head = array_keys($table[0]);
		?>
		<table>	
			<tr>
				<?php
					foreach ($head as $name) {
				?>
				<td>
					<?php 
						echo (trim($name));
					?>					
				</td>
				<?php
					}
				?>
			</tr>
			<?php
				for ($i = 0; $i< count($table); $i++) {
					?>
					<tr>
					<?php
					foreach ($table[$i] as $item) {
						?>
						<td>
						<?php 
							echo ($item);
						?>					
						</td>
					<?php
					}
					?>
					</tr>
					<?php
				}
			?>
		</table>

	
</body>
</html>