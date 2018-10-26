<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>User Id</th>
		<th>Title</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th>Content</th>
		<th>Actions</th>
    </tr>
	<?php foreach($posts as $p){ ?>
    <tr>
		<td><?php echo $p['id']; ?></td>
		<td><?php echo $p['user_id']; ?></td>
		<td><?php echo $p['title']; ?></td>
		<td><?php echo $p['created_at']; ?></td>
		<td><?php echo $p['updated_at']; ?></td>
		<td><?php echo $p['content']; ?></td>
		<td>
            <a href="<?php echo site_url('post/edit/'.$p['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('post/remove/'.$p['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
