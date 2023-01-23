<p>Имя: {{$mailData['name']}}</p>
<p>Номер телефона: {{$mailData['number']}}</p>

@if (isset($mailData['product']))
  <p>Название товара: {{$mailData['product']}}</p>
@endif
@if (isset($mailData['comment']))
  <p>Комментарий: {{$mailData['comment']}}</p>
@endif
@if (isset($mailData['pay']))
  <p>Тип оплаты: {{$mailData['pay']}}</p>
@endif