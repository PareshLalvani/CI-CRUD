<?php echo form_open('post/add'); ?>

	<div>
		User : 
		<select name="user_id">
			<option value="">select user</option>
			<?php 
			foreach($all_users as $user)
			{
				$selected = ($user['id'] == $this->input->post('user_id')) ? ' selected="selected"' : "";

				echo '<option value="'.$user['id'].'" '.$selected.'>'.$user['id'].'</option>';
			} 
			?>
		</select>
	</div>
	<div>
		<span class="text-danger">*</span>Title : 
		<input type="text" name="title" value="<?php echo $this->input->post('title'); ?>" />
		<span class="text-danger"><?php echo form_error('title');?></span>
	</div>
	<div>
		Created At : 
		<input type="text" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" />
	</div>
	<div>
		Updated At : 
		<input type="text" name="updated_at" value="<?php echo $this->input->post('updated_at'); ?>" />
	</div>
	<div>
		<span class="text-danger">*</span>Content : 
		<textarea name="content"><?php echo $this->input->post('content'); ?></textarea>
		<span class="text-danger"><?php echo form_error('content');?></span>
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>