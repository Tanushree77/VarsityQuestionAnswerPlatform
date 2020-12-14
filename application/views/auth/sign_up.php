<title>Sign Up - <?php echo $this->config->item('web_name'); ?></title>
<style>
.footer {
    display: none;
}
</style>
<script>
$(function() {
    var form = $(".signup-form");
    form.css({
        opacity: 1,
        "-webkit-transform": "scale(1)",
        "transform": "scale(1)",
        "-webkit-transition": ".5s",
        "transition": ".5s"
    });
});
</script>
</head>
<body>
<body class="bg-darkTeal" style="padding-top: 3em;">
<div class="signup-form padding20 block-shadow">
    <?php echo form_open($this->uri->uri_string()); ?>
        <h1 class="text-light">Sign Up</h1>
        <hr class="thin">
        <br>
		<?php if (validation_errors()): ?>
			<div class="padding10 bg-red fg-white text-accent">
				<?php echo validation_errors(); ?>
			</div>
			<br>
		<?php endif ?>
        <div class="input-control text full-size" data-role="input">
            <label for="name">Name</label>
            <?php echo form_input('name', set_value('name'), 'placeholder="Your Full Name" autocomplete="off"'); ?>
            <button class="button helper-button clear"></button>
        </div>
        <br>
        <br>
        <div class="input-control text full-size" data-role="input">
            <label for="username">Username</label>
            <?php echo form_input('username', set_value('username'), 'placeholder="Your Username" autocomplete="off"'); ?>
            <button class="button helper-button clear"></button>
        </div>
        <br>
        <br>
        <div class="input-control text full-size" data-role="input">
            <label for="email">E-Mail</label>
            <?php echo form_input('email', set_value('email'), 'placeholder="Your E-Mail Address" autocomplete="off"'); ?>
            <button class="button helper-button clear"></button>
        </div>
        <br>
        <br>
        <div class="input-control text full-size" data-role="input">
            <label for="password">Password</label>
            <?php echo form_password('password', set_value('password'), 'placeholder="Your Password"'); ?>
            <button class="button helper-button reveal"></button>
        </div>
        <br>
        <br>
        <div class="input-control password full-size" data-role="input">
            <label for="passconf">Password Confirmation</label>
            <?php echo form_password('passconf', '', 'placeholder="Your Password Confirmation"'); ?>
            <button class="button helper-button reveal"></button>
        </div>
        <br>
        <br>
        <div class="form-actions">
            <div class="fc">
            	<button type="submit" class="button primary">Sign up</button>
            	<hr class="thin">
            	<a href="<?php echo base_url('log/in'); ?>" class="button success"> Log In</a>
            	
            </div>
        </div>
    <?php echo form_close(); ?>
</div>