@extends('layouts.maer')

@section('content')
<h2 class="text-display reveal-up">Your Cart</h2>

@if($items->isEmpty())
    <p class="text-body">Your cart is empty.</p>
@else
    <table class="w-full border-collapse reveal-up-delay-1">
        <thead>
            <tr><th class="p-2 border-b border-border text-left">Item</th><th class="p-2 border-b border-border text-left">Qty</th><th class="p-2 border-b border-border text-left">Subtotal</th><th class="p-2 border-b border-border text-left"></th></tr>
        </thead>
        <tbody>
        @foreach($items as $row)
            <tr>
                <td class="p-2 border-b border-border">{{ $row['product']->name }}</td>
                <td class="p-2 border-b border-border">{{ $row['qty'] }}</td>
                <td class="p-2 border-b border-border">${{ number_format($row['subtotal_cents'] / 100, 2) }}</td>
                <td class="p-2 border-b border-border">
                    <form method="POST" action="{{ route('cart.remove', $row['product']->id) }}">
                        @csrf
                        @method('DELETE')
                        <button class="inline-block px-2 py-1 border border-foreground bg-transparent text-muted-foreground no-underline text-sm">Remove</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <p class="font-bold mt-3">Total: ${{ number_format($total_cents / 100, 2) }}</p>
@endif

@endsection
