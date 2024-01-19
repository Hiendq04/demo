<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Danh sách người dùng</title>
</head>
<body>
    <table>
        <tr>
            <th>ID</th>
            <th>userName</th>
            <th>telephone</th>
        </tr>
        <?php foreach($users as $user): ?>
            <tr>
                <td><?=$user['id']?></td>
                <td><?=$user['userName']?></td>
                <td><?=$user['telephone']?></td>
            </tr>
        <?php endforeach ?>
    </table>
</body>
</html>