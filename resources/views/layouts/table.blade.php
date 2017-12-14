<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="{{asset('css/app.css')}}">
        <script src="https://www.w3schools.com/lib/w3.js"></script>
        <style>
            * {
              box-sizing: border-box;
            }

            #myInput {
              background-image: url('/css/searchicon.png');
              background-position: 10px 10px;
              background-repeat: no-repeat;
              width: 100%;
              font-size: 16px;
              padding: 12px 20px 12px 40px;
              border: 1px solid #ddd;
              margin-bottom: 12px;
            }

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

        <title>{{config('app.name', 'Insert the app name yo')}}</title>
    </head>
    <body>
    	@include('inc.navbar')
        <div class = "container">
        	@yield('content')
        </div>
    </body>
</html>
