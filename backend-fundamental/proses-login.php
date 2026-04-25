<?php
require_once "auth/auth-payload.dto.php";
require_once "auth/auth.entity.php";

require_once "database.adapter.php";

$method = $_SERVER["REQUEST_METHOD"];

if ($method != "POST") {
    http_response_code(405);
    exit();
}

$databaseAdapter = new DatabaseAdapter();

$email = htmlspecialchars($_POST["email"] ?? "");
$password = htmlspecialchars($_POST["password"] ?? "");

$authPayloadDTO = new AuthPayloadDTO($email, $password);
$errors = $authPayloadDTO->validate();

if (!empty($errors)) {
    echo "<h1>Validation Error</h1>";
    foreach ($errors as $error) {
        echo $error . "<br>";
    }
    exit();
}

$authEntity = AuthEntity::create($authPayloadDTO->getEmail(), $authPayloadDTO->getPassword());

echo "Email : " . $authEntity->email . "<br>";
echo "Password : " . $authEntity->password . "<br>";
?>