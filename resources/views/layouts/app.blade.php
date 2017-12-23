<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <title>{{config('app.name', 'Insert the app name yo')}}</title>
        <style>
            #myTable {
              border-collapse: collapse;
              width: 100%;
              border: 1px solid #ddd;
              font-size: 18px;
            }

            #myTable th, #myTable td {
              text-align: left;
              padding: 12px;
            }

            #myTable tr {
              border-bottom: 1px solid #ddd;
            }

            #myTable tr.header, #myTable tr:hover {
              background-color: #f1f1f1;
            }
        </style>
    </head>
    <body>
    	@include('inc.navbar')
        <div class = "container">
        	@yield('content')
        </div>
    </body>
</html>
