@extends('admin.main')


@section('title')
Редактировать героя
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.hero.update', $hero->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">


          <div class="col-sm-4">
            <div class="form-group">
              @error('name')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Имя</label>
              <input type="text" name="name" value="{{$hero->name}}" class="form-control" placeholder="Имя">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              @error('pos')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Должность</label>
              <input type="text" name="pos" value="{{$hero->pos}}" class="form-control" placeholder="Должность">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              @error('color_id')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Выбрать цвет</label>
              <select name="color_id" class="form-control">
                @foreach ($colors as $color)
                    <option 
                      @if ($color->id == $hero->id)
                          selected
                      @endif
                    value="{{$color->id}}">{{$color->title}}</option>
                @endforeach
              </select>
            </div>
          </div>

          <div class="col-sm-12">
            <div class="form-group">
              @error('description')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Описание</label>
              <textarea name="description" class="form-control" style="min-height: 150px;">{{$hero->description}}</textarea>
            </div>
          </div>

          




          <div class="row col-sm-12">
            <div class="col-sm-3">
              <div class="form-group">
                @error('image1')
                  <span class="error text-danger">{{ $message }}</span>
                @enderror
                <div class="row col-sm-12 input-group">
                  <label style="display: block; width:100%">Фотография 1</label>
                  <input type="text" class="form-control" id="image1" name="image1" value="{{ $hero->image1 }}">
                  <div class="input-group-prepend">
                    <a href="" class="popup_selector btn btn-success" data-inputid="image1"><i class="fas fa-file"></i></a>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-3">
              <div class="form-group">
                @error('image2')
                  <span class="error text-danger">{{ $message }}</span>
                @enderror
                <div class="row col-sm-12 input-group">
                  <label style="display: block; width:100%">Фотография 2</label>
                  <input type="text" class="form-control" id="image2" name="image2" value="{{ $hero->image2 }}">
                  <div class="input-group-prepend">
                    <a href="" class="popup_selector btn btn-success" data-inputid="image2"><i class="fas fa-file"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-sm-3">
              <div class="form-group">
                @error('image3')
                  <span class="error text-danger">{{ $message }}</span>
                @enderror
                <div class="row col-sm-12 input-group">
                  <label style="display: block; width:100%">Фотография 3</label>
                  <input type="text" class="form-control" id="image3" name="image3" value="{{ $hero->image3 }}">
                  <div class="input-group-prepend">
                    <a href="" class="popup_selector btn btn-success" data-inputid="image3"><i class="fas fa-file"></i></a>
                  </div>
                </div>
              </div>
            </div>
  
            <div class="col-sm-3">
              <div class="form-group">
                @error('image4')
                  <span class="error text-danger">{{ $message }}</span>
                @enderror
                <div class="row col-sm-12 input-group">
                  <label style="display: block; width:100%">Фотография 4</label>
                  <input type="text" class="form-control" id="image4" name="image4" value="{{ $hero->image4 }}">
                  <div class="input-group-prepend">
                    <a href="" class="popup_selector btn btn-success" data-inputid="image4"><i class="fas fa-file"></i></a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Редактировать героя</button>
      </div>    
    </div>
  </form>
</div>

@endsection

