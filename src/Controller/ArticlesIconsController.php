<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * ArticlesIcons Controller
 *
 * @property \App\Model\Table\ArticlesIconsTable $ArticlesIcons
 *
 * @method \App\Model\Entity\ArticlesIcon[] paginate($object = null, array $settings = [])
 */
class ArticlesIconsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Articles', 'Icons']
        ];
        $articlesIcons = $this->paginate($this->ArticlesIcons);

        $this->set(compact('articlesIcons'));
        $this->set('_serialize', ['articlesIcons']);
    }

    /**
     * View method
     *
     * @param string|null $id Articles Icon id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $articlesIcon = $this->ArticlesIcons->get($id, [
            'contain' => ['Articles', 'Icons']
        ]);

        $this->set('articlesIcon', $articlesIcon);
        $this->set('_serialize', ['articlesIcon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $articlesIcon = $this->ArticlesIcons->newEntity();
        if ($this->request->is('post')) {
            $articlesIcon = $this->ArticlesIcons->patchEntity($articlesIcon, $this->request->getData());
            if ($this->ArticlesIcons->save($articlesIcon)) {
                $this->Flash->success(__('The articles icon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articles icon could not be saved. Please, try again.'));
        }
        $articles = $this->ArticlesIcons->Articles->find('list', ['limit' => 200]);
        $icons = $this->ArticlesIcons->Icons->find('list', ['limit' => 200]);
        $this->set(compact('articlesIcon', 'articles', 'icons'));
        $this->set('_serialize', ['articlesIcon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Articles Icon id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $articlesIcon = $this->ArticlesIcons->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $articlesIcon = $this->ArticlesIcons->patchEntity($articlesIcon, $this->request->getData());
            if ($this->ArticlesIcons->save($articlesIcon)) {
                $this->Flash->success(__('The articles icon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The articles icon could not be saved. Please, try again.'));
        }
        $articles = $this->ArticlesIcons->Articles->find('list', ['limit' => 200]);
        $icons = $this->ArticlesIcons->Icons->find('list', ['limit' => 200]);
        $this->set(compact('articlesIcon', 'articles', 'icons'));
        $this->set('_serialize', ['articlesIcon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Articles Icon id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $articlesIcon = $this->ArticlesIcons->get($id);
        if ($this->ArticlesIcons->delete($articlesIcon)) {
            $this->Flash->success(__('The articles icon has been deleted.'));
        } else {
            $this->Flash->error(__('The articles icon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
