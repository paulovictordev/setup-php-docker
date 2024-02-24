<?php

$route = $_SERVER['REQUEST_URI'];

function render ($view) {
    include "../src/views/_partials/header.php";
    //  if (logado)
    include "../src/views/_partials/nav.php";
    //endif
    include "../src/views/{$view}.php";
    include "../src/views/_partials/footer.php";
}

match ($route) {
    '/' => render('home'),

    '/usuarios/listar' => render('usuario/listar'),
    '/usuarios/adicionar' => render('usuario/add'),

    default => render('erros/not_found')
};

?>

