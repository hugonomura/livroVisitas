{* Smarty *}
<html>
<head>
  <title>Livro de Visitas | {$titulo}</title>
  <link rel="stylesheet" type="text/css" href="../templates/style.css" />

  <!-- Tabs com jQuery -->
  <script src="http://code.jquery.com/jquery-1.9.1.js" />
  <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js" />
  <link rel="stylesheet" href="/resources/demos/style.css" />
  <script>
  $(function() {
    $( "#tabs" ).tabs();
  });
  </script>
  <!-- /Tabs com jQuery -->

</head>
<body>
  <header>
    <a href="#"><h1 id="logo">Livro de Visitas</h1></a>
    <aside class="menu">
      Aqui vai o menu
    </aside>
  </header>
  <article id="content">
