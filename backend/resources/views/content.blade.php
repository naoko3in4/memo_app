<tbody>
  @foreach ($memos as $memo)
  <tr>
    <td>{{ $memo->content }}</td>
  </tr>
  @endforeach
</tbody>