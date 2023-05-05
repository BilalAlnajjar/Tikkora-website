@extends('pages.layouts.dashboard')
@section('content')
    <!-- ============== START CONTENT ==============  -->
    <div class="row">
        <div class="card">
            <div class="card-header border-bottom-0 p-4">
                <h2 class="card-title">1 - 30 of 546 </h2>
                <div class="page-options d-flex float-right">

                </div>
            </div>
            <div class="col-md-12 col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title"></h3>
                    </div>
                    <div class="btn-list">
                        <a href="{{route('news.create')}}">
                            <button class="btn btn-primary"><i class="fe fe-plus mr-2"></i>اضافة خبر جديد</button>
                        </a>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive">
                            <div class="filter-custom" style="left: 36%;">
                                <div class="row">
                                    <div class="col-lg-6">

                                    </div>
                                </div>
                            </div>
                            <table id="example" class="table table-striped table-bordered text-nowrap w-100">
                                <thead>
                                <tr>
                                    <th class="wd-15p">الرقم</th>
                                    {{-- <th class="wd-15p">Product Picture</th> --}}
                                    <th class="wd-15p">عنوان الخبر</th>
                                    <th class="wd-15p">نص الخبر الظاهر</th>
                                    <th class="wd-15p">نص الخبر الكامل</th>
                                    <th class="wd-15p">تاريخ الخبر</th>
                                    <th class="wd-15p">الاجرائات</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach ($newses as $news)

                                    <tr>
                                        <td>{{$news->id}}</td>
                                        <td>{{$news->title}}</td>
                                        <td>{{$news->part_description}}></td>
                                        <td>{{$news->description}}</td>
                                        <td>{{$news->created_at->format('Y:m:d')}}</td>

                                        <td>
                                            <form action="{{route('news.destroy',$news)}}" method="POST"
                                                  enctype="multipart/form-data">
                                                @csrf
                                                <input type="hidden" name="_method" value="DELETE">
                                                <a class="btn btn-sm btn-primary"
                                                   href="{{route('news.edit',$news)}}"><i
                                                        class="fa fa-edit"></i> Edit</a>
                                                <button type="submit" class="btn btn-sm btn-danger"><i
                                                        class="fa fa-trash"></i> Delete
                                                </button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach


                                </tbody>
                            </table>
                        </div>

                    </div>
                    <!-- TABLE WRAPPER -->
                </div>
                <!-- SECTION WRAPPER -->
            </div>
        </div>
        <!-- ROW-1 CLOSED -->
@endsection
