<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Donate Red</title>
	<link rel="stylesheet" href="{{ URL::asset('assets/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ URL::asset('assets/css/style.css') }}">
</head>
<body>
	<div class="container">
	<div class="head">
		<h1 class="title">Donate<span> Red</span></h1>
		<p class="sub-title">Tears of a mother cannot save her Child. But your Blood can</p>
	</div>


	<div class="enroll-success">
		<center><h3>Thanks for Enrolling</h3></center>

	</div>
	<div class="enroll-form">

		
			<h3 class="form-title">Enroll <span> yourself </span></h3>

			  <div class="form-group">
    			{{Form::label('name', 'Name',array('for'=>'name'))}}
     			{{Form::text('name','',array('class'=>'form-control','id'=>'name','required'=>'true'))}}
  </div>
  	  <div class="form-group">
    			{{Form::label('phone', 'Phone',array('for'=>'phone'))}}
     			{{Form::text('phone','',array('class'=>'form-control','id'=>'phone','required'=>'true'))}}
  </div>

  	  <div class="form-group">
  	  {{Form::label('group', 'Blood Group',array('for'=>'group'))}}
  	  {{Form::select('group',array('ap' => 'A+ve', 'an' => 'A-ve','bp'=>'B+ve','bn'=>'B-ve','op'=>'O+ve','on'=>'O-ve','abp'=>'AB+','abn'=>'AB−'),'',array('class'=>'form-control','id'=>'group','required'=>'true'))}}
  	  </div>
  	  <div class="form-group">
    			{{Form::label('pin', 'Pincode',array('for'=>'pin'))}}
     			{{Form::text('pin','',array('class'=>'form-control','id'=>'pin','required'=>'true'))}}
  </div>
 			<div class="form-group">
 				<button id="donor-form-submit" class="btn btn-danger">Enroll</button>

 			</div>

	</div>


			<h3 class="form-title">Find <span> donors </span></h3>

			<div class="row">
				
				<div class="col-md-6">
  	  			<div class="form-group">

				{{Form::label('find-group', 'Blood Group',array('for'=>'find-group'))}}
  	  			{{Form::select('find-group',array('ap' => 'A+ve', 'an' => 'A-ve','bp'=>'B+ve','bn'=>'B-ve','op'=>'O+ve','on'=>'O-ve','abp'=>'AB+','abn'=>'AB−'),'',array('class'=>'form-control','id'=>'find-group'))}}
  	  			</div>
  	  			</div>


				<div class="col-md-6">
				 <div class="form-group">
				{{Form::label('find-pin', 'Pincode',array('for'=>'find-pin'))}}
				{{Form::text('find-pin','',array('class'=>'form-control','id'=>'find-pin'))}}</div>
				</div>
				<div class="col-md-12">
					<div class="form-group">
 				<button class="btn btn-danger" id="search">Search</button>
				</div>
				</div>

			</div>

			<div class="search-results">
				<h3 class="sub-title">
					
					Search Results
				</h3>

				<table class="table table-striped" id="search-result-table">
					<tbody>
					<tr>
					<th>Name</th>
					<th>Phone</th>
					<th>Group</th>
					<th>Pincode</th>
					</tr>
					</tbody>
				</table>
			</div>

	</div>

<script src="{{ URL::asset('assets/js/jquery.js') }}"></script>
<script src="{{ URL::asset('assets/js/script.js') }}"></script>


</body>
</html>
