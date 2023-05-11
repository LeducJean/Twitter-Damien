<?php


require_once("connexionbdd.php");


try {
    $pdo = new PDO('mysql:host=' . $ipserver . ';dbname=' . $dbname . '', $username, $password);
} catch (PDOException $e) {
    http_response_code(500);
    echo json_encode(['error' => $e->getMessage()]);
    exit();
}

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['delete'])) {
    $delete = "DELETE FROM `messages`";
    $stmt = $pdo->prepare($delete);
    if ($stmt->execute()) {
        http_response_code(200);
        echo json_encode(['Tous les messages ont été supprimés.']);
    } else {
        http_response_code(500);
    }
} else {
    http_response_code(400);
}
