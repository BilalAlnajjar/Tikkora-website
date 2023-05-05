@extends('pages.layouts.dashboard')
@section('content')

    <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
        @csrf
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h3 class="card-title">نشر خبر</h3>
                    </div>
                    <div class="card-body">
                        <div class="form-group">
                            <label class="form-label">عنوان الخبر</label>
                            <input type="text" class="form-control" name="title" placeholder="ادخل عنوان الخبر">
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
                                    <input type="file" class="dropify" name="image" id="image" data-max-file-size="1M"/>
                                </div>
                            </div>
                        </div><!-- COL END -->
                        @error('image')
                        <p class="text-danger">{{ $message }}</p>
                        @enderror

                        <div class="form-group">
                            <label class="form-label"> النص الظاهر للخبر <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content" name="part_description">
                            </textarea>
                            @error('part_description')
                            <p class="text-danger">{{ $message }}</p>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label class="form-label"> نص الخبر الكامل <small class="text-danger">(اختياري)</small></label>
                            <textarea class="content2" name="description">
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
