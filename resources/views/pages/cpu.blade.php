@extends('layouts.app')

@section('form')

	<h1>CPU List</h1>
	<form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="text" placeholder="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
	<form action="insert.php" method="post">     
		Value1: <input type="text" name="field1-name" />
		Value2: <input type="text" name="field2-name" />
		Value3: <input type="text" name="field3-name" />
		Value4: <input type="text" name="field4-name" />
		Value5: <input type="text" name="field5-name" />
				<input type="Submit" />
	</form>
@endsection