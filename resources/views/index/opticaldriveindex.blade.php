@extends('layouts.table')

@section('content')
	<h1>Optical Drive</h1> 
	@if(count($opticaldatas)> 0)
			<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name">

			<table id="myTable">
			  <tr class="header">
			    <th id = "name" 
			    	onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
			    Name</th>
				<th id = "manufacturer"
					onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
				Manufacturer</th>
				<th id = "dvd" 
					onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer">
				DVD Write</th>
				<th id = "price" 
					onclick="w3.sortHTML('#myTable', '.item', 'td:nth-child(1)')" style="cursor:pointer"
				>Price</th>
				<th>Add Item</th>
			  </tr>
			@foreach($opticaldatas as $opticaldatas)
			  <tr class = "item">
			    <td>{{$opticaldatas->name}} <br>	</td>
				<td>{{$opticaldatas->manufacturer}}</td>
				<td>{{$opticaldatas->dvd}}</td>
				<td>$  {{$opticaldatas->price}}</td>
				<td><a href="" class = "btn btn-primary">ADD</a></td>	
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

