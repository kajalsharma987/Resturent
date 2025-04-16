<?php
  $servername = "localhost";
  $username = "root";
  $password = "";
  $dbname = "resturents";

  //  for Create connection
  $conn = new mysqli($servername, $username, $password, $dbname);

  // Check connection
  if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
  }

  // insert form data into a variable
  if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $item_name = $_POST['item_name'];
    $quantity = $_POST['quantity'];
    $address = $_POST['address'];

    // for MySQL query to execute 
    $sql = "INSERT INTO order1
     (name, email, mobile, item_name, quantity, address) VALUES ('$name', '$email', '$mobile', '$item_name', '$quantity', '$address')";

    if ($conn->query($sql) === TRUE) {
   
      

if ($conn->query($sql) === TRUE) {
  echo '
  <div style="text-align: center;  margin-top: 200px; margin-bottom: 200px;background-image: linear-gradient(to bottom,#f0f0f0, #f0f0f0, #ffffff); border-radius: 80px; box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.5);">
    <h1 style="font-size: 36px; color: #008000; animation: fadeIn 2s;">Order submitted successfully!</h1>
    <img src="photos/checkmark.jpg" alt="Checkmark" style="width: 100px; height: 100px; border-radius: 50%; animation: rotate 2s infinite;">
    <p style="font-size: 18px; color: #666; animation: fadeIn 2s;">Thank you for ordering with us! Your order will be delivered soon.</p>
  </div>

';

}

     } else {
      echo "Error: " . $sql . "<br>" . $conn->error;
    }
  }
 

  $conn->close();
?>
