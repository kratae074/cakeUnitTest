<table>
	<thead>
		<th>Title</th>
		<th>Category</th>
		<th>Posted by</th>
	</thead>
	<tbody>
	<?php foreach ($posts as $post) { ?>
		<td><?php echo $post['Post']['title']?></td>
		<td><?php echo $post['Category']['name']?></td>
		<td><?php echo $post['User']['username']?></td>
	<?php }?>
	</tbody>
</table>