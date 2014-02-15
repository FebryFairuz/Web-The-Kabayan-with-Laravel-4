@extends('layout.index')

@section('content')

<header id='header' class='fixed-top invers'>
  <nav id='nav'>
    <ul>
        <li class='current_page_item'>{{ HTML::link('/','Home') }}</li>
        <li>{{ HTML::link('highscore','High Score') }}</li>
        <li>{{ HTML::link('profile','Profile') }}</a></li>
        <li>{{ HTML::link('testimonial','Testimonial') }}</li>
    </ul>
  </nav>
</header>

<div class='jumbotron masthead' style='background:url(images/bg_batik.jpg) center center; background-size:100% 130%'>
  <div class='container box'>
    <h1>The Kabayan</h1>
    <p class='pinki'>Game Labirin berbasis Android</p>
    <p>
      <a href='http://www.mediafire.com/download/px1vv1fpfffe8h7/TheKabayan_v1_6_0.apk' target='_blank' class='btn btn-primary btn-large' title="The Kabayan Versi 1.6.0.apk">Download</a>
    </p>
    <ul class='contact'>
        <li><a href='https://facebook.com/damatrasetafairuz' class='facebook'>Facebook</a></li>
        <li><a href='https://twitter.com/FebryFairuz' class='twitter'>Twitter</a></li>
        <li><a href='https://febryfairuz.wordpress.com/' class='rss'>RSS</a></li>
        <li><a href='https://plus.google.com/' class='googleplus'>Google+</a></li>
    </ul>
  </div>
</div>

<div class='bs-docs-social'>
  <div class='container'>
    <span id='date_time'></span>
    <script type='text/javascript'>window.onload = date_time('date_time');</script>
  </div>
</div>

<div class='container'>
    <div class='marketing'>
        <h1 align='center'>Introducing The Kabayan</h1>
        <br>
        <div class='row-fluid'>
          <div class='span3'>
            <img class='marketing-img' src='images/logo.png'>
          </div>
          <div class='span9'>
            <p align='justify'>
Game The Kabayan ini diharapkan dapat membantu mengenalkan kembali sebuah cerita rakyat dari tanah Sunda yang sudah mulai tenggelam. Dengan game ini dapat menambah wawasan tentang tokoh-tokoh fiksi dari tanah Sunda, bagaimana ceritanya, dan bagaimana nilai-nilai moral yang terdapat di cerita Si Kabayan. </p>
            <p align='justify'>Game The Kabayan ini dapat juga sebagai media hiburan.</p>
          </div>
        </div>
    </div>
</div>

<hr class='soften'>

<div class='container'>
    <div class='marketing'>
        <h1 align='center'>Games The Kabayan</h1>
        <p>Game ini bisa dimainkan untuk perangkat Smartphone atau Tablet</p><br>
        <center><img src='images/fine.png' width='300' /><br>
          <i>* Maksimal Layar 7 Inchi</i>
        </center>
    </div>
</div>

<hr class='soften'>

<div class='container'>
    <div class='marketing'>
		<h1 align='center'><img src="images/android.png" width="100" height="100" style="margin:10px auto 20px auto;"><br>
		Operating System Android</h1>
        <p>Game ini dapat digunakan oleh Android Versi 2.3 (Gingerbread) Versi 4.0 (Ice Cream Sandwich) dan Versi 4.3 (Jelly Bean)</p>
        <br>
        <div class='row-fluid'>
          <div class='span4'>
            <img class='marketing-img' src='images/gb.jpg' title='Gingerbread'>
          </div>
          <div class='span4'>
            <img class='marketing-img' src='images/ics.jpg' title='Ice Cream Sandwich'>            
          </div>
          <div class='span4'>
            <img class='marketing-img' src='images/jb.jpg' title='Jelly Bean'>            
          </div>
        </div>
    </div>
</div>

@endsection