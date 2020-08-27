@extends('layouts.backend')
@section('title', 'Dashboard')
@section('content')

<div class="container pb-1">
    {!! Form::open(['action' => 'ReportsController@sortByMonth', 'method' => 'POST']) !!}
    <div class="form-group d-flex">
        {{ Form::select('Month', [
                        '01' => 'Jan',
                        '02' => 'Feb',
                        '03' => 'Mar',
                        '04' => 'Apr',
                        '05' => 'May',
                        '06' => 'Jun',
                        '07' => 'Jul',
                        '08' => 'Aug',
                        '09' => 'Sep',
                        '10' => 'Oct',
                        '11' => 'Nov',
                        '12' => 'Dec'
                ],null,['class' => 'form-control col-2', 'placeholder' => 'Select month']) }}
        {!! Form::button('<i class="fas fa-search"></i>', ['type' => 'submit', 'class' => 'btn btn-primary btn-sm']) !!}
        {!! Form::close() !!}
        </div>
    </div>



<div class="container">
    <div class="card">
        <div class="card-header bg-dark text-white">
            <i class='fas fa-chart-line'></i> For the month of 
        @switch($month)
        @case('01') January @break
        @case('02') February @break
        @case('03') March @break
        @case('04') April @break
        @case('05') May @break
        @case('06') June @break
        @case('07') July @break
        @case('08') August @break
        @case('09') September @break
        @case('10') October @break
        @case('11') November @break
        @case('12') December @break
        @default No month selected. @endswitch
            
        </div>
    </div>
        <div class="card-body d-flex">
            <div class="container">
                <div class="card">
                    <div class="card-header bg-success text-center text-white">
                        <strong><i class='fas fa-users' style='font-size:36px'></i></strong>
                    </div>
                    
                    <div class="card-body text-center">
                    <p class="h1">{{ count($logs) }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header bg-warning text-center text-white">
                        <strong><i class='fas fa-user-graduate' style='font-size:36px'></i></strong>
                    </div>
                    
                    <div class="card-body text-center">
                    <p class="h1">{{ count($logs) }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header bg-primary text-center text-white">
                        <strong><i class='fas fa-user-tie' style='font-size:36px'></i></strong>
                    </div>
                    
                    <div class="card-body text-center">
                    <p class="h1">{{ count($logs) }}</p>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="card">
                    <div class="card-header bg-info text-center text-white">
                        <strong>
                            <i class='fas fa-mars-stroke' style='font-size:36px'></i></strong>
                    </div>
                    
                    <div class="card-body text-center">
                    <p class="h1">{{ count($logs) }}</p>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="card">
                    <div class="card-header bg-danger text-center text-white">
                        <strong>
                            <i class='fas fa-venus' style='font-size:36px'></i></strong>
                    </div>
                    
                    <div class="card-body text-center">
                    <p class="h1">{{ count($logs) }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container pt-2 d-flex">

    <div class="card">
        <div class="card-header bg-dark text-white"><i class='far fa-address-book'></i> Contacts</div>
        <div class="card-body">
            @if(count($contacts) < 1)
            No Contact
            @else

            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-dark">
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Number</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                  <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->address}}</td>
                    <td>{{$contact->contactno}}</td>
                  </tr>
                @endforeach
                </tbody>
              </table>

            @endif
        </div>
    </div>

    &nbsp;&nbsp;&nbsp;

    <div class="card">
        <div class="card-header bg-dark text-white"><i class='far fa-address-book'></i> Contacts</div>
        <div class="card-body">
            @if(count($contacts) < 1)
            No Contact
            @else

            <table class="table table-bordered table-hover table-sm">
                <thead class="thead-dark">
                  <tr>
                    <th>Name</th>
                    <th>Address</th>
                    <th>Number</th>
                  </tr>
                </thead>
                <tbody>
                @foreach($contacts as $contact)
                  <tr>
                    <td>{{$contact->name}}</td>
                    <td>{{$contact->address}}</td>
                    <td>{{$contact->contactno}}</td>
                  </tr>
                @endforeach
                </tbody>
            </table>

            @endif
        </div>
    </div>

</div>

@endsection