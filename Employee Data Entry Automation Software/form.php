<?php
                                // Created By Suraj Kumar Singh  B.Tech (C.S.E)
include("connection.php");
include("database.php");
?>
<?php
     if(isset($_POST['searchdata']))
     {
        $search = $_POST['search'];    
        $query  = "SELECT * from form WHERE id='$search'";
        $data   = mysqli_query($conn,$query);
        $result = mysqli_fetch_assoc($data);
        //$name   = $result['emp_name'];
        //echo $name;
     }
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Software Development</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    </head>
    <body>
        <div class="center">
<form action="#" method="POST"><br>
            <h1>Employee Data Entry Automation Software</h2>
            <div class="form">
                <input type="text" class="textfield" placeholder="Search ID" name="search"
                value="<?php if(isset($_POST['searchdata'])){echo $result['id'];} ?>">
                <input type="text" class="textfield" placeholder="Employee Name" name="name"
                value="<?php if(isset($_POST['searchdata'])){echo $result['emp_name'];} ?>">
                <select class="textfield" name="gender">
                    <option value="Not Selected">Select Gender</option>
                    <option value="Male"
                    <?php
                    if($result['emp_gender']=='Male')
                        {
                        echo "selected";
                        }
                    ?>
                    >Male</option>
                    <option value="Female"
                    <?php
                    if($result['emp_gender']=='Female')
                        {
                        echo "selected";
                        }
                    ?>
                    >Female</option>
                    <option value="Others"
                    <?php
                    if($result['emp_gender']=='Other')
                        {
                        echo "selected";
                        }
                    ?>>Other</option>
                </select>
                <b>Date of Birth</b> <input type="Date" class="textfield" placeholder="Date of Birth" name="dob"
                value="<?php if(isset($_POST['searchdata'])){echo $result['emp_dob'];} ?>">
                <input type="text" class="textfield" placeholder="Email Address" name="email"
                value="<?php if(isset($_POST['searchdata'])){echo $result['emp_email'];} ?>">
                <select class="textfield" name="department">
                    <option value="Not Selected">Select Department</option>
                    <option value="IT"
                    <?php
                    if($result['emp_department']=='IT')
                        {
                        echo "selected";
                        }
                    ?>
                    >IT</option>
                    <option value="Accounts"
                    <?php
                    if($result['emp_department']=='Accounts')
                        {
                        echo "selected";
                        }
                    ?>
                    >Accounts</option>
                    <option value="Sales"
                    <?php
                    if($result['emp_department']=='Sales')
                        {
                        echo "selected";
                        }
                    ?>
                    >Sales</option>
                    <option value="HR"
                    <?php
                    if($result['emp_department']=='HR')
                        {
                        echo "selected";
                        }
                    ?>
                    >HR</option>
                    <option value="Bussiness Development"
                    <?php
                    if($result['emp_department']=='Bussiness Development')
                        {
                        echo "selected";
                        }
                    ?>
                    >Business Development</option>
                    <option value="Marketing"
                    <?php
                    if($result['emp_department']=='Marketing')
                        {
                        echo "selected";
                        }
                    ?>
                    >Marketing</option>
                </select>
                <textarea placeholder="Address" name="address"><?php if(isset($_POST['searchdata'])){echo $result['emp_address'];}?>
                </textarea>
                <input type="submit" value="Search" name="searchdata" class="btn">
                <input type="submit" value="Save" name="save" class="btn" style="background-color:green;">
                <input type="submit" value="Update" name="update" class="btn" style="background-color:orange;">
                <input type="submit" value="Delete" name="delete" class="btn" style="background-color:red;" onclick="return checkdelete()">
                <input type="reset" value="Clear" name="" class="btn" style="background-color:blue;">
            </div>
</form>
        </div>
    </body>
</html>