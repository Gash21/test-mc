@extends('layout')

@section('content')


<div class="container" >
	<div class="main-body">
		<div class="col-lg-12" style="margin-bottom:12px">
			<div class="col-lg-4">
				<input id="textHop" type="text" placeholder="Type anything" class="form-control">
			</div>
			<div class="col-lg-4">
				<select id="dropdownHop" class="form-control">
					<option>Option 1</option>
					<option>Option 2</option>
					<option>Option 3</option>
				</select>
			</div>
			<div class="col-lg-4">
				<button id="buttonHop" class="btn btn-success">Button Success</button>
			</div>
		</div>
		<div class="col-lg-offset-3 col-lg-6" style="padding: 20px">
			<div class="panel panel-default">
			  	<div class="panel-body">
				    <table id="tableHop" class="table table-condensed">
						<tr>
						  	<th class="center">No</th>
						  	<th class="center">Name</th>
						  	<th class="center">Phone</th>
						</tr>
						<tr>
							<td>1</td>
							<td>John Doe</td>
							<td>+62 8685 5815 125</td>
						</tr>
						<tr>
							<td>1</td>
							<td>Jane Doe</td>
							<td>+62 8685 5825 125</td>
						</tr>
					</table>
			  	</div>
			</div>
			
		</div>
	</div>
</div>
<!-- /.container -->
