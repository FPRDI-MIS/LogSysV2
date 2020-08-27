@include('includes.head')
<div>
    <div class="content">               
    	
    	@yield('content')

    </div>
</div>
@include('includes.footer')

<script>
    $('#editVisitor').on('show.bs.modal', function (event) {
      var button = $(event.relatedTarget)
      var myid = button.data('whatever')
      var myName = button.data('whatevername')
      var modal = $(this)
      modal.find('.modal-body input').val(myid)
      $('#myName').html( myName );
    })
</script>