<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Icons Controller
 *
 * @property \App\Model\Table\IconsTable $Icons
 *
 * @method \App\Model\Entity\Icon[] paginate($object = null, array $settings = [])
 */
class IconsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $icons = $this->paginate($this->Icons);

        $this->set(compact('icons'));
        $this->set('_serialize', ['icons']);
    }

    /**
     * View method
     *
     * @param string|null $id Icon id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $icon = $this->Icons->get($id, [
            'contain' => ['Articles', 'Tags']
        ]);

        $this->set('icon', $icon);
        $this->set('_serialize', ['icon']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $icon = $this->Icons->newEntity();
        if ($this->request->is('post')) {
            $icon = $this->Icons->patchEntity($icon, $this->request->getData());
            if ($this->Icons->save($icon)) {
                $this->Flash->success(__('The icon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The icon could not be saved. Please, try again.'));
        }
        $articles = $this->Icons->Articles->find('list', ['limit' => 200]);
        $tags = $this->Icons->Tags->find('list', ['limit' => 200]);
        $this->set(compact('icon', 'articles', 'tags'));
        $this->set('_serialize', ['icon']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Icon id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $icon = $this->Icons->get($id, [
            'contain' => ['Articles', 'Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $icon = $this->Icons->patchEntity($icon, $this->request->getData());
            if ($this->Icons->save($icon)) {
                $this->Flash->success(__('The icon has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The icon could not be saved. Please, try again.'));
        }
        $articles = $this->Icons->Articles->find('list', ['limit' => 200]);
        $tags = $this->Icons->Tags->find('list', ['limit' => 200]);
        $this->set(compact('icon', 'articles', 'tags'));
        $this->set('_serialize', ['icon']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Icon id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $icon = $this->Icons->get($id);
        if ($this->Icons->delete($icon)) {
            $this->Flash->success(__('The icon has been deleted.'));
        } else {
            $this->Flash->error(__('The icon could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
