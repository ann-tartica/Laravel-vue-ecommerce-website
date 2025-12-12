@extends('layouts.maer')

@section('content')
<div class="flex gap-7 py-6 reveal-up">
    <div class="flex-1 image-reveal">
        <div class="w-80 h-96 bg-muted flex items-center justify-center">
            @if($product->image)<img src="{{ $product->image }}" alt="{{ $product->name }}" class="max-w-full max-h-full">
            @else<span class="text-muted-foreground text-xl">Image</span>
            @endif
        </div>
    </div>
    <div class="flex-1">
        <h2 class="text-display">{{ $product->name }}</h2>
        <p class="text-muted-foreground text-sm">SKU: {{ $product->sku ?? '—' }}</p>
        <p class="font-semibold">${{ $product->price }}</p>
        <p class="text-muted-foreground text-sm">Stock: {{ $product->stock }}</p>
        <p class="mt-4 text-body">{{ $product->description }}</p>

        <form method="POST" action="{{ route('cart.add', $product->id) }}" class="mt-6">
            @csrf
            <label for="qty" class="block text-sm mb-1">Quantity</label>
            <input id="qty" name="qty" type="number" min="1" max="{{ $product->stock }}" value="1" class="border border-input px-2 py-1 w-20">
            <button class="inline-block px-4 py-2 border border-foreground bg-transparent text-foreground no-underline ml-4">Add to cart</button>
        </form>
    </div>
</div>

@endsection
