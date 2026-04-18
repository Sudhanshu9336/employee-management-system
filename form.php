<?php
include("connection.php");
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Management System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="container">
<h2>Employee Data Entry Automation Software</h2>

<form method="POST">

<input type="text" name="id" placeholder="Enter ID" required>
<input type="text" name="name" placeholder="Enter Name" required>

<select name="gender">
    <option>Male</option>
    <option>Female</option>
</select>

<input type="email" name="email" placeholder="Enter Email">

<select name="department">
    <option>Select Department</option>
    <option>HR</option>
    <option>IT</option>
    <option>Sales</option>
</select>

<textarea name="address" placeholder="Enter Address"></textarea>

<br>

<input type="submit" name="search" value="Search" class="btn" style="background: gray;">
<input type="submit" name="save" value="Save" class="btn" style="background: green;">
<input type="submit" name="update" value="Modify" class="btn" style="background: orange;">
<input type="submit" name="delete" value="Delete" class="btn" style="background: red;">
<input type="reset" value="Clear" class="btn" style="background: blue;">

</form>
</div>

</body>
</html>

<?php

// SAVE
if(isset($_POST['save'])){
    $id=$_POST['id'];
    $name=$_POST['name'];
    $gender=$_POST['gender'];
    $email=$_POST['email'];
    $dept=$_POST['department'];
    $address=$_POST['address'];

    $query="INSERT INTO employees VALUES('$id','$name','$gender','$email','$dept','$address')";
    mysqli_query($conn,$query);
}

// SEARCH
if(isset($_POST['search'])){
    $id=$_POST['id'];

    $query="SELECT * FROM employees WHERE id='$id'";
    $data=mysqli_query($conn,$query);

    if($result=mysqli_fetch_assoc($data)){
        echo "<script>alert('Name: ".$result['name']."')</script>";
    }
}

// UPDATE
if(isset($_POST['update'])){
    $id=$_POST['id'];
    $name=$_POST['name'];

    $query="UPDATE employees SET name='$name' WHERE id='$id'";
    mysqli_query($conn,$query);
}

// DELETE
if(isset($_POST['delete'])){
    $id=$_POST['id'];

    $query="DELETE FROM employees WHERE id='$id'";
    mysqli_query($conn,$query);
}

?>