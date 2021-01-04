<div>{{!! $memos[0]->content !!}}</div>

<tbody>
  @foreach ($memos as $memo)
  <tr>
    <td>{{!! $memo->content !!}}</td>
  </tr>
  @endforeach
</tbody>