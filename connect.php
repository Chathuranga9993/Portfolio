<?php
  $Name = filter_input(INPUT_POST, 'Name');
  $Email = filter_input(INPUT_POST, 'Email');
  $Message = filter_input(INPUT_POST, 'Message');
  if(!empty($Name)){
  if(!empty($Email)){
  if(!empty($Message)){
     $host = "localhost";
     $Name = "root";
     $Email = "";
     $Message ="";
     $dbname = "portfolio";

  //Database connection
     $conn = new mysqli ($host, $Name, $Email, $Message, $dbname);

    $sql ="INSERT INTO registration (Name, Email, Message) values ('$Name, $Email, $Message')";
    if ($conn->query($sql)) {
    	echo "Data successfully submitted !";
  }
  else{
  	echo "Error: ".$sql ."<br>". $conn->error;
  }
  $conn->close();
  else{
  	echo "Message should not be empty";
  }
  }
  else{
  	echo "Email should not be empty";
  }
  }
  else{
  	echo "Name should not be empty";
  }

?>