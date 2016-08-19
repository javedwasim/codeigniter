<h2>My magazines</h2>
<h4 class="alert-success">Welcome <?php echo $username; ?>!</h4>
<?php echo anchor('magazine/logout/','Logout');  ?>
<?php
$this->table->set_heading('Publication', 'Issue', 'Date', 'Cover', 'Actions');
echo $this->table->generate($magazines);
echo $this->pagination->create_links($magazines);
