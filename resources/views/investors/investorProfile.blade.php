@extends('layouts.master')
@section('content')
	<div>
		@if(isset($investor))
		<div>
			<h2> {{$investor->firstname}} {{$investor->lastname}} Profile </h2>
			<table class="table table-borderless">
				<tr> 
					<th> First Name </th>
					<td> {{$investor->firstname}} </td>
				</tr>
				@if(is_null($investor->middlename))
				<tr> 
					<th> Middle Name </th>
					<td> {{$investor->middlename}} </td>
				</tr>
				@endif
				<tr> 
					<th> Last Name </th>
					<td> {{$investor->lastname}} </td>
				</tr>
				<tr> 
					<th> Email </th>
					<td> {{$investor->email}} </td>
				</tr>
				<tr> 
					<th> Phone </th>
					<td> {{$investor->mobile_phoneno}} </td>
				</tr>
			</table>
		</div>
		@else
			<div>
				<p> The investor does not exist. Please try again.
			</div>
		@endif
	</div>
@endsection
