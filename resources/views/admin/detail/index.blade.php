@extends('admin.main')


@section('title')
Главное в деталях
@endsection

@section('content')

<section class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-sm-12 mb-4">
        <a href="{{route('admin.detail.create') }}" class="btn btn-success">Добавить деталь</a>
      </div>
      <div class="card col-sm-12" style="min-height:100%;">
        <div class="card-header">
        <h3 class="card-title">Все цвета</h3>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped">
            <thead>
              <tr>
                <th>Название</th>
                <th>Изображение</th>
                <th>Основное описание</th>
                <th>Удалить/Изменить</th>
              </tr>
            </thead>
          <tbody>
            @foreach ($details as $detail)
            <tr>
              
              <td>{{$detail->title}}</td>
              <td><img src="/{{$detail->image}}" alt="" style="max-width:150px;"></td>
              <td>{{$detail->description}}</td>
              <td>
                <a href="{{route('admin.detail.edit', $detail->id)}}" class="btn btn-primary">Изменить</a>
                <form style="display:inline" action="{{route('admin.detail.destroy', $detail->id)}}" method="post">
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