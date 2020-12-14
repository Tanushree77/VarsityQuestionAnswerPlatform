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
                                    
                                    <span class="title">User Profile</span>
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
                                    <table class="table hovered">
                                        <tbody>
                                            <tr>
                                                <td>Web</td>
                                                <td> <a href="<?php echo qa_domain($user->web) ?>" target="_blank"><?php echo $user->web ?></a></td>
                                            </tr>
                                            <tr>
                                                <td>Location</td>
                                                <td> <?php echo $user->location ?></td>
                                            </tr>
                                            <tr>
                                                <td>Registration</td>
                                                <td><?php echo ($user->user_date) ?></td>
                                            </tr>
                                            <tr>
                                                <td>Last Login</td>
                                                <td><?php echo ($user->last_login) ?></td>
                                            </tr>
                                           
                                            
                                        </tbody>
                                    </table>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php endforeach ?>