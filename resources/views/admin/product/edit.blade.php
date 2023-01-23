@extends('admin.main')


@section('title')
Редактировать продукт
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.product.update', $product->id) }}">
    @csrf
    @method('PUT')
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
                <input type="text" class="form-control" id="image" name="image" value="{{ $product->image }}">
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
              <input type="text" name="title" class="form-control" value="{{$product->title }}" placeholder="Название">
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
                    <option 
                    @if ($color->id == $product->color_id)
                        selected
                    @endif
                    value="{{$color->id}}" style="color:{{$color->code}};">{{$color->title}}</option>
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
                <option 
                  @if ($product->type == 0)
                      selected
                  @endif
                value="0">Сумка</option>
                <option 
                @if ($product->type == 1)
                      selected
                  @endif
                value="1">Чехол</option>
                <option value="2"
                @if ($product->type == 2)
                      selected
                  @endif
                >Акссесуар</option>
              </select>
            </div>
          </div>

          <div class="col-sm-6">
            <div class="form-group">
              @error('description')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Описание</label>
              <textarea name="description" placeholder="Описание" class="form-control" style="min-height: 200px;">{{$product->description}}</textarea>
            </div>
          </div>

        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Редактировать продукт</button>
      </div>    
    </div>
  </form>
</div>

@endsection