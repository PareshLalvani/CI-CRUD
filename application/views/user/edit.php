<?php echo form_open('user/edit/'.$user['id']); ?>

	<div>
		<span class="text-danger">*</span>Password : 
		<input type="password" name="password" value="<?php echo ($this->input->post('password') ? $this->input->post('password') : $user['password']); ?>" />
		<span class="text-danger"><?php echo form_error('password');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Name : 
		<input type="text" name="name" value="<?php echo ($this->input->post('name') ? $this->input->post('name') : $user['name']); ?>" />
		<span class="text-danger"><?php echo form_error('name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Email : 
		<input type="text" name="email" value="<?php echo ($this->input->post('email') ? $this->input->post('email') : $user['email']); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Mobile : 
		<input type="text" name="mobile" value="<?php echo ($this->input->post('mobile') ? $this->input->post('mobile') : $user['mobile']); ?>" />
		<span class="text-danger"><?php echo form_error('mobile');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Gender : 
		<input type="text" name="gender" value="<?php echo ($this->input->post('gender') ? $this->input->post('gender') : $user['gender']); ?>" />
		<span class="text-danger"><?php echo form_error('gender');?></span>
	</div>
	<div>
		Created At : 
		<input type="text" name="created_at" value="<?php echo ($this->input->post('created_at') ? $this->input->post('created_at') : $user['created_at']); ?>" />
	</div>
	<div>
		Updated At : 
		<input type="text" name="updated_at" value="<?php echo ($this->input->post('updated_at') ? $this->input->post('updated_at') : $user['updated_at']); ?>" />
	</div>
	
	<button type="submit">Save</button>
	
<?php echo form_close(); ?>