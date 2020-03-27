<?php
namespace App\Controller;

use App\Controller\AppController;

class AccountController extends AppController
{
    /**
     * @return void
     */
    public function index()
    {
    }

    /**
     * @return \Cake\Http\Response|null|void
     */
    public function login() {
        $userId = $this->AuthUser->user('id');
        if ($userId) {
            return $this->redirect($this->Authentication->getLoginRedirect() ?: '/account');
        }

        $result = $this->Authentication->getResult();
        // If the user is logged in send them away.
        if ($result && $result->isValid()) {
            $target = $this->Authentication->getLoginRedirect() ?? '/account';

            return $this->redirect($target);
        }

        if ($this->request->is('post') && !$result->isValid()) {
            $this->Flash->error('Invalid username or password');
        }

    }

    /**
     * @return \Cake\Http\Response|null
     */
    public function logout() {
        $whereTo = $this->Authentication->logout();

        $this->Flash->success(__('You are now logged out.'));

        return $this->redirect($whereTo ?: '/account/login');
    }
}
