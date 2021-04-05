<?php
include('connect.php');

$table1="create table if not exists travel_agency (
agency_id  int PRIMARY KEY,
name varchar(40) NOT NULL,
address varchar(80) NOT NULL, 
contact_no bigint NOT NULL
);";
if ($connect->query($table1) === TRUE) {
  echo "Table travel_agency created successfully";
} else {
  echo "Error creating table: " . $connect->error;
}

$table2="create table if not exists customer(
customer_id int primary key AUTO_INCREMENT,
fname varchar(20) NOT NULL, 
mname varchar(20) ,
lname varchar(20) NOT NULL,
username  varchar(20)  NOT NULL UNIQUE ,
password varchar(30),
email_id varchar(30) NOT NULL UNIQUE 
); 
 ";
 
if ($connect->query($table2) === TRUE) {
  echo "Table travel_agency created successfully";
} else {
  echo "Error creating table: " . $connect->error;
}

$connect->close();
?>