<?php
include 'librarycon.php';
if(isset($_POST['submit'])){
    $name=$_POST['bookname'];
    $publish=$_POST['publisher'];
    $custom=$_POST['customer'];
    $date=$_POST['date'];
    $time=$_POST['time'];

    mysqli_query ($con,"insert into notebook (bookname,publisher,customer,date,time)value('$name','$publish','$custom','$date','$time') ");
    header("location:libraryview.php");
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
                    <input type="text" name="bookname" value="">
                </td>
            </tr>
            <tr>
                 <td>
                    <label for="name">PUBLISHER</label>
                </td>
                <td>
                    <input type="text" name="publisher" value="">
                </td>
            </tr>
            <tr>
                    <td>
                        <label for="name">CUSTOMER</label>
                    </td>
                    <td>
                        <input type="text" name="customer" value="">
                    </td>
            </tr>
             <tr>
                    <td>
                        <label forn="name">DATE</label>
                    </td>
                    <td>
                        <input type="text" name="date" value="">
                    </td>
            </tr>
            <tr>
                    <td>
                        <label for="name">TIME</label>
                    </td>
                    <td>
                        <input type="text" name="time" value="">
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