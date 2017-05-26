<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * TagOptions Controller
 *
 * @property \App\Model\Table\TagOptionsTable $TagOptions
 *
 * @method \App\Model\Entity\TagOption[] paginate($object = null, array $settings = [])
 */
class TagOptionsController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tagOptions = $this->paginate($this->TagOptions);

        $this->set(compact('tagOptions'));
        $this->set('_serialize', ['tagOptions']);
    }

    /**
     * View method
     *
     * @param string|null $id Tag Option id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tagOption = $this->TagOptions->get($id, [
            'contain' => ['Tags']
        ]);

        $this->set('tagOption', $tagOption);
        $this->set('_serialize', ['tagOption']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tagOption = $this->TagOptions->newEntity();
        if ($this->request->is('post')) {
            $tagOption = $this->TagOptions->patchEntity($tagOption, $this->request->getData());
            if ($this->TagOptions->save($tagOption)) {
                $this->Flash->success(__('The tag option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tag option could not be saved. Please, try again.'));
        }
        $tags = $this->TagOptions->Tags->find('list', ['limit' => 200]);
        $this->set(compact('tagOption', 'tags'));
        $this->set('_serialize', ['tagOption']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Tag Option id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tagOption = $this->TagOptions->get($id, [
            'contain' => ['Tags']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tagOption = $this->TagOptions->patchEntity($tagOption, $this->request->getData());
            if ($this->TagOptions->save($tagOption)) {
                $this->Flash->success(__('The tag option has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tag option could not be saved. Please, try again.'));
        }
        $tags = $this->TagOptions->Tags->find('list', ['limit' => 200]);
        $this->set(compact('tagOption', 'tags'));
        $this->set('_serialize', ['tagOption']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Tag Option id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tagOption = $this->TagOptions->get($id);
        if ($this->TagOptions->delete($tagOption)) {
            $this->Flash->success(__('The tag option has been deleted.'));
        } else {
            $this->Flash->error(__('The tag option could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
