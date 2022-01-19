<!DOCTYPE html>
<html>
  <head>
    <title>pdf page</title>

<link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<div id="fullscreen_bg" class="fullscreen_bg"/>

<div class="container">
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
</head>
<body>

<div id ="divToPrint">
<h1 style="text-align:center;">Complainer Submited Information Copy</h1>
<br>
<br>
<br>

<table class="table">

  
    <thead>
    <tr>
        
        <th scope="col" style="padding: 10px;">Issue Date</th>
        <th scope="col" style="padding: 10px;">Issue Time</th>
        <th scope="col" style="padding: 10px;">Complainer Name</th>
        <th scope="col" style="padding: 10px;">Complainer Address</th>
        <th scope="col" style="padding: 10px;">Complainer Phone</th>
        <th scope="col" style="padding: 10px;">Complainer Email</th>
        <th scope="col" style="padding: 10px;">Complaint Type</th>
        <th scope="col" style="padding: 5px;">Complaint Details</th>
        <th scope="col" style="padding: 5px;">Problem Place Photo</th>
        
    </tr>
    
    </thead>
    <tbody>
    @foreach($informations as $key=>$information)
<tr>
   
    <td>{{$information->date}} </td>
    <td>{{$information->time}} </td>
    <td>{{$information->name}} </td>
    <td>{{$information->address}} </td>
    <td>{{$information->cell}} </td>
    <td>{{$information->email}} </td>
    <td>{{$information->complainttype}} </td>
    <td>{{$information->description}} </td>
    <td>{{$information->image}} </td>
    
    </tr>

@endforeach

        
</table>
</div>
    </tbody>
    


<br>
<br>
<br>
<br>
<br>
<br>
<br>

<input class="btn btn-primary" type="button" onClick="PrintDiv();" value="Print">
<button><a href="{{route('user.logout')}}" class="btn btn-success">Logout</a></button>



<script language="javascript">
    function PrintDiv() {
        var divToPrint = document.getElementById('divToPrint');
        var popupWin = window.open('', '_blank', 'width=1100,height=700');
        popupWin.document.open();
        popupWin.document.write('<html><head><link href="http://localhost/ltms-app/public/css/style.css" rel="stylesheet"></head><body onload="window.print()">' + divToPrint.innerHTML + '</html>');
        popupWin.document.close();
    }
</script>
  </body>
  
  </html>
