<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

<body>

<div class="row">
    <div class="col-md-6 col-sm-12 col-lg-6 col-md-offset-3">
		<div class="panel panel-primary">
			<div class="panel-heading">Enter Your  NID Details Here
			</div>
			<div class="panel-body">
				<form action="{{route('admin.complainer.update',$list->id)}}" enctype= "multipart/form-data"  method="POST" >
					@csrf
                    @method('put')
					<div class="form-group">
						<label for="myName">Issue Date</label>
						<input id="date" value="{{$list->date}}" name="date" class="form-control" type="date" data-validation="required">
						<span id="error_name" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="name">Issue Time</label>
						<input id="time" value="{{$list->time}}" name="time" class="form-control" type="time" data-validation="email">
						<span id="error_lastname" class="text-danger"></span>
					</div>
					<div class="form-group">
						<label for="name">Complainer Name</label>
						<input id="name" value="{{$list->name}}" name="name"  class="form-control" type="text" min="1" >
						<span id="error_age" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="address">Complainer Address</label>
						<input id="address" value="{{$list->address}}" name="address"  class="form-control" type="text" min="1" >
						<span id="error_gender" class="text-danger"></span>
					</div>
					
					<div class="form-group">
						<label for="email">Complaint Type</label>
						<select value="{{$list->complainttype}}" name="complainttype" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
						<option> </option>
        <option>Street Problem</option>
        <option>Gas Problem</option>
        <option>Electric Problem</option>
        <option>Others</option>
    </select>
					</div>

					

					<div class="form-group">
						<label for="disc">Description</label>
						<textarea value="{{$list->description}}" name="description" class="form-control" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label for="email">Problem Place Photo</label>
						<input id="image" value="{{$list->image}}" name="image"  class="form-control" type="file" min="1" >
						<span id="error_age" class="text-danger"></span>
					</div>

					<div class="form-group">
						<label for="email">Office Name</label>
						<select name="oname" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
						<option> </option>
        <option>Uttara sector 10(kamarpara councilor office)</option>
        <option>Dhaka North City Corporation</option>
        <option>Dhaka South City Corporation</option>
        <option>Others</option>
    </select>
					</div>
					<div class="form-group">
						<label for="email">Officer Name</label>
						<select name="orname" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
						<option> </option>
        <option>Sonia Rahman(Uttara sector 10)</option>
        <option>Rahela Khatun(Dhaka North City Corporation)</option>
        <option>Mahabubur Rahman(Dhaka South City Corporation)</option>
        <option>Others</option>
    </select>
					</div>
					<div class="form-group">
						<label for="email">Officer Email</label>
						<select name="email" type="email" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
						<option> </option>
        <option>info@shataj.com(Sonia Rahman)</option>
        <option>rahelarinku21@gmail.com(Rahela Khatun)</option>
        <option>sento@shataj.com(Mahabubur Rahman)</option>
        <option>Others</option>
    </select>
					</div>
					<div class="form-group">
						<label for="cell">Officer Phone</label>
						<select name="cell" type="text" class="form-control"  id="exampleInputEmail1" aria-describedby="emailHelp">
						<option> </option>
        <option>01676680455(Sonia Rahman)</option>
        <option>0181500351(Rahela Khatun)</option>
        <option>01711942622(Mahabubur Rahman)</option>
        <option>Others</option>
    </select>
					</div>


					
					<button id="submit" type="submit" value="submit" class="btn btn-primary center">Submit</button>
			
				</form>

			</div>
		</div>
	</div>
</div>


       
<style>
    	.palel-primary
	{
		border-color: #bce8f1;
	}
	.panel-primary>.panel-heading
	{
		background:#bce8f1;
		
	}
	.panel-primary>.panel-body
	{
		background-color: #EDEDED;
	}


    $(document).ready(function(){
		$flag=1;
    	$("#myName").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* You have to enter your first name!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_name").text("");

        	}
       });
        $("#lastname").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_lastname").text("* You have to enter your Last name!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_lastname").text("");
        	}
       });
        $("#dob").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_dob").text("* You have to enter your Date of Birth!");
        	}
        	else
        	{
        		$(this).css("border-color", "#2eb82e");
        		$('#submit').attr('disabled',false);
        		$("#error_dob").text("");
        	}
       });
        $("#gender").focusout(function(){
        	$(this).css("border-color", "#2eb82e");
       
       });
        $("#age").focusout(function(){
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_age").text("* You have to enter your Age!");
        	}
        	else
        	{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_age").text("");

        	}
        	});
        $("#phone").focusout(function(){
            $pho =$("#phone").val();
    		if($(this).val()==''){
        		$(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* You have to enter your Phone Number!");
        	}
        	else if ($pho.length!=10)
        	{   
                    $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Lenght of Phone Number Should Be Ten");
        	}
        	else if(!$.isNumeric($pho))
        	{
        	        $(this).css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			$("#error_phone").text("* Phone Number Should Be Numeric");  
        	}
        	else{
        		$(this).css({"border-color":"#2eb82e"});
        		$('#submit').attr('disabled',false);
        		$("#error_phone").text("");
        	}

    	});

   		$( "#submit" ).click(function() {
   			if($("#myName" ).val()=='')
   			{
        		$("#myName").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_name").text("* You have to enter your first name!");
        	}
        	if($("#lastname" ).val()=='')
   			{
        		$("#lastname").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_lastname").text("* You have to enter your Last name!");
        	}
   			if($("#dob" ).val()=='')
   			{
        		$("#dob").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_dob").text("* You have to enter your Date of Birth!");
        	}
   			if($("#age" ).val()=='')
   			{
        		$("#age").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_age").text("* You have to enter your Age!");
        	}
        	if($("#phone" ).val()=='')
   			{
        		$("#phone").css("border-color", "#FF0000");
        			$('#submit').attr('disabled',true);
        			 $("#error_phone").text("* You have to enter your Phone Number!");
        	}
			});


    	
	});
</style>
</body>