@extends('layouts.default')
@section('title', 'Visitor\'s Logbook')
@section('content')


<table class="table table-hover table-sm table-responsive-md">
  <thead class="thead-dark">
    <tr>
      <th scope="col">Date</th>
      <th scope="col">Name/Agency</th>
      <th scope="col">Address</th>
      <th scope="col">Sex</th>
      <th scope="col">Classification</th>
      <th scope="col">Person to be visited</th>
      <th scope="col">Purpose</th>
      <th scope="col">Contact no.</th>
      <th scope="col">Time in</th>
      <th scope="col">Time out</th>
    </tr>
  </thead>
  <tbody>

      @if(count($logs) > 0)
        @foreach($logs as $log)
          <tr class="clickable-row">
          <td>{{$log->created_at->format('m-d-y')}}</td>
          <td>{{$log->name}}</td>
          <td>{{$log->address}}</td>
          <td>{{$log->sex}}</td>
          <td>{{$log->classification}}</td>
          <td>{{$log->persontovisit}}</td>
          <td>{{$log->purpose}}</td>
          <td>{{$log->contactno}}</td>
          <td>{{$log->created_at->format('h:i A')}}</td>
          <td>
            @if($log->created_at == $log->updated_at)
              <button type="button" class="btn btn-danger btn-sm"
                      data-toggle="modal" data-target="#editVisitor"
                      data-whatever="{{$log->id}}" data-whatevername="{{$log->name}}">
                        Logout
              </button>
            @else
              {{$log->updated_at->format('h:i A')}}
            @endif
          </td>
          </tr>
        @endforeach
      @else
      <tr>
        <td>No Logs</td>
      </tr>
      @endif

    <tr class='clickable-row' data-toggle="modal" data-target="#inputVisitor">
      <td><button class="btn btn-primary btn-sm">Add Guest</button></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
      <td></td>
    </tr>
  </tbody>
</table>

@include('popups.login')
@include('popups.logout')
@endsection
    