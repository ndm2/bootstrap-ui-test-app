<?php
/** @var $this \App\View\AppView */

$page = $this->request->getParam('pass')[0];
?>
<!DOCTYPE html>
<html>
    <head>
        <?= $this->Html->charset() ?>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Bootstrap UI Test</title>

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/themes/prism-tomorrow.min.css"
              integrity="sha256-4S9ufRr1EqaUFFeM9/52GH68Hs1Sbvx8eFXBWpl8zPI=" crossorigin="anonymous"/>
        <link rel="stylesheet"
              href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/line-numbers/prism-line-numbers.min.css"
              integrity="sha256-Afz2ZJtXw+OuaPX10lZHY7fN1+FuTE/KdCs+j7WZTGc=" crossorigin="anonymous"/>

        <script
            src="https://code.jquery.com/jquery-3.3.1.min.js"
            integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
            crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.bundle.min.js"
                integrity="sha384-pjaaA8dDz/5BgdFUPX6M/9SUZv4d12SUPF0axWc+VRZkx5xU3daN+lYb49+Ax+Tl"
                crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/prism.min.js"
                integrity="sha256-jc6y1s/Y+F+78EgCT/lI2lyU7ys+PFYrRSJ6q8/R8+o=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.15.0/plugins/line-numbers/prism-line-numbers.min.js"
                integrity="sha256-JfF9MVfGdRUxzT4pecjOZq6B+F5EylLQLwcQNg+6+Qk=" crossorigin="anonymous"></script>

        <style>
            #sidebar {
                position: fixed;
                height: 100%;
                padding: 5rem 0 1.5rem;
            }
            #sidebar .nav {
                overflow-y: scroll;
                height: 100%;
                display: block;
                position: relative;
            }
            #sidebar .nav .sidebar-heading {
                font-size: .75rem;
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
            jQuery(function ($) {
                $(window).on('activate.bs.scrollspy', function () {
                    $('#sidebar .nav-link.active').parent().get(0).scrollIntoView({block: 'center'});
                })
            });
        </script>
    </head>
    <body class="home" data-spy="scroll" data-target="#sidebar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
                <a class="navbar-brand" href="#">Bootstrap UI Test</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#mainMenu">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="mainMenu">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item <?= $page === 'default-align' ? 'active' : '' ?>">
                            <?= $this->Html->link('Default', ['default-align'], ['class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item <?= $page === 'horizontal-align' ? 'active' : '' ?>">
                            <?= $this->Html->link('Horizontal', ['horizontal-align'], ['class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item <?= $page === 'inline-align' ? 'active' : '' ?>">
                            <?= $this->Html->link('Inline', ['inline-align'], ['class' => 'nav-link']) ?>
                        </li>
                        <li class="nav-item <?= $page === 'other' ? 'active' : '' ?>">
                            <?= $this->Html->link('Other', ['other'], ['class' => 'nav-link']) ?>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="row">
                <nav class="col-2 bg-light" id="sidebar">
                    <ul class="nav nav-pills">
                        <?= $this->fetch('sidebar') ?>
                    </ul>
                </nav>
                <main class="col-10 ml-sm-auto px-5" id="main">
                    <?= $this->fetch('content') ?>
                </main>
            </div>
        </div>
    </body>
</html>
