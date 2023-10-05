@extends("back.layout.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card-body">
                <h4 class="card-title">Ürün Ekle</h4>
                @if(isset($products))
                <form  action="{{route("panel.urunler.update",$products->id)}}" class="form-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <input type="hidden" id="id" name="id" value="{{$products->id }}">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">İsim</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name" value="{{$products->name }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" id="slug"  name="slug" value="{{$products->slug }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">kategori no</label>
                                <div class="col-sm-9" id="category_id" name="category_id" >
                                    <select class="form-control"  id="category_id" name="category_id" >
                                        <option>0</option>
                                        <option>1</option>
                                        <option>2</option>
                                    </select>
                                </div>
                            </div>

                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">kategori</label>
                                <div class="col-sm-9" id="short_text" name="short_text">
                                    <select class="form-control" id="short_text" name="short_text">
                                        <option>kadın</option>
                                        <option>erkek</option>
                                        <option>cocuk</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">fiyat</label>
                                <div class="col-sm-9" >
                                    <input type="text" id="price" name="price" value="{{$products->price }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">boyut</label>
                                <div class="col-sm-9">
                                    <input type="text"  id="size" name="size" value="{{$products->size}}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">renk</label>
                                <div class="col-sm-9">
                                    <input type="text" id="color" name="color" value="{{$products->color }}" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">adet sayısı</label>
                                <div class="col-sm-9">
                                    <input type="text" id="qty" name="qty" value="{{$products->qty }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">durum</label>
                                <div class="col-sm-9">
                                    <select id="link" name="status">
                                        <option value="1" >Aktif</option>
                                        <option value="0" >Pasif</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">içerik</label>
                                <div class="col-sm-9">
                                    <input type="text" name="content" id="content" value="{{$products->content }}" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Resim</label>
                        <input type="file" name="image" value="{{$products->image }}" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button" >Upload</button>
                        </span>
                        </div>
                    </div>

                    <button type="submit" href="{{route("panel.urunler.index")}}" class="btn btn-primary mr-2">Düzenle</button>
                </form>
                @else
                    sayılmaz
                @endif
            </div>
        </div>
@endsection


