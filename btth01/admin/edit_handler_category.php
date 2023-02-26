<?php
include "./connect.php";
if (isset($_POST['luu_lai'])){
    $conn = connect();
    $sql = "UPDATE theloai SET ten_tloai='{$_POST['ten_tloai']}' WHERE ma_tloai='{$_POST['ma_tloai']}'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    header("Location: ./category.php");
}

?>