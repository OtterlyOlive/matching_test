<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TagsTagOptions Controller
 *
 * @property \App\Model\Table\TagsTagOptionsTable $TagsTagOptions
 *
 * @method \App\Model\Entity\TagsTagOption[] paginate($object = null, array $settings = [])
 */
class TagsTagOptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Tags', 'TagOptions']
        ];
        $tagsTagOptions = $this->paginate($this->TagsTagOptions);

        $this->set(compact('tagsTagOptions'));
        $this->set('_serialize', ['tagsTagOptions']);
    }

    /**
     * View method
     *
     * @param string|null $id Tags Tag Option id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tagsTagOption = $this->TagsTagOptions->get($id, [
            'contain' => ['Tags', 'TagOptions']
        ]);

        $this->set('tagsTagOption', $tagsTagOption);
        $this->set('_serialize', ['tagsTagOption']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tagsTagOption = $this->TagsTagOptions->newEntity();
        if ($this->request->is('post')) {
            $tagsTagOption = $this->TagsTagOptions->patchEntity($tagsTagOption, $this->request->getData());
            if ($this->TagsTagOptions->save($tagsTagOption)) {
                $this->Flash->success(__('The tags tag option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tags tag option could not be saved. Please, try again.'));
        }
        $tags = $this->TagsTagOptions->Tags->find('list', ['limit' => 200]);
        $tagOptions = $this->TagsTagOptions->TagOptions->find('list', ['limit' => 200]);
        $this->set(compact('tagsTagOption', 'tags', 'tagOptions'));
        $this->set('_serialize', ['tagsTagOption']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tags Tag Option id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tagsTagOption = $this->TagsTagOptions->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tagsTagOption = $this->TagsTagOptions->patchEntity($tagsTagOption, $this->request->getData());
            if ($this->TagsTagOptions->save($tagsTagOption)) {
                $this->Flash->success(__('The tags tag option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tags tag option could not be saved. Please, try again.'));
        }
        $tags = $this->TagsTagOptions->Tags->find('list', ['limit' => 200]);
        $tagOptions = $this->TagsTagOptions->TagOptions->find('list', ['limit' => 200]);
        $this->set(compact('tagsTagOption', 'tags', 'tagOptions'));
        $this->set('_serialize', ['tagsTagOption']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tags Tag Option id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tagsTagOption = $this->TagsTagOptions->get($id);
        if ($this->TagsTagOptions->delete($tagsTagOption)) {
            $this->Flash->success(__('The tags tag option has been deleted.'));
        } else {
            $this->Flash->error(__('The tags tag option could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
