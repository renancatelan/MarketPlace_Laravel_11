<?php



use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

//chamado rotas de forma organizadas
foreach(File::allFiles(__DIR__ .'/WEB') AS $route_file){
    require $route_file->getPathname();
}

require __DIR__.'/auth.php';


