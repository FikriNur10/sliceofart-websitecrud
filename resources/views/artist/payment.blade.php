<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment') }}
        </h2>
    </x-slot>
    {{-- add payment --}}
    <div class="py-8">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200"> 
                    <form method="POST" action="{{ route('paymentPost') }}" enctype="multipart/form-data">
                        @csrf
                        {{-- Code Transaction --}}
                        <div class="pt-5 pb-3">
                            <label for="username" class="block text-gray-700 text-sm font-bold mb-2">Transaction Code</label>
                            <input value ="{{ $randomString }}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="transaction_code" id="transaction_code" readonly>
                        </div>
                        {{-- Payment Method --}}
                        <div class="pb-3">
                            <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Payment Method</label>
                            <input value="Qris"class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="payment_method" id="payment_method" placeholder="Payment Method" readonly>
                        </div>
                        {{-- Code Product --}}
                        <div class="pb-3">
                            <label for="numberRevision" class="block text-gray-700 text-sm font-bold mb-2">Code Product</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="code_product" id="code_product" placeholder="Code Product">
                        </div>
                        {{-- Name Artist --}}
                        <div class="pb-3">
                            <label for="code_product" class="block text-gray-700 text-sm font-bold mb-2">Name Artist</label>
                            <input value="{{ Auth::user()->name}}" class="appearance-none block w-full bg-gray-200 text-gray-700 border rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="name_artist" id="name_artist" placeholder="code_product" readonly>
                        </div>
                        {{-- Name Buyer --}}
                        <div class="pb-3">
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Name Buyer</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="text" name="name_buyer" id="name_buyer" placeholder="Name Buyer">
                        </div>
                        {{-- Price --}}
                        <div class="pb-3">
                            <label for="price" class="block text-gray-700 text-sm font-bold mb-2">Price</label>
                            <input class="appearance-none block w-full bg-gray-200 text-gray-700 border  rounded-md py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white" type="number" name="price" id="price" placeholder="price">
                        </div>
                        <div class="pt-3 pb-3">
                            <button type="submit" class="bg-gray-800 hover:bg-green-900 text-white font-bold py-2 px-4 rounded-md">
                                Submit
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
    {{-- add payment end --}}
    {{-- table payment --}}
    <div class="h-20 w-screen px-24 py-6 overflow-hidden bg-white font-bold text-xl drop-shadow-md mb-6">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Payment List</h2>
    </div>
    <div class="py-2">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <div class="overflow-x-auto bg-white" data-theme="lofi">
                        <table class="table w-full">
                          <!-- head -->
                          <thead>
                            <tr>
                              <th>#</th>
                              <th>Transaction Code</th>
                              <th>Payment Method</th>
                              <th>Code Product</th>
                              <th>Name Artist</th>
                              <th>Name Buyer</th>
                              <th>Price</th>
                              <th>Status</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $payment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $payment->transaction_code }}</td>
                                <td>{{ $payment->payment_method}}</td>
                                <td>{{ $payment->code_product}}</td>
                                <td>{{ $payment->name_artist}}</td>
                                <td>{{ $payment->name_buyer}}</td>
                                <td>{{ $payment->price}}</td>
                                @if($payment->confirmed == FALSE)
                                <td>Pending</td>
                                @elseif($payment->confirmed == TRUE)
                                <td>Succes</td>
                                @endif
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
    </div>
</x-app-layout>