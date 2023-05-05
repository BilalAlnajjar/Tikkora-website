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
        .selectgroup-text{
            font-family: 'tajawal'!important;
            direction: ltr;
            -webkit-font-smoothing: antialiased;
            -webkit-tap-highlight-color: transparent;
            -webkit-text-size-adjust: none;
            font-feature-settings: "liga" 0;
            word-wrap: break-word;
            font-weight: 600;
            box-sizing: border-box;
            display: block;
            border: 1px solid #d8dde4;
            text-align: center;
            padding: 0.375rem 1rem;
            position: relative;
            user-select: none;
            font-size: 0.875rem;
            line-height: 1.5rem;
            min-width: 2.375rem;
            border-radius: 5px !important;
            border-color: #5e2dd8;
            z-index: 1;
            color: #5e2dd8;
            background: #f6f4fb;
        }
        .btnDelete{
            cursor: pointer;
        }
    </style>
    <!-- ============== START CONTENT ==============  -->

    <form action="{{route('product.store')}}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">اضافة خدمة</h3>
                    </div>
                    <div class="card-body">
                        <!-- <div class="form-group">
                                            <label class="form-label">Restaurant</label>
                                            <select class="form-control select2-show-search" data-placeholder="Choose one (with searchbox)">
                                                <optgroup label="Categories">
                                                    <option value="AZ">Restaurant 1</option>
                                                    <option value="CO">Restaurant 2</option>
                                                    <option value="ID">Restaurant 3</option>
                                                    <option value="MT">Restaurant 4</option>
                                                    <option value="NM">Restaurant 5</option>
                                                </optgroup>
                                            </select>
                                        </div> -->

                        <div class="form-group">
                            <label class="form-label">اسم الخدمة</label>
                            <input type="text" class="form-control" name="name" placeholder="Enter Product Name">
                            @error('name')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <div class="row">
                                <div class="form-group col-md-12">
                                    <label class="form-label mt-0">الفئة</label>
                                    <select class="form-control select2 custom-select" data-placeholder="Choose one"
                                            name="category_id" id="category_id">
                                        <option label="Choose one">
                                        </option>

                                        @foreach ($categories as $category)
                                            <option value="{{$category->id}}">{{$category->name}}</option>
                                        @endforeach

                                    </select>
                                    @error('category_id')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror
                                </div>
                            </div>

                        </div>

                        <div class="form-group">
                            <label class="form-label">سعر الخدمة</label>
                            <input type="text" class="form-control" name="price" placeholder="Enter Price">
                            @error('price')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label class="form-label">الوقت المقدر لتجهيز</label>
                            <input type="text" class="form-control" name="timeDelivery" placeholder="Enter Price">
                            @error('timeDelivery')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror

                        </div>

                        <div class="form-group">
                            <label class="form-label">وصف الخدمة <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content" name="description"></textarea>
                            @error('description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">المقاسات</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="measuringActive"/>
                                    <span></span>
                                </div>
                            </div>

                            <div class="selectgroup selectgroup-pills" id="measuringBtns">

                            </div>

                            <div class="row" id="measuringBtns">
                                <div class="form-group col-6">
                                    <label class="form-label">المقاس</label>
                                    <input type="text" class="form-control"  id="measuring"
                                           placeholder="ادخل المقاس">
                                    @error('measuring')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group col-5">
                                    <label class="form-label">سعر المقاس</label>
                                    <input type="text" class="form-control"  id="measuringPrice"
                                           placeholder="ادخل سعر المقاس">
                                    @error('measuringPrice')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="btn-list d-flex align-items-center">
                                    <button type="button" onClick="addMeasuringBtns()" class="btn btn-primary">اضافة
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">نوع الورق/ المادة</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="paperActive"/>
                                    <span></span>
                                </div>
                            </div>
                            <div class="selectgroup selectgroup-pills" id="paperBtns">

                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="form-label">المادة</label>
                                    <input type="text" class="form-control"  id="paper"
                                           placeholder="ادخل نوع المادة">
                                    @error('paper')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group col-5">
                                    <label class="form-label">سعر المادة</label>
                                    <input type="text" class="form-control"  id="paperPrice"
                                           placeholder="ادخل سعر المادة">
                                    @error('paperPrice')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="btn-list d-flex align-items-center">
                                    <button type="button" onClick="addPaperBtns()" class="btn btn-primary">اضافة
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">الأوزان</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="weightActive"/>
                                    <span></span>
                                </div>
                            </div>
                            <div class="selectgroup selectgroup-pills" id="weightBtns">

                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="form-label">الوزن</label>
                                    <input type="text" class="form-control"  id="weight"
                                           placeholder="ادخل نوع المادة">
                                    @error('weight')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group col-5">
                                    <label class="form-label">سعر المادة</label>
                                    <input type="text" class="form-control"  id="weightPrice"
                                           placeholder="ادخل سعر المادة">
                                    @error('weightPrice')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="btn-list d-flex align-items-center">
                                    <button type="button" onClick="addWeightBtns()" class="btn btn-primary">اضافة
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">العدد</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="numberActive"/>
                                    <span></span>
                                </div>
                            </div>
                            <div class="selectgroup selectgroup-pills" id="numberBtns">

                            </div>
                            <div class="row">
                                <div class="form-group col-11">
                                    <label class="form-label">العدد</label>
                                    <input type="text" class="form-control"  id="number"
                                           placeholder="ادخل العدد">
                                    @error('weight')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
{{--                                <div class="form-group col-5">--}}
{{--                                    <label class="form-label">سعر العدد</label>--}}
{{--                                    <input type="text" class="form-control"  id="numberPrice"--}}
{{--                                           placeholder="ادخل سعر المادة">--}}
{{--                                    @error('weightPrice')--}}
{{--                                    <p class="text-danger">{{ $message }}</p>--}}
{{--                                    @enderror--}}

{{--                                </div>--}}
                                <div class="btn-list d-flex align-items-center">
                                    <button type="button" onClick="addNumberBtns()" class="btn btn-primary">اضافة
                                    </button>
                                </div>
                            </div>

                        </div>

                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">شكل القص</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="cutActive"/>
                                    <span></span>
                                </div>
                            </div>
                            <div class="selectgroup selectgroup-pills" id="cutBtns">

                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="form-label">شكل القص</label>
                                    <input type="text" class="form-control"  id="cut"
                                           placeholder="ادخل العدد">
                                    @error('weight')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group col-5">
                                    <label class="form-label">السعر </label>
                                    <input type="text" class="form-control"  id="cutPrice"
                                           placeholder="ادخل سعر القص">
                                    @error('weightPrice')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="btn-list d-flex align-items-center">
                                    <button type="button" onClick="addCutBtns()" class="btn btn-primary">اضافة
                                    </button>
                                </div>
                            </div>

                        </div>


                        <div class="card-body">
                            <div class="row justify-content-between text-center align-items-center">
                                <p class="cal-11 h5">الالوان</p>
                                <div class="">
                                    <input type="checkbox" class="btnActive" name="colorActive"/>
                                    <span></span>
                                </div>
                            </div>
                            <div class="selectgroup selectgroup-pills" id="colorBtns">

                            </div>
                            <div class="row">
                                <div class="form-group col-6">
                                    <label class="form-label">اللون</label>
                                    <input type="text" class="form-control"  id="color"
                                           placeholder="ادخل اللون">
                                    @error('colors')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="form-group col-5">
                                    <label class="form-label">السعر </label>
                                    <input type="text" class="form-control"  id="colorPrice"
                                           placeholder="ادخل سعر اللون">
                                    @error('colorPrice')
                                    <p class="text-danger">{{ $message }}</p>
                                    @enderror

                                </div>
                                <div class="btn-list d-flex align-items-center">
                                    <button type="button" onClick="addColorBtns()" class="btn btn-primary">اضافة
                                    </button>
                                </div>
                            </div>

                        </div>


                        <div class="col-lg-12">
                            <div class="card shadow">
                                <div class="card-header">
                                    <h3 class="mb-0 card-title">تحميل صورة الخدمة</h3>
                                </div>
                                <div class="card-body">
                                    <input type="file" class="dropify" name="images[]" id="images"  multiple/>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                    </div>
                </div>
            </div>
        </div>

        <!-- COL END -->
        {{--
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="mb-0 card-title">add </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the name
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the name
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the name
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the name
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the name
        ">
                                </div>

                            </div>

                            <div class="col-md-6">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the price
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the price
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the price
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the price
        ">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control" name="input" placeholder="Enter the price
        ">
                                </div>

                            </div>

                        </div>

                    </div>

                </div> --}}
        <div class="btn-list text-center">
            <button type="submit" class="btn btn-primary">Save changes</button>
            <a href="{{route('product.index')}}" class="btn btn-danger">Cancel</a>
        </div>
        <div class="btn-list text-center">
        </div>

    </form>
    <!--ROW END-->
    <!-- ============== END CONTENT ==============  -->

    <script>
        function addMeasuringBtns() {
            console.log('name')
            let name = $("#measuring").val()
            let price = $("#measuringPrice").val()

            if (name === "") {

            } else {
                var clicks = Math.floor((1 + Math.random()) * 0x10000)
                    .toString(16)
                    .substring(1);
                document.getElementById("measuringBtns").innerHTML +=
                    '<label class="selectgroup-item d-flex flex-row-reverse" id="' + clicks + '">' +
                    // '<i class="fa fa-trash-o" data-toggle="tooltip" title="" data-original-title="fa fa-trash-o"></i>'+
                    '<input type="checkbox" name="measuring[]" value="' + name + '" class="selectgroup-input" checked="">' +
                    '<span class="selectgroup-text"><span class="text-warning">(' + price + ' OMR ) </span> ' + name + ' <i class="fa fa-trash-o ml-3 text-danger btnDelete" onClick="deleteItems(this)" data-toggle="tooltip" title=""></i> </span>' +
                    '<input type="hidden" name="measuringPrice[]" value="' + price + '">' +
                    '</label>'
            }
        }

        function addPaperBtns() {
            console.log('name')
            let name = $("#paper").val()
            let price = $("#paperPrice").val()

            if (name === "") {

            } else {
                var clicks = Math.floor((1 + Math.random()) * 0x10000)
                    .toString(16)
                    .substring(1);
                document.getElementById("paperBtns").innerHTML +=
                    '<label class="selectgroup-item" id="' + clicks + '">' +
                    '<input type="checkbox" name="paper[]" value="' + name + '" class="selectgroup-input" checked="">' +
                    '<span class="selectgroup-text"><span class="text-warning">(' + price + ' OMR ) </span> ' + name + ' <i class="fa fa-trash-o ml-3 text-danger btnDelete" onClick="deleteItems(this)" data-toggle="tooltip" title="" ></i> </span>' +
                    '<input type="hidden" name="paperPrice[]" value="' + price + '">' +
                    '</label>'
            }
        }

        function addWeightBtns() {
            console.log('name')
            let name = $("#weight").val()
            let price = $("#weightPrice").val()

            if (name === "") {

            } else {
                var clicks = Math.floor((1 + Math.random()) * 0x10000)
                    .toString(16)
                    .substring(1);
                document.getElementById("weightBtns").innerHTML +=
                    '<label class="selectgroup-item" id="' + clicks + '">' +
                    '<input type="checkbox" name="weights[]" value="' + name + '" class="selectgroup-input" checked="">' +
                    '<span class="selectgroup-text"><span class="text-warning">(' + price + ' OMR ) </span> ' + name + ' <i class="fa fa-trash-o ml-3 text-danger btnDelete" onClick="deleteItems(this)" data-toggle="tooltip" title="" ></i>  </span>' +
                    '<input type="hidden" name="weightPrice[]" value="' + price + '">' +
                    '</label>'
            }
        }

        function addNumberBtns() {
            console.log('name')
            let name = $("#number").val()
            let price = $("#numberPrice").val()

            if (name === "") {

            } else {
                var clicks = Math.floor((1 + Math.random()) * 0x10000)
                    .toString(16)
                    .substring(1);
                document.getElementById("numberBtns").innerHTML +=
                    '<label class="selectgroup-item" id="' + clicks + '">' +
                    '<input type="checkbox" name="numbers[]" value="' + name + '" class="selectgroup-input" checked="">' +
                    '<span class="selectgroup-text">' + name + ' <i class="fa fa-trash-o ml-3 text-danger btnDelete" onClick="deleteItems(this)" data-toggle="tooltip" title="" ></i> </span>' +
                    '</label>'
            }
        }

        function addColorBtns() {
            console.log('name')
            let name = $("#color").val()
            let price = $("#colorPrice").val()

            if (name === "") {

            } else {
                var clicks = Math.floor((1 + Math.random()) * 0x10000)
                    .toString(16)
                    .substring(1);
                document.getElementById("colorBtns").innerHTML +=
                    '<label class="selectgroup-item" id="' + clicks + '">' +
                    '<input type="checkbox" name="colors[]" value="' + name + '" class="selectgroup-input" checked="">' +
                    '<span class="selectgroup-text"><span class="text-warning">(' + price + ' OMR ) </span>  ' + name + ' <i class="fa fa-trash-o ml-3 text-danger btnDelete" onClick="deleteItems(this)" data-toggle="tooltip" title="" ></i> </span>' +
                    '<input type="hidden" name="colorsPrice[]" value="' + price + '">' +
                    '</label>'
            }
        }

        function addCutBtns() {
            console.log('name')
            let name = $("#cut").val()
            let price = $("#cutPrice").val()

            if (name === "") {

            } else {
                var clicks = Math.floor((1 + Math.random()) * 0x10000)
                    .toString(16)
                    .substring(1);
                document.getElementById("cutBtns").innerHTML +=
                    '<label class="selectgroup-item" id="' + clicks + '">' +
                    '<input type="checkbox" name="cutLabels[]" value="' + name + '" class="selectgroup-input" checked="">' +
                    '<span class="selectgroup-text"><span class="text-warning">(' + price + ' OMR ) </span>  ' + name + ' <i class="fa fa-trash-o ml-3 text-danger btnDelete" onClick="deleteItems(this)" data-toggle="tooltip" title="" ></i> </span>' +
                    '<input type="hidden" name="cutPrice[]" value="' + price + '">' +
                    '</label>'
            }
        }

        function deleteItems(tag){
            tag.parentElement.parentElement.remove()
        }

    </script>
@endsection
