<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table>
        <thead>
            <tr>
                <th>Id</th>
                <th>Name</th>
                <th>Gender</th>
                <th>email</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $genderSort = array_column($staffs, 'gender');
            array_multisort($genderSort, SORT_ASC, $staffs);
            // var_dump($staffs);
            $test = 20;

            $cnt = count(array_filter($staffs, function ($element) {
                return $element['gender'] == 1;
            }));

            echo "The female number is ".$cnt."<hr>";
            ?>

            <tr>
                <?php foreach ($staffs as [$id, $name, $gender, $email]) : ?>
            <tr>
                <td><?= $id ?></td>
                <td><?= $name  ?></td>
                <td><?= $gender ? 'female' : 'male' ?></td>
                <td><?= $email ?></td>
            </tr>
        <?php endforeach ?>
        </tr>

        </tbody>
    </table>

</body>

</html>