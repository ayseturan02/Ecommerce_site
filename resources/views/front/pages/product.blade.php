@extends("front.layout.layout")
@section("content")

    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{route("anasayfa")}}">ANASAYFA</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Tank Top T-Shirt</strong></div>
            </div>
        </div>
    </div>



    <div class="site-section">
        <div class="container">

            <div class="row">
                <div class="col-lg-12">
                    @if(session()->get("success"))
                        <div class="alert alert-success">{{session()->get("success")}}</div>
                    @endif
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <img src="{{asset("front/images/".$products->image ?? "")}}"  alt="Image" class="img-fluid">
                </div>
                <div class="col-md-6" {{$products->id ?? ""}}>
                    <h2 class="text-black">{{$products->name ?? ""}}</h2>
                    {{$products->content ?? " "}}
                    <p><strong class="text-primary h4">fiyat : ${{$products->price ?? ""}}</strong></p>
                  <form action="{{route("sepet.add")}}" method="post">
                   @csrf
                      <input type="hidden" name="product_id" value="{{$products->id}}">
                    <div class="mb-1 d-flex">
                        <label for="option-bes" class="d-flex mr-3 mb-3">
                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" name="size" {{$products->size =="35" ? "checked" : ""}} id="option-bes" value="35"></span> <span class="d-inline-block text-black">35</span>
                        </label>
                        <label for="option-yedi" class="d-flex mr-3 mb-3">
                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" name="size" {{$products->size =="37" ? "checked" : ""}} id="option-yedi" value="37"></span> <span class="d-inline-block text-black">37</span>
                        </label>
                        <label for="option-dokuz" class="d-flex mr-3 mb-3">
                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" name="size" {{$products->size =="39" ? "checked" : ""}} id="option-dokuz" value="39"></span> <span class="d-inline-block text-black">39</span>
                        </label>
                        <label for="option-bir" class="d-flex mr-3 mb-3">
                            <span class="d-inline-block mr-2" style="top:-2px; position: relative;"><input type="radio" name="size" {{$products->size =="41" ? "checked" : ""}} id="option-bir" value="41"></span> <span class="d-inline-block text-black"> 41</span>
                        </label>
                    </div>
                    <div class="mb-5">
                        <div class="input-group mb-3" style="max-width: 120px;">
                            <div class="input-group-prepend">
                                <button class="btn btn-outline-primary js-btn-minus" type="button">&minus;</button>
                            </div>
                            <input type="text" class="form-control text-center" value="1" placeholder="" name="qty" aria-label="Example text with button addon" aria-describedby="button-addon1">
                            <div class="input-group-append">
                                <button class="btn btn-outline-primary js-btn-plus" type="button">&plus;</button>
                            </div>
                        </div>

                    </div>
                    <p><button type="submit"  class="buy-now btn btn-sm btn-primary">sepete ekle</button></p>

                  </form>
                </div>
            </div>

        </div>
    </div>

    <div class="site-section block-3 site-blocks-2 bg-light">

    </div>
@endsection
