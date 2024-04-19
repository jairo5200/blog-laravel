@extends('template')

@section('content')
    <div class=" bg-gray-900 px-20 py-16 rounded-lg mb-8 relative overflow-hidden">
        <span class="text-xs uppercase text-gray-700 bg-gray-400 rounded-full px-2 py-1">Programación</span>
        <h1 class="text-3xl text-white mt-4">Blog</h1>
        <p class="text-sm text-gray-400 mt-2">Proyecto de desarrollo web para profesionales</p>
        <img class=" absolute -right-20 -bottom-20 opacity-20" src="{{asset('images/dev.png')}}" alt="">
    </div>


    <div class="px-4">
        <h1 class="text-2xl mb-8 text-gray-900 ">Contenido técnico</h1>
        <div class="grid grid-cols-1 gap-4 mb-4">
            @foreach($posts as $post)
                <a class="bg-gray-100 rounded-lg px-6 py-4"  href="{{ route('post',$post->slug) }}">
                <p class="text-xs flex items-center gap-2">
                    <span class="uppercase text-gray-700 bg-gray-200 rounded-full px-2 py-1">Tutorial</span>
                    <span>{{ $post->created_at->format('d/m/Y') }}</span>
                </p>

                <h2 class="text-lg text-gray-900 mt-5">{{$post->title}}</h2>
                <div class="text-xs text-gray-900 opacity-75 flex items-center gap-1">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" strokeWidth={1.5} stroke="currentColor" class="w-4 h-4">
                <path strokeLinecap="round" strokeLinejoin="round" d="M15.75 6a3.75 3.75 0 1 1-7.5 0 3.75 3.75 0 0 1 7.5 0ZM4.501 20.118a7.5 7.5 0 0 1 14.998 0A17.933 17.933 0 0 1 12 21.75c-2.676 0-5.216-.584-7.499-1.632Z" />
                </svg>

                    {{ $post->user->name }}
                </div>
                </a>
            @endforeach
        </div>
    </div>

    {{ $posts->links() }}
@endsection


<!-- <strong>{{$post->id }}</strong>

<br>
                <span>{{ $post->user->name }}</span>
                <br> -->


