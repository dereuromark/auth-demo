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
            return $this->redirect($this->Auth->redirectUrl());
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

        if ($this->Common->isPosted()) {
            $user = $this->Auth->identify();
            if ($user) {
                $this->Auth->setUser($user);
                $this->Flash->success(__('You are now logged in.'));

                return $this->redirect($this->Auth->redirectUrl());
            }
            $this->Flash->error('Wrong username/email or password');
            //$this->request->data['password'] = '';
        } else {
            $username = $this->request->getQuery('username');
            if ($username) {
                $this->request = $this->request->withData('login', $username);
            }
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
