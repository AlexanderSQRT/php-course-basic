<h1>Main Page</h1>
<table>
    <tr>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Username</th>
        <th>Email</th>
    </tr>
    <?php foreach ($data as $row) : ?>
    <tr>
        <td><?= $row["firstName"]?></td>
        <td><?= $row["secondName"]?></td>
        <td><?= $row["userName"]?></td>
        <td><?= $row["email"]?></td>
    </tr>
    <?php endforeach; ?>
</table>