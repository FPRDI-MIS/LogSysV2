<div class="modal fade" id="inputVisitorClass" 
     tabindex="-1" role="dialog" 
     aria-labelledby="inputVisitorClassLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        Add Visitor Class
      </div>

      <div class="modal-body text-left">
          {!! Form::open(['action' => 'ClassesController@store', 'method' => 'POST']) !!}
          @csrf
          {{ Form::label('class', 'Visitor\'s Class')}}
          {{ Form::text('class','',['class' => 'form-control', 'placeholder' => 'e.g. Student', 'required'])}}
        <br />
        {{ Form::submit('Save', ['class' => 'btn btn-primary'])}}
        <span class="pull-right">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </span>
          {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>