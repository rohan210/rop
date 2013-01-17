<?php
foreach ($posts as $post) {
?>
    <div class="sos_div content-div">
        
        <div class="title">
            <h2>Discussion</h2>
            <?php echo $this->Html->image("drop-down.png", array("alt" => "drop", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?>

        </div>
        <div class="info">
            <div class="heading">

                <?php echo $this->Html->image("center-profile-pic.jpg"); ?>
                <div class="inner-heading">
                    <div class="left">
                        <p><?php echo $post['User']['name'];?></p>
                        <span><?php echo $post['User']['role'];?></span>
                    </div>
                    <div class="right">
                        <p><?php echo $post['PostDetail']['related_to'];?></p>
                        <span>25 min ago</span>  
                    </div>
                </div>
            </div>
            <div class="content">
                <p><?php echo $post['Post']['topic'];?></p>
                <?php echo $this->Html->link('Read More',array('controller'=>'natures','action'=>'view',$post['Post']['id'])); ?>
            </div>
            <div class="option-menu">
                <nav class="options">
                    <ul>
                        <li><?php echo $this->Html->image("comment-icon.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></li>
                        <li><?php echo $this->Html->image("icon-02.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></li>
                        <li><?php echo $this->Html->image("share-icon.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></li>
                        <li><?php echo $this->Html->image("like-icon.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></li>
                    </ul>
                </nav>

            </div>
        </div>
    </div>

<?php }
?>
<!--
<div class="sos_div content-div">
    <div class="title">
        <h2>Expert Advice</h2>

<?php echo $this->Html->image("drop-down.png", array("alt" => "drop", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?>
    </div>
    <div class="info">
        <div class="heading">
<?php echo $this->Html->image("center-profile-pic.jpg"); ?>
            <div class="inner-heading">
                <div class="left">
                    <p>Chaitali Adelkar</p>
                    <span>Civilian</span>
                </div>
                <div class="right">
                    <p>Cooking</p>
                    <span>25 min ago</span>  
                </div>
            </div>
        </div>
        <div class="content">
            <h4>Lorem ipsum dolor</h4>
            <p>consectetuer adipiscing elit, sed diam nonummy nibh euismod 
                tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ?</p>
        </div>
        <div class="comment-div">
            <ul>
                <li>
<?php echo $this->Html->image("center-profile-pic.jpg"); ?>
                    <h3>Lorum Ipsum  euismod</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </li>
                <li>
<?php echo $this->Html->image("center-profile-pic.jpg"); ?>
                    <h3>Lorum Ipsum  euismod</h3>
                    <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. 
                        Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit.</p>
                </li>
            </ul>
            <a href="#">View more comments</a>
        </div>
        <div class="option-menu">
            <nav class="options">
                <ul>
                    <li><?php echo $this->Html->image("comment-icon.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></a>
                        <ul class="points">
                            <li>
                                <a href="#"><span>23 Comments</span></a>
                            </li>
                        </ul>
                    </li>
                    <li><?php echo $this->Html->image("icon-02.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></li>
                    <li><?php echo $this->Html->image("share-icon.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></li>
                    <li><?php echo $this->Html->image("like-icon.png", array("alt" => "profile", 'url' => array('controller' => 'natures', 'action' => 'index'))); ?></li>
                </ul>
            </nav>

        </div>
    </div>
</div>
-->
<table class="list">
                        <thead>
                            <tr>
                                <td class="left" width="20px">
                                    
                                <td class="center">
 
    <?php echo $this->Paginator->prev(' << ' . __('Previous'), array(), null, array('class' => 'prev disabled'));?>   
               
               ||
               
    <?php echo $this->Paginator->numbers(array('first' => 'First page'));?>                
                
               ||
      
     
    <?php echo $this->Paginator->next(' >> ' . __('Next'), array(), null, array('class' => 'next disabled'));?>
               
</td>
                    
                </tr>
            </thead>
</table>
