<html>
<!-- Просмотр отдельной новости полностью -->

<head>
</head>
<body>
<table>
    <tr>
        <th>Дата</th>
        <th>Название</th>
        <th>Текст новости</th>
    </tr>
    <tr>
        <th><BR></th>
    </tr>
    <?php foreach ($full_news as $full_new): ?>
        <tr>
            <td><?php echo $full_new['date']; ?></td>
            <td><?php echo $full_new['title']; ?></td>
            <td><?php $home = $full_new['path'];
                if (is_readable(__DIR__ . "/../$home")) {
                $homepage = file_get_contents(__DIR__ . "/../$home");
                echo $homepage; ?><br><a href="/index.php/">Назад << </a></td>
            <?php } else {
                echo 'Файл не доступен для чтения.';
            } ?>
        </tr>
    <?php endforeach; ?>
    </tr>
</table>
</body>
</html>