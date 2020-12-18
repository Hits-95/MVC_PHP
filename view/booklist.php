<h2 align="center">Book List</h2></br>
<table class = "table">
    <tr>
        <th>Book</th>
        <th>Authoer</th>
        <th>Discription</th>
    </tr>

<?php
    foreach($books as $book){
    ?>
        <tr>
            <td><a href="index.php?book=<?php echo $book->title ;?>"><?php echo $book->title ;?></a></td>
            <td><?php echo $book->author;?></td>
            <td><?php  echo $book->discription;?></td>    
        </tr>
    <?php       
    }
?>
</table>