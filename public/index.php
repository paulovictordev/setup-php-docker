<?php

$path = $_SERVER['REQUEST_URI'];
$path = explode('?', $path);
$route = $path[0];

function render ($view) {
    include "../src/views/_partials/header.php";
    //  if (logado)
    include "../src/views/_partials/nav.php";
    //endif
    include "../src/views/{$view}.php";
    include "../src/views/_partials/footer.php";
}

function execute ($controller) {
    $controller = explode('/', $controller);

    $controller = array_map(function($item) {
        return ucfirst($item);
    }, $controller);

    $controller = implode('/', $controller);

    include "../src/Controller/{$controller}.php";
}

match ($route) {
    '/' => render('home'),

    '/usuarios/listar' => render('usuario/listar'),
    '/usuarios/adicionar' => render('usuario/add'),
    '/usuarios/editar' => render('usuario/editar'),

    '/usuarios/cadastrar' => execute('usuario/cadastrar'),
    '/usuarios/atualizar' => execute('usuario/atualizar'),
    '/usuarios/excluir' => execute('usuario/excluir'),

    default => render('erros/not_found')
};

?>

