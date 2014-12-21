<?php

class PostsController extends AppController {
    
    public $helpers = array('Html', 'Form', 'Session');
    public $components = array('Session');
//  public $scaffold;
    
    public function index() {
        $this->set('posts', $this->Post->find('all'));  
    }
    
    public function details($id = null) {
        if(!$id){
            throw new NotFoundException(__('Ungültiger Post'));
        }
        $post = $this->Post->findById($id);
        if(!$post){
            throw new NotFoundException(__('Ungültiger Post'));
        }
        $this->set('post', $post);
    }
    public function add(){
        if($this->request->is('post')){
            $this->Post->create();
            if($this->Post->save($this->request->data)){
              $this->Session->setFlash(__('Ihr Eintrag wurde erfolgreich gespeichert.'));
                return $this->redirect(array('action' => 'index'));
            }
          $this->Session->setFlash(__('Der Eintrag konnte leider nicht gespeichert werden.'));
        }
        
    }
    //  public function edit(){
    //      if(!$this->request->data){
    //          $this->request->data = $post;                    
    //      }
    //  }
}