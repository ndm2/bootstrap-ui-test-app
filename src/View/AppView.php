<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */

namespace App\View;

use BootstrapUI\View\UIViewTrait;
use Cake\Utility\Text;
use Cake\View\View;

/**
 * Application View
 *
 * Your application’s default view class
 *
 * @link https://book.cakephp.org/3.0/en/views.html#the-app-view
 */
class AppView extends View
{

    use UIViewTrait;

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize()
    {
        $this->initializeUI();
    }

    public function formatHtml($html)
    {
        $dom = new \DOMDocument();
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = true;
        $dom->loadHTML($html);

        $formatted = [];
        foreach ($dom->childNodes->item(1)->firstChild->childNodes as $node) {
            $formatted[] = $dom->saveXML($node);
        }

        return implode(PHP_EOL, $formatted);
    }

    public function control($title, $config)
    {
        $field = Text::slug($title);

        $method = 'control';
        $defaults = [
            'label' => 'label text',
            'help' => 'help text'
        ];
        if (isset($config['_method'])) {
            $method = $config['_method'];
            unset($config['_method']);
            $defaults = [];
        }

        return $this->Form->{$method}($field, $config + $defaults);
    }
}
