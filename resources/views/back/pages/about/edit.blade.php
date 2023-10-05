@extends("back.layout.app")

@section("content")

        <div class="col-12 grid-margin stretch-card">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">Güncelle</h4>
                    @if(isset($abouts))
                    <form  action="{{route("panel.about.update",$abouts->id)}}" class="form-sample" method="POST" enctype="multipart/form-data">
                      @csrf
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="name" rows="4">{{$abouts->name}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="image" rows="4">{{$abouts->image}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="content" rows="4">{{$abouts->content}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_1_icon" rows="4">{{$abouts->text_1_icon}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_1" rows="4">{{$abouts->text_1}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_1_content" rows="4">{{$abouts->text_1_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_2_icon" rows="4">{{$abouts->text_2_icon}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_2" rows="4">{{$abouts->text_2}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_2_content" rows="4">{{$abouts->text_2_content}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_3_icon" rows="4">{{$abouts->text_3_icon}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_3" rows="4">{{$abouts->text_3}}</textarea>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="exampleTextarea1" name="text_3_content" rows="4">{{$abouts->text_3_content}}</textarea>
                        </div>

                        <button type="submit" class="btn btn-primary mr-2" href="{{route("panel.about.index")}}">Güncelle</button>
                        <button class="btn btn-light">Kapat</button>
                    </form>
                    @else
                        sayılmaz
                    @endif
                </div>
            </div>
        </div>


@endsection
