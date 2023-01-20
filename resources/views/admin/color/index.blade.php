@extends('admin.main')


@section('title')
Все цвета
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.color.create') }}" class="btn btn-success">Добавить цвет</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все цвета</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>hex цвета</th>
                <th>Название</th>
                <th>Первое изображение</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($colors as $color)
            <tr>
              
              <td style="color:{{$color->code}};">{{$color->code}}</td>
              <td style="color:{{$color->code}};">{{$color->title}}</td>
              <td><img src="/{{$color->image1}}" style="max-width:150px" alt=""></td>
              <td>
                <a href="{{route('admin.color.edit', $color->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.color.destroy', $color->id)}}" method="post">
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