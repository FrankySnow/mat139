<!DOCTYPE html>
<html>
<head>
    <title>#139</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{ asset('foundation/css/foundation.css') }}">
	<script src="{{ asset('foundation/js/vendor/modernizr.js') }}"></script>
	<link rel="shortcut icon"  type="image/png" href="{{ asset('favicon.png?v=2') }}" />
</head>
<body>
<div class="fixed">
<nav class="top-bar" data-topbar role="navigation">
  <ul class="title-area">
    <li class="name">
      <h1><a href="{{ route('index') }}">{{ $database }}</a></h1>
    </li>
     <!-- Remove the class "menu-icon" to get rid of menu icon. Take out "Menu" to just have icon alone -->
  </ul>

  <section class="top-bar-section">
    <!-- Right Nav Section -->
    <ul class="right">
		<li><a href="#"><span>{{ Route::currentRouteName() }}</span></a></li>
      <li class="active"><a href="{{ route('jours.create') }}">Nouveau jour</a></li>
    </ul>

    <!-- Left Nav Section -->
  </section>
</nav>
</div>
<div class="row">
<h1>	@yield('titre')	</h1>
</div>		
	@yield('contenu')

<footer>&nbsp;</footer>

<script src="{{ asset('foundation/js/vendor/jquery.js') }}"></script>
<script src="{{ asset('foundation/js/foundation.min.js') }}"></script>
<script>
  $(document).foundation();
</script>
</body>
</html>