@extends('admin.main')


@section('title')
Добавить продукт
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.product.store') }}">
    @csrf
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">

          <div class="col-sm-3">
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

          <div class="col-sm-3">
            <div class="form-group">
              @error('title')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Название</label>
              <input type="text" name="title" class="form-control" value="{{old('title')}}" placeholder="Название">
            </div>
          </div>

          <div class="col-sm-3">
            <div class="form-group">
              @error('color_id')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Выберите цвет</label>
              <select name="color_id" id="" class="form-control">
                @foreach ($colors as $color)
                    <option value="{{$color->id}}" style="color:{{$color->code}};">{{$color->title}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-sm-3">
            <div class="form-group">
              @error('type')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Выберите тип</label>
              <select name="type" id="" class="form-control">
                <option value="0">Сумка</option>
                <option value="1">Чехол</option>
                <option value="2">Акссесуар</option>
              </select>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('description')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Описание</label>
              <textarea name="description" placeholder="Описание" class="form-control" style="min-height: 200px;">{{old('description')}}</textarea>
            </div>
          </div>

        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Добавить продукт</button>
      </div>    
    </div>
  </form>
</div>

@endsection