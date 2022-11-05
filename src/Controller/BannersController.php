<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Event\Event;
use Cake\Filesystem\File;
use Cake\Filesystem\Folder;

/**
 * Banners Controller
 *
 * @property \App\Model\Table\BannersTable $Banners
 *
 * @method \App\Model\Entity\Banner[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class BannersController extends AppController
{
    public $banner_path = '/userfiles/banners/';
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
        $banners = $this->paginate($this->Banners);

        $this->set(compact('banners'));
    }

    /**
     * View method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => ['Users'],
        ]);

        $this->set('banner', $banner);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $banner = $this->Banners->newEntity();
        if ($this->request->is('post')) {
            $banner = $this->Banners->patchEntity($banner,  $this->request->getData());
            // upload image for banner
            // if(!$banner->getErrors()){
            //     $image = $this->request->getUploadedFile('image_url');
            //     $name = $image->getClientFilename();
                
            //     $bannersPath = USERFILES. 'banners';
            //     $targetPath = $bannersPath . DS . $name;

            //     $forderUserfiles = new Folder(USERFILES, true, 0775);
            //     $folderBanners = new Folder($bannersPath, true, 0775);
                
            //     $image->moveTo($targetPath);
            //     $banner->image_url = $this->banner_path.$name;

            //     if ($this->Banners->save($banner)) {
            //         $this->Flash->success(__("The {0} has been saved.", 'banner'));
            //         return $this->redirect(['action' => 'index']);
            //     }
                
            // }
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error( __('The {0} could not be saved. Please, try again.', 'banner'));
        }
        $users = $this->Banners->Users->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'users'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $banner = $this->Banners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());
            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The banner has been saved.'));
                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The banner could not be saved. Please, try again.'));
        }
        $users = $this->Banners->Users->find('list', ['limit' => 200]);
        $this->set(compact('banner', 'users'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Banner id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $banner = $this->Banners->get($id);
        if ($this->Banners->delete($banner)) {
            $this->Flash->success(__('The banner has been deleted.'));
        } else {
            $this->Flash->error(__('The banner could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function translate($id=null){
        $banner = $this->Banners->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {  
            
            $banner = $this->Banners->patchEntity($banner, $this->request->getData());

            if ($this->Banners->save($banner)) {
                $this->Flash->success(__('The presses testimonial has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The presses testimonial could not be saved. Please, try again.'));
        }
        $this->set(compact('banner'));
    }
}
