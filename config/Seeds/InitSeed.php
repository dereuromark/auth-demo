<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Init seed.
 */
class InitSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            'name' => 'admin',
            'password' => '123',
            'role_id' => 1,
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
