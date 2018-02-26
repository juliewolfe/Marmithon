<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Marmithon</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="manifest" href="site.webmanifest">
        <link rel="apple-touch-icon" href="icon.png">
        <!-- Place favicon.ico in the root directory -->

        <link rel="stylesheet" href="assets/css/normalize.css">
        <link rel="stylesheet" href="assets/css/bulma.css">
        <link rel="stylesheet" href="assets/css/main.css">
    </head>
    <body>
        <!--[if lte IE 9]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
        <![endif]-->
        <header>
            <nav class="navbar" role="navigation" aria-label="main navigation">
                <button class="button navbar-burger" id="navbar-burger">
                    <span>Home</span>
                    <span>List</span>
                    <span>Manage</span>
                </button>
                <div class="navbar-menu">
                    <div class="navbar-start">
                        <a href="index.html" class="navbar-item">Home</a>
                        <a href="" class="navbar-item">List</a>
                        <a href="" class="navbar-item">Manage</a>
                    </div>
                    <div class="navbar-end">
                        <a href="#" class="navbar-item">Admin</a>
                    </div>
                </div>
            </nav>
        </header>

        <section class="hero is-light" style="margin-bottom: 25px; padding-bottom: 10px">
            <div class="container has-text-centered">
                <h1 class="title">Marmithon</h1>
                <Form action="#">
                    <div class="field has-addons has-addons-centered">
                        <div class="control">
                            <input type="search" class="input" placeholder="recette..." />
                        </div>
                        <div class="control">
                            <input class="button is-info" type="submit" aria-hidden="true" value="valider" />
                        </div>
                    </div>
                </Form>
            </div>
        </section>