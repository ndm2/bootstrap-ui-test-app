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

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css"
              integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />

        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/themes/prism-tomorrow.min.css"
              integrity="sha256-xevuwyBEb2ZYh4nDhj0g3Z/rDBnM569hg9Vq6gEw/Sg=" crossorigin="anonymous" />

        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>

        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.bundle.min.js"
                integrity="sha384-1CmrxMRARb6aLqgBO7yyAxTOQE2AKb9GfXnEo760AUcUmFx3ibVJJAzGytlQcNXd" crossorigin="anonymous"></script>

        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/prism.min.js"
                integrity="sha256-3teItwIfMuVB74Alnxw/y5HAZ2irOsCULFff3EgbtEs=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/components/prism-markup-templating.min.js"
                integrity="sha256-41PtHfb57czcvRtAYtUhYcSaLDZ3ahSDmVZarE0uWPo=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/components/prism-php.min.js"
                integrity="sha256-QvoAQA6evDU1E8sleumE4DGkUsBaLPxHsnBnKGU3enw=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/prism/1.20.0/components/prism-php-extras.min.js"
                integrity="sha256-qGqhrRWpnZxjywE9D+t2KT8IAXfktXNpc7iePWLDPnU=" crossorigin="anonymous"></script>

        <style>
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
            jQuery(function ($) {
                $(window).on('activate.bs.scrollspy', function () {
                    $('#sidebar .nav-link.active').parent().get(0).scrollIntoView({block: 'center'});
                });
                $('[data-toggle="tooltip"]').tooltip();
            });
        </script>
    </head>
    <body class="home" data-spy="scroll" data-target="#sidebar">
        <div class="container-fluid">
            <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark" id="mainMenuNavbar">
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
