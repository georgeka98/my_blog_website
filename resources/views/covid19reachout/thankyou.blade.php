@extends('main')

@section('content')

@if(Session::has('success') || $errors->any())
    <script>
      $(function() {
          $('#myModal').modal('show');
      });
    </script>
    <div class="modal" id="myModal" tabindex="-1" role="dialog">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title"> 
              @if(Session::has('success')) 
                Thank you 
              @else 
                Notice
              @endif
            </h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">&times;</span>
            </button>
          </div>
          <div class="modal-body">
            @if(Session::has('success')) 
              <p>{{Session::get('success')}}</p>
            @else 
              {{-- {{$errors->all()}} --}}
              @foreach($errors->all() as $error)
                <p>{{$error}}</p>
              @endforeach
            @endif
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
  @endif

@endsection