<?php foreach ($this->qa_libs->user() as $user): ?>
<div class="app-bar-element place-right">
	<img src="<?php echo pic_user($user->image); ?>" class="pic-user">
    <a class="dropdown-toggle fg-white"><?php echo $user->username; ?></a>
	    <ul class="app-bar-drop-container d-menu place-right" data-role="dropdown">
	        <li><a href="<?php echo base_url('create'); ?>"> New Question</a></li>
	        <li class="divider"></li>
	        <li><a href="<?php echo base_url('user/' . $user->username); ?>"> My Profile</a></li>
	        <li><a href="<?php echo base_url('auth/account'); ?>"> Account</a></li>
	        <li><a href="<?php echo base_url('log/out'); ?>" class="fg-magenta"> Logout</a></li>
	        
	    </ul>
</div>
<?php endforeach ?>