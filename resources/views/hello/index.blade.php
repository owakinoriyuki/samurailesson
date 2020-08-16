<html>
<head>
   <title>Hello/Index</title>
   <style>
   body {font-size:16pt; color:#999; }
   h1 { font-size:50pt; text-align:right; color:#f6f6f6;
       margin:-20px 0px -30px 0px; letter-spacing:-4pt; }
   </style>
</head>
<body>
   @extends('layouts.helloapp')
   <style>
      .pagination { font-size:10pt; }
      .pagination li { display:inline-block }
   </style>
   @section('title', 'Index')

   @section('menubar')
      @parent
      インデックスページ
   @endsection

   @section('content')
      <table>
      <tr><th>Name</th><th>Mail</th><th>Age</th></tr>
      @foreach ($items as $item)
         <tr>
            <td>{{$item->name}}</td>
            <td>{{$item->mail}}</td>
            <td>{{$item->age}}</td>
         </tr>
      @endforeach
      </table>
      {{ $items->links() }}
   @endsection

   @section('footer')
   copyright 2020 tuyano.
   @endsection
</body>