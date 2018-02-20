@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    @include('inc.messages')
                    <button class="btn btn-primary bnt-lg" data-toggle="modal" data-target="#addModal" type="button" name="button"> Add Bookmark </button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="addModal">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Add Bookmark</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form class="" action="{{ route('bookmarks.store') }}" method="post">
            {{csrf_field()}}
            <div class="form-control">
                <label>Bookmark Name:</label>
                <input type="text" name="name" class="form-control">
            </div>
            <div class="form-control" style="margin-top: 15px;">
                <label>Bookmark URL:</label>
                <input type="text" name="url" class="form-control">
            </div>
            <div class="form-control" style="margin-top: 15px;">
                <label>Bookmark Descriptiom:</label>
                <textarea name="description" class="form-control"></textarea>
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-success" style="margin-top: 15px;">
        </form>
      </div>
    </div>
  </div>
</div>
@endsection
