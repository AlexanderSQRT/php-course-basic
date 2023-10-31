<h1>Main Page</h1>
<table>
    <tr>
        <th>Username</th>
        <th>First Name</th>
        <th>Second Name</th>
        <th>Email</th>
        <th>Join Date</th>
    </tr>
    <?php foreach ($data as $row) : ?>
    <tr>
        <td><?= $row["username"]?></td>
        <td><?= $row["first_name"]?></td>
        <td><?= $row["second_name"]?></td>
        <td><?= $row["email"]?></td>
        <td><?= $row["join_date"]?></td>
    </tr>
    <?php endforeach; ?>
</table>