<h1>Портфолио</h1>
<p>
<table>
Все проекты в следующей таблице являются вымышленными, поэтому даже не пытайтесь перейти по приведенным ссылкам.
<tr><td>Год</td><td>Проект</td><td>Описание</td><td>Фото</td></tr>
<?php
 
	foreach($data as $row)
	{
		echo '<tr><td>'.$row['Year'].'</td><td>'.$row['Site'].'</td><td>'.$row['Description'].'</td><td><img src ="'.$row['photo'].'" width="25%"></td></tr>';
	}
	
?>
</table>
</p>

    
    
 <p>И эта <a href="#">ссылка</a> тоже пока не работает</p>
<?php
//phpinfo();
?>