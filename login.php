
<!-- <?php session_start(); ?>
 --><?php 
 include('dbcon.php'); 

if (isset($_POST['login'])) {
    $username = mysqli_real_escape_string($con, $_POST['username']);
    $password = mysqli_real_escape_string($con, $_POST['password']);

    $query = mysqli_query($con, "SELECT * FROM users WHERE  username='$username' and password='$password'");
    $row = mysqli_fetch_array($query);
    $num_row = mysqli_num_rows($query);

    if ($num_row > 0) {
        // $_SESSION['user_id'] = $row['user_id'];
       
            header("location: lodge_data.php");
    } else {
        echo 'Invalid Username and Password Combination';
    }
}
?>