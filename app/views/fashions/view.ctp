<?php
//pr($post);
//pr($comments);
?>
<div class="widget_804">
    <div class="sos_div content-div">
        <div class="title">
            <h2>Discussion</h2>
            <?php echo $this->Html->image("drop-down.png", array("alt" => "drop", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
        </div>
        <div class="info">
            <div class="heading">
                <?php echo $this->Html->image("center-profile-pic.jpg"); ?>
                <div class="inner-heading">
                    <div class="left">
                        <p><?php echo $post['User']['name'] ?></p>
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

            <div class="option-menu">
                <nav class="options">
                    <ul>
                        <li><?php echo $this->Html->image("comment-icon.png", array("alt" => "profile", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?></li>

                        <li><?php echo $this->Html->image("share-icon.png", array("alt" => "profile", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?></li>
                        <li><?php echo $this->Html->image("like-icon.png", array("alt" => "profile", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>
    <?php foreach ($comments as $comment) { ?>                       
        <div class="sos_div content-div">
            <div class="title">
                <?php echo $this->Html->image("drop-down.png", array("alt" => "drop", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
            </div>
            <div class="info">
                <div class="heading diff_heading">
                    <?php echo $this->Html->image("center-profile-pic.jpg"); ?>
                    <div class="inner-heading">
                        <div class="left">
                            <p><?php echo $comment['User']['name']; ?>&nbsp<span>,<?php echo $comment['User']['role']; ?></span></p>

                        </div>
                        <div class="right">
                            <span>1 hour ago</span>  
                        </div>
                        <div class="content">
                            <p>
                                <?php echo $comment['Post']['post']; ?>
                            </p>
                        </div>

                    </div>
                </div>


                <div class="option-menu">
                    <nav class="options">
                        <ul>
                            <li><?php echo $this->Html->image("comment-icon.png", array("alt" => "profile", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?></li>

                            <li><?php echo $this->Html->image("share-icon.png", array("alt" => "profile", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?></li>
                            <li><?php echo $this->Html->image("like-icon.png", array("alt" => "profile", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?></li>
                        </ul>
                    </nav>

                </div>
            </div>
        </div>

    <?php }
    ?>
    <div class="add-comment">
        <textarea></textarea>
        <input type="button" class="button" value="Post a comment">
    </div>
</div>