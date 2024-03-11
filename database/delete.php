<?php
include('./db/connect.php');


$user_id = $_GET['id'];

if (isset($_GET['confirm'])) {
    $sql = "DELETE FROM `usser` WHERE id = $user_id";
    $result = mysqli_query($conn, $sql);
    if ($result) {
        header('location: dashboard.php');
    } else {
        echo 'Xoá thất bại' . $conn->error;
    }
} else {
    // Hiển thị hộp thoại xác nhận
    echo '<script>
            var confirmDelete = confirm("Bạn có chắc muốn xoá không?");
            if (confirmDelete) {
                window.location.href = "delete.php?id=' . $user_id . '&confirm=true";
            } else {
                window.location.href = "dashboard.php";
            }
          </script>';
}
