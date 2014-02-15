@extends('layout.index')

@section('content')

<header id='header' class='fixed-top invers'>
  <nav id='nav'>
    <ul>
        <li>{{ HTML::link('/','Home') }}</li>
        <li class='current_page_item'>{{ HTML::link('highscore','High Score') }}</li>
        <li>{{ HTML::link('profile','Profile') }}</a></li>
        <li>{{ HTML::link('testimonial','Testimonial') }}</li>
    </ul>
  </nav>
</header>

<div class="container">
    <div class="marketing">
        <h1 align="center">Top 10 High Score</h1>
        <hr class="soften" style="margin:20px 0px 30px 0px">
        
            <div class="row-fluid">
              <div class="span12">
                <center>
                    <table class="table-hightscoore table-hightscoore-bordered table-hightscooree-hover box-hightscoore">
                        <thead>
	                        <tr>
	                            <td colspan="3" class="head-hightscoore"><span></span></td>
	                        </tr>
	                        <tr>
	                            <th width="20">No</th>
	                            <th>Pemain</th>
	                            <th>Score</th>
	                        </tr>
                        </thead>
                        <tbody>
                        {{ Form::hidden($no=1) }}
						@foreach($pemain as $key => $value)     
                                @if($no%2 != 0)
    	                        	<tr class="tertinggi">
    	                                <td>{{ $no++}}</td>
    	                                <td>{{ $value->nama }}</td>
    	                                <td>{{ $value->score }}</td>
    	                            </tr>
    	                        @else
    	                        	<tr>
    	                                <td>{{ $no++}}</td>
    	                                <td>{{ $value->nama }}</td>
    	                                <td>{{ $value->score }}</td>
    	                            </tr>
    	                        @endif
                        @endforeach
                        </tbody>
                    </table>
                </center>
              </div>
            </div>
    </div>
</div>

@endsection