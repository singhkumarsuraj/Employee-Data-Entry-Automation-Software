<?php
include("config.php");
$result=mysqli_query($mysqli,"SELECT * from form ORDER BY id DESC");
?>

<table border="10">
    <br>
    <tr>
        <th>Name</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Date of Birth</th>
        <th>Department</th>
        <th>Address</th>
</tr>
<?php
while($conn=mysqli_fetch_array($conn))
{
    echo '<tr>';
    echo '<td>'.$res['emp_name'].'</td>';
    echo '<td>'.$res['emp_gender'].'</td>';
    echo '<td>'.$res['emp_email'].'</td>';
    echo '<td>'.$res['emp_dob'].'</td>';
    echo '<td>'.$res['emp_department'].'</td>';
    echo '<td>'.$res['emp_address'].'</td>';

    echo "<td> <a href=\"edit.php?id=$res[id]\"><input type='submit' value='Edit'></a></td>";
    echo "<td> <a href=\"delete.php?id=$res[id]\"onclick=\"return confirm('Are you want to delete')\"><button type='button'>Delete</button></a></td>";
    echo '<tr>';
}
?>
</table>