<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="utf-8">
    <title>The Kabayan</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" type="image/png" href="favicon.png">
    {{ HTML::script('js/jquery.js') }}
    {{ HTML::script('js/bootstrap.js') }}
    <script>
      function date_time(id){
        date = new Date;
        year = date.getFullYear();
        month = date.getMonth();
        months = new Array('January', 'February', 'March', 'April', 'May', 'June', 'Jully', 'August', 'September', 'October', 'November', 'December');
        d = date.getDate();
        day = date.getDay();
        days = new Array('Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
        h = date.getHours();
        if(h<10)
        {
            h = "0"+h;
        }
        m = date.getMinutes();
        if(m<10)
        {
            m = "0"+m;
        }
        s = date.getSeconds();
        if(s<10)
        {
            s = "0"+s;
        }
        result = ''+days[day]+', '+months[month]+' '+d+', '+year+' | '+h+':'+m+':'+s;
        document.getElementById(id).innerHTML = result;
        setTimeout('date_time("'+id+'");','1000');
        return true;
      }
    </script>

    {{ HTML::style('css/style.css') }}
    {{ HTML::style('css/bootstrap.css') }}
    {{ HTML::style('css/bootstrap-responsive.css') }}
    {{ HTML::style('css/docs.css') }}
    

</head>
<body>
    @yield('content')
 
    <footer class='footer'>
        <div class='container'>
            <p>&copy; 2014 The Kabayan</p>
            <p>Desain By <a href="http://www.febryfairuz.wordpress.com" target="_blank">Febry Damatraseta Fairuz</a></p>
            <p>Powered By HTML5 | CSS3 | <a href="http://php.net" target="_blank">PHP5</a> | <a href="http://laravel.com/" target="_blank">Laravel4</a></p>
        </div>
    </footer>
</body>
</html>
