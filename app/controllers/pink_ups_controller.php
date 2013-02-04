<?php

class PinkUpsController extends AppController {

    var $name = 'PinkUps';
    var $components = array('Authsome', 'Session');
    var $helpers = array('Html', 'Form', 'Js' => array('Jquery'), 'Text','Time');
    var $uses = array('Post', 'PostDetail', 'Comment', 'Heartbeat', 'Advice', 'Reply', 'User');
    var $layout = 'two-column';

    public function beforeFilter() {
        parent::beforeFilter();
        $this->set('type', "");
    }

    public function index() {
        $this->layout = 'two-column';

        $this->paginate = array(
            'conditions' => array('PostDetail.type' => 'pink up'),
            'limit' => 5,'order'=>array('Post.created DESC')
        );
        $posts = $this->paginate('Post');
        //pr($posts);
        $this->set('posts', $posts);
        if (!empty($this->data)) {
            $this->Post->create();
            $this->data['Post'] = $this->data['Fashion'];
            if ($this->Post->save($this->data)) {
                $postId = $this->Post->getInsertId();
                $data['PostDetail']['type'] = 'discussion';
                $data['PostDetail']['post_id'] = $postId;
                $data['PostDetail']['related_to'] = 'fashion';
                $data['PostDetail']['status'] = 'active';
                //pr($data);
                $this->PostDetail->save($data);
            }
        }
    }

}

?>
