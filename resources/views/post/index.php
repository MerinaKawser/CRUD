<!DOCTYPE html>
<html lang="en">
	<head>
		<title>user list</title>
	</head>
	<body>
		<a href="<?php echo url('post/insert');?> " >insert</a>
		<table>
			<tr>
				<th>ID</th>
				<th>Name</th>
				<th>Gmail</th>
				<th>Address<th>
			</tr>
			<tr><?php foreach($showData as $show){?>
				<td><?php echo $show->id ?></td>
				<td><?php echo $show->full_name ?></td>
				<td><?php echo $show->email ?></td>
				<td><?php echo $show->address ?></td>
			</tr>
			<?php } ?>
		</table>
	</body>
</html>