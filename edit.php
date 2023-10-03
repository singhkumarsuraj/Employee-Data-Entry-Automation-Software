<?php
include("config.php");
$id=$_GET['id'];
$result=mysqli_query($mysqli,"SELECT * from record WHERE id=$id");
while($res=mysqli_fetch_array($result))
{
    $name=$res['name'];
    $email=$res['email'];
    $mobile=$res['mobile'];
    $date=$res['date'];
}
?>
<?php
if(isset($_POST['update']))
{
    $id=$_POST['id'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $mobile=$_POST['mobile'];
    $date=$_POST['date'];

    $result=mysqli_query($mysqli,"Update record SET name='$name',email='$email',mobile='$mobile',date='$date' where id=$id");

    if($result)
    {
        echo "<script> alert ('Record Updated Successfully...!')</script>";
      
    }
    else
    {
        echo "<script> alert ('Failed To Updated..!')</script>";
    }

}
?>

<form action="" method="POST">
        Name<input type="text" name="name" value="<?php echo $name; ?>">
        <br>
        Email<input type="email" name="email" value="<?php echo $email; ?>">
        <br>
        Mobile<input type="mobile" name="mobile" value="<?php echo $mobile; ?>">
        <br>
        Date of Birth<input type="date" name="date" value="<?php echo $date; ?>">
        <br>
        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
        <br>
        <input type="submit" name="update" value="update">
</form>