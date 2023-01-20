@extends('admin.main')


@section('title')
Наши герои
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.hero.create') }}" class="btn btn-success">Добавить цвет</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Наши герои</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Имя</th>
                <th>Должность</th>
                <th>Цвет</th>
                <th>Первое изображение</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($heroes as $hero)
            <tr>
              
              <td>{{$hero->name}}</td>
              <td>{{$hero->pos}}</td>
              <td style="color:{{$hero->color->code}};">{{$hero->color->title}}</td>
              <td><img src="/{{$hero->image1}}" style="max-width:150px" alt=""></td>
              <td>
                <a href="{{route('admin.hero.edit', $hero->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.hero.destroy', $hero->id)}}" method="post">
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