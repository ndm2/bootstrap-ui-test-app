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

use Cake\Controller\Controller;

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @link https://book.cakephp.org/4/en/controllers.html#the-app-controller
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

        $this->loadComponent('Flash');

        /*
         * Enable the following component for recommended CakePHP form protection settings.
         * see https://book.cakephp.org/4/en/controllers/components/form-protection.html
         */
        //$this->loadComponent('FormProtection');

        $this->getRequest()->getSession()->delete('Flash');

        $this->Flash->info('Info message');
        $this->Flash->warning('Warning message');
        $this->Flash->error('Error message');
        $this->Flash->success('Success message');

        $this->Flash->info('No icon', [
            'key' => 'customized',
            'params' => [
                'icon' => false,
            ],
        ]);

        $this->Flash->info('Custom icon', [
            'key' => 'customized',
            'params' => [
                'icon' => 'mic-mute-fill',
            ],
        ]);

        $this->Flash->success('Icon as SVG', [
            'key' => 'customized',
            'params' => [
                'icon' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" class="me-2 bi bi-calendar-check" viewBox="0 0 16 16"><path d="M10.854 7.146a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0l-1.5-1.5a.5.5 0 1 1 .708-.708L7.5 9.793l2.646-2.647a.5.5 0 0 1 .708 0z"/><path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/></svg>',
            ],
        ]);

        $this->Flash->error('Custom classes', [
            'key' => 'customized',
            'params' => [
                'class' => [
                    'alert fade show d-flex align-items-center bg-gradient shadow',
                ],
                'icon' => [
                    'icon' => 'cloud-lightning-rain-fill',
                    'class' => 'me-2 text-dark',
                ],
            ],
        ]);

        $this->Flash->set('Theme color', [
            'key' => 'customized',
            'params' => [
                'class' => 'dark',
            ],
        ]);
    }
}
