<?php
include 'condb.php';

try {
    $stmt = $conn->query("SELECT emp_id, firstName, lastName, phone, username FROM employees");
    $datas = $stmt->fetchAll(PDO::FETCH_ASSOC);
    echo json_encode($datas);
    
} catch (PDOException $e) {
    echo json_encode(["error" => $e->getMessage()]);
}
?>
