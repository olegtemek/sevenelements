@extends('admin.main')


@section('title')
Добавить деталь
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.detail.store') }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">

          

          <div class="col-sm-6">
            <div class="form-group">
              @error('title')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Название детали</label>
              <input type="text" name="title" value="{{old('title')}}" class="form-control" placeholder="Название детали" id="title">
            </div>
          </div>
          <div class="col-sm-6">
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


          <div class="col-sm-4">
            <div class="form-group">
              @error('description')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Описание главное</label>
              <textarea name="description" style="min-height: 150px" class="form-control">{{old('description')}}</textarea>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              @error('description1')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Описание первого блока</label>
              <textarea name="description1" style="min-height: 150px" class="form-control">{{old('description1')}}</textarea>
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              @error('description2')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Описание второго блока</label>
              <textarea name="description2" style="min-height: 150px" class="form-control">{{old('description2')}}</textarea>
            </div>
          </div>


            


        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить деталь</button>
      </div>    
    </div>
  </form>
</div>

@endsection
