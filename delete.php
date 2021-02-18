<?php
  require_once('./conn.php');

  $id = $_GET['id'];
//   echo $id;

  $sql = 'DELETE FROM jobs WHERE id = ' . $id;
    if($conn->query($sql)) {
        header('Location: admin.php');
    }else {
        echo "failed: " . $conn->error;
    }

?>