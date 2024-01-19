<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách sản phẩm</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Desciption</th>
            <th>Price</th>
            <th>Status</th>
        </tr>
        <?php foreach ($products as $product): ?>
            <tr>
                <td><?=$product['id']?></td>
                <td><?=$product['name']?></td>
                <td><?=$product['description']?></td>
                <td><?=$product['price']?></td>
                <td><?=$product['status']?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>