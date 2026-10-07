<?php
include 'condb.php';

try {
    $stmt = $conn->query("SELECT customer_id, firstName, lastName, phone, username FROM customers");
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($datas);
    
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
