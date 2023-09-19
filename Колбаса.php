<?php
$currentPage = "Колбаса.php";
$includeJS = "js/saveLocal.js";
$tableData = [
    'кт-20' => ['iPhone SE', 'кг', 0],
    'кс-20' => ['iPhone 11', 'кг', 0],
    'к-20' => ['iPad Pro', 'кг', 0],
    'т' => ['iPhone 11 Pro', 'кг', 0],
    'н' => ['Наушники', 'кг', 0]
];

session_start();
isset($_SESSION["username"]) ? $username = $_SESSION['username'] : $username = null;

if ($_SERVER["REQUEST_METHOD"] == "DELETE") {
    if ( isset($_GET["article"]) ) {
        $articleDelete = $_GET["article"];
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(["message" => "No article"]);
        die();
    }

    if (isset($tableData[$articleDelete])) {
        unset($tableData[$articleDelete]); // Delete the element
        echo json_encode(["message" => "Item with ID $articleDelete deleted successfully"]);
    } else {
        http_response_code(500); // Internal Server Error
        echo json_encode(["message" => "There's no such article in the database."]);
        die();
    }
}
include("components/base.php");
