<?php
declare(strict_types=1);

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

use Authentication\Identity;
use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
 * @property \TinyAuth\Controller\Component\AuthorizationComponent $Authorization
 * @property \TinyAuth\Controller\Component\AuthenticationComponent $Authentication
 * @property \TinyAuth\Controller\Component\AuthUserComponent $AuthUser
 */
class AppController extends Controller
{
    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading components.
     *
     * e.g. `$this->loadComponent('FormProtection');`
     *
     * @return void
     */
    public function initialize(): void
    {
        parent::initialize();

        $authUser = $this->request->getAttribute('identity');
        if ($authUser && $this->request->getQuery('debug')) {
            /*
            $authUser = [
                'id' => 1,
                'role_id' => 1,
                'username' => 'mark',
            ];
            $this->request = $this->request->withAttribute('identity', $authUser);
            */
            dd($authUser);
        }

        $this->loadComponent('RequestHandler');
        $this->loadComponent('Flash');

        $this->loadComponent('TinyAuth.Authorization');
        $this->loadComponent('TinyAuth.Authentication');

        $this->loadComponent('TinyAuth.AuthUser');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');
    }
}
