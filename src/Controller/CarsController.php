<?php
namespace App\Controller;

use App\Controller\AppController;

class CarsController extends AppController
{
    /**
     * @return \Cake\Http\Response|null|void
     */
    public function index()
    {
        exit('Yes, I am public');
    }

    /**
     * @param string|null $id Car id.
     * @return \Cake\Http\Response|null|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        exit('Yes, I am public too for ID '. $id);
    }

    /**
     * @return \Cake\Http\Response|null|void
     */
    public function hidden()
    {
        exit('I am not public');
    }
}
