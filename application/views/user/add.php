<?php echo form_open('user/add'); ?>

	<div>
		<span class="text-danger">*</span>Password : 
		<input type="password" name="password" value="<?php echo $this->input->post('password'); ?>" />
		<span class="text-danger"><?php echo form_error('password');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Name : 
		<input type="text" name="name" value="<?php echo $this->input->post('name'); ?>" />
		<span class="text-danger"><?php echo form_error('name');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Email : 
		<input type="text" name="email" value="<?php echo $this->input->post('email'); ?>" />
		<span class="text-danger"><?php echo form_error('email');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Mobile : 
		<input type="text" name="mobile" value="<?php echo $this->input->post('mobile'); ?>" />
		<span class="text-danger"><?php echo form_error('mobile');?></span>
	</div>
	<div>
		<span class="text-danger">*</span>Gender : 
		<input type="text" name="gender" value="<?php echo $this->input->post('gender'); ?>" />
		<span class="text-danger"><?php echo form_error('gender');?></span>
	</div>
	<div>
		Created At : 
		<input type="text" name="created_at" value="<?php echo $this->input->post('created_at'); ?>" />
	</div>
	<div>
		Updated At : 
		<input type="text" name="updated_at" value="<?php echo $this->input->post('updated_at'); ?>" />
	</div>
	
	<button type="submit">Save</button>

<?php echo form_close(); ?>