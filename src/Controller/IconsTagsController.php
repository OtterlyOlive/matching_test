<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * IconsTags Controller
 *
 * @property \App\Model\Table\IconsTagsTable $IconsTags
 *
 * @method \App\Model\Entity\IconsTag[] paginate($object = null, array $settings = [])
 */
class IconsTagsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tags', 'Icons']
        ];
        $iconsTags = $this->paginate($this->IconsTags);

        $this->set(compact('iconsTags'));
        $this->set('_serialize', ['iconsTags']);
    }

    /**
     * View method
     *
     * @param string|null $id Icons Tag id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $iconsTag = $this->IconsTags->get($id, [
            'contain' => ['Tags', 'Icons']
        ]);

        $this->set('iconsTag', $iconsTag);
        $this->set('_serialize', ['iconsTag']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $iconsTag = $this->IconsTags->newEntity();
        if ($this->request->is('post')) {
            $iconsTag = $this->IconsTags->patchEntity($iconsTag, $this->request->getData());
            if ($this->IconsTags->save($iconsTag)) {
                $this->Flash->success(__('The icons tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The icons tag could not be saved. Please, try again.'));
        }
        $tags = $this->IconsTags->Tags->find('list', ['limit' => 200]);
        $icons = $this->IconsTags->Icons->find('list', ['limit' => 200]);
        $this->set(compact('iconsTag', 'tags', 'icons'));
        $this->set('_serialize', ['iconsTag']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Icons Tag id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $iconsTag = $this->IconsTags->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $iconsTag = $this->IconsTags->patchEntity($iconsTag, $this->request->getData());
            if ($this->IconsTags->save($iconsTag)) {
                $this->Flash->success(__('The icons tag has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The icons tag could not be saved. Please, try again.'));
        }
        $tags = $this->IconsTags->Tags->find('list', ['limit' => 200]);
        $icons = $this->IconsTags->Icons->find('list', ['limit' => 200]);
        $this->set(compact('iconsTag', 'tags', 'icons'));
        $this->set('_serialize', ['iconsTag']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Icons Tag id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $iconsTag = $this->IconsTags->get($id);
        if ($this->IconsTags->delete($iconsTag)) {
            $this->Flash->success(__('The icons tag has been deleted.'));
        } else {
            $this->Flash->error(__('The icons tag could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
