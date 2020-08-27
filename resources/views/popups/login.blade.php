<div class="modal fade" id="inputVisitor" 
     tabindex="-1" role="dialog" 
     aria-labelledby="inputVisitorLabel">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        ADD GUEST
      </div>

      <div class="modal-body text-left">
          {!! Form::open(['action' => 'LogSystemController@store', 'method' => 'POST']) !!}
        @csrf
        <div class="form-group"> 
          {{ Form::label('Name', 'Fullname')}}
          {{ Form::text('Name', '', ['class' => 'form-control', 'placeholder' => 'e.g. Juan C. Dela Cruz', 'required']) }}
        </div>

        <div class="form-group"> 
          {{ Form::label('Address', 'Address')}}
          {{ Form::text('Address', '', ['class' => 'form-control', 'placeholder' => 'e.g. Brgy., City, Province', 'required']) }}
        </div>

        <div class="form-group d-flex"> 
            <div class="form-group"> 
              {{ Form::label('Contact', 'Contact Number')}}
              {{ Form::text('Contact', '', ['class' => 'form-control', 'placeholder' => 'e.g. 09xxxxxxxxx', 'required']) }}
            </div>

            <div class="form-group pl-3"> 
              {{ Form::label('Sex', 'Sex')}}
              {{ Form::select('Sex', ['Male' => 'Male', 'Female' => 'Female'],null, ['class' => 'form-control', 'placeholder' => '---', 'required']) }}
            </div>

            <div class="form-group pl-3"> 
              {{ Form::label('PersonToBeVisited', 'Person to be Visited')}}
              {{ Form::select('PersonToBeVisited',$employee,null, ['class' => 'form-control', 'placeholder' => 'e.g. Juan C. Dela Cruz', 'required']) }}
            </div>
            

            <div class="form-group pl-3"> 
              {{ Form::label('Classification', 'Classification') }}
              {{ Form::select('Classification',$class,null, ['class' => 'form-control', 'placeholder' => 'e.g. Student', 'required']) }}
            </div>
            
            <div class="form-group pl-3"> 
              {{ Form::label('Purpose', 'Purpose')}}
              {{ Form::select('Purpose', [
                'Testing Services' => 'Testing Services',
                'Consultancy/Advisory Services' => 'Consultancy/Advisory Services',
                'Thesis/Research/Special Problem Assistance' => 'Thesis/Research/Special Problem Assistance',
                'Human Resources Management' => 'Human Resources Management',
                'Property and Procurement' => 'Property and Procurement',
                'Records Management Services' => 'Records Management Services',
                'Cashier' => 'Cashier',
                'Accounting Services' => 'Accounting Services',
                'Budget Management Services' => 'Budget Management Services',
                'Physical Plant Services' => 'Physical Plant Services',
                'Other Services' => 'Other Services'],null, ['class' => 'form-control', 'placeholder' => '---', 'required']) }}
            </div>
        </div>
      </div>

      <div class="modal-footer">

          <button type="button" 
             class="btn btn-danger" 
             data-dismiss="modal">Close</button>

          <span class="pull-right">
            {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
          </span>
            {!! Form::close() !!}

      </div>
    </div>
  </div>
</div>