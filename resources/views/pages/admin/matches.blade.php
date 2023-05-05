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
                        <a href="{{route('game.create')}}">
                            <button class="btn btn-primary"><i class="fe fe-plus mr-2"></i>اضافة مباراة جديد</button>
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
                    <!-- TABLE WRAPPER -->
                </div>
                <!-- SECTION WRAPPER -->
            </div>
        </div>

        <script>
            function submitForm(id) {
                $("#formChangeType"+id).submit();
            }
        </script>
        <!-- ROW-1 CLOSED -->
@endsection
