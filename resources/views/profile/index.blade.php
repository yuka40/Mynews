@extends('layouts.front')

@section('content')
    <div class="container">
        <p>MY プロフィール</p>
        <hr color="#c0c0c0">
        @if (!is_null($headline))
            <div class="row">
                <div class="headline col-md-10 mx-auto">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="caption mx-auto">
                                
                            </div>
                        </div>
                        <div class="col-md-6">
                            <p class="body mx-auto">【氏名】{{ str_limit($headline->name, 650) }}</p>
                            <p class="body mx-auto">【性別】{{ str_limit($headline->gender, 650) }}</p>
                            <p class="body mx-auto">【趣味】{{ str_limit($headline->hobby, 650) }}</p>
                            <p class="body mx-auto">【自己紹介】{{ str_limit($headline->introduction, 650) }}</p>
                        </div>
                    </div>
                </div>
            </div>  @endif
        <hr color="#c0c0c0">
        <div class="row">
            <div class="posts col-md-8 mx-auto mt-3">
                @foreach($posts as $post)
                    <div class="post">
                        <div class="row">
                            <div class="text col-md-6">
                                </div>
                            <div class="date">
                                    {{ $post->updated_at->format('Y年m月d日') }}
                              </div>
                               
                        </div>
                    </div>
                </div>
                <hr color="#c0c0c0">
                @endforeach
      
                </div>
            </div>
        </div>
    </div>
@endsection

