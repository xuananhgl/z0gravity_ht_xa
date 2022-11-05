<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Testimonials Controller
 *
 * @property \App\Model\Table\TestimonialsTable $Testimonials
 *
 * @method \App\Model\Entity\Testimonial[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TestimonialsController extends AppController
{
    public function isAuthorized($user)
    {
        return parent::isAuthorized($user);
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users'],
        ];
        $testimonials = $this->paginate($this->Testimonials);

        $this->set(compact('testimonials'));
    }

    /**
     * View method
     *
     * @param string|null $id Testimonial id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $testimonial = $this->Testimonials->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('testimonial', $testimonial);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $testimonial = $this->Testimonials->newEntity();
        if ($this->request->is('post')) {
            $testimonial = $this->Testimonials->patchEntity($testimonial, $this->request->getData());
            if ($this->Testimonials->save($testimonial)) {
                $this->Flash->success(__('The testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testimonial could not be saved. Please, try again.'));
        }
        $users = $this->Testimonials->Users->find('list', ['limit' => 200]);
        $this->set(compact('testimonial', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Testimonial id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $testimonial = $this->Testimonials->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $testimonial = $this->Testimonials->patchEntity($testimonial, $this->request->getData());
            if ($this->Testimonials->save($testimonial)) {
                $this->Flash->success(__('The testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The testimonial could not be saved. Please, try again.'));
        }
        $users = $this->Testimonials->Users->find('list', ['limit' => 200]);
        $this->set(compact('testimonial', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Testimonial id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $testimonial = $this->Testimonials->get($id);
        if ($this->Testimonials->delete($testimonial)) {
            $this->Flash->success(__('The testimonial has been deleted.'));
        } else {
            $this->Flash->error(__('The testimonial could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function translate($id=null){
        $testimonial = $this->Testimonials->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {  
            
            $testimonial = $this->Testimonials->patchEntity($testimonial, $this->request->getData());

            if ($this->Testimonials->save($testimonial)) {
                $this->Flash->success(__('The presses testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses testimonial could not be saved. Please, try again.'));
        }
        $this->set(compact('testimonial'));
    }
}
