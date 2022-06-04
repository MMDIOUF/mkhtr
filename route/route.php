<?php
use App\Core\Router;
use App\Controllers\ClasseController;
use App\Controllers\SecuriteController;
use App\Exceptions\RouteNotFoundException;
$router=new Router();

$router->route("/",[SecuriteController::class,"connexion"]);
$router->route("/logout",[SecuriteController::class,"deconnexion"]);
$router->route("/classe",[ClasseController::class,"lister"]);
$router->route("/classe-add",[ClasseController::class,"ajouter"]);
$router->route("/classe-up",[ClasseController::class,"modifier"]);
$router->route("/classe-del",[ClasseController::class,"supprimer"]);

try {
  $router->resolve();
} catch (RouteNotFoundException $ex) {
   die($ex->message);
}
