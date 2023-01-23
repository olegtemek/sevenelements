@extends('admin.main')


@section('title')
Основные настройки
@endsection

@section('content')


<div class="card-body">
  <form method="POST" action="{{ route('admin.contact.update', 1)}}">
    @csrf
    @method('PUT')
    <div class="cart-body">
      <div class="row">
        <div class="col-sm-12 row mb-4">
          <div class="col-sm-6">
            <div class="form-group">
              <label>Адрес</label>
              @error('address')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $contacts->address ?? '' }}" class="form-control" name="address" placeholder="Адрес">
            </div>
          </div>
          <div class="col-sm-6">
            <div class="form-group">
              <label>Email</label>
              @error('email')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $contacts->email ?? '' }}" class="form-control" name="email" placeholder="Email">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Номер телефона whatsapp</label>
              @error('number_whatsapp')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $contacts->number_whatsapp ?? '' }}" class="form-control" name="number_whatsapp" placeholder="Номер телефона whatsapp">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Номер телефона</label>
              @error('number_whatsapp')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $contacts->number ?? '' }}" class="form-control" name="number" placeholder="Номер телефона">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Facebook</label>
              @error('facebook')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $contacts->facebook ?? '' }}" class="form-control" name="facebook" placeholder="Facebook">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Instagram</label>
              @error('instagram')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $contacts->instagram ?? '' }}" class="form-control" name="instagram" placeholder="Instagram">
            </div>
          </div>
          <div class="col-sm-4">
            <div class="form-group">
              <label>Instagram</label>
              @error('instagram')
              <span class="error text-danger">{{ $message }}</span>
              @enderror
              <input type="text" value="{{ $contacts->instagram ?? '' }}" class="form-control" name="instagram" placeholder="Instagram">
            </div>
          </div>
          



        </div>

      </div>
    </div>


    <div class="row col-sm-12 mt-2">      
      <div class="col-sm-12">
        <button class="btn btn-success" type="submit">Сохранить данные</button>
      </div>    
    </div>
  </form>
</div>

@endsection