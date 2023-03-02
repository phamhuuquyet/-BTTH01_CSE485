<?php
/**
 * checkuser
 *
 * @param  mixed $user
 * @param  mixed $pass
 * @return void
 */
function checkuser(string $user,string $pass){
    $conn = connect();
    $sql = "SELECT role FROM nguoi_dung  WHERE  username ='".$user."' AND pass ='".$pass."'";
    $stmt = $conn->prepare($sql);
    $stmt->execute();
    $kq = $stmt->fetch();
    return $kq['role'];
}
?>
