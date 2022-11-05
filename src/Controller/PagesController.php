<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\View\Exception\MissingTemplateException;

/**
 * Static content controller
 *
 * This controller will render views from Template/Pages/
 *
 * @link https://book.cakephp.org/3.0/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{

    /**
     * Displays a view
     *
     * @param array ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found or \Cake\View\Exception\MissingTemplateException in debug mode.
     */
    public function display(...$path)
    {
        $banner ='';
        $testimonials ='';
        $articles ='';//query

        $this->loadModel('Banners');
        $this->loadModel('Testimonials');
        $this->loadModel('Articles');

        $this->loadModel('Users');
        $this->loadModel('Roles');
        
        $user = $this->Auth->user();
        
        $banner = $this->Banners->find('all', [
            'limit' => 100,
            'order' => 'rand()',
        ])->first();
        
        $testimonials = $this->Testimonials->find('all', [
            'limit' => 3,
            'order' => 'rand()',
        ])->all();

        $articles = $this->Articles->find('all',[
            'limit'=>4,
            'order'=> 'rand()',
        ])->all();

        $this->set(compact('banner','testimonials','articles', 'user'));
        $this->render('home');
    }
    public function VisualEditor(){
        $banners ='';
        $testimonials ='';
        $articles ='';//query

        $this->loadModel('Banners');
        $this->loadModel('Testimonials');
        $this->loadModel('Articles');

        $banners = $this->Banners->find('all')->all();
        
        $testimonials = $this->Testimonials->find('all')->all();

        $articles = $this->Articles->find('all')->all();

        $this->set(compact('banners','testimonials','articles'));
        $this->render('home');
        debug($banners);
        debug($testimonials);
        debug($articles);
        exit;
    }
}
