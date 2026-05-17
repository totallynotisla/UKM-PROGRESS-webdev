<?php
require_once "./controllers/AnggotaController.php";

$controller = new AnggotaController();

$page = $_GET["page"] ?? "home";

switch ($page) {
    case "tambah":
        $controller->createForm();
        break;

    case "simpan":
        $controller->store();
        break;

    case "edit":
        $controller->editForm();
        break;

    case "update":
        $controller->update();
        break;

    case "delete":
        $controller->delete();
        break;

    default:
        $controller->index();
        break;
}