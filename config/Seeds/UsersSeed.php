<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Users seed.
 */
class UsersSeed extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeds is available here:
     * https://book.cakephp.org/phinx/0/en/seeding.html
     *
     * @return void
     */
    public function run()
    {
        $data = [
            [
                'email' => 'user@example.com',
                'password' => '$2y$10$NIuHJ5QEtUM1sxZQI2f2teqAkIY872ayz4nIimNSM5sX2rkGBHk0.',
            ],
        ];

        $table = $this->table('users');
        $table->insert($data)->save();
    }
}
