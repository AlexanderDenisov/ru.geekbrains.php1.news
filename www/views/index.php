<html>
<!-- Вывод превью всех новостей -->

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
        <tr>
            <th><BR></th>
        </tr>
        <?php foreach ($items as $item): ?>
            <tr>
                <td><?php echo $item['date']; ?></td>
                <td><?php echo $item['title']; ?></td>
                <td><?php $home = $item['path'];
                    if (is_readable(__DIR__ . "/../$home")) {
                    $homepage = file_get_contents(__DIR__ . "/../$home", NULL, NULL, 0, 140);
                    echo $homepage; ?><br><a href="/fullnews.php/?id=<?php echo $item['id']; ?>">читать новость
                        полностью >> </a></td>
                <?php } else {
                    echo 'Файл не доступен для чтения.';
                } ?>
            </tr>
        <?php endforeach; ?>
        </tr>
    </table>
</center>
<!-- <a href="/add.php">Добавить новость</a> -->
<?php include __DIR__ . '/form.php'; ?>

</body>
</html>
