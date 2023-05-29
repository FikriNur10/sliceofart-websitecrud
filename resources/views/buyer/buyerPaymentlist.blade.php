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
                              <th>Name Artist</th>
                              <th>Payment Code</th>
                              <th>Product Code</th>
                              <th>Payment Date</th>
                              <th>Status</th>
                              <th>Action</th>
                            </tr>
                          </thead>
                          <tbody>
                            @foreach ($data as $payment)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $payment->name_artist }}</td>
                                <td>{{ $payment->transaction_code}}</td>
                                <td>{{ $payment->code_product}}</td>
                                <td>{{ $payment->created_at }}</td>
                                @if($payment->confirmed ==  FALSE)           
                                    <td>Waiting</td>                       
                                @elseif($payment->confirmed == TRUE)
                                    <td>Succes</td>
                                @endif
                                <td>
                                    @if($payment->confirmed == FALSE)
                                    <a href="/dashboard/buyerpaymentlist/{{ $payment->transaction_code}}/confirm" class="btn btn-primary bg-green-500 border-0 w-24 rounded-md">Pay</a>
                                    @elseif($payment->confirmed == TRUE)

                                    <a href="/dashboard/paymentwarning" class="btn btn-primary bg-gray-500 border-0 w-24 rounded-md" disable>Pay</a>
                                    @endif
                                </td>
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