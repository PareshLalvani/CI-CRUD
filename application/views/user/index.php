<table border="1" width="100%">
    <tr>
		<th>ID</th>
		<th>Password</th>
		<th>Name</th>
		<th>Email</th>
		<th>Mobile</th>
		<th>Gender</th>
		<th>Created At</th>
		<th>Updated At</th>
		<th>Actions</th>
    </tr>
	<?php foreach($users as $u){ ?>
    <tr>
		<td><?php echo $u['id']; ?></td>
		<td><?php echo $u['password']; ?></td>
		<td><?php echo $u['name']; ?></td>
		<td><?php echo $u['email']; ?></td>
		<td><?php echo $u['mobile']; ?></td>
		<td><?php echo $u['gender']; ?></td>
		<td><?php echo $u['created_at']; ?></td>
		<td><?php echo $u['updated_at']; ?></td>
		<td>
            <a href="<?php echo site_url('user/edit/'.$u['id']); ?>">Edit</a> | 
            <a href="<?php echo site_url('user/remove/'.$u['id']); ?>">Delete</a>
        </td>
    </tr>
	<?php } ?>
</table>
<div class="pull-right">
    <?php echo $this->pagination->create_links(); ?>    
</div>
