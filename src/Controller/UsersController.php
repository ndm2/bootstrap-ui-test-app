<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Users Controller
 */
class UsersController extends AppController
{
    /**
     * Login method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function login()
    {
        $this->set('user', $this->Users->get(1));
    }
}
