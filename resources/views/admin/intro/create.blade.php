@extends('admin.main')


@section('title')
Добавить фото
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.intro.store') }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">

          <div class="col-sm-4">
            <div class="form-group">
              @error('image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Фотография</label>
                <input type="text" class="form-control" id="image" name="image" value="{{ old('image') }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>



        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить фото</button>
      </div>    
    </div>
  </form>
</div>

@endsection