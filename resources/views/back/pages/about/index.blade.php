@extends("back.layout.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            @if(!empty($abouts) && $abouts->count() > 0)
            @foreach($abouts as $about)
                    <div class="card">
                        <div class="card-body">
                            <div class="table-responsive pt-3">
                                <table class="table table-bordered">
                                    <tbody>
                                    <tr class="table-warning">
                                        <td>
                                            resim
                                        </td>
                                        <td>
                                            {{$about->image}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-info">
                                        <td>
                                            isim
                                        </td>
                                        <td>
                                            {{$about->name}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-danger">
                                        <td>
                                            hakkımızda
                                        </td>
                                        <td>
                                            {{$about->content}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>
                                           icon1
                                        </td>
                                        <td>
                                            {{$about->text_1_icon}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>
                                            icon1 isim
                                        </td>
                                        <td>
                                            {{$about->text_1}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>
                                            icon1 içerik
                                        </td>
                                        <td>
                                            {{$about->text_1_content}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>
                                            icon2
                                        </td>
                                        <td>
                                            {{$about->text_2_icon}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>
                                            icon2 isim
                                        </td>
                                        <td>
                                            {{$about->text_2}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>
                                            icon2 içerik
                                        </td>
                                        <td>
                                            {{$about->text_2_content}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-success">
                                        <td>
                                            icon3
                                        </td>
                                        <td>
                                            {{$about->text_3_icon}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-primary">
                                        <td>
                                            icon3 isim
                                        </td>
                                        <td>
                                            {{$about->text_3}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>
                                    <tr class="table-warning">
                                        <td>
                                            icon3 içerik
                                        </td>
                                        <td>
                                            {{$about->text_3_content}}
                                        </td>
                                        <td>
                                            <a href="{{route("panel.urunler.edit",$about->id)}}" class="btn btn-primary mr-2">düzenle</a>
                                            <button  type="button"  class="silbtn btn btn-danger">sil</button>
                                        </td>
                                    </tr>


                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>

                                @endforeach
                            @endif
                    </div>
                </div>


        @endsection

        @section("customjs")
            <script>

                $(document).on("change",".item",function(e){
                    id=$(this).closest(".item").attr("item-id");
                    statu=$(this).prop("checked");
                    $.ajax({
                        headers:{
                            "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')
                        },
                        type:"POST",
                        url:"{{route('panel.urunler.status')}}",
                        data:{
                            id:id,
                            statu:statu
                        },
                        success: function(response){
                            if(response.status==="true"){
                                alertify.success("Durum Aktif Edildi");
                            }else{
                                alertify.error("Durum Pasif Edildi");
                            }
                        }
                    });
                });


                $(document).on("click",".silbtn",function(e) {
                    e.preventDefault();
                    var item=$(this).closest(".item");
                    id=item.attr("item-id");
                    alertify.confirm("Silmek istediğinize emin misiniz?","Silmek istediğinize emin misiniz?",
                        function(){
                            $.ajax({
                                headers:{
                                    "X-CSRF-TOKEN":$('meta[name="csrf-token"]').attr('content')
                                },
                                type:"DELETE",
                                url:"{{route('panel.urunler.destroy')}}",
                                data:{
                                    id:id,
                                },
                                success: function(response){

                                    if(response.error === false){
                                        item.remove();
                                        alertify.success(response.message);
                                    }else{
                                        alertify.error("bir hata oluştu")
                                    }
                                }
                            });
                        },
                        function(){
                            alertify.error('Silme İptal Edildi');
                        });
                });
            </script>
@endsection
