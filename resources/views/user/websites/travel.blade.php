
<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>



<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="fullscreen_bg" class="fullscreen_bg"/>
<!DOCTYPE html>
<html>
<body>


<div class="row">

	<div class="col-md-6">
		<h1 class=".text-warning">Travel</h1>
        <div><img src="{{url('/travel.jpg')}}" alt="street" width="600" height="400"> </div>
		
        

</div>
    
<div class="col-md-6">

    <h3>Hajj service</h3>

        <b><p>An information-based website on Hajj has been launched at the initiative of the Ministry of Religious Affairs. This website provides necessary information for Hajj pilgrims and their relatives, friends, agents and concerned government officials. Moreover, the condition of the pilgrims during Hajj is known through this website. According to official figures, 99,72 people performed Hajj in 2014.</p></b>

        <a href="http://www.hajj.gov.bd/-pilgrim-search-" target="_blank">Pilgrim Search</a>

            
<b><h3>Hajj tips</h3></b>

<b><p>Click here to know about hajj tips.</p></b>
<a href="http://www.hajj.gov.bd/hajj-tips/" target="_blank">Hajj tips</a>

<b><h3>Baggage Rules</h3></b>
<b><p>Click here to know about baggage rules.</p></b>

<a href="http://www.hajj.gov.bd/baggage-rules/" target="_blank">Baggage Rules</a>

<b><h3>Passport and Visa </h3></b>
<b><p>Click here to get Passport information.</p></b>

<a href="https://bangladesh.gov.bd/site/page/708b9214-cd84-401b-a337-d01e3f37f9d9/%E0%A6%AA%E0%A6%BE%E0%A6%B8%E0%A6%AA%E0%A7%8B%E0%A6%B0%E0%A7%8D%E0%A6%9F" target="_blank">Passport</a>
<b><p>Click here to  get visa information.</p></b>

<a href="https://bangladesh.gov.bd/site/page/90309e9a-e385-4e3e-b550-672635a7b05e/%E0%A6%AD%E0%A6%BF%E0%A6%B8%E0%A6%BE" target="_blank">Visa</a>


</div>
</div>
<button><a href="{{route('user')}}" class="btn btn-success">BACK</a></button>  
</body>
</html>


<style>
      body {
    padding-top: 120px;
    padding-bottom: 40px;
    background-color: #eee;
  
  }
  .btn 
  {
   outline:0;
   border:none;
   border-top:none;
   border-bottom:none;
   border-left:none;
   border-right:none;
   box-shadow:inset 2px -3px rgba(0,0,0,0.15);
  }
  .btn:focus
  {
   outline:0;
   -webkit-outline:0;
   -moz-outline:0;
  }
  .fullscreen_bg {
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    background-size: cover;
    background-position: 50% 50%;
    background-image: url('http://cleancanvas.herokuapp.com/img/backgrounds/color-splash.jpg');
    background-repeat:repeat;
  }
  .form-signin {
    max-width: 280px;
    padding: 15px;
    margin: 0 auto;
      margin-top:50px;
  }
  .form-signin .form-signin-heading, .form-signin {
    margin-bottom: 10px;
  }
  .form-signin .form-control {
    position: relative;
    font-size: 16px;
    height: auto;
    padding: 10px;
    -webkit-box-sizing: border-box;
    -moz-box-sizing: border-box;
    box-sizing: border-box;
  }
  .form-signin .form-control:focus {
    z-index: 2;
  }
  .form-signin input[type="text"] {
    margin-bottom: -1px;
    border-bottom-left-radius: 0;
    border-bottom-right-radius: 0;
    border-top-style: solid;
    border-right-style: solid;
    border-bottom-style: none;
    border-left-style: solid;
    border-color: #000;
  }
  .form-signin input[type="password"] {
    margin-bottom: 10px;
    border-top-left-radius: 0;
    border-top-right-radius: 0;
    border-top-style: none;
    border-right-style: solid;
    border-bottom-style: solid;
    border-left-style: solid;
    border-color: rgb(0,0,0);
    border-top:1px solid rgba(0,0,0,0.08);
  }
  .form-signin-heading {
    color: #fff;
    text-align: center;
    text-shadow: 0 2px 2px rgba(0,0,0,0.5);
  }
</style>
