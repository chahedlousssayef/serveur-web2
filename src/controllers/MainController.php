<?php

class MainController
{
    // Page d'accueil
    public function home()
    {
        $this->render('home');
    }

    // Page "About"
    public function about()
    {
        $this->render('about');
    }

    // Page "Inscription"
    public function inscription()
    {
        $this->render('inscription');
    }


    // Page "Panier"
    public function panier()
    {
        $this->render('panier');
    }


    // Page "Produit"
    public function produit()
    {
        $this->render('produit');
    }


    // Page "Connexion"
    public function connexion()
    {
        $this->render('connexion');
    }


    // Page "Catalogue"
    public function catalogue()
    {
        $this->render('catalogue');
    }

    // Page 404
    public function notFound()
    {
        http_response_code(404);
        echo "404 - Page Not Found!";
    }

    // Méthode pour inclure une vue
    private function render($view, $data = [])
    {
        // Transmet les données aux vues
        extract($data);

        // Inclut la vue demandée
        $viewFile = __DIR__ . '/../views/' . $view . '.php';
        if (file_exists($viewFile)) {
            // Ici on affiche le header
            require_once __DIR__ . "/../views/partials/header.php";
            // Ici on affiche la vue
            require_once $viewFile;
            require_once __DIR__ . "/../views/partials/footer.php";
        } else {
            echo "View not found: $view";
        }
    }
}
    