<?php
	require_once __DIR__ . "/app/app.php";
    $app = new App();
?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="./assets/css/main.css">
	<title><?= $app->getBrand() ?></title>
</head>
<body>
	<?php require_once __DIR__ . "/app/fragments/topheader.php" ?>
</body>
</html>