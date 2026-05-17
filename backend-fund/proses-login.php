<?php
require_once 'auth/auth-payload.dto.php';
require_once 'auth/auth.entity.php';

require_once 'database.adapter.php';

$method = $_SERVER["REQUEST_METHOD"];

if ($method != "POST") {
    echo "Request Method Not Allowed";
    die();
}

$databaseAdapter = new DatabaseAdapter();

$email = htmlspecialchars($_POST["email"]);
$password = htmlspecialchars($_POST["password"]);


$authPayloadDto = new AuthPayloadDTO($email, $password);
$authPayloadDto->validate();
$errors = $authPayloadDto->getErrors();

if (count($errors) > 0) {
    foreach ($errors as $error) {
        echo "$error<br/>";
    }

    exit();
}

$authEntity = AuthEntity::create($authPayloadDto->getEmail(), $authPayloadDto->getPassword());


echo "<h2>Login Success</h2>";
echo "Email: " . $authEntity->email . "<br/>";
echo "Password: " . $authEntity->password . "<br/>";

?>