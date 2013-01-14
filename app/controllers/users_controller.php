<?php
    
    class UsersController extends AppController {
        var $helpers = array('Html','Form');
        var $components = array('Auth');

        /** comment */
        function beforeFilter() {
            $this->Auth->allow('register');
        }

        /** comment */
        function login() {

        }

        /** comment */
        function logout() {
            $this->redirect($this->Auth->logout());
        }

        function register() {
            $this->Auth->logout();
            if (!empty($this->data)) {
                $this->User->create();
                if ($this->User->save($this->data)) {
                    $this->Auth->login($this->data); // autologin
                    $this->redirect(array('action'=>'index'));
                } // fi
            } // fi
        }
}
?>
