<?php
session_start();

require_once __DIR__ . '/db-conf.php';
require_once __DIR__ . '/libs.php';

if (isAuthorized() !== true) {
    header('LOCATION: ./registration.php');
}

$link = connect();
$update = updateProducts($link);
//echo $update;
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
    <nav id="nav">
        <ul>
            <li><a href="logout.php"> Logout(<?=getName(); ?>)</a></li>
        </ul>

    </nav>
    <table id="table-products">
    <?php $userCanAdd = canAdd(); ?>

        <tr class="add-item <?=$userCanAdd; ?>">
            <form method="POST" action="<?= $_SERVER['PHP_SELF']?>" >
                <td>Add new item</td>
                <td><input type="text" name="name" value=""></td>
                <td>
                            <textarea type="text" name="description" cols="40" rows="2" ></textarea>
                </td>
                <td><input type="text" name="price" value="" ></td>
                <td><input type="text" name="image"  value="" ></td>
                <td <?=classAdd($userCanAdd); ?>><input type="text" name="is_active" value="" ></td>
                <td><input type="text" name="vendor"  value="" ></td>
                <td></td>
                <td><input type="submit" value="save" name="action" ></td>
            </form>
        </tr>
        <tr>
            <th>ID</th><th>Name</th><th>Description</th><th>Price</th><th>Image</th>
            <th <?=classAdd($userCanAdd); ?>>IS Active</th><th>vendor</th><th>Edit Date</th><th>saving</th>
        </tr>
        <tr>
            <form method="GET" action="<?= $_SERVER['PHP_SELF']?>" >
                <td></td>
                <td></td>
                <td></td>
                <td colspan="2">
                    <label>Price range: </label>
                    <?=getPriceRange($link); ?><br>
                    <label>Price order: </label>
                    <select id="praice-order" name="price_order">
                        <option value="">not selected</option>
                        <option value="ASC">Asc</option>
                        <option value="DESC">Desc</option>
                    </select>
                </td>
                <td <?=classAdd($userCanAdd); ?>></td>
                <td><?=getVendors($link); ?></td>
                <td></td>
                <td><input type="submit" value="filter" name="filter" ></td>
            </form>
        </tr>
    <?php foreach ($items as $item) : ?>
        <?php $editable = canEdit(); ?>
        <tr class="edit-item">
            <form method="POST" action="<?= $_SERVER['PHP_SELF']?>" >
                    <td><input class="width--30" type="text" name="id" <?=$editable;?> value="<?= $item['id']?>" ></td>
                    <td><input type="text" name="name" <?=$editable;?> value="<?= $item['name']?>" ></td>
                    <td>
                        <textarea type="text" name="description" cols="40" rows="3"<?=$editable;?> ><?=
                            $item['description']?></textarea>
                    </td>
                    <td><input type="text" name="price" <?=$editable;?> value="<?= $item['price']?>" ></td>
                    <td><input type="text" name="image" <?=$editable;?> value="<?= $item['image']?>" ></td>
                    <td <?=classAdd($userCanAdd);?>>
                        <input type="text" name="is_active" <?=$editable;?> value="<?= $item['is_active']?>" >
                    </td>
                    <td><input type="text" name="vendor" <?=$editable;?> value="<?= $item['vendor']?>" ></td>
                    <td><input type="text" name="edit_date" <?=$editable;?> disabled value="<?= $item['edit_date']?>"></td>
                    <td><input type="submit" value="save" name="action" <?=$editable;?> ></td>
            </form>
        </tr>
    <?php endforeach; ?>
    </table>
</body>
</html>