@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <h2>Posts</h2>
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>#</th>
                            <th>Title</th>
                            <th>Content</th>
                            <th>Image</th>
                            <th>Tags</th>
                            <th>User</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($posts as $post)
                            <tr>
                                <td>{{ $loop->iteration }}</td>
                                <td>{{ $post->title }}</td>
                                <td>{{ $post->content }}</td>
                                @if($post->images->count() > 0)
                                    <td>{{ $post->images->first()->url }}</td>
                                @else
                                    <td>No image</td>
                                @endif
                                <td>{{ $post->tags->implode('name', ', ') }}</td>
                                <td>{{ $post->user->name }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
@endsection
