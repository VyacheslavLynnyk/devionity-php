<?php
session_start();

require_once __DIR__ . '/db-conf.php';
require_once __DIR__ . '/libs.php';

if (isAuthorized() !== true) {
    header('LOCATION: ./registration.php');
}

var_dump(isAuthorized());

$link = connect();

$update = updateProducts($link);
echo $update;

$items = getItems($link);

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Products table</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
<a href="logout.php"> Logout(<?=getName(); ?>)</a>
    <table id="table-products">


        <tr class="add-item <?=canAdd(); ?>">
            <td><form method="POST" action="<?= $_SERVER['PHP_SELF']?>" ></td>
            <td>Add new item</td>
            <td><input type="text" name="name" value=""></td>
            <td>
                        <textarea type="text" name="description" cols="40" rows="2" ></textarea>
            </td>
            <td><input type="text" name="price" value="" ></td>
            <td><input type="text" name="image"  value="" ></td>
            <td><input type="text" name="is_active" value="" ></td>
            <td><input type="text" name="vendor"  value="" ></td>
            <td></td>
            <td><input type="submit" value="save" name="action" ></td>
            <td></form></td>
        </tr>
        <tr>
            <td>
            <th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image</th>
            <th>IS Active</th><th>vendor</th><th>Edit Date</th><th>saving</th>
            </td>
        </tr>
    <?php foreach ($items as $item) : ?>
        <?php $editable = canEdit(); ?>
        <tr class="edit-item">
            <td><form method="POST" action="<?= $_SERVER['PHP_SELF']?>" ></td>
                    <td><input type="text" name="id" <?=$editable;?> value="<?= $item['id']?>" ></td>
                    <td><input type="text" name="name" <?=$editable;?> value="<?= $item['name']?>" ></td>
                    <td>
                        <textarea type="text" name="description" cols="40" rows="3"<?=$editable;?> ><?=
                            $item['description']?></textarea>
                    </td>
                    <td><input type="text" name="price" <?=$editable;?> value="<?= $item['price']?>" ></td>
                    <td><input type="text" name="image" <?=$editable;?> value="<?= $item['image']?>" ></td>
                    <td><input type="text" name="is_active" <?=$editable;?> value="<?= $item['is_active']?>" ></td>
                    <td><input type="text" name="vendor" <?=$editable;?> value="<?= $item['vendor']?>" ></td>
                    <td><input type="text" name="edit_date" <?=$editable;?> disabled value="<?= $item['edit_date']?>"></td>
                    <td><input type="submit" value="save" name="action" <?=$editable;?> ></td>
            <td></form></td>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>