<h1>Портфолио</h1>
<p>
    <table>
    Все проекты в следующей таблицы являются вымыщленными, поэтому даже не пытайтесь перейти по приведённым ссылкам.
    <tr><td>Год</td><td>Проект</td><td>Описание</td></tr>
    <?php
    foreach ($data as $row)
    {
        echo '<tr><td>'.$row['Year'].'</td><td>'>$row['Site'].'</td><td>'.$row['Description'].'</td></tr>';
    }
    ?>
</table>
</p>