@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create a new todo</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form action="/store-todo" method="POST">
                        @csrf
                        <div class="form-group">
                            <input type="text" placeholder="Title" name="title" class="form-control">
                        </div>
                        <div class="form-group">
                            <textarea name="description" id="" class="form-control" placeholder="Todo description ..."></textarea>
                        </div>
                        <div class="form-group text-center">
                            <button class="btn btn-success btn-sm" type="submit">
                                Create Todo
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="card my-5">
                <ul class="list-group">
                    @foreach($todos as $todo)
                        <li class="list-group-item">
                            {{ $todo->title }}
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="row justify-content-center">
                 <div class="col-md-12">
                    {{ $todos->links() }}
                 </div>
            </div>
        </div>
    </div>
</div>
@endsection
