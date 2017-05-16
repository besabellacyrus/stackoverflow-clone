@extends('layouts.app')

@section ('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
        
            <div class="posts-area">
                <div class="row">
                    <div class="main-tab">
                        <span><strong>Top Questions</strong></span>
                        @if ($categories)
                            <ul class="topic-nav pull-right">
                                @foreach ($categories as $category)
                                    <li class="{{ Request::path() == 'tab/'.$category->slug ? 'active' : '' }}">
                                        <a href="{{ url('tab/'.$category->slug) }}">
                                            {{ $category->title }}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </div>
                </div>
                <div class="row">
                    @if (isset($questions))
                        @foreach ($questions as $q)
                            <div class="question-list">
                                <div class="col-md-2">
                                    vote
                                </div>
                                <div class="col-md-10">
                                    <a href="">
                                        {{ $q->title }}
                                    </a>
                                    <p>
                                        {{ $q->body }}
                                    </p>
                                    <span class="timestamp pull-right">asked {{ $q->created_at->diffForHumans() }}</span>
                                </div>
                            </div>
                        @endforeach
                    @endif
                </div>
            </div>

        </div>
        <div class="col-md-4">
            @if (!Auth::guest())
                <a href="{{ url('ask-question') }}" class="btn btn-primary pull-right">
                    Ask Question
                </a>
            @endif
        </div>
    </div>
</div>
@endsection
