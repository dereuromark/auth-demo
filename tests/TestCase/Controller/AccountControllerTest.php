<?php
declare(strict_types=1);

namespace App\Test\TestCase\Controller;

use App\Controller\UsersController;
use App\Model\Entity\User;
use Cake\TestSuite\IntegrationTestTrait;
use Cake\TestSuite\TestCase;

/**
 * @uses \App\Controller\UsersController
 */
class AccountControllerTest extends TestCase
{
    use IntegrationTestTrait;

    /**
     * Fixtures
     *
     * @var array
     */
    protected $fixtures = [
        'app.Users',
    ];

    /**
     * Test index method
     *
     * @return void
     */
    public function testIndex(): void
    {
        $this->login();
        $this->get('/account');

        $this->assertResponseOk();
    }

    /**
     * @param int $userId
     *
     * @return \App\Model\Entity\User
     */
    protected function login(int $userId = 1): User
    {
        $users = $this->getTableLocator()->get('Users');
        $user = $users->get($userId);
        $this->session(['Auth' => $user]);

        return $user;
    }
}
