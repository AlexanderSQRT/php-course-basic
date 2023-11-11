<h1>Update Movie</h1>
<form method="POST">
    <?php $row = array_shift($data); ?>
    <table>
        <tr style="display: none">
            <td>id</td>
            <td><input type="text" name="id"/></td>
        </tr>
        <tr>
            <td>Movie Name</td>
            <td><input type="text" name="movie_name" value="<?php echo $row["movie_name"] ?>" /></td>
        </tr>
        <tr>
            <td>Release Year</td>
            <td><input type="text" name="release_year" value="<?php echo $row["release_year"] ?>" /></td>
        </tr>
        <tr>
            <td>Rating</td>
            <td><input type="text" name="rating" value="<?php echo $row["rating"] ?>" /></td>
        </tr>
    </table>
    <button type="submit">Submit</button>
</form>