<h1>Movies</h1>
<table>
    <tr>
        <th>Movie Name</th>
        <th>Release Year</th>
        <th>Rating</th>
        <th>Update Movie</th>
        <th>Delete Movie</th>
    </tr>
    <?php foreach ($data as $row) : ?>
        <tr>
            <td><?= $row["movie_name"]?></td>
            <td><?= $row["release_year"]?></td>
            <td><?= $row["rating"]?></td>
            <td><a href='/HW11/gallery/update?id=<?=$row['id'] ?>'>Update</a></td>
            <td><a href='/HW11/gallery/delete?id=<?=$row['id'] ?>'>Delete</a></td>
        </tr>
    <?php endforeach; ?>
</table>