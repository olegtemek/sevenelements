@extends('admin.main')


@section('title')
Все изображения вверху сайта
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.intro.create') }}" class="btn btn-success">Добавить фото</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все фотографии</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Id</th>
                <th>Изображение</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($gallery as $photo)
            <tr>
              
              <td>{{$photo->id}}</td>
              <td><img src="/{{$photo->image}}" style="max-width:150px" alt=""></td>
              <td>
                <a href="{{route('admin.intro.edit', $photo->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.intro.destroy', $photo->id)}}" method="post">
                @method('DELETE')
                @csrf
                <button class="btn btn-danger" type="submit">Удалить</button>
                </form>
              </td>
            </tr>
            @endforeach
          </tbody>
          </table>
        </div>
        
        </div>
    </div>
  </div>
</section>

@endsection