<?php

    class Redirector {
        public function redirectToPage(string $pageName) {
            header("Location: {$pageName}");
        }
    }

    class Controller extends Redirector {

    }

    class Authenticator {

        private Redirector $redirector;

        public function __construct(
            Redirector $redirector
        ) {
            $this->redirector = $redirector;
        }

        public function onAuthenticationSuccess() {
            $this->redirector->redirectToPage('index.php');
        }
    }

    $container = [
        Redirector::class => function () {
            return new Redirector();
        }
    ];

    $controller = new Controller();
    $controller->redirectToPage('index.php');

    // $authenticator = new Authenticator();
    // $authenticator->redirectToPage();

