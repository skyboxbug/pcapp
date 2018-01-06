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
		@if (empty($cpu))
			<td>CPU</td>
			<td><a href="index/cpu" class = "btn btn-primary">Add CPU</a></td>
		@else
			<td>{{ $cpu['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="cooler" class="item">
		@if (empty($cooler))
			<td>Cooler</td>
			<td><a href="index/cooler" class = "btn btn-primary">Add Cooler</a></td>
		@else
			<td>{{ $cooler['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="mobo" class="item">
		@if (empty($mobo))
			<td>Motherboard</td>
			<td><a href="index/mobo" class = "btn btn-primary">Add Motherboard</a></td>
		@else
			<td>{{ $mobo['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="ram" class="item">
		@if (empty($ram))
			<td>RAM</td>
			<td><a href="index/ram" class = "btn btn-primary">Add RAM</a></td>
		@else
			<td>{{ $ram['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="storage" class="item">
		@if (empty($storage))
			<td>Storage</td>
			<td><a href="index/storage" class = "btn btn-primary">Add Storage</a></td>
		@else
			<td>{{ $storage['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="gpu" class="item">
		@if (empty($gpu))
			<td>GPU</td>
			<td><a href="index/gpu" class = "btn btn-primary">Add GPU</a></td>
		@else
			<td>{{ $gpu['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="case" class="item">
		@if (empty($case))
			<td>PC Case</td>
			<td><a href="index/case" class = "btn btn-primary">Add PC Case</a></td>
		@else
			<td>{{ $case['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="psu" class="item">
		@if (empty($psu))
			<td>PSU</td>
			<td><a href="index/psu" class = "btn btn-primary">Add PSU</a></td>
		@else
			<td>{{ $psu['name'] }}</td>
		@endif
		<td></td>
		<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
	</tr>

	<tr id="opticaldrive" class="item">
		@if (empty($opticaldrive))
			<td>Optical Drive</td>
			<td><a href="index/opticaldrive" class = "btn btn-primary">Add Optical Drive</a></td>
		@else
			<td>{{ $opticaldrive['name'] }}</td>
		@endif
		
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
  <a href="/index/gpu" class="list-group-item">Add Video Card</a>
  <a href="/index/mobo" class="list-group-item">Add Motherboard</a>
  
</div>
 --}}
@endsection