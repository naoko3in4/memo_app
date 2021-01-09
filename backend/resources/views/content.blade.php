<tbody>
  @foreach ($memos as $memo)
  <tr>
    <td>{{ $memo->content }}</td>
  </tr>
  @endforeach
</tbody>

<form action="content" method="post">
  <input type="text" name="content">
  <input type="submit" value="送信">
  <input type="hidden" name="_token" value="{{csrf_token()}}">
</form>