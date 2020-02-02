<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
</head>
<body>
	<center style="font-size: 40px;font-weight: 700;">
		<h2 style="color: #f00;"><?php echo $data['title']; ?></h2>
		<span><?php echo $data['name'];  ?></span>:&nbsp;<span><?php echo $data['value']; ?></span>
		<p><?php echo $data['index']; ?></p>
	</center>
	<div>
		<?php  
			$shows = $data['show'];
			foreach ($shows as $value) {
		?>
			<div style="background-color: rgba(0, 0, 255, 0.5); color: #ffffff; text-align: center; margin: 15px auto;">
				<p>id:&nbsp;<?php echo $value['id']; ?></p>
				<p>name:&nbsp;<?php echo $value['name']; ?></p>
				<p>year:&nbsp;<?php echo $value['year']; ?></p>
			</div>
		<?php
			}
		?>
	</div>
</body>
</html>