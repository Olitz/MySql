<?php
include 'prct.php';
$conn = OpenCon();
echo "Connected Successfully";


$sql = "INSERT INTO `messages`(`title`, `body`) VALUES ('Test111','2Hiiiiii111111222iiiii');";


if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$sql = "INSERT INTO `users`(`name`, `email`, `phone_number`) VALUES ('omid ssssh','jsss4k@gmail.com','0922162415516');";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

CloseCon($conn);

?>