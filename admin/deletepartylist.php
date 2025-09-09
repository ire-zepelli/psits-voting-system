<?php
include "../db_connect.php";

$requestUri = $_SERVER['REQUEST_URI'];

if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $id = (int) $_GET['id']; // cast to integer to be safe

    // Prepare the DELETE statement
    $stmt = $conn->prepare("DELETE FROM Parties WHERE party_id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();

    if ($stmt->affected_rows > 0) {
        echo "<script>alert('Party deleted successfully!'); window.location.href='/psits-voting/admin/partylist.php';</script>";
    } else {
        echo "No party found with ID: $id";
    }

    $stmt->close();
} else {
    echo "No valid ID provided";
}

$conn->close();
