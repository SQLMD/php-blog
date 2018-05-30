<?php
    namespace App\Controller;

    use App\Controller\AppController;
  



    class ArticlesController extends AppController
    {
        public function index()
        {
            $articles = $this->Articles->find('all')->order('created desc');
            $this->set(compact('articles'));
        }

        public function view($id = null)
        {
            $article = $this->Articles->get($id);
            $this->set(compact('article'));
        }

        public function add()
        {
            $article = $this->Articles->newEntity();
            if ($this->request->is('post')) {
                $article = $this->Articles->patchEntity($article, $this->request->getData());
                if($this->Articles->save($article)) {
                    // $this->Flash->success(__('Your article has been saved.'));
                    return $this->redirect(['action' => 'index']);
                }
            }
            $this->set('article',$article);
        }

        public function edit($id = null)
        {
            $article = $this->Articles->get($id);
            if ($this->request->is(['post', 'put'])) {
                $this->Articles->patchEntity($article, $this->request->getData());
                if ($this->Articles->save($article)) {
                    return $this->redirect(['action' => 'index']);
                }
            }
        
            $this->set('article', $article);
        }

        public function delete($id = null)
        {
            $this->request->allowMethod(['post','delete']);
            $article = $this->Articles->get($id);
            if($this->Articles->delete($article)) {
                return $this->redirect(['action' => 'index']);
            }
        }
    }

