@extends('admin.main')


@section('title')
Редактировать цвет
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.color.update', $color->id) }}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">

          <div class="col-sm-4">
            <div class="form-group">
              @error('code')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Код цвета в формате hex (#fffff или #00000)</label>
              <input type="text" value="{{$color->code}}" id="code" name="code" class="form-control" placeholder="Код цвета в формате hex">
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              @error('title')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <label>Название цвета</label>
              <input type="text" name="title" value="{{$color->title}}" class="form-control" placeholder="Название цвета" id="title">
            </div>
          </div>


          <div class="col-sm-12">
            <h4 id="result"></h4>
          </div>


          <div class="col-sm-4">
            <div class="form-group">
              @error('main_image')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Главное изображение</label>
          
                <input type="text" class="form-control" id="main_image" name="main_image" value="{{ $color->type == false ? $color->video : '' }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="main_image"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>


          <div class="col-sm-4">
            <div class="form-group">
              @error('video')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Видео (оставить пустым если главное изображение вырбрано)</label>
                <input type="text" class="form-control" id="video" name="video" value="{{ $color->type == true ? $color->video : '' }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="video"><i class="fas fa-file"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="col-sm-4">
            <div class="form-group">
              @error('preview')
                <span class="error text-danger">{{ $message }}</span>
              @enderror
              <div class="row col-sm-12 input-group">
                <label style="display: block; width:100%">Превью для видео</label>
                <input type="text" class="form-control" id="preview" name="preview" value="{{ $color->preview }}">
                <div class="input-group-prepend">
                  <a href="" class="popup_selector btn btn-success" data-inputid="video"><i class="fas fa-file"></i></a>
                </div>
              </div>
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
                  <input type="text" class="form-control" id="image1" name="image1" value="{{ $color->image1 }}">
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
                  <input type="text" class="form-control" id="image2" name="image2" value="{{ $color->image2 }}">
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
                  <input type="text" class="form-control" id="image3" name="image3" value="{{ $color->image3 }}">
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
                  <input type="text" class="form-control" id="image4" name="image4" value="{{ $color->image4 }}">
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
        <button class="btn btn-success" type="submit">Редактировать цвет</button>
      </div>    
    </div>
  </form>
</div>

@endsection

@section('js')
    <script>
      const title = document.getElementById('title');
      const code = document.getElementById('code');
      const result = document.getElementById('result');
      title.addEventListener('keyup', result_code)
      code.addEventListener('keyup', result_code)

      function result_code(){
        result.innerHTML = `<p style="color:${code.value};">Название цвета - ${title.value}, и его код цвета = ${code.value}</p>`
      }
      result_code()
    </script>
@endsection