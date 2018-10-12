@extends('layouts.app')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <div class="panel panel-default">
                    <div class="panel-heading">Dashboard</div>
                    <div class="panel-body">
                        <a href="/lsapp/public/posts/create" class="btn btn-primary">
                            Create A Post
                        </a>
                        @if(count($posts)>0)
                            <h3>Your Posts</h3>
                            <table class="table table-striped">
                                <tr>
                                    <th></th>
                                    <th>Title</th>
                                    <th></th>
                                    <th></th>
                                </tr>
                                @foreach($posts as $post)
                                    <tr>
                                        <td>
                                            @if($post->cover_image!='noimage.jpg')
                                                <img style="max-width:100%; height:30px;" src="storage/cover_images/{{$post->cover_image}}">
                                            @endif
                                        </td>
                                        <td>
                                            {{$post->title}}
                                        </td>
                                        <td>
                                            <a href="/lsapp/public/posts/{{$post->id}}/edit" class="btn btn-primary">
                                                Edit
                                            </a>
                                        </td>
                                        <td>
                                            {!!Form::open(['action' =>['PostsController@destroy',$post->id], 'method' => 'POST']) !!}
                                            {{Form::hidden('_method', 'DELETE')}}
                                            {{Form::submit('Delete', ['class' => 'btn btn-danger'])}}
                                            {!!Form::close() !!}
                                        </td>

                                    </tr>
                                @endforeach
                            </table>
                        @else
                            <h3>You have no posts</h3>
                        @endif
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
