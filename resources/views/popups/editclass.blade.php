<div class="modal fade" id="editVisitorClass" 
     tabindex="-1" role="dialog" 
     aria-labelledby="inputVisitorClassLabel">
  <div class="modal-dialog modal-sm" role="document">
    <div class="modal-content">

      <div class="modal-header bg-dark text-white">
        Edit Visitor Class
      </div>

      <div class="modal-body text-left">
          {!! Form::open(['action' => ['ClassesController@update', $class->id], 'method' => 'POST']) !!}
          {{ Form::label('class', 'Visitor\'s Class')}}
          {{ Form::text('class','',['class' => 'form-control', 'id' => 'id', 'placeholder' => 'e.g. Student', 'required'])}}
          <input type="hidden" class="form-control" id="id" name="id">
          <br />
        {{ Form::submit('Save Changes', ['class' => 'btn btn-primary'])}}
        <span class="pull-right">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </span>
          {!! Form::close() !!}
      </div>

    </div>
  </div>
</div>