<section class="color">
  <div class="container">
    <div class="color__title">
      <h2>цвет для каждой</h2>
      <div class="color__picker">
        <p>Выбери свой</p>
        <div class="color__picker-buttons">
          @foreach ($colors as $color)
            <button class="color__picker-item" data-id="{{$color->id}}">
              <div style="background-color: {{$color->code}}"></div>
            </button>
        @endforeach
        </div>
      </div>
    </div>
    <div class="color__wrapper">
      <input type="hidden" value="{{$colors[0]->id}}">
        <div class="color__images">
          <div class="color__images-main">
            @if($colors[0]->type)
            <a href="/{{$colors[0]->preview}}"
              data-fancybox class="video">
              <img src="/{{$colors[0]->video}}" alt="Video">
            </a>
            @endif
            
            <a href="/{{$colors[0]->video}}"
              data-fancybox>
              <img src="/{{$colors[0]->video}}" alt="Video">
            </a>
          </div>
          <div class="color__images-grid">
            <a href="/{{$colors[0]->image1}}" data-fancybox><img src="/{{$colors[0]->image1}}" alt="Image 1"></a>
            <a href="/{{$colors[0]->image2}}" data-fancybox><img src="/{{$colors[0]->image2}}" alt="Image 2"></a>
            <a href="/{{$colors[0]->image3}}" data-fancybox><img src="/{{$colors[0]->image3}}" alt="Image 3"></a>
            <a href="/{{$colors[0]->image4}}" data-fancybox><img src="/{{$colors[0]->image4}}" alt="Image 4"></a>
          </div>
        </div>
        <span style="color:{{$colors[0]->code}};" class="jost">{{$colors[0]->title}}</span>
    </div>  
  </div>
</section>


@section('js')
    <script>
      const colors = @json($colors)
    </script>
@endsection