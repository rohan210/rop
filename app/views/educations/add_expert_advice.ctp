<div class="widget_804">
    <h1>Add Discussion</h1>
    <div class="sos_div content-div">
        <?php echo $form->create('Education', array('action' => 'add_expert_advice')); ?>
        <div class="title">
            <h2>Title</h2>
        </div>
        <div class="info">
            <div class="heading plain_textarea">
                <?php echo $form->input('topic', array('class' => 'height-40', 'type' => 'textarea', 'label' => false, 'div' => false)); ?>
            </div>
        </div>
    </div>

    <div class="sos_div content-div">
        <div class="title">
            <h2>Content</h2>
        </div>
        <div class="info">
            <div class="heading plain_textarea">
                
                <?php echo $form->input('post', array('type' => 'textarea', 'class' => 'height-233', 'div' => false, 'label' => false)); ?>
            </div>
        </div>
    </div>
    <div class="gray-buttons">
        <?php
        echo $form->hidden('user_id', array('value' => $this->Session->read('Auth.User.id'), 'type' => 'textarea'));
        echo $form->end(array('value'=>'create','class'=>'button','div'=>false));
        ?>
        
        <input type="button" value="Reset" class="button">
    </div>




</div>
