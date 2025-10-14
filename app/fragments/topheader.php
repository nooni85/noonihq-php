<?php
	require_once __DIR__ . "/../app.php";
    $app = new App();
?>

<div class="main-top-header">
	<span class="brand">
		<a href="/"><?= $app->getBrand() ?></a>
	</span>
	<span>about</span>
	<span class="member-menu">
		<a href="/user/registration_form.php">로그인</a>
	</span>
</div>