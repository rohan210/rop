<!DOCTYPE html>
<html>
    <head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>ROP :: Index Page</title>

    <?php echo $this->Html->script('jquery');?>
    <!-- Scripts -->
    <!--[if lt IE 9]>
    
    <?php echo $this->Html->css('ie'); ?>
    <?php echo $this->Html->script('modernizr');?>
 		
	<![endif]--> 	
    <?php echo $this->Html->css(array('reset','main','fonts/fonts','super-fish')); ?>
    
</head>
    <body>
        <div id="pagewidth">
            <div class="two-col">
                <div class="left-col">
                    <div class="logo">
                        <?php echo $this->Html->image("logo.png", array("alt" => "logo",'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
                        
                    </div>
                    <div class="left-info">
                        <div class="pink-title"><p>NEWS FEED</p></div>
                        <ul class="short-profile">
                            <li>
                                
                                <?php echo $this->Html->image("left-profile-pic.jpg", array("alt" => "profile",'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
                                <a href="#"><h4>Lorum Ipsum euismod</h4></a>
                                <a href="#"><p>is a mayor of Education</p></a>
                            </li>
                            <li>
                                <?php echo $this->Html->image("left-profile-pic.jpg", array("alt" => "profile",'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
                                <a href="#"> <h4>Lorum Ipsum euismod</h4></a>
                                <a href="#"><p>scored highest points in Cooking</p></a>
                            </li>
                            <li>
                                <?php echo $this->Html->image("left-profile-pic.jpg", array("alt" => "profile",'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
                               <a href="#"><h4>Lorum Ipsum euismod</h4></a>
                                <a href="#"><p>scored highest points in Cooking</p></a>
                            </li>
                            <li>
                                <?php echo $this->Html->image("left-profile-pic.jpg", array("alt" => "profile",'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
                                <a href="#"><h4>Lorum Ipsum euismod</h4></a>
                                <a href="#"><p>scored highest points in Cooking</p></a>
                            </li>
                            <li>
                                <?php echo $this->Html->image("left-profile-pic.jpg", array("alt" => "profile",'url' => array('controller' => 'fashions', 'action' => 'index'))); ?>
                                <a href="#"><h4>Lorum Ipsum euismod</h4></a>
                                <a href="#"><p>scored highest points in Cooking</p></a>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <div class="right-col">
                    <div class="widget_577">
                        <div class="search">
                            <input type="button" class="search_button" value="&nbsp;">
                            <input type="search" class="text">
                        </div>
                        <div class="second-row">
                            <?php echo $this->element('top-nav'); ?>
                            <?php echo $this->Session->flash(); ?>
                            </div> 
                        <?php echo $content_for_layout ?>
                        
                    </div>
                    <div class="widget_195">
                        <div class="top-info">
                            
                            <?php echo $this->Html->image("small-profile.jpg"); ?>
                            <p><?php echo $this->Session->read('User.User.username'); ?></p>
                            <span><?php echo $this->Session->read('User.User.role'); ?></span>
                        </div>
                        <div class="right-board">
                            <h3>bulletin board</h3>
                            
                            <?php echo $this->Html->image("map-board.jpg"); ?>
                        </div>
                        <div class="advertisement">
                            
                            <?php echo $this->Html->image("ad.jpg"); ?>
                        </div>
                        <div class="right-bottom">
                            
                            <?php echo $this->Html->image("passport-book.png"); ?>
                            <a href="#" class="notification"><span>1</span></a>
                        </div>
                    </div>
                </div>
                <nav class="main-menu">
                    <?php echo $this->element('footer-nav'); ?>
                
            </nav>
            </div>   
        </div>
        
        <?php echo $this->element('sql_dump'); ?>
    </body>
</html>
