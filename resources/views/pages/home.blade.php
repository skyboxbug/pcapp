@extends('layouts.table')

@section('content')

<table id="myTable">
	<tr class="header">
		<th>Component</th>
		<th>Part Name</th>
		<th>Price</th>
		<th>Options</th>
	</tr>
	<tr id="cpu" class="item">
		<td>CPU</td>
		<td><a href="{{route('cpu.index')}}" class = "btn btn-primary">Add CPU</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="cooler" class="item">
		<td>Cooler</td>
		<td><a href="index/cooler" class = "btn btn-primary">Add Cooler</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="mobo" class="item">
		@if (empty($mobo))
			<td>Motherboard</td>
		@else
			<td>{{ $mobo['name'] }}</td>
		@endif
		<td><a href={{route('mobo.index')}} class = "btn btn-primary">Add Motherboard</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="ram" class="item">
		<td>RAM</td>
		<td><a href="" class = "btn btn-primary">Add RAM</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="storage" class="item">
		<td>Storage</td>
		<td><a href="" class = "btn btn-primary">Add Storage</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="gpu" class="item">
		<td>Video Card</td>
		<td><a href="" class = "btn btn-primary">Add Video Card</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="case" class="item">
		<td>PC Case</td>
		<td><a href="" class = "btn btn-primary">Add Case</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="psu" class="item">
		<td>Power Supply</td>
		<td><a href="" class = "btn btn-primary">Add Power Supply</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>
	<tr id="opticaldrive" class="item">
		<td>Opitcal Drive</td>
		<td><a href="" class = "btn btn-primary">Add Optical Drive</a></td>
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	{{-- Just in case --}}
{{-- 	<tr id="monitor" class="item">
		<td>CPU</td>
		<td><a href="" class = "btn btn-primary">Add Monitor</a></td>
	</tr> --}}
</table>


{{-- <div class="list-group">
  <a href="/index/cpu" class="list-group-item">Add CPU</a>
  <a href="/index/cooler" class="list-group-item">Add Cooler</a>
  <a href="/index/mobo" class="list-group-item">Add Motherboard</a>
  <a href="/index/ram" class="list-group-item">Add RAM</a>
  <a href="/index/mobo" class="list-group-item">Add Motherboard</a>
  <a href="/index/mobo" class="list-group-item">Add Motherboard</a>
  
</div>
 --}}
@endsection