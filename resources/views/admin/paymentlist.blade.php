<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Payment List') }}
        </h2>
    </x-slot>
    <div class="py-12">
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