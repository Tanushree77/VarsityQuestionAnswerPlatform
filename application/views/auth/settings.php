<?php foreach ($this->qa_libs->user() as $user): ?>
<title>Account - <?php echo $this->config->item('web_name'); ?></title>
</head>
<body>
<?php $this->load->view('must/menu'); ?>
    <div class="page-content">
        <div class="container">
            <div class="align-left" style="padding-top: 40px; padding-bottom: 10px;">
                <div class="grid">
                    <div class="row cells12">
                        <?php $this->load->view('auth/menu'); ?>
                        <div class="cell colspan9">
                            <div class="panel">
                                <div class="heading">
                                    
                                    <span class="title">Setting Information</span>
                                </div>
                                <div class="content messages">
                                    <div class="grid">
                                        <div class="row cells4">
                                            <div class="cell">
                                                <img src="<?php echo pic_user($user->image) ?>" data-role="fitImage" data-format="cycle">
                                            </div>
                                            <div class="cell colspan3">
                                                <h3><?php echo $user->name ?></h3>
                                                 <a href="<?php echo base_url('user/'. $user->username); ?>"><?php echo $user->username ?></a>
                                                <br>
                                                 <a href="mailto:<?php echo $user->email ?>"><?php echo $user->email ?></a>
                                            </div>
                                        </div>
                                    </div>
                                    <?php if (validation_errors()): ?>
                                        <div class="errors padding10 bg-red fg-white text-accent">
                                            <?php echo validation_errors(); ?>
                                        </div>
                                        <br>
                                    <?php endif ?>
                                    <?php echo form_open_multipart($this->uri->uri_string()); ?>
                                        <label for="subject">Name</label>
                                        <div class="input-control text full-size" data-role="input">
                                            <?php echo form_input('name', $user->name, 'autocomplete="off"'); ?>
                                        </div>
                                        <label for="subject">Web</label>
                                        <div class="input-control text full-size" data-role="input">
                                            <?php echo form_input('web', $user->web, 'autocomplete="off"'); ?>
                                        </div>
                                        <label for="subject">Location</label>
                                        <div class="input-control text full-size" data-role="input">
                                            <?php echo form_input('location', $user->location, 'autocomplete="off"'); ?>
                                        </div>
                                        <label for="subject">Picture</label>
                                        <div class="input-control file full-size" data-role="input">
                                            <?php echo form_upload('userfile'); ?>
                                            <button class="button"></button>
                                        </div>
                                        <label for="subject">Bio</label>
                                        <div class="input-control textarea full-size" data-role="input">
                                            <?php echo form_textarea('bio', $user->bio); ?>
                                        </div>
                                        <div class="form-actions">
                                            <div class="fc">
                                                <?php echo form_submit('submit', 'Update Account', 'class="button success large-button"'); ?>
                                                <?php echo form_reset('reset', 'Reset Field', 'class="button warning large-button"'); ?>
                                            </div>
                                        </div>
                                    <?php echo form_close(); ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>