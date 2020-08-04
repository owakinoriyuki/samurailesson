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

   @section('title', 'Index')

   @section('menubar')
      @parent
      インデックスページ
   @endsection

   {{--
   @section('content')
      <p>ここが本文のコンテンツです。</p>
      <table>
      @foreach($data as $item)
      <tr><th>{{$item['name']}}</th><td>{{$item['mail']}}</td></tr>
      @endforeach
      </table>
   @endsection
   --}}

   {{--
   @section('content')
      <p>ここが本文のコンテンツです。</p>
      <p>これは、<middleware>google.com</middleware>へのリンクです。</p>
      <p>これは、<middleware>yahoo.co.jp</middleware>へのリンクです。</p>
   @endsection
   --}}

   {{--
   @section('content')
      <p>{{$msg}}</p>
      <form action="/hello" method="post">
      <table>
         @csrf
         <tr><th>name: </th><td><input type="text" 
               name="name"></td></tr>
         <tr><th>mail: </th><td><input type="text" 
               name="mail"></td></tr>
         <tr><th>age: </th><td><input type="text" 
               name="age"></td></tr>
         <tr><th></th><td><input type="submit" 
               value="send"></td></tr>
      </table>
      </form>
   @endsection
   --}}
   
   @section('content')
   <p>{{$msg}}</p>
   @if (count($errors) > 0)
   <p>入力に問題があります。再入力して下さい。</p>
   @endif
   <table>
   <form action="/laravelapp/public/hello" method="post">
       @csrf
       @if ($errors->has('name'))
       <tr><th>ERROR</th><td>{{$errors->first('name')}}</td></tr>
       @endif
       <tr><th>name: </th><td><input type="text" name="name"
           value="{{old('name')}}"></td></tr>
       @if ($errors->has('mail'))
       <tr><th>ERROR</th><td>{{$errors->first('mail')}}</td></tr>
       @endif
       <tr><th>mail: </th><td><input type="text" name="mail"
           value="{{old('mail')}}"></td></tr>
       @if ($errors->has('age'))
       <tr><th>ERROR</th><td>{{$errors->first('age')}}</td></tr>
       @endif
       <tr><th>age: </th><td><input type="text" name="age"
           value="{{old('age')}}"></td></tr>
       <tr><th></th><td><input type="submit" value="send"></td></tr>
   </table>
   </form>
   @endsection

   @section('footer')
   copyright 2020 tuyano.
   @endsection
</body>