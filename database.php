<script> //----Delete Code contd...----
    function checkdelete()
    {
        return confirm('Are you sure you want to delete this record ?');
    }
</script>
<?php //----Save code Starts...----
    if(isset($_POST['save']))
    {
        $name         = $_POST['name'];
        $gender       = $_POST['gender'];
        $email        = $_POST['email'];
        $dob          = $_POST['dob'];
        $department   = $_POST['department'];
        $address      = $_POST['address'];

        $query = "INSERT INTO form (emp_name,emp_gender,emp_email,emp_dob,emp_department,emp_address) VALUES('$name','$gender','$email','$dob','$department','$address')";
      

        $data = mysqli_query($conn,$query);

        if($data)
        {
            echo "<script> alert('Data Saved Into Database')</script>";
        }
        else
        {
            echo "<script> alert('Failed To Save Data')</script>";
        }
    }
?>
<?php  //-----Update code Starts----
                 if(isset($_POST['update']))
        {
             $id           = $_POST['search'];
             $name         = $_POST['name'];
             $gender       = $_POST['gender'];
             $email        = $_POST['email'];
             $dob          = $_POST['dob'];
             $department   = $_POST['department'];
             $address      = $_POST['address'];

             $query = "UPDATE form SET emp_name='$name',emp_gender='$gender',emp_email='$email',emp_dob='$dob',emp_department='$department',emp_address='$address' WHERE id='$id'";

            $data = mysqli_query($conn,$query);

            if($data)
            {
                   echo "<script> alert('Record Updated')</script>";
            }
            else
            {
                     echo "<script> alert('Failed To Update')</script>";
            }
        }
?>
              
<?php //------Delete code starts...-----
    if(isset($_POST['delete']))
    {
        $id = $_POST['search'];
        //echo $id;
        $query = "DELETE FROM form WHERE id='$id'";
        $data = mysqli_query($conn,$query);
        if($data)
        {
            echo "<script> alert('Record Deleted')</script>";
        }
        else
        {
            echo "<script> alert('Failed to Delete'</script>";
        }
    }
?>