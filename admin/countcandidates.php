 <?php
    include "../db_connect.php";
    $sql = "SELECT COUNT(*) as total FROM Candidates";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
    echo $row['total'];
    $conn->close();
    ?>