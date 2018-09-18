<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

@include('layouts._header')
<body>
	<div id="wrapper">
		@include('layouts.top_nav')
		@include('layouts.left_nav')
		<div id="page-wrapper">
			<div id="page-inner">
			@yield('content')
			</div>
		</div>
	</div>
</body>
@include('layouts._footer')
</html>