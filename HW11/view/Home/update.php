<h1>Update User</h1>
<form method="POST">
    <?php $row = array_shift($data); ?>
    <table>
        <tr style="display: none">
            <td>id</td>
            <td><input type="text" name="id"/></td>
        </tr>
        <tr>
            <td>Username</td>
            <td><input type="text" name="username" value="<?php echo $row["username"] ?>" /></td>
        </tr>
        <tr>
            <td>First Name</td>
            <td><input type="text" name="first_name" value="<?php echo $row["first_name"] ?>"/></td>
        </tr>
        <tr>
            <td>Second Name</td>
            <td><input type="text" name="second_name" value="<?php echo $row["second_name"] ?>"/></td>
        </tr>
        <tr>
            <td>Email</td>
            <td><input type="text" name="email" value="<?php echo $row["email"] ?>"/></td>
        </tr>
        <tr>
            <td>Join Date</td>
            <td><input type="text" name="join_date" value="<?php echo $row["join_date"] ?>"/></td>
        </tr>
    </table>
    <button type="submit">Submit</button>
</form>