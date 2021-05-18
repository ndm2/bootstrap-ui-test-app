<?php
declare(strict_types=1);

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
    public function initialize(): void
    {
        $this->initializeUI();
    }

    public function formatHtml($html)
    {
        $dom = new \DOMDocument();
        $dom->formatOutput = true;
        $dom->preserveWhiteSpace = true;

        $prev = libxml_use_internal_errors(true);
        $dom->loadHTML($html);
        $errors = libxml_get_errors();
        libxml_use_internal_errors($prev);

        $validTags = 'article|aside|bdi|details|dialog|figcaption|figure|footer|header|main|mark|menuitem|meter|nav|' .
                     'progress|rp|rt|ruby|section|summary|time|wbr|datalist|keygen|output|canvas|svg|audio|embed|' .
                     'source|track|video';

        foreach ($errors as $error) {
            if ($error->code !== 801 ||
                !preg_match("/Tag ($validTags) invalid/", $error->message)
            ) {
                trigger_error($error->message);
            }
        }

        $formatted = [];
        foreach ($dom->childNodes->item(1)->firstChild->childNodes as $node) {
            $formatted[] = $dom->saveXML($node);
        }

        return implode(PHP_EOL, $formatted);
    }

    public function control($title, &$config)
    {
        $field = Text::slug($title);

        $method = 'control';
        $defaults = [
            'label' => 'label text',
            'placeholder' => 'placeholder text',
            'help' => 'help text',
            'tooltip' => $title,
        ];
        if (isset($config['_method'])) {
            $method = $config['_method'];
            unset($config['_method']);
            $defaults = [];
        }
        if (!in_array($method, ['control', 'submit'])) {
            unset($config['container']);
        }
        if ($method !== 'control') {
            unset($config['label']);
        }

        $config += $defaults;

        return $this->Form->{$method}($field, $config);
    }
}
