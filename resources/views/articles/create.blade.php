@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Create Article</div>
                <div class="card-body">
                    <form action="/articles" method="POST">
                        {{ csrf_field() }}
                        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                        <div class="form-group" >
                            <label for="content">Content</label>
                            <textarea name="content" id="content" class="form-control"></textarea>
                        </div>

                        <div class="checkbox">
                            <label>
                                <input type="checkbox" name="live" id="live">
                                Live
                            </label>
                        </div>

                        <div class="form-group">
                            <label for="post_on">Post ON</label>
                             <input type="date" name="post_on" class="form-control" />
                        </div>

                        <input type="submit" value="Send" class="btn btn-success pull-right">

                    </form>
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
