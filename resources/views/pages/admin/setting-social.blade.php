@extends('pages.layouts.dashboard')
@section('content')

    <div class="card">
        <form action="{{route('soical.update')}}" method="Post">
            @csrf
            <div class="card-header d-flex justify-content-between">
                <h3 class="mb-0 card-title">Add Project Soical</h3>
                <button type="submit" class="btn btn-info text-white"><i class="fa fa-plus-circle mr-2"></i>Save
                </button>

            </div>

            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Facebook</label>
                            <input type="text" class="form-control" name="facebook" placeholder="Facebook"
                                   @if($soical) value="{{$soical->facebook}}" @endif>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Instagram</label>
                            <input type="text" class="form-control" name="instagram" placeholder="Instagram"
                                   @if($soical) value="{{$soical->instagram}} @endif">
                        </div>

                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label class="form-label">Twitter</label>
                            <input type="text" class="form-control" name="twitter" placeholder="Twitter"
                                   @if($soical) value="{{$soical->twitter}}" @endif>
                        </div>
                        <div class="form-group">
                            <label class="form-label">Youtube</label>
                            <input type="text" class="form-control" name="youtube" placeholder="Youtube"
                                   @if($soical) value="{{$soical->youtube}}" @endif>
                        </div>

                    </div>

                </div>

        </form>

@endsection
