<h1>Movies</h1>
<table>
    <tr>
        <th>Movie Name</th>
        <th>Release Year</th>
        <th>Rating</th>
    </tr>
    <?php foreach ($data as $row) : ?>
        <tr>
            <td><?= $row["movie_name"]?></td>
            <td><?= $row["release_year"]?></td>
            <td><?= $row["rating"]?></td>
        </tr>
    <?php endforeach; ?>
</table>