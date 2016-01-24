<!doctype html>
<html lang="zh-cn">
<head>
	<meta charset="utf-8"></meta>
</head>
<body>
	<a href=<?php echo dirname($_SERVER['PHP_SELF'])."/admin/addact"?>>新建活动</a>
	<table border="1">
	<tr>
		<?php
		echo "<th>序号</th>";
		foreach ($field as $key => $value) {
			echo "<th>".$value."</th>";
		}
		echo "<th>操作</th>"
		?>
	</tr>
	<?php 
	foreach ($data as $key => $value) {
		echo "<tr>";
		echo "<td>".($key+1)."</td>";
		echo "<td>".$value['title']."</td>";
		echo "<td>".$value['description']."</td>";
		echo "<td>".$value['createtime']."</td>";
		echo "<td>".$value['deadline']."</td>";
		echo "<td>".$value['status']."</td>";
		echo "<td>
		<a href='".dirname($_SERVER['PHP_SELF'])."/admin/editact?actID=".$value['actID']."'>编辑</a>
		<a href='".dirname($_SERVER['PHP_SELF'])."/admin/getpros?actID=".$value['actID']."'>输入项</a>
		<a href='".dirname($_SERVER['PHP_SELF'])."/admin/deleteact?actID=".$value['actID']."'>删除</a>
		</td>";
		echo "</tr>";
	}
	?>
	</table>
</body>
</html>