@extends('pages.layouts.dashboard')
@section('content')

    <form action="{{route('news.update',$news)}}" method="post" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">تحديث خبر</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">عنوان الخبر</label>
                            <input type="text" class="form-control" name="title"
                                   placeholder="ادخل عنوان الخبر"  value="{{$news->title}}">
                            @error('title')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="mb-0 card-title">تحميل صور الخبر</h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="dropify"  name="image" id="image"
                                           data-max-file-size="1M" data-default-file="{{asset($news->image)}}"/>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label class="form-label"> النص الظاهر للخبر <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content" name="part_description" >
                                 @if($news->part_description)
                                    {!! $news->part_description !!}
                                @endif

                            </textarea>
                            @error('part_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label"> نص الخبر الكامل <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content2" name="description">
                                 @if($news->description)
                                    {!! $news->description !!}
                                @endif
                            </textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                    </div>
                </div>
            </div>
        </div>


        <div class="btn-list text-center">
            <button type="submit" class="btn btn-primary">حفظ</button>
            <a href="#" class="btn btn-danger">الغاء</a>
        </div>
        <div class="btn-list text-center">
        </div>

    </form>
    <!--ROW END-->
    <!-- ============== END CONTENT ==============  -->
@endsection
