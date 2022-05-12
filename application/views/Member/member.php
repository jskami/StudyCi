<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>멤버</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>아이디</th>
                <th>이름</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach($member as $id => $name) :?>
                <tr>
                    <td><?=$id?></td>
                    <td><?=$name?></td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>