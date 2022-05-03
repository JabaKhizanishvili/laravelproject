@extends('components.main');
@section('main')


<div class="container pt-5" style='height:100vh'>
    @if (Session::get('success'))
   <script>
    Swal.fire(
      'Good job!',
      'წარმატებით გაიარე რეგისტრაცია!',
      'success'
    )
    </script>
@endif

<table class="table table-dark">
    <thead>
      <tr>
        <th scope="col">id</th>
        <th scope="col">First</th>
        <th scope="col">Last</th>
        <th scope="col">mail</th>
        <th scope="col">phone</th>
        <th scope="col">created-at</th>
        <th scope="col">updated-at</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($data as $key=>$val)
          <tr>
              @foreach ($val as $k=>$v)
                <td>{{$v}}</td>
              @endforeach
          </tr>
        @endforeach
    </tbody>
  </table>
</div>


@endsection
