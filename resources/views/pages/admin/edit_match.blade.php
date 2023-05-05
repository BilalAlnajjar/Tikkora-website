@extends('pages.layouts.dashboard')
@section('content')

    <form action="{{route('game.update',$game->id)}}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="hidden" name="_method" value="PUT">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">اضافة مباراة جديد</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">اسم الفريق الاول</label>
                            <input type="text" class="form-control" name="name_team_one"
                                   placeholder="ادخل اسم الفريق الاول" value="{{$game->name_team_one}}">
                            @error('name_team_one')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">اسم الفريق الثاني</label>
                            <input type="text" class="form-control" id="name_team_two" name="name_team_two"
                                   placeholder="ادخل اسم الفريق الثاني" value="{{$game->name_team_two}}">
                            @error('name_team_two')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="mb-0 card-title">لوقو الفريق الاول</h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="dropify" name="logo_team_one" id="logo_team_one"
                                           data-default-file="{{asset($game->logo_team_one)}}" data-height="300"
                                           data-max-file-size="1M">
                                </div>
                            </div>
                        </div><!-- COL END -->
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror


                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="mb-0 card-title">لوقو الفريق الثاني</h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="dropify" name="logo_team_two" id="logo_team_two"
                                           data-default-file="{{asset($game->logo_team_two)}}" data-height="300"
                                           data-max-file-size="1M">
                                </div>
                            </div>
                        </div><!-- COL END -->
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label class="form-label">الدولة</label>
                            <input type="text" class="form-control" name="country"
                                   placeholder="ادخل الدولة" value="{{$game->country}}">
                            @error('country')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">الدوري</label>
                            <input type="text" class="form-control" name="league"
                                   placeholder="ادخل اسم الدوري" value="{{$game->league}}">
                            @error('league')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">الجولة</label>
                            <input type="text" class="form-control" name="round"
                                   placeholder="ادخل رقم الجولة" value="{{$game->round}}">
                            @error('round')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="mb-0 card-title">لوقو الدوري</h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="dropify" name="logo_league" id="logo_league"
                                           data-default-file="{{asset($game->logo_league)}}" data-height="300"
                                           data-max-file-size="1M">
                                </div>
                            </div>
                        </div><!-- COL END -->
                        @error('logo_league')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="flex flex-row">
                            <div class="form-group w-1/3">
                                <label class="form-label">ترتيب الفريق الاول</label>
                                <input type="text" class="form-control" name="level_team_one"
                                       placeholder="ادخل ترتيب الفريق الاول" value="{{$game->level_team_one}}">
                                @error('league')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                            <div class="form-group w-1/3">
                                <label class="form-label">ترتيب الفريق الثاني</label>
                                <input type="text" class="form-control" name="level_team_two"
                                       placeholder="ادخل ترتيب الفريق الثاني" value="{{$game->level_team_two}}">
                                @error('league')
                                <p class="text-danger">{{ $message }}</p>
                                @enderror
                            </div>
                        </div>

                        <div id="add_to_me">
                            @foreach($game->links as $key => $link)
                            <div class="card">
                                <div class="card-body">
                                    <div class="form-group w-1/3">
                                        <label class="form-label">عنوان السيرفر</label>
                                        <input type="text" class="form-control" name="titles[]" value="{{$link->title}}"
                                               placeholder="ادخل عنوان البث">
                                    </div>

                                    <div class="form-group w-1/3">
                                        <label class="form-label">رابط البث</label>
                                        <input type="text" class="form-control" name="links[]" placeholder="Enter Link" value="{{$link->url}}">
                                    </div>
                                    @if($key >= 1)
                                        <button class="btn btn-danger ml-5 mb-4" onClick="removeSocial(this)"><i class="fa fa-trash-o" data-toggle="tooltip" title="" data-original-title="fa fa-trash-o"></i></button>
                                    @endif
                                </div>
                            </div>
                            @endforeach
                        </div>

                        <div class="card-footer text-left">
                            <button type="button" onclick="addCode()" class="btn btn-success mt-1">+</button>
                        </div>


                        <div class="form-group">
                            <label class="form-label">المعلق</label>
                            <input type="text" class="form-control" name="speaker"
                                   placeholder="ادخل اسم المعلق" value="{{$game->speaker}}">
                            @error('speaker')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">الملعب</label>
                            <input type="text" class="form-control" name="stadium"
                                   placeholder="ادخل اسم الملعب" value="{{$game->stadium}}">
                            @error('stadium')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">القناة الناقلة للبث</label>
                            <input type="text" class="form-control" name="chanel"
                                   placeholder="ادخل اسم القناة الناقلة للبث" value="{{$game->chanel}}">
                            @error('stadium')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">النتيجة</label>
                            <input type="text" class="form-control" name="result"
                                   placeholder="ادخل النتيجة" value="{{$game->result}}">
                            @error('result')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>


                        <div class="form-group">
                            <label class="form-label">وقت المباراة</label>
                            <input id="party" type="datetime-local" class="form-control"  name="partydate"
                                   placeholder="وقت المباراة" value="{{$game->partydate}}" />
                            @error('partydate')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label">وقت تبديل حالة المباراة الى بعد قليل</label>
                            <input id="time" type="datetime-local" class="form-control" name="time"
                                   placeholder="وقت المباراة" value="{{$game->time}}" />
                            @error('time')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>



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

    <script>
        function addCode() {
            var clicks = Math.floor((1 + Math.random()) * 0x10000)
                .toString(16)
                .substring(1);
            document.getElementById("add_to_me").insertAdjacentHTML('beforeend',
                '<div class="card">'+
                '<div class="card-body" id="' + clicks + '">' +
                '<div class="form-group">' +
                '<label class="form-label">عنوان السيرفر</label>' +
                '<input type="text" class="form-control" name="titles[]" placeholder="ادخل عنوان البث">' +
                '</div>' +

                '<div class="form-group">' +
                '<label class="form-label">رابط البث</label>' +
                '<input type="text" class="form-control" name="links[]" placeholder="ادخل الرابط">' +
                '</div>' +
                '<button class="btn btn-danger ml-5 mb-4" onClick="removeSocial(this)"><i class="fa fa-trash-o" data-toggle="tooltip" title="" data-original-title="fa fa-trash-o"></i></button>' +
                '</div>' +
                '</div>'+
                '</div>'
            )

        }

        function removeSocial(tag) {
            console.log(tag)

            tag.parentElement.parentElement.remove()
        }
    </script>


    <!--ROW END-->
    <!-- ============== END CONTENT ==============  -->

@endsection
