<?php
include 'librarycon.php';
if(isset($_POST['login'])){
    $bn = $_POST['USER NAME'];
    $pas =$_POST['PASSWORD'];
    

$da = mysqli_query($con,"select * from notebook where USER NAME='$bn' and PASSWORD='$pas'");
if(mysqli_num_rows($da)>0){
    header("location:libraryview.php");
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <table>
        <form metod="post">
            <tr>
                <td>
                    <label for="name">USER NAME</label>
                </td>
                <td>
                    <input type="text" name="USER NAME" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <label for="password">PASSWORD</label>
                </td>
                <td>
                    <input type="text" name="PASSWORD" value="" required>
                </td>
            </tr>
            <tr>
                <td>
                    <button name="login">LOGIN</button>
                </td>
            </tr>
        </form>
    </table>
</body>
</html>