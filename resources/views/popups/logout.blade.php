<div class="modal fade" id="editVisitor" role="dialog">
  <div class="modal-dialog modal-lg" role="document">
    <div class="modal-content">
      <div class="modal-header bg-dark text-white">
        ADD GUEST
      </div>
            {!! Form::open(['action' => ['LogSystemController@update', 'logout'], 'method' => 'POST']) !!}

      <div class="modal-body">
        <h5>
        Are you sure you want to logout <br />
        <span class="label label-danger font-weight-bold text-uppercase" id="myName"></span> ?
        </h5>
        <input type="hidden" class="form-control" id="id" name="id">
      </div>

      <div class="modal-footer">
          <button type="button" 
             class="btn btn-default" 
             data-dismiss="modal">Close</button>
          <span class="pull-right">
            {{ Form::hidden('_method', 'PUT') }}
            {{ Form::submit('Logout', ['class' => 'btn btn-danger'])}}
          </span>
          {!! Form::close() !!}
      </div>
    </div>
  </div>
</div>