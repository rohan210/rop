<?php
class EducationsController extends AppController {
    var $name = 'Educations';
    var $components = array('Authsome','Session');
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
    public function add_comment() {
        //pr($this->Session);
        //echo $userId = $this->Authsome->get('id');
        $this->render(false);
        if (!empty($this->data)) {
            $this->Post->create();
            $this->data['Post'] = $this->data['Comment'];
            //pr($this->data);
            if ($this->Post->save($this->data)) {
                $postId = $this->Post->getInsertId();
                $data['PostDetail']['type'] = 'comment';
                $data['PostDetail']['post_id'] = $postId;
                $data['PostDetail']['related_id'] = $this->data['Post']['post_id'];
                
                $data['PostDetail']['related_to'] = 'fashion';
                $data['PostDetail']['status'] = 'active';
               // pr($data);
                $this->PostDetail->save($data);
            }
        }
    }
public function add_news() {
        if (!empty($this->data)) {
            $this->Post->create();
            $this->data['Post'] = $this->data['Education'];
            if ($this->Post->save($this->data)) {
                $postId = $this->Post->getInsertId();
                $data['PostDetail']['type'] = 'news';
                $data['PostDetail']['post_id'] = $postId;
                $data['PostDetail']['related_to'] = 'education';
                $data['PostDetail']['status'] = 'active';
                $this->PostDetail->save($data);
            }
        }
    }
    
    public function add_sos() {
        if (!empty($this->data)) {
            $this->Post->create();
            $this->data['Post'] = $this->data['Education'];
            if ($this->Post->save($this->data)) {
                $postId = $this->Post->getInsertId();
                $data['PostDetail']['type'] = 'sos';
                $data['PostDetail']['post_id'] = $postId;
                $data['PostDetail']['related_to'] = 'education';
                $data['PostDetail']['status'] = 'active';
                $this->PostDetail->save($data);
            }
        }
    }
    
    public function add_expert_advice() {
        if (!empty($this->data)) {
            $this->Post->create();
            $this->data['Post'] = $this->data['Education'];
            if ($this->Post->save($this->data)) {
                $postId = $this->Post->getInsertId();
                $data['PostDetail']['type'] = 'advice';
                $data['PostDetail']['post_id'] = $postId;
                $data['PostDetail']['related_to'] = 'education';
                $data['PostDetail']['status'] = 'active';
                $this->PostDetail->save($data);
            }
        }
    }


    public function index() {
        $this->layout = 'three-column';
      //  $posts = $this->Post->find('all', array('conditions' => array('PostDetail.related_to' => 'education')));
         $this->paginate = array(
        'conditions' => array('PostDetail.related_to' => 'education'),
        'limit' =>6
    );
      $posts = $this->paginate('Post');
      
        $this->set('posts', $posts);

    }
 public function discussions() {
        $this->layout = 'three-column';
       // $posts = $this->Post->find('all', array('conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'discussion')));
        $this->paginate = array(
        'conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'discussion'),
            'limit' =>4
            );
        
           $posts = $this->paginate('Post');

        $this->set('posts', $posts);
        $this->set('type', 'discussion');
    }
    
    public function news() {
        $this->layout = 'three-column';
       // $posts = $this->Post->find('all', array('conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'news')));
        $this->paginate = array(
        'conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'news'),
            'limit' =>4
            );
        
           $posts = $this->paginate('Post');

        $this->set('posts', $posts);
        $this->set('type', 'news');
    }
    
    public function SOS() {
        $this->layout = 'three-column';
       // $posts = $this->Post->find('all', array('conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'sos')));
        $this->paginate = array(
        'conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'sos'),
            'limit' =>4
            );
        
           $posts = $this->paginate('Post');

        $this->set('posts', $posts);
        $this->set('type', 'sos');
    }
    
    public function expert_advice() {
        $this->layout = 'three-column';
       // $posts = $this->Post->find('all', array('conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'advice')));
        $this->paginate = array(
        'conditions' => array('PostDetail.related_to' => 'education','PostDetail.type' => 'advice'),
            'limit' =>4
            );
        
           $posts = $this->paginate('Post');

        $this->set('posts', $posts);
        $this->set('type', 'advice');
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