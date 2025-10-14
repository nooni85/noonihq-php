<?php
require_once "../config.php";
$config = new Config();

$mysql = $config->getMySqlConnectString();

$my_conn = new mysqli($mysql->getHost(), $mysql->getUser(), $mysql->getPassword(), $mysql->getDb());

if ($my_conn->connect_error) {
    die("MySql Connection failed: " . $my_conn->connect_error);
}
$sql = "select id, content from term where type='privacy_policy' order by created_at desc";
$result = $my_conn->query($sql);
$row = $result->fetch_assoc();
$privacyPolicy = $row;

$sql = "select id, content from term where type='terms_of_use' order by created_at desc";
$result = $my_conn->query($sql);
$row = $result->fetch_assoc();
$termsOfUse = $row;
?>


<!DOCTYPE html>
<html lang="ko">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="../assets/css/user.css">
	<title><?= $config->getBrand() ?> :: 회원가입 양식</title>
</head>
<body class="user-form">
	<header>
		<h1><?= $config->getBrand() ?></h1>
	</header>
    <main>
        <form name="registrationForm" method="post" action="register.php">
            <fieldset>
                <legend>회원가입</legend>
                <label for="username">아이디</label>
                <input type="text" id="username" name="username">

                <label for="password">비밀번호</label>
                <input type="password" id="password" name="password">

                <label for="passwordCfrm">비밀번호 확인</label>
                <input type="password" id="passwordCfrm" name="passwordCfrm">

                <label for="termsOfUseTextarea">퀘이사존 이용약관에 동의합니다. (필수)</label>
                <textarea id="termsOfUseTextarea" cols="30" rows="10"><?= $termsOfUse['content'] ?></textarea>

                <input type="checkbox" id="termsOfUse" name="termsOfUse" value="<?= $termsOfUse['id'] ?>">
                <label for="termsOfUse">퀘이사존 이용약관에 동의합니다. (필수)</label>

                <label for="privacyPolicyTextarea">개인정보 수집과 이용에 대한 동의 (필수)</label>
                <textarea id="privacyPolicyTextarea" cols="30" rows="10"><?= $privacyPolicy['content'] ?></textarea>

                <input type="checkbox" id="privacyPolicy" name="privacyPolicy" value="<?= $privacyPolicy['id'] ?>">
                <label for="privacyPolicy">개인정보 수집과 이용에 대한 동의 (필수)</label>
                <input type="submit" value="회원가입">
            </fieldset>
        </form>
    </main>
</body>
</html>

<?php $my_conn->close(); ?>