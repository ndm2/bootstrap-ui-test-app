<?php
/** @var $this \App\View\AppView */

$page = $this->request->getParam('pass')[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap UI Test - <?= h(collection($this->request->getParam('pass'))->last()) ?></title>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"
              integrity="sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==" crossorigin="anonymous" />

        <?= $this->Html->css('BootstrapUI.bootstrap'); ?>
        <?= $this->Html->css('BootstrapUI./font/bootstrap-icons'); ?>
        <?= $this->Html->css('BootstrapUI./font/bootstrap-icons-sizes'); ?>

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/themes/prism-tomorrow.min.css"
              integrity="sha512-vswe+cgvic/XBoF1OcM/TeJ2FW0OofqAVdCZiEYkd6dwGXthvkSFWOoGGJgS2CW70VK5dQM5Oh+7ne47s74VTg==" crossorigin="anonymous" />

        <?= $this->Html->script('BootstrapUI.popper'); ?>
        <?= $this->Html->script('BootstrapUI.bootstrap'); ?>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/prism.min.js"
                integrity="sha512-YBk7HhgDZvBxmtOfUdvX0z8IH2d10Hp3aEygaMNhtF8fSOvBZ16D/1bXZTJV6ndk/L/DlXxYStP8jrF77v2MIg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/components/prism-markup-templating.min.js"
                integrity="sha512-TbMpeuT8rHP3DrAX8tSkpspYIT3It0fypBn5XaSp+Hiy3n9wvPFjd3pal7YtesrphulbmxcLNB9E0sq7xDGtWg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/components/prism-php.min.js"
                integrity="sha512-cXEzo47tXvE4kkOcXobr8Y9jfdyQJ8r+GHlencI8tAxox7txm1nDmAinJKrPcvF16FS48BzPvf0YfuNKE/KQDg==" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.23.0/components/prism-php-extras.min.js"
                integrity="sha512-+sy0abU58Noo4LGIQwx+VvKp4FnX4/+7v2hBnc5AkXDdQ2Cg/CqExZK8xiTkcdMT/lFExAwEwvVSDLCVzEdujQ==" crossorigin="anonymous"></script>

        <style>
            body {
                position: relative;
            }

            #mainMenuNavbar {
                box-shadow: 0 0 2rem 0 rgba(0, 0, 0, .5);
            }

            #sidebar {
                position: fixed;
                height: 100%;
                padding: 5rem 0 1.5rem;
            }
            #sidebar .nav {
                overflow-y: scroll;
                overscroll-behavior: contain;
                height: 100%;
                display: block;
                position: relative;
                font-size: .8rem;
            }
            #sidebar .nav .sidebar-heading {
                font-size: inherit;
                text-transform: uppercase;
                border-bottom: 1px solid #ddd;
            }
            #sidebar .nav .sidebar-heading:first-of-type {
                margin-top: 0 !important;
            }

            #main {
                padding-top: 5rem;
                padding-bottom: 1.5rem;
            }

            .anchor:before {
                display: block;
                content: " ";
                margin-top: -4.5rem;
                height: 4.5rem;
                visibility: hidden;
            }
            .anchor a {
                color: #212529;
            }

            pre[class*=language-] {
                margin: 0;
            }

            code.raw {
                white-space: pre-line;
            }

            .example {
                background-color: #f7f7f7;
                border-radius: .25rem;
            }
            .example .control {
                background: #fff;
                border: 1px solid #ddd;
                border-radius: .25rem;
            }

            hr {
                margin-top: 5rem;
                margin-bottom: 4rem;
                border-style: dashed;
            }
        </style>

        <script>
            function updateSidebarScroll() {
                document.querySelector('#sidebar .nav-link.active').parentElement.scrollIntoView({block: 'center'});
            }

            window.addEventListener('DOMContentLoaded', function () {
                window.addEventListener('activate.bs.scrollspy', updateSidebarScroll);
                window.addEventListener('resize', updateSidebarScroll);

                [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]')).map(function (element) {
                    new bootstrap.Tooltip(element);
                });
            });
        </script>
    </head>
    <body class="home" data-bs-spy="scroll" data-bs-target="#sidebar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainMenuNavbar">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Bootstrap UI Test</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mainMenu" aria-controls="mainMenu" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="mainMenu">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item">
                                <?= $this->Html->link('Default', ['default-align'], ['class' => 'nav-link' . ($page === 'default-align' ? ' active' : '')]) ?>
                            </li>
                            <li class="nav-item">
                                <?= $this->Html->link('Horizontal', ['horizontal-align'], ['class' => 'nav-link' . ($page === 'horizontal-align' ? ' active' : '')]) ?>
                            </li>
                            <li class="nav-item">
                                <?= $this->Html->link('Inline', ['inline-align'], ['class' => 'nav-link' . ($page === 'inline-align' ? ' active' : '')]) ?>
                            </li>
                            <li class="nav-item">
                                <?= $this->Html->link('Other', ['other'], ['class' => 'nav-link' . ($page === 'other' ? ' active' : '')]) ?>
                            </li>
                            <li class="nav-item dropdown">
                                <a
                                    class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                                    aria-haspopup="true" aria-expanded="false"
                                >
                                    Templates
                                </a>
                                <div class="dropdown-menu">
                                    <?= $this->Html->link(
                                        'Index',
                                        ['controller' => 'Articles', 'action' => 'index'],
                                        ['class' => 'dropdown-item'])
                                    ?>
                                    <?= $this->Html->link(
                                        'Add',
                                        ['controller' => 'Articles', 'action' => 'add'],
                                        ['class' => 'dropdown-item'])
                                    ?>
                                    <?= $this->Html->link(
                                        'Edit',
                                        ['controller' => 'Articles', 'action' => 'edit', 1],
                                        ['class' => 'dropdown-item'])
                                    ?>
                                    <?= $this->Html->link(
                                        'View',
                                        ['controller' => 'Articles', 'action' => 'view', 1],
                                        ['class' => 'dropdown-item'])
                                    ?>
                                    <div class="dropdown-divider"></div>
                                    <?= $this->Html->link(
                                        'Login',
                                        ['controller' => 'Users', 'action' => 'login'],
                                        ['class' => 'dropdown-item'])
                                    ?>
                                    <div class="dropdown-divider"></div>
                                    <?= $this->Html->link(
                                        'Cover',
                                        ['controller' => 'Pages', 'action' => 'display', 'cover'],
                                        ['class' => 'dropdown-item'])
                                    ?>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <div class="row">
                <nav class="col-2 bg-light" id="sidebar">
                    <ul class="nav nav-pills">
                        <?= $this->fetch('sidebar') ?>
                    </ul>
                </nav>
                <main class="col-10 offset-2 ml-sm-auto px-5" id="main">
                    <?= $this->fetch('content') ?>
                </main>
            </div>
        </div>
    </body>
</html>
