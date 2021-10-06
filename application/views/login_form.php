<?php echo form_open('/user/login'); ?> 
    <label for="username">Username</label>
    <input type="username" value="<?php echo set_value('username'); ?>" id="username" name="username" placeholder="username">
    <?php echo form_error('email'); ?>

    <label for="password">Password</label>
    <input type="password" name="password" id="Inputdatapwd" placeholder="password">
    <?php echo form_error('password'); ?>

<button type="submit" class="btn btn-success">Sign In</button>
<?php echo $this->session->flashdata('login_error'); ?>

<?php form_close(); ?>