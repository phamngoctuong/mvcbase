<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>View</title>
</head>
<body>
	<?php  
		require_once PATHMVC .'/app/views/blocks/header.php';
		require_once PATHMVC .'/app/views/pages/'.$data['page'].'.php';
		require_once PATHMVC .'/app/views/blocks/footer.php';
	?>
</body>
</html>