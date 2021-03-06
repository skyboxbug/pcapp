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
		@if (empty($data['cpu']))
			<td><a href="{{route('cpu.index')}}" class = "btn btn-primary">Add CPU</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['cpu']['name'] }}</td>
			<td>{{ $data['cpu']['price'] }}</td>	
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
	</tr>

	<tr id="cooler" class="item">
		<td>Cooler</td>
		@if (empty($data['cooler']))
			<td><a href="{{route('cooler.index')}}" class = "btn btn-primary">Add Cooler</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['cooler']['name'] }}</td>
			<td>{{ $data['cooler']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
	</tr>

	<tr id="mobo" class="item">
		<td>Motherboard</td>
		@if (empty($data['mobo']))
			<td><a href="{{route('mobo.index')}}" class = "btn btn-primary">Add Motherboard</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['mobo']['name'] }}</td>
			<td>{{ $data['mobo']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
	</tr>

	<tr id="ram" class="item">
		<td>RAM</td>
		@if (empty($data['ram']))
			<td><a href="{{route('ram.index')}}" class = "btn btn-primary">Add RAM</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['ram']['name'] }}</td>
			<td>{{ $data['ram']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
	</tr>

	<tr id="storage" class="item">
		<td>Storage</td>
		@if (empty($data['storage']))
			<td><a href="{{route('storage.index')}}" class = "btn btn-primary">Add Storage</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['storage']['name'] }}</td>
			<td>{{ $data['storage']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif

	</tr>

	<tr id="gpu" class="item">
		<td>GPU</td>
		@if (empty($data['gpu']))
			<td><a href="{{route('gpu.index')}}" class = "btn btn-primary">Add GPU</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['gpu']['name'] }}</td>
			<td>{{ $data['gpu']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
	</tr>

	<tr id="case" class="item">
		<td>PC Case</td>
		@if (empty($data['pccase']))
			<td><a href="{{route('case.index')}}" class = "btn btn-primary">Add PC Case</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['pccase']['name'] }}</td>
			<td>{{ $data['pccase']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
	</tr>

	<tr id="psu" class="item">
		<td>PSU</td>
		@if (empty($data['psu']))
			<td><a href="{{route('psu.index')}}" class = "btn btn-primary">Add PSU</a></td>
			<td></td>
			<td></td>
		@else
			<td>{{ $data['psu']['name'] }}</td>
			<td>{{ $data['psu']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
	</tr>

{{-- 	<tr id="opticaldrive" class="item">
		<td>Optical Drive</td>
		@if (empty($data['opticaldrive']))
			<td><a href="{{route('opticaldrive.index')}}" class = "btn btn-primary">Add Optical Drive</a></td>
		@else
			<td>{{ $data['opticaldrive']['name'] }}</td>
			<td>{{ $data['opticaldrive']['price'] }}</td>
			<td><a href="" class = "btn btn-danger">Delete Entry</a></td>
		@endif
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