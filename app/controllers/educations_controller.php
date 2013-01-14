<?php
class EducationsController extends AppController {
    var $name = 'Educations';
    var $components = array('Auth','Session');
    var $helpers = array('Html', 'Form');
    var $uses = array('Post', 'PostDetail');
    var $layout = 'two-column';

    public function add_discussion() {
        if (!empty($this->data)) {
            $this->Post->create();
            $this->data['Post'] = $this->data['Education'];
            if ($this->Post->save($this->data)) {
                $postId = $this->Post->getInsertId();
                $data['PostDetail']['type'] = 'discussion';
                $data['PostDetail']['post_id'] = $postId;
                $data['PostDetail']['related_to'] = 'education';
                $data['PostDetail']['status'] = 'active';
                $this->PostDetail->save($data);
            }
        }
    }

    public function index() {
        $this->layout = 'three-column';
        $posts = $this->Post->find('all', array('conditions' => array('PostDetail.related_to' => 'education')));

        $this->set('posts', $posts);
    }

    public function view($id) {

        $post = $this->Post->find('first', array('conditions' => array('Post.id' => $id)));
        $this->set('post', $post);
        $comments = $this->Post->find('all', array('conditions' => array('type' => 'comment', 'PostDetail.related_id' => $id)));
        $this->set('comments', $comments);
    }

    public function edit_discussion($id=null) {
        $post = $this->Post->find('first', array('conditions' => array('Post.id' => $id)));
        //pr($post);
        $this->set('post', $post);
        if (!empty($this->data)) {
            
            
            $this->data['Post'] = $this->data['Education'];
            
            if ($this->Post->save($this->data)) {
                $this->Session->setFlash('Your post has been updated.');
                $this->redirect(array('action' => 'index'));
            }
        }
    }
    
    function delete($id) {
        $this->render(false);
    if ($this->Post->delete($id)) {
        $this->PostDetail->delete(array('post_id'=>$id));
        $this->Session->setFlash('The post has been deleted.');
        $this->redirect(array('action' => 'index'));
        
    }
}
}

?>