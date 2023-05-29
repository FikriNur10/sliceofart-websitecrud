<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}"
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" content="{{ csrf_token() }}">
  @vite('./resources/css/app.css')
  @vite('./resources/js/app.js')
  {{-- Backup link --}}
  <script type="module" src="./resources/js/app.js"></script>
  <script type="module" src="./resources/css/app.css"></script>
  <title>Payment Confirm</title>

<style>
    body {
        padding: 100px 500px 150px 500px;
    }
    #confirmButton {
        width: 500px;
    }
    #qrCode {
        width: 400px;
    }
    </style>


</head>
<body class="bg-white w-screen h-screen">

    <div>
        <div>
            <h1 class="text-lg text-bold text-gray-800 flex items-center justify-center"> Transaction {{$data->transaction_code}} </h1>
        </div>
        <div class="p-5 flex items-center justify-center">
            <img id="qrCode"class="" src="{{ asset('images\QR_Code_example.png') }}" alt="Group-1" border="0">
        </div>
        <form action="/update/{{$data->transaction_code}}" method="POST" enctype="multipart/form-data>
            @csrf
            @method('PUT')
            <input type="hidden" name="_token" value="{{ csrf_token() }}" />
            <div class="p-5 flex items-center justify-center">
                <input type="text" name="transaction_code" value="{{$data->transaction_code}}" hidden>
                <input type="text" name="payment_method" value="{{$data->payment_method}}" hidden>
                <input type="text" name="code_product" value="{{$data->code_product}}" hidden>
                <input type="text" name="name_artist" value="{{$data->name_artist}}" hidden>
                <input type="text" name="name_buyer" value="{{$data->name_buyer}}" hidden>
                <input type="text" name="price" value="{{$data->price}}" hidden>
                <input type="text" name="status" value="1" hidden>
                <div class="p-5 flex items-center justify-center">
                    <button id="confirmButton" type="submit" class="btn btn-active">Confirm</button>
                </div>
            </div>
            </form>
        </div>
</body>
</html>