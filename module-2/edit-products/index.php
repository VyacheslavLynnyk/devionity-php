<?php
session_start();

require_once __DIR__ . '/db-conf.php';
require_once __DIR__ . '/libs.php';

if (isAuthorized() !== true) {
    header('LOCATION: ./registration.php');
}

var_dump(isAuthorized());

$link = connect();

if (isset($_POST['action'])) {
    $sql = "UPDATE products SET
           `name`='{$_POST['name']}',
           description='{$_POST['description']}',
           price='{$_POST['price']}',
           image='{$_POST['image']}',
           is_active={$_POST['is_active']},
           vendor='{$_POST['vendor']}'
           WHERE id={$_POST['id']}";
    echo $sql;
    $res = mysqli_query($link, $sql);
}

$sql = 'SELECT * FROM products';
$res = mysqli_query($link, $sql);
$items = [];
while ($row = mysqli_fetch_assoc($res)) {
    $items[] = $row;
}
?>
<body>
<a href="logout.php"> Logout</a>
    <table>
        <tr>
            <th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image</th>
            <th>IS Active</th><th>vendor</th><th> saving</th>
        </tr>


    <?php foreach ($items as $item) : ?>
        <tr>
            <td><form method="POST" action="<?= $_SERVER['PHP_SELF']?>"></td>
                    <td><input type="text" name="id" value="<?= $item['id']?>"></td>
                    <td><input type="text" name="name" value="<?= $item['name']?>"></td>
                    <td><textarea type="text" name="description"><?= $item['description']?></textarea></td>
                    <td><input type="text" name="price" value="<?= $item['price']?>"></td>
                    <td><input type="text" name="image" value="<?= $item['image']?>"></td>
                    <td><input type="text" name="is_active" value="<?= $item['is_active']?>"></td>
                    <td><input type="text" name="vendor" value="<?= $item['vendor']?>"></td>
                    <td><input type="submit" value="save" name="action"></td>
            <td></form></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>