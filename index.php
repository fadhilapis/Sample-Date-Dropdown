<!DOCTYPE html>
<html>
	<body>

		<select name="day" id="day">

			<?php
				for ($i=1; $i < 32; $i++){  ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php } ?>

		</select>

		<select name="month" id="month">
			<?php

				$months = [
					'January',
					'February',
					'March',
					'April',
					'May',
					'June',
					'July',
					'August',
					'September',
					'October',
					'November',
					'Disember'
				];

				foreach ($months as $key => $month){  ?>
					<option value="<?php echo $month; ?>"><?php echo $month; ?></option>
			<?php } ?>
		</select>

		<select name="year" id="year">

			<?php
				for ($i=1990; $i < 2017; $i++){  ?>
					<option value="<?php echo $i; ?>"><?php echo $i; ?></option>
			<?php } ?>

		</select>
		
	</body>
</html>