
<?php
session_start();
if(isset($_SESSION['form']) && count($_SESSION['form']) > 0){
?>
<table border="1" cellpadding="10">
<tr>
    <th>Email</th>
    <th>Password</th>
    <th>City</th>
</tr>

<?php
foreach($_SESSION['form'] as $row){
?>
<tr>
    <td><?php echo $row['email']; ?></td>
    <td><?php echo $row['password']; ?></td>
    <td><?php echo $row['city']; ?></td>
</tr>
<?php
}
?>

</table>

<?php
}
?>