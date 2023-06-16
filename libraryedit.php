<?php
include 'librarycon.php';
$data = $_GET['id'];
 $nid = mysqli_query($con,"select * from notebook where book_id='$data'");
 $bid = mysqli_fetch_assoc($nid);
 if(isset($_POST['submit'])){
 $name=$_POST['bookname'];
 $publish=$_POST['publisher'];
 $custom=$_POST['customer'];
 $date=$_POST['date'];
 $time=$post['time'];
 mysqli_query($con,"update notebook set bookname='$name', publisher='$publish', customer='$custom', date='$date', time='$time' where book_id='$data'");
 header('location:vehicleview.php');
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
        <form method="post">
            <tr>
                <td>
                    <label for="name">BOOK NAME</label>
                </td>
                <td>
                    <input type="text" name="bookname" value="<?php echo $bid['bookname']?>">
                </td>
            </tr>
            <tr>
                 <td>
                    <label for="name">PUBLISHER</label>
                </td>
                <td>
                    <input type="text" name="publisher" value="<?php echo $bid['publisher']?>">
                </td>
            </tr>
            <tr>
                    <td>
                        <label for="name">CUSTOMER</label>
                    </td>
                    <td>
                        <input type="text" name="customer" value="<?php echo $bid['customer']?>">
                    </td>
            </tr>
             <tr>
                    <td>
                        <label forn="name">DATE</label>
                    </td>
                    <td>
                        <input type="text" name="date" value="<?php echo $bid['date']?>">
                    </td>
            </tr>
            <tr>
                    <td>
                        <label for="name">TIME</label>
                    </td>
                    <td>
                        <input type="text" name="time" value="<?php echo $bid['time']?>">
                    </td>
            </tr>
            <tr>
                    <td>
                        <button name="submit">SUBMIT</button>
                    </td>
            </tr>
        </form>
    </table>
</body>
</html>