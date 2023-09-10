@extends("front.layout.layout")
@section("content")


    <div class="bg-light py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-12 mb-0"><a href="{{route("anasayfa")}}">ANASAYFA</a> <span class="mx-2 mb-0">/</span> <strong class="text-black">Contact</strong></div>
            </div>
        </div>
    </div>

    <div class="site-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2 class="h3 mb-3 text-black">İLETİSİM</h2>
                </div>
                <div class="col-md-7">

                    @if(session("message"))
                    <div class="alert alert-success">
                        {{session()->get("message")}}
                    </div>
                    @endif

                        @if($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach($errors->all() as $error)
                                        <li>{{$error}}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif


                        <form action="{{route("iletisim.kaydet")}}" method="post">
                            @csrf
                        <div class="p-3 p-lg-5 border">
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_fname" class="text-black">Ad Soyad <span class="text-danger">*</span></label>
                                    <input type="text" class="form-control" id="c_fname" name="name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_email" class="text-black">Eposta <span class="text-danger">*</span></label>
                                    <input type="email" class="form-control" id="c_email" name="email" placeholder="">
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_subject" class="text-black">Konu </label>
                                    <input type="text" class="form-control" id="c_subject" name="subject">
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-12">
                                    <label for="c_message" class="text-black">Mesaj</label>
                                    <textarea name="message" id="c_message" cols="30" rows="7" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-lg-12">
                                    <button type="submit" class="btn btn-primary btn-lg btn-block" value="Send Message">Gönder<button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>

                <div class="col-md-5 ml-auto">
                    <div class="p-4 border mb-3">
                        <span class="d-block text-primary h6 text-uppercase">Adres</span>
                        <p class="mb-0"></p>
                    </div>
                    <div class="p-4 border mb-3">

                    </div>
                    <div class="p-4 border mb-3">

                    </div>

                </div>

            </div>
        </div>
    </div>
@endsection
