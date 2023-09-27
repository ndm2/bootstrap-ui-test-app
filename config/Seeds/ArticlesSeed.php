<?php
declare(strict_types=1);

use Migrations\AbstractSeed;

/**
 * Articles seed.
 */
class ArticlesSeed extends AbstractSeed
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
    public function run(): void
    {
        $data = [
            [
                'title' => 'Lorem ipsum 1',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:00:00',
            ],
            [
                'title' => 'Lorem ipsum 2',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:01:00',
            ],
            [
                'title' => 'Lorem ipsum 3',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:02:00',
            ],
            [
                'title' => 'Lorem ipsum 4',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:03:00',
            ],
            [
                'title' => 'Lorem ipsum 5',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:04:00',
            ],
            [
                'title' => 'Lorem ipsum 6',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:05:00',
            ],
            [
                'title' => 'Lorem ipsum 7',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:06:00',
            ],
            [
                'title' => 'Lorem ipsum 8',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:07:00',
            ],
            [
                'title' => 'Lorem ipsum 9',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:08:00',
            ],
            [
                'title' => 'Lorem ipsum 10',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:09:00',
            ],
            [
                'title' => 'Lorem ipsum 11',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:10:00',
            ],
            [
                'title' => 'Lorem ipsum 12',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:11:00',
            ],
            [
                'title' => 'Lorem ipsum 13',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:12:00',
            ],
            [
                'title' => 'Lorem ipsum 14',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:13:00',
            ],
            [
                'title' => 'Lorem ipsum 15',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:14:00',
            ],
            [
                'title' => 'Lorem ipsum 16',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:15:00',
            ],
            [
                'title' => 'Lorem ipsum 17',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:16:00',
            ],
            [
                'title' => 'Lorem ipsum 18',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:17:00',
            ],
            [
                'title' => 'Lorem ipsum 19',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:18:00',
            ],
            [
                'title' => 'Lorem ipsum 20',
                'content' => 'Quisque dapibus diam ut elit dictum consectetur.',
                'created' => '2021-01-01 00:19:00',
            ],
        ];

        $table = $this->table('articles');
        $table->insert($data)->save();
    }
}
