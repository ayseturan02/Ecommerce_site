@extends("front.layout.layout")
@section("content")

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{route("anasayfa")}}">ANASAYFA</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Shop</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">

            <div class="row mb-5">
                <div class="col-md-9 order-2">

                    <div class="row">
                        <div class="col-md-12 mb-5">
                            <div class="float-md-left mb-4"><h2 class="text-black h5">Kadın Conserve Chuck 70 Ürünler</h2></div>

                        </div>
                    </div>

                    <div class="row mb-5" >
                        @if(!empty($products) && $products->count()>0)
                            @foreach($products as $product)
                                <div class="col-sm-6 col-lg-4 mb-4" data-aos="fade-up" >
                                    <div class="block-4 text-center border">
                                        <figure class="block-4-image">
                                            <a href="{{route("urundetay",$product->slug)}}"><img src="{{asset("front/images/".$product->image)}}" {{$product->id}} alt="Image placeholder" class="img-fluid"></a>
                                        </figure>
                                        <div class="block-4-text p-4">
                                            <h3><a href="{{route("urundetay",$product->slug)}}">{{$product->name}}</a></h3>
                                            <p class="mb-0">{{$product->short_text}}</p>
                                            <p class="text-primary font-weight-bold">${{$product->price}}</p>
                                            <p><a href="{{route("sepet")}}" class="buy-now btn btn-sm btn-primary">sepete ekle</a></p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif
                    </div>

                    <div class="row" data-aos="fade-up">

                    </div>

                    <div class="col-md-3 order-1 mb-5 mb-md-0">


                    </div>
                </div>

                <div class="row">

                </div>

            </div>
        </div>
@endsection


