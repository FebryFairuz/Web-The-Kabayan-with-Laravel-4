@extends('layout.index')

@section('content')

<style>
.span6{
	border:1px solid #ccc;
	background:#f5f5f5;
	text-align:justify;
	padding:20px;
	margin:0px auto;
}
.span6 p{
	margin:10px auto;
}
.boxTesti{
	border:1px solid #0886c7;
	background:#1e8cbe;
	float:left;
	margin:20px;
	text-align:justify;
	color:white;
}
.tAtas{
	padding:150px;
	
}
.tBawah{
	padding:10px;
}
.capital{
	text-transform:uppercase;
	font-weight:bold;
}
</style>

<header id='header' class='fixed-top invers'>
  <nav id='nav'>
    <ul>
        <li>{{ HTML::link('/','Home') }}</li>
        <li>{{ HTML::link('highscore','High Score') }}</li>
        <li>{{ HTML::link('profile','Profile') }}</a></li>
        <li class='current_page_item'>{{ HTML::link('testimonial','Testimonial') }}</li>
    </ul>
  </nav>
</header>

<div class="container">
    <div class="marketing">
    	<h1 align="center">Give Your Testimonial</h1>
		<p>Berikan Kesan dan Pesan Kamu Terhadap Games Ini</p>
		<div class="row-fluid">
            <div class="span3"></div>
            <div class="span6">

			@if (Session::has('message'))
				<div class="alert alert-info">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Terima Kasih atas pesan dan kesan anda terhadap game The Kabayan Berbasis Android ini</strong>
				</div>
			@elseif(Session::has('gagal'))
				<div class="alert alert-info">
				  <button type="button" class="close" data-dismiss="alert">&times;</button>
				  <strong>Input tidak berhasil</strong>
				</div>
			@endif	
			<br>
			{{ Form::open(array('route' => 'testimonial.store','enctype' => 'multipart/form-data')) }}
				{{ Form::text('name', Input::old('name'), array('placeholder'=>'Nama','class' => 'form-control span11','required')) }}
				{{ Form::label('avatar', 'Avatar') }}
				{{ Form::file('photo',array('class' => 'form-control btn','required')) }}<br><br>
				{{ Form::textarea('pesan', Input::old('pesan'),array('placeholder'=>'Pesan','class' => 'form-control span11', 'required'))}}<br>
				{{ Form::reset('Cancel', array('class' => 'btn')) }}
				{{ Form::submit('Posting', array('class' => 'btn btn-info')) }}
			{{ Form::close() }}
					
			</div>
            <div class="span3"></div>
        </div>
    </div>
</div>

<hr class="soften">

<div class="container">
    <div class="marketing">
        <h1 align="center">Your Testimonial</h1>
        <p>Terima Kasih Telah Memberikan Testimonial Kamu Terhadap Games The Kabayan Ini</p><br>

        <!-- disini komentarnya -->
		@foreach($testimonial as $key => $value)
		<div class="boxTesti span5">
			 <div class="row-fluid">
				<div class="span12 tAtas" style="background:url('uploads/{{ $value->photo }}') top center #ccc;background-size:500px 400px;" title="{{ $value->nama }}">
				</div>
			</div>
			<div class="row-fluid">
				<div class="tBawah">
					<p class="capital">{{ $value->nama }}</p>
					<p align="center">" {{ $value->pesan }} "</p>
				</div>
			</div>                
		</div>
		@endforeach		

		<div class="span11">
			<div class="row-fluid">
				<div class="pagination">
				  {{ $testimonial->links() }}
				</div>		
			</div>
		</div>

    </div>
</div>

@endsection