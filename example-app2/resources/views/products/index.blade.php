@extends('layouts.maer')

@section('content')
<h2 class="text-2xl mb-3 text-display reveal-up">Collection</h2>
<div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
    @foreach($products as $product)
        <article class="border border-border p-3 flex gap-3 items-center image-reveal reveal-up">
            <div class="w-24 h-24 bg-muted flex items-center justify-center">
                @if($product->image)<img src="{{ $product->image }}" alt="{{ $product->name }}" class="max-w-full max-h-full">
                @else<span class="text-muted-foreground">Image</span>
                @endif
            </div>
            <div class="flex-1">
                <h3 class="mb-1"><a href="{{ route('products.show', $product->slug) }}" class="no-underline text-foreground link-underline">{{ $product->name }}</a></h3>
                <p class="text-muted-foreground text-sm">SKU: {{ $product->sku ?? '—' }}</p>
                <p class="font-semibold mt-1">${{ $product->price }}</p>
                <p class="text-muted-foreground text-sm">Stock: {{ $product->stock }}</p>
                <form method="POST" action="{{ route('cart.add', $product->id) }}" class="mt-2">
                    @csrf
                    <label for="qty_{{ $product->id }}" class="text-sm">Qty</label>
                    <input id="qty_{{ $product->id }}" name="qty" type="number" min="1" max="{{ $product->stock }}" value="1" class="border border-input px-1 py-0.5 text-sm w-16">
                    <button type="submit" class="inline-block px-2 py-1 border border-foreground bg-transparent text-foreground no-underline text-sm ml-2">Add to cart</button>
                </form>
            </div>
        </article>
    @endforeach
</div>

@endsection
