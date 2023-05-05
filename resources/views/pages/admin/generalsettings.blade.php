@extends('pages.layouts.dashboard')
@section('content')

    <style>
        .btnActive {
            cursor: pointer;
            height: 30px;
            position: absolute;
            opacity: 0;
            width: 30px;
            z-index: 2;
        }

        .btnActive + span {
            background: #e74c3c;
            border-radius: 50%;
            box-shadow: 0 2px 3px 0 rgba(0, 0, 0, .1);
            display: inline-block;
            height: 30px;
            margin: 4px 0 0;
            position: relative;
            width: 30px;
            transition: all .2s ease;
        }

        .btnActive + span::before, input[type=checkbox] + span::after {
            background: #fff;
            content: '';
            display: block;
            position: absolute;
            width: 4px;
            transition: all .2s ease;
        }

        .btnActive + span::before {
            height: 16px;
            left: 13px;
            top: 7px;
            -webkit-transform: rotate(-45deg);
            transform: rotate(-45deg);
        }

        .btnActive + span::after {
            height: 16px;
            right: 13px;
            top: 7px;
            -webkit-transform: rotate(45deg);
            transform: rotate(45deg);
        }

        .btnActive:checked + span {
            background: #2ecc71;
        }

        .btnActive:checked + span::before {
            height: 9px;
            left: 9px;
            top: 13px;
            -webkit-transform: rotate(-47deg);
            transform: rotate(-47deg);
        }

        .btnActive:checked + span::after {
            height: 15px;
            right: 11px;
            top: 8px;
        }
    </style>

    <!-- ============== START CONTENT ==============  -->
    <div class="row">
        <div class="col-md-12">
            <form method="POST" @if ($general) action="{{route('general.update')}}"
                  @endif @if (!$general) action="{{route('general.store')}}" @endif enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">الاعدادات العامة للموقع</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">اسم الموقع</label>
                            <input type="text" class="form-control" name="name" placeholder="اسم الموقع"
                                   @if($general) value="{{$general->name}}" @endif>
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">الشرائح</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="state_slides" {{$general?$general->state_slides == 'on' ? 'checked' : '':''}} />
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">من نحن</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="state_aboutAs" {{$general?$general->state_aboutAs == 'on' ? 'checked' : '':''}}/>
                                    <span></span>
                                </div>
                            </div>
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">الاخبار</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="state_news" {{$general?$general->state_news == 'on' ? 'checked' : '':''}}/>
                                    <span></span>
                                </div>
                            </div>
                        </div>


                        {{--                        <div class="form-group">--}}
                        {{--                            <label class="form-label">Delivery Price</label>--}}
                        {{--                            <input type="text" class="form-control" name="delivery_price" placeholder="Price"--}}
                        {{--                                   @if($general) value="{{$general->delivery_price}}" @endif>--}}
                        {{--                        </div>--}}

                        <div class="form-group">
                            <label class="form-label">  من نحن <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content2" name="about_as_text">
                                @if($general)
                                    {{$general->about_as_text}}
                                @endif
                            </textarea>
                            @error('about_as_text')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="mb-0 card-title">تحميل صورة منطقة من نحن </h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="about_as_image" class="dropify"
                                           data-height="300" @if($general) data-default-file="{{asset($general->about_as_image)}}" @endif/>
                                </div>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label"> اتصل بنا <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content3" name="contact_us">
                                @if($general)
                                    {{$general->contact_us}}
                                @endif
                            </textarea>
                            @error('contact_us')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label"> سياسة الخصوصية <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content4" name="privacy_policy">
                                @if($general)
                                    {{$general->privacy_policy}}
                                @endif
                            </textarea>
                            @error('privacy_policy')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label"> DMCA <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content5" name="dmca">
                                @if($general)
                                    {{$general->dmca}}
                                @endif
                            </textarea>
                            @error('dmca')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="mb-0 card-title">تحميل صورة غلاف المباراة </h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" name="cover_match" class="dropify"
                                           data-height="300" @if($general) data-default-file="{{asset($general->cover_match)}}" @endif/>
                                </div>
                            </div>
                        </div>

                            <div class="col-lg-12">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h3 class="mb-0 card-title">تحميل لوقو الموقع </h3>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="logo_header" class="dropify"
                                               data-height="300" @if($general) data-default-file="{{asset($general->logo_header)}}" @endif/>
                                    </div>
                                </div>
                            </div>
                                <div class="col-lg-12">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h3 class="mb-0 card-title">تحميل لوقو الفوتر</h3>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="logo_footer" class="dropify"
                                               data-height="300"  @if($general) data-default-file="{{asset($general->logo_footer)}}" @endif/>
                                    </div>
                                </div>
                                </div>

                           <!-- COL END -->
                            <div class="col-lg-12">
                                <div class="card shadow">
                                    <div class="card-header">
                                        <h3 class="mb-0 card-title">تحميل ايقونة الموقع</h3>
                                    </div>
                                    <div class="card-body">
                                        <input type="file" name="favicon" class="dropify"
                                               data-height="300"  @if($general) data-default-file="{{asset($general->favicon)}}" @endif/>
                                    </div>
                                </div>
                            </div><!-- COL END -->
                        </div>
                    </div>
                <button type="submit" class="btn btn-success mt-1">Save</button>
            </form>
        </div><!-- COL END -->
        <div class="card-footer">

        </div>
    </div><!--ROW END-->
    <!-- ============== END CONTENT ==============  -->

@endsection
