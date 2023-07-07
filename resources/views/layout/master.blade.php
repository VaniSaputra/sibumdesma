@include('layout.header')
@include('layout.navbar')
@include('layout.sidebar')

<div>
	@if (session('pesanwarning'))
		<div class="container">
			<div class="row">
				<div class="alert alert-success">
				    {{ session('pesanwarning') }}
				</div>
			</div>
		</div>
	@endif
	@yield('content')
</div>
  

@include('layout.footer')