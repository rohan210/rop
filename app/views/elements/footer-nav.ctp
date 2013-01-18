<ul class="sf-menu">
    <li><?php echo $this->Html->image("home-icon.png", array("alt" => "logo", 'url' => array('controller' => 'fashions', 'action' => 'index'))); ?></li>
    <li><a href="#">Pink-Me-Up</a></li>
    <li><a href="#">Shopping</a></li>
    <li><?php echo $this->Html->link('Fashion',array('controller'=>'fashions','action'=>'index')); ?></li>
    <li><?php echo $this->Html->link('Education',array('controller'=>'educations','action'=>'index')); ?></li>
    <li><?php echo $this->Html->link('Cooking',array('controller'=>'cookings','action'=>'index')); ?></li>
    <li><?php echo $this->Html->link('Gossip',array('controller'=>'gossips','action'=>'index')); ?></li>
    <li><a href="#">Events</a></li>
    <li><?php echo $this->Html->link('Health',array('controller'=>'healths','action'=>'index')); ?></li>
    <li><?php echo $this->Html->link('Emotion',array('controller'=>'emotions','action'=>'index')); ?></li>
    <li><?php echo $this->Html->link('Seniors',array('controller'=>'seniors','action'=>'index')); ?></li>
    <li><?php echo $this->Html->link('Nature',array('controller'=>'natures','action'=>'index')); ?></li>
    <li><?php echo $this->Html->link('Juniors',array('controller'=>'juniors','action'=>'index')); ?></li>
</ul>