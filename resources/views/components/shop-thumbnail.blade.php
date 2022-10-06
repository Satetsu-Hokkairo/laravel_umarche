<div>
    @if(empty($filename))
     <img src="{{asset('images/no_image.jpg')}}" alt="product-image-none">
    @else
     <img src="{{  asset('storage/shops/' . $filename)  }}" alt="product-image">
    @endif
</div>