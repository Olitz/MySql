<?php
include 'prct.php';
$conn = OpenCon();
echo "Connected Successfully";

$sql = "INSERT INTO `product`( `title`, `description`, `price`, `category`, `color`, `count`) VALUES ('picher','barista space picher','750000','coffee shop','red','10')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully ";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sql = "UPDATE `product` SET `description`='edited',`price`='400000',`is_deleted`='0' WHERE p_id=4 ";

if ($conn->query($sql) === TRUE) {
    echo " edited";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

  $sql = "UPDATE `product` SET `is_deleted`='1' WHERE p_id=4 ";

  if ($conn->query($sql) === TRUE) {
      echo " soft delete";
    } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
CloseCon($conn);

?>