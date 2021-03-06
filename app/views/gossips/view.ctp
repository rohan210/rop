<?php
//pr($post);
//pr($comments);
?>
<div class="widget_804">
    <div class="sos_div content-div">
        <div class="title">
            <h2><?php echo $post['PostDetail']['type'];?></h2>
            <?php //echo $this->Html->image("drop-down.png", array("alt" => "drop", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?>
        </div>
        <div class="info">
            <div class="heading">
                <?php echo $this->Html->image("center-profile-pic.jpg"); ?>
                <div class="inner-heading">
                    <div class="left">
                        <p><?php echo $post['User']['username'] ?></p>
                        <span><?php echo $post['User']['role'] ?></span>
                    </div>
                    <div class="right">
                        <p><?php echo $post['PostDetail']['related_to']; ?></p>
                        <span>1 hour ago</span>  
                    </div>
                </div>
            </div>
            <div class="content">
                <h4><?php echo $post['Post']['topic']; ?></h4>
                <p><?php echo $post['Post']['post']; ?></p>

            </div>
            <div class="notification-div">
                <ul class="counting">
                                        <li><span><?php echo $comments=count($post['Comment']);?></span></li>
                                        <li><span><?php echo $post['PostDetail']['total_views'];?></span></li>
                                        <li><span><?php echo $post['PostDetail']['total_shares'];?></span></li>
                                        <li><span><?php echo $beats=count($post['Heartbeat']); ?></span></li>
                                    </ul>

            <div class="option-menu">
                <nav class="options">
                    <ul>
                        <li><?php echo $this->Html->image("comment-icon.png", array("alt" => "profile", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?></li>

                        <li><?php echo $this->Html->image("share-icon.png", array("alt" => "profile", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?></li>
                        <li><?php echo $this->Html->image("beat-off.png", array("alt" => "profile", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?></li>
                    </ul>
                </nav>
            </div>
            </div>
        </div>
    </div>
    <?php foreach ($comments as $comment) {?>                       
        <div class="sos_div content-div">
            <div class="title">
                <?php echo $this->Html->image("drop-down.png", array("alt" => "drop", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?>
            </div>
            <div class="info">
                <div class="heading diff_heading">
                    <?php echo $this->Html->image("center-profile-pic.jpg"); ?>
                    <div class="inner-heading">
                        <div class="left">
                            <p><?php echo $comment['User']['username'];?>&nbsp<span>,<?php echo $comment['User']['role'];?></span></p>

                        </div>
                        <div class="right">
                            <span>1 hour ago</span>  
                        </div>
                        <div class="content">
                            <p>
                               <?php echo $comment['Comment']['comment'];?>
                            </p>
                        </div>

                    </div>
                </div>


                <div class="option-menu">
                    <nav class="options">
                        <ul>
                            <li><?php echo $this->Html->image("comment-icon.png", array("alt" => "profile", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?></li>

                            <li><?php echo $this->Html->image("share-icon.png", array("alt" => "profile", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?></li>
                            <li><?php echo $this->Html->image("beat-off.png", array("alt" => "profile", 'url' => array('controller' => 'gossips', 'action' => 'index'))); ?></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>

    <?php }
    ?>
    <div class="add-comment">
        <?php
        
        echo $form->create('Comment', array('url' => array('controller' => 'gossips', 'action' => 'add_comment')));
        echo $form->hidden('post_id', array('value' => $post['Post']['id']));
        echo $form->hidden('topic', array('value' => $post['Post']['topic']));
        echo $form->hidden('user_id', array('value' => $this->Session->read('User.User.id')));

        echo $form->input('post', array('type' => 'textarea', 'div' => false, 'label' => false));

        echo $form->submit("Comment", array('class' => 'button', 'div' => false));
        ?>
    </div>
</div>