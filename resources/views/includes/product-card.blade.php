<div class="product-card">
    <div class="product-card-offer">
        @if($product->is_hit)
            <div class="offer-hit">Hit</div>
        @endif
        @if($product->is_new)
            <div class="offer-new">New</div>
        @endif

    </div>
    <div class="product-thumb">
        <a href="#"><img src="{{asset($product->image)}}" alt=""></a>
    </div>
    <div class="product-details">
        <h4>
            <a href="#">{{$product->title}}.</a>
        </h4>
        <p class="product-excerpt">Lorem ipsum dolor, sit amet consectetur adipisicing elit.
            Placeat, aperiam!</p>
        <div class="product-bottom-details d-flex justify-content-between">
            <div class="product-price">
                @if($product->old_price) @endif
                <small>${{$product->old_price}}</small>
                ${{$product->price}}
            </div>
            <div class="product-links">
                <a href="#" class="btn btn-outline-secondary add-to-cart"><i
                        class="fas fa-shopping-cart"></i></a>
            </div>
        </div>
    </div>
</div>
