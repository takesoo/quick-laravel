@isset($record)
  <p>変数recordは「{{ $record }}」です</p>
  @else
  <p>変数recordはありません</p>
@endempty

