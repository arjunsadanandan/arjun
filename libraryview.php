<?php
include 'librarycon.php';
$sa=mysqli_query($con,"select * from notebook");

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
        <form>
        <tr>
            <th>bookname</th>
            <th>publisher</th>
            <th>customer</th>
            <th>date</th>
            <th>time</th>
        </tr>
        <?php
        while($row=mysqli_fetch_assoc($sa)){
            ?>
            <tr>
                <td><?php echo$row['bookname']?></td>
                <td><?php echo$row['publisher']?></td>
                <td><?php echo$row['customer']?></td>
                <td><?php echo$row['date']?></td>
                <td><?php echo$row['time']?></td>

                <td>
                    <a href="librarydelete.php?id=<?php echo$row['book_id']?>" name="button">delete </a>
                </td>
                <td>
                    <a href="libraryedit.php?id=<?php echo$row['book_id']?>" name="button">edit</a>
                </td>
            </tr>
            <?php 
        }
        ?>
        </form>
    </table>
</body>
</html>