<?php

namespace App\Controller\Asgard;

use App\Controller\Asgard\AppController;
use Cake\Mailer\Email;
use Cake\Mailer\TransportFactory;

class BlogsController extends AppController
{
    public function index()
    {
        $this->viewBuilder()->setLayout('admin_main');
        $this->set('page_title', 'Blogs');
    }
    public function add()
    {
        $this->viewBuilder()->setLayout('admin_main');
        $this->set('page_title', 'Blogs');
    }
    public function edit($id = null)
    {
        if ($id === null) {
            $this->Flash->error('Invalid Arguments.');
            return $this->redirect(array('controller' => 'Admins', 'action' => 'index'));
        }
        $this->viewBuilder()->setLayout('admin_main');
        $this->set('page_title', 'Edit Kpi');
    }
}
