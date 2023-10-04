@extends("back.layout.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card-body">
                <h4 class="card-title">Ürün Ekle</h4>
                <form  action="{{route("panel.urunler.store")}}" class="form-sample" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">İsim</label>
                                <div class="col-sm-9">
                                    <input type="text" id="name" name="name" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">Slug</label>
                                <div class="col-sm-9">
                                    <input type="text" id="slug"  name="slug"  class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">kategori no</label>
                                <div class="col-sm-9" id="category_id" name="category_id" >
                                    <select class="form-control">
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
                                    <select class="form-control">
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
                                    <input type="text" id="price" name="price" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">boyut</label>
                                <div class="col-sm-9">
                                    <input type="text"  id="size" name="size" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">renk</label>
                                <div class="col-sm-9">
                                    <input type="text" id="color" name="color" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label class="col-sm-3 col-form-label">adet sayısı</label>
                                <div class="col-sm-9">
                                    <input type="text" id="qty" name="qty" class="form-control">
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
                                    <input type="text" name="content" id="content" class="form-control">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label>Resim</label>
                        <input type="file" name="image" class="file-upload-default">
                        <div class="input-group col-xs-12">
                            <input type="text" class="form-control file-upload-info" disabled="" placeholder="Upload Image">
                            <span class="input-group-append">
                          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                        </span>
                        </div>
                    </div>

                    <button type="submit" href="{{route("panel.urunler.index")}}" class="btn btn-primary mr-2">Submit</button>
                    <button class="btn btn-light">Cancel</button>
                </form>
            </div>
        </div>
        @endsection


