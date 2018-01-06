@extends('layouts.table')

@section('content')
	<h1>Video Card</h1> 
	@if(count($gpudatas)> 0)
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

			<table id="myTable">
			  <tr class="header">
			    <th id = "name" 
			    	onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
			    Name</th>
				<th id = "manufacturer"
					onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
				Manufacturer</th>
				<th id = "memory" 
					onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
				Memory</th>
				<th id = "clockspeed" 
					onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
				Clock Speed</th>
				<th id = "price" 
					onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer"
				>Price</th>
				<th>Add Item</th>
			  </tr>
			@foreach($gpudatas as $gpudatas)
			  <tr class = "item">
			    <td>{{$gpudatas->name}} <br>	</td>
				<td>{{$gpudatas->manufacturer}}</td>
				<td>{{$gpudatas->memory}}</td>
				<td>{{$gpudatas->clockspeed}}</td>
				<td>$  {{$gpudatas->price}}</td>
				<td>
					<form method="POST" action="{{route('gpuAdd', ['name' => $gpudatas->id])}}">
	                    {{ csrf_field() }}
			            <button type="submit" class="btn btn-primary">Add</button>
			        </form>
				</td>
			  </tr>
			@endforeach
			</table>
			
			<script>
			function myFunction() {
			  var input, filter, table, tr, td, i;
			  input = document.getElementById("myInput");
			  filter = input.value.toUpperCase();
			  table = document.getElementById("myTable");
			  tr = table.getElementsByTagName("tr");
			  for (i = 0; i < tr.length; i++) {
			    td = tr[i].getElementsByTagName("td")[0];
			    if (td) {
			      if (td.innerHTML.toUpperCase().indexOf(filter) > -1) {
			        tr[i].style.display = "";
			      } else {
			        tr[i].style.display = "none";
			      }
			    }       
			  }
			}

			</script>
	@else
		<p>Can't find Anything</p>
	@endif
@endsection




{{-- @foreach($cpudatas as $cpudata)
			<div class = "well">
				<h3>{{$cpudata->manufacturer}} {{$cpudata->name}}</a></h3>
				<small>created at {{$cpudata->created_at}} </small>
			</div>
		@endforeach --}}
		
		{{-- <div class="form-group">
                <label for="Search">Name</label>
                <input type="text" class="form-control" name="name" id="name" placeholder="search Part">
        </div>
        <button type="submit" class="btn btn-primary">Search</button> --}}


        {{-- <form method="POST" id="search-form" class="form-inline" role="form">

            <div class="form-group">
                <label for="name">Search: </label>
                <input type="text" class="form-control" name="name" id="name" placeholder="part name">
            </div>
            <button type="submit" class="btn btn-primary">Search</button>	
        </form>


        <hr>
		<table>
			<thead>
			<tr>
				<th>Name</th>
				<th>Manufacturer</th>
				<th>Socket</th>
				<th>Price</th>
			</tr>
			</thead>
		@foreach($cpudatas as $cpudata)
			<tr>
				<td>{{$cpudata->name}} <br>	</td>
				<td>{{$cpudata->manufacturer}}</td>
				<td>{{$cpudata->socket}}</td>
				<td>{{$cpudata->price}}</td>
			</tr>
		@endforeach
		</table> --}}
		
		{{-- experimental --}}

