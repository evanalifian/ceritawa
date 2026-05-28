<?php

use App\Ceritawa\Config\Router;
use App\Ceritawa\Controller\AnekdotController;
use App\Ceritawa\Controller\AuthController;
use App\Ceritawa\Controller\GaleriController;
use App\Ceritawa\Controller\HomeController;
use App\Ceritawa\Controller\LatihanMenulisController;
use App\Ceritawa\Controller\MateriController;
use App\Ceritawa\Controller\QuizController;
use App\Ceritawa\Controller\SignupController;
use App\Ceritawa\Controller\UserController;
use App\Ceritawa\Middleware\AuthMiddleware;

require_once __DIR__ . "/vendor/autoload.php";

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();

$signup = new SignupController();
$auth = new AuthController();
$home = new HomeController();
$account = new UserController();
$materi = new MateriController();
$quiz = new QuizController();
$latihanMenulis = new LatihanMenulisController();
$galeri = new GaleriController();
$anekdot = new AnekdotController();

Router::add("/", "GET", fn() => $home->index());
Router::add("/account", "GET", fn() => $account->page(), fn() => AuthMiddleware::isNotAuth());
Router::add("/account/update", "POST", fn() => $account->update(), fn() => AuthMiddleware::isNotAuth());
Router::add("/account/delete", "GET", fn() => $account->delete(), fn() => AuthMiddleware::isNotAuth());

Router::add("/login", "GET", fn() => $auth->page(), fn() => AuthMiddleware::isAuth());
Router::add("/login", "POST", fn() => $auth->auth(), fn() => AuthMiddleware::isAuth());

Router::add("/signup", "GET", fn() => $signup->page(), fn() => AuthMiddleware::isAuth());
Router::add("/signup", "POST", fn() => $signup->save(), fn() => AuthMiddleware::isAuth());

Router::add("/logout", "GET", fn() => $auth->logout(), fn() => AuthMiddleware::isNotAuth());

Router::add("/materi", "GET", fn() => $materi->index());

Router::add("/quiz", "GET", fn() => $quiz->index());

Router::add("/latihan-menulis", "GET", fn() => $latihanMenulis->index());
Router::add("/save-anekdot", "POST", fn() => $anekdot->save(), fn() => AuthMiddleware::isNotAuth());

Router::add("/galeri", "GET", fn() => $galeri->index());

Router::execute();