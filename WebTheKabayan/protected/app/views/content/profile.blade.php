@extends('layout.index')

@section('content')

<style>
.span6{
	background:#1e8cbe;
	border:1px solid #0886c7;
	color:white;
	padding:10px;
	text-align:justify;
}
.pic1{
	padding:120px;
	background:url(images/pic2.jpg) center center no-repeat;
}
.pic2{
	padding:120px;
	background:url(images/pic1.jpg) center center no-repeat;
}
.kontak p{
	float:left;
	margin:20px;
	cursor:pointer;
}
.kontak p img{
	margin-bottom:10px;
}
</style>

<header id='header' class='fixed-top invers'>
  <nav id='nav'>
    <ul>
        <li>{{ HTML::link('/','Home') }}</li>
        <li>{{ HTML::link('highscore','High Score') }}</li>
        <li class='current_page_item'>{{ HTML::link('profile','Profile') }}</a></li>
        <li>{{ HTML::link('testimonial','Testimonial') }}</li>
    </ul>
  </nav>
</header>

<div class="container">
    <div class="marketing">
        <h1>My Profile</h1>
        <hr class="soften" style="margin:0px auto 30px auto;">
        
        <div class="row-fluid">
            <div class="span6 pic1">
            </div>
            <div class="span6 pic2">
            </div>
        </div>

        <div class="row-fluid">
            <div class="span6">
              <p align="center"><b>Febry Damatraseta Fairuz</b></p>
              <p>February 29, 1992</p>
              <p>Join With Me On :</p>
              <div class="kontak">
                  <center>
                  <p title="Facebook"><img src="images/fb.png"><br>febry.fairuz</p>
                  <p title="Twitter"><img src="images/twitter.png"><br>FebryFairuz</p>
                  <p title="Wordpress"><img src="images/wordpress.png"><br>febryfairuz</p>
                  <p title="Github"><img src="images/github.png"><br>febryfairuz</p>
				  </center>
              </div>
            </div>
            
            <div class="span6">
              <p align="center"><b>Universitas Pancasila</b></p>
              <p>NPM 4510210039</p>
              <p>Angkatan 2010</p>
              <p>Thanks To :
              	<ol>
                	<li>Dra. Sri Rezeki Candra Nursari, M.Kom (Mentor)</li>
                    <li>Dika Ayu Safitri (Translater)</li>
                    <li>Teman-teman UP yang selalu memberikan supportnya</li>
                </ol>
              </p>
            </div>
        </div>
        
    </div>
</div>


@endsection