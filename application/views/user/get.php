<?php foreach ($user as $user): ?>
<title><?php echo $user->name ?> - <?php echo $this->config->item('web_name'); ?></title>
<link rel="stylesheet" href="<?php echo assets_css('style-nested.css'); ?>">
</head>
<body>
<?php $this->load->view('must/menu'); ?>
    <div class="container page-content" style="padding-top: 100px;">
        <div class="warapper-border" data-text="<?php echo $user->username ?>">
            <div class="grid">
                <div class="row cells6">
                    <div class="cell">
                        <img src="<?php echo pic_user($user->image) ?>" data-role="fitImage" data-format="cycle">
                    </div>
                    <div class="cell colspan5">
                        <div class="fl">
                            <h3><?php echo $user->name ?></h3> <span class="tag info"> <?php echo $user->role_name ?></span>
                             <a class="QuestionList-author" href="<?php echo base_url('user/' . $user->username); ?>"><?php echo $user->username ?></a>
                            ─
                             <?php echo mailto($user->email, NULL, 'class="QuestionList-author"') ?>
                            <p>Registered <?php echo ($user->user_date) ?></p>
                        </div>
                    </div>
                </div>
            </div>
            <?php if (!empty($user->bio)): ?>
            <div class="padding10">
                <p class="bg-grayLighter padding10" style="line-height: 25px;">
                    <?php echo $user->bio ?>
                </p>
            </div>
            <?php endif ?>
        </div>
        
    </div>
<?php endforeach ?>