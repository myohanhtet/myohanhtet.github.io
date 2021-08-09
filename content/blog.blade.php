@extends('_includes.base')

@section('pageTitle', '- Blog')

@section('body')

    <div class="left-side">
        @foreach($paginatedBlogPosts as $post)

              <h5 class="card-title"><a href="@url($post->path)" class="link-secondary">{{ $post->title }}</a> <small class="text-gray">{{ $post->date }}</small></h5>
              <p class="card-text">{{ str_limit($post->brief, 130) }}</p>
                    <hr>
          <br>
            {{-- <article>
                <p>
                    <a href="@url($post->path)">{{ $post->title }}</a>
                    <br>
                    <small>{{ $post->date }}</small>
                    <br>
                    {{ str_limit($post->brief, 130) }}
                </p>
            </article> --}}

        @endforeach
        <br>
        @include('_includes.blog_paginator')
    </div>

    {{-- <div class="right-side">
        @include('_includes.sidebar')
    </div> --}}

@stop