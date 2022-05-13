<!-- Creating a view -->
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
            <?php foreach($member as $member) :?>
                <tr>
                    <td><?=$member->id?></td>
                    <td><?=$member->name?></td>
                    <br>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</body>
</html>

<!-- foreach를 사용하여 모델에서 가져온 데이터를 출력한다. -->