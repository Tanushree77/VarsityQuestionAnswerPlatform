<title>Welcome to <?php echo $this->config->item('web_name'); ?></title>
</head>
<body>
<?php $this->load->view('must/menu'); ?>
    <div class="page-content">
        <div class="bg-lightBlue fg-white align-center">
            <div class="container">
                <div class="no-overflow land-bar">
                    <div class="padding10 sub-leader">
                        <?php echo $this->lang->line('welcome') ?>
                    </div>
                    <h1 class="text-shadow metro-title text-light land-bar-title"><?php echo $this->config->item('web_name') ?></h1>
                    <p class="padding10 land-bar-description">
                        <?php echo $this->config->item('description_home') ?>
                    </p>
                    <div class="margin50">
                        <div class="clear-float">
                            <a href="<?php echo base_url('create'); ?>"><button class="button block-shadow success"> Ask Question</button></a>
                        </div>
                    </div>
                   
                    <script>
                        $(function(){
                            setTimeout(function(){
                                $("#g1 .cell > div:eq(0)").animate({
                                    'margin-top': 0
                                }, 500, 'easeOutBounce');
                                $("#g1 .cell > div:eq(1)").animate({
                                    'margin-top': 0
                                }, 1000, 'easeOutBounce');
                                $("#g1 .cell > div:eq(2)").animate({
                                    'margin-top': 0
                                }, 1500, 'easeOutBounce');
                            }, 500);
                        });
                    </script>
                </div>
            </div>
        </div>
        <div class="fg-dark">
            <div class="container">
                
                <?php if (!empty($latest_question)): ?>
                <div class="latest-question">
                    <h2>Questions List</h2>
                    <hr class="thin">
                    <?php foreach ($latest_question as $lq): ?>
                    <section class="QuestionList">
                        <header class="QuestionList-header">
                            <img class="QuestionList-avatar" alt="" height="48" width="48" src="<?php echo pic_user($lq->image) ?>">
                            <h3 class="QuestionList-title">
                            <?php if (!empty($lq->answer_id)): ?>
                                <button class="cycle-button success" style="margin-right: 10px;" data-role="hint" data-hint-mode="2" data-hint="Answered|" data-hint-position="top"></button>
                            <?php endif ?>
                            <a href="<?php echo base_url('question/' . $lq->url_question) ?>"><?php echo $lq->subject ?></a></h3>
                            <p class="QuestionList-meta">
                                Posted by <a class="QuestionList-author" href="<?php echo base_url('user/' . $lq->username); ?>"><?php echo $lq->name ?></a> under <a class="QuestionList-category QuestionList-category-js" href="<?php echo base_url('category/'. uri_encode($lq->category_name)) ?>"><?php echo $lq->category_name ?></a> <?php echo ($lq->question_date) ?>  <?php echo $this->qa_model->count_where('answer', array('question_id' => $lq->id_question)) ?> Answers
                            </p>
                        </header>
                        <div class="QuestionList-description">
                            <p>
                                <?php echo qa_remove_html_limit($lq->description_question, 100) ?>
                            </p>
                        </div>
                        <div class="fl">
                            <b>Tags</b>
                            <?php foreach ($question_tag as $qt): ?>
                                <?php if ($qt->question_id === $lq->id_question): ?>
                                    <a href="<?php echo base_url('tag/' . uri_encode($qt->tag_name)); ?>"><span class="tag success"><?php echo $qt->tag_name ?></span></a>
                                <?php endif ?>
                            <?php endforeach ?>
                        </div>
                    </section>
                    <?php endforeach ?>
                </div>
                <?php endif ?>
            </div>
        </div>
    </div>