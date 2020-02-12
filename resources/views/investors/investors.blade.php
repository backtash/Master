@extends('layouts.master')
@section('siteName','Altor Alpha Fund')
@section('content')
	<div>
		<div>
		<h2> Investors in Altor Alpha Fund</h2>
		</div>
		<div>
			<table class="table table-hover table-responsive ">
				<thead>
					<tr class="table-primary">
						<th> Investor number </th>
						<th> Investor Name </th>
						<th> Contact Details</th>
						<th> Date of birth </th>
						<th> Document/ID Details </th>
						<th> Inestment Details </th>
					</tr>
				</thead>
				<tbody>
					@foreach($investors as $investor)
					 <tr>
						<td> <a href="/investors/{{$investor->user_id}}">{{$investor->user_id}}</a></td>
						<td> <a href="/investors/{{$investor->user_id}}">{{$investor->firstname}} {{$investor->middlename}} {{$investor->lastname}}</a> </td>
						<td> {{$investor->mobile_phoneno}} <br> {{$investor->email}} </td>
						<td> {{$investor->dateofbirth}} </td>
						<td> {{$investor->typeofid}} <br>{{$investor->idnumber}} </td>
						<td> @if(isset($investor->applications->account_type))
								{{$investor->applications['account_type']}} 
							 @endif
						</td>
					 </tr>
					@endforeach
				</tbody>
			</table>
		</div>
		<div class="row textcenter">
			 {{$investors->links()}} 
		</div>
	</div>
@endsection