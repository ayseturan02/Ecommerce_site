@extends("back.layout.app")

@section("content")
    <div class="row">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">anasayfa</h4>
                    <p class="card-description">
                       <a href="{{route("panel.slider.create")}}" class="btn btn-primary">oluştur</a>
                    </p>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                            <tr>
                                <th>Resim</th>
                                <th>Başlık</th>
                                <th>Slogan</th>
                                <th>Link</th>
                                <th>Status</th>
                                <th>Edit</th>
                            </tr>
                            </thead>
                            <tbody>
                            @if(!empty($sliders) && $sliders->count() > 0)
                           @foreach($sliders as $slider)
                           <tr class="item" item-id="{{$slider->id}}">
                                <td class="py-1"><img src="{{asset("front/images/".$slider->image)}}" alt="image/"></td>
                                <td>{{$slider->name}}</td>
                                <td>{{$slider->content ?? ""}}</td>
                                <td>{{$slider->link}}12 May 2017</td>
                                <td>
                                 {{--   <label class="badge badge-{{$slider->status=="1" ? "success" : "danger"}}">{{$slider->status=="1" ? "aktif" : "pasif"}}</label> --}}
                                    <div class="checkbox" item-id="{{$slider->id}}">
                                   <label>
                                       <input type="checkbox" class="durum"  data-on="aktif" data-off="pasif" data-onstyle="success" data-offstyle="danger" {{$slider->status == "1" ?"checked": ""}} data-toggle="toggle">
                                   </label>
                                     </div>
                                </td>
                                <td class="d-flex">
                                    <a href="{{route("panel.slider.edit",$slider->id)}}" class="btn btn-primary mr-2">düzenle</a>
                               {{--  <form action="{{route("panel.slider.destroy",$slider->id)}}" method="POST">
                                      @csrf
                                      @method("DELETE")
                                      <button  type="submit"  class="btn btn-danger">sil</button>
                                  </form> --}}
                                    <button  type="button"  class="silbtn btn btn-danger">sil</button>

                                </td>
                            </tr>
                           @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                </div>
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
            url:"{{route('panel.slider.status')}}",
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
                  url:"{{route('panel.slider.destroy')}}",
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
