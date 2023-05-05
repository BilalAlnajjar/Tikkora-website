@extends('pages.layouts.dashboard')
@section('content')


    <div class="row" style="padding-top: 20px;">
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card bg-success img-card box-success-shadow x-box-cards">
                <div class="card-body card-taps">
                    <a href="#"></a>
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{$matches_number}}</h2>
                            <p class="mb-0 number-font custom-number">عدد المباريات</p>
                            <div class="progress h-2" style="margin-top:20px">
                                <div class="progress-bar w-50" role="progressbar"
                                     style="background-color: #24dcc2"></div>
                            </div>
                        </div>
                        <div class="ml-auto custom-icon"> <i
                                class="fa fa-shopping-bag text-white fs-30 mr-2 mt-2"
                                style="transform: translateY(32px);font-size: 24px !important;"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->
        <div class="col-sm-12 col-md-6 col-lg-6 col-xl-6">
            <div class="card bg-info img-card box-info-shadow x-box-cards">
                <div class="card-body card-taps">
                    <a href="#"></a>
                    <div class="d-flex">
                        <div class="text-white">
                            <h2 class="mb-0 number-font">{{$news_number}}</h2>
                            <p class="mb-0 number-font custom-number">عدد الاخبار المنشورة</p>
                            <div class="progress h-2" style="margin-top:20px">
                                <div class="progress-bar w-50" role="progressbar"
                                     style="background-color: #24dcc2"></div>
                            </div>
                        </div>
                        <div class="ml-auto custom-icon"> <i
                                class="fa fa-user-o text-white fs-30 mr-2 mt-2"
                                style="transform: translateY(32px);font-size: 24px !important;display: block"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- COL END -->

    </div>

    <!-- ROW-2 OPEN -->
    <div class="row">
        <div class="" style="display: none">
            <div class="card overflow-hidden bg-white work-progress">
                <canvas id="deals" class="chart-dropshadow-success"></canvas>
            </div>
        </div><!-- COL END -->
        <!-- COL END -->
    </div>
    <!-- ROW-2 CLOSED -->

    <!-- ROW-3 CLOSED -->
    <div class="row">
        <div class="col-md-12 col-lg-12">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">بيانات المباريات</h3>
                </div>
                <!-- TABLE WRAPPER -->

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
                                <th class="wd-15p">اسم الفريق الاول</th>
                                <th class="wd-15p">اسم الفريق الثاني</th>
                                <th class="wd-15p">تاريخ المبارة</th>
                                <th class="wd-15p">توقيت المباراة</th>
                                <th class="wd-15p">النتيجة</th>
                                <th class="wd-15p">الدولة</th>
                                <th class="wd-15p">الدوري</th>
                                <th class="wd-15p">الجولة</th>
                                {{-- <th class="wd-15p">Product Info</th> --}}
                                <th class="wd-15p">ترتيب الفريقين</th>
                                <th class="wd-15p">القناة</th>
                                <th class="wd-25p">المعلق</th>
                                <th class="wd-10p">الملعب</th>
                                <th class="wd-10p">الاجرائات</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach ($games as $game)

                                <tr>
                                    <td>{{$game->id}}</td>
                                    <td>{{$game->name_team_one}} <img src="{{asset($game->logo_team_one)}}" width="40"></td>
                                    <td>{{$game->name_team_two}} <img src="{{asset($game->logo_team_two)}}" width="40"></td>
                                    <td>{{$game->partydate->format('Y:m:d')}}</td>
                                    <td>{{$game->partydate->format('H:i A')}}</td>
                                    <td>{{$game->result}}</td>
                                    <td>{{$game->country}}</td>
                                    <td>{{$game->league}}</td>
                                    <td>{{$game->round}}</td>
                                    <td>
                                        <div class="relative overflow-x-auto shadow-md sm:rounded-lg">
                                            <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 border-gray-900 mx-3">
                                                <tbody>
                                                <tr class="dark:bg-gray-800">
                                                    <td class="px-3 py-1 border-l-2">
                                                        <img src="{{asset($game->logo_team_one)}}" style="max-width: 80px!important;" width="25">
                                                    </td>
                                                    <td class="px-3 py-1">
                                                        {{$game->name_team_one}}
                                                    </td>
                                                    <td class="px-3 py-1">
                                                        {{$game->level_team_one}}
                                                    </td>
                                                </tr>
                                                <tr class="dark:bg-gray-800">
                                                    <td class="px-3 py-1 border-l-2">
                                                        <img src="{{asset($game->logo_team_two)}}" style="max-width: 80px!important;" width="25">
                                                    </td>
                                                    <td class="px-3 py-1">
                                                        {{$game->name_team_two}}
                                                    </td>
                                                    <td class="px-3 py-1">
                                                        {{$game->level_team_two}}
                                                    </td>
                                                </tr>
                                                </tbody>
                                            </table>
                                        </div>

                                    </td>
                                    <td>{{$game->chanel}}</td>
                                    <td>{{$game->speaker}}</td>
                                    <td>{{$game->stadium}}</td>
                                    <td>
                                        <form action="{{route('game.change_state',$game->id)}}" style="width: 100px" method="POST"
                                              id="formChangeType{{$game->id}}">
                                            @csrf
                                            <select onchange="submitForm({{$game->id}})" name="state"
                                                    class="form-control select2 custom-select w-full"
                                                    data-placeholder="Choose one" tabindex="-1" aria-hidden="true">
                                                <option @if($game->state == 'جارية الان') selected @endif value="جارية الان">
                                                    جارية الان
                                                </option>
                                                <option @if($game->state == 'لم تبدأ بعد') selected @endif value="لم تبدأ بعد">
                                                    لم تبدأ بعد
                                                </option>
                                                <option @if($game->state == 'بعد قليل') selected @endif value="بعد قليل">
                                                    بغد قليل
                                                </option>
                                                <option @if($game->state == 'انتهت') selected @endif value="انتهت">
                                                    انتهت
                                                </option>

                                            </select>
                                        </form>
                                    </td>

                                    <td>
                                        <form action="{{route('game.destroy',$game)}}" method="POST"
                                              enctype="multipart/form-data">
                                            @csrf
                                            <input type="hidden" name="_method" value="DELETE">
                                            <a class="btn btn-sm btn-primary"
                                               href="{{route('game.edit',$game)}}"><i
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
            </div>
            <!-- SECTION WRAPPER -->
        </div>
    </div>
    <!-- ROW-1 CLOSED -->

    </div>
    <!-- CONTAINER CLOSED -->
    </div>

    <!-- SIDE-BAR -->
    <div class="sidebar sidebar-right sidebar-animate">
        <div class="p-4 border-bottom">
            <span class="fs-17">Notifications</span>
            <a href="#" class="sidebar-icon text-right float-right" data-toggle="sidebar-right"
               data-target=".sidebar-right"><i class="fe fe-x"></i></a>
        </div>
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-primary brround avatar-md">CH</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>New Websites is Created</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">30 mins ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-danger brround avatar-md">N</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Prepare For the Next Project</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">2 hours ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-info brround avatar-md">S</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Decide the live Discussion Time</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">3 hours ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-warning brround avatar-md">K</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Team Review meeting</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">4 hours ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-success brround avatar-md">R</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Prepare for Presentation</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">1 days ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-pink brround avatar-md">MS</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Prepare for Presentation</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">1 days ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-purple brround avatar-md">L</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Prepare for Presentation</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">1 day ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center border-bottom p-4">
            <div class="">
                <span class="avatar bg-warning brround avatar-md">L</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Prepare for Presentation</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">1 day ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
        <div class="list d-flex align-items-center p-4">
            <div class="">
                <span class="avatar bg-blue brround avatar-md">U</span>
            </div>
            <div class="wrapper w-100 ml-3">
                <p class="mb-0 d-flex">
                    <b>Prepare for Presentation</b>
                </p>
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex align-items-center">
                        <i class="mdi mdi-clock text-muted mr-1"></i>
                        <small class="text-muted ml-auto">2 days ago</small>
                        <p class="mb-0"></p>
                    </div>
                </div>
            </div>
        </div><!-- LIST END -->
    </div>
    <!-- SIDE-BAR CLOSED -->
@endsection
