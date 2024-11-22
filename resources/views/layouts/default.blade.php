<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Titre du document</title>
    <link rel="stylesheet" href="css/styles.css" media="all">
</head>

<body>
<div class="website">
    <header class="header">
      @include('includes.header')
    </header>
    <aside class="aside">
        <nav class="navigation">
          @include('includes.menu')
        </nav>
    </aside>

    <main id="main" class="main">
      @yield('contenu')
    </main>

    <footer class="header">
        @include('includes.footer') 
    </footer> 
</div>
</body>
</html>