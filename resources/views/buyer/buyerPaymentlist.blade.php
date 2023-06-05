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
                              <th>Payment Status</th>
                              <th>Confirm Status</th>
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
                                @if($payment->payment_status == FALSE)
                                <td>
                                    <a href="/dashboard/buyerpaymentlist/{{ $payment->transaction_code}}/pay" class="btn btn-primary bg-green-500 border-0 w-24 rounded-md">Pay</a>
                                </td>
                                <td>
                                    <a href="/dashboard/confirmwarning" class="btn btn-primary bg-gray-500 border-0 w-30 rounded-md" disable>Confirm Order</a>
                                </td>
                                @elseif($payment->payment_status == TRUE && $payment->confirm_status == FALSE)
                                <td>
                                    <a href="/dashboard/paymentwarning" class="btn btn-primary bg-gray-500 border-0 w-24 rounded-md" disable>Pay</a>
                                </td>
                                <td>
                                    <a href="/update/confirmstatus/{{ $payment->transaction_code}}" class="btn btn-primary bg-green-500 border-0 w-30 rounded-md">Confirm Order</a>
                                </td>
                                @elseif($payment->payment_status && $payment->confirm_status == TRUE)
                                <td>
                                    <a href="/dashboard/paymentwarning" class="btn btn-primary bg-gray-500 border-0 w-24 rounded-md" disable>Pay</a>
                                </td>
                                <td>
                                    <a href="/dashboard/confirmtrue" class="btn btn-primary bg-gray-500 border-0 w-30 rounded-md" disable>Confirm Order</a>
                                </td>
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