<html>
<!-- Это вью и логика вью. -->

<head>
</head>
<body>
<center>
    <table>
        <tr>
            <th>Дата</th>
            <th>Название</th>
            <th>Текст новости</th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['date']; ?></td>
                <td><?php echo $item['title']; ?></td>
                <td><img src="<?php echo $item['path']; ?>" style="max-width: 200px;"></img></td>
            </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</center>
<a href="/add.php">Добавить новость</a>
<?php include __DIR__ . '/form.php'; ?>

</body>
</html>