<header class="app-bar fixed-top" data-role="appbar">
    <div class="container">
        <a href="<?php echo base_url(); ?>" class="app-bar-element branding"> <?php echo $this->config->item('web_name'); ?></a>
        
        <ul class="app-bar-menu">
            <li>
                <a href="" class="dropdown-toggle"> Menu</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url('questions'); ?>">Questions</a></li>
                    
                </ul>
            </li>
            <li>
                <a href="" class="dropdown-toggle">Category/Tags</a>
                <ul class="d-menu" data-role="dropdown">
                    <li><a href="<?php echo base_url('category'); ?>"> Category</a></li>
                    <li><a href="<?php echo base_url('tag'); ?>"> Tags</a></li>
                </ul>
            </li>
            <li>
                <a href="<?php echo base_url('user'); ?>"> All Users</a>
            </li>
        </ul>
        <?php  if ($this->qa_libs->logged_in()): ?>
            <?php $this->load->view('must/login'); ?>
        <?php else: ?>
            <?php $this->load->view('must/not_login'); ?>
        <?php endif ?>
    </div>
</header>
