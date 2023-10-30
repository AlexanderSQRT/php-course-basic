<h1>Our Team Photos</h1>
<div>
    <h2>Photos</h2>
    <?php foreach ($data as $row) : ?>
        <ul>
            <li><?= $row[0]?></li>
            <li><?= $row[1]?></li>
            <li><?= $row[2]?></li>
        </ul>
    <?php endforeach; ?>
</div>
