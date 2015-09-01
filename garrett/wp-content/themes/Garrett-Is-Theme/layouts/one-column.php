<!DOCTYPE html>
<html lang="en">
<head>
	@include('partials.meta-head')
</head>
<body {{body_class()}}>
	 <header id="top" class="top--menu">
	    	@include('partials.header')
	</header>
	<div id="app">
	    <main class="app--col">
	    	@yield('main')
	    </main>
    </div>
    <footer>
	@include('partials.footer')
	@include('partials.meta-foot')
	</footer>
</body>
</html>

