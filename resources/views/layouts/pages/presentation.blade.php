
@extends('layouts.template')

<!-- breadcrumbs -->
@include('layouts.front.filedariane')
<!-- //breadcrumbs -->

@section('sidebar')

@include('layouts.front.filedariane')
	@parent
@endsection


@section('contenu')
	<div class="typo">
		<div class="container">
			<div class="typo-grids">
 
			<div class="grid_3 grid_5 animated wow fadeInUp" data-wow-duration="1000ms" data-wow-delay="500ms">
				<h3>Wells</h3>
				<div class="well">
					There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration
				</div>
				<div class="well">
					It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here
				</div>
				<div class="well">
						Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic
				</div>
			</div>
	
			</div>
		</div>
	</div>
@endsection

</body>
</html>