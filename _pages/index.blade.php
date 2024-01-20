@extends('hyde::layouts.app')
@section('content')

    <main id="content" class="mx-auto max-w-7xl py-16 px-8">
        <h1 class="text-center text-3xl font-bold">Gallery</h1>
        <div class="grid grid-cols-1 gap-4 mt-8">
            @php
                $images = Illuminate\Support\Facades\File::files(base_path('_media'));
                $allowedExtensions = ['jpg', 'jpeg', 'png', 'gif', 'bmp'];
            @endphp

            @foreach($images as $image)
                @if(in_array($image->getExtension(), $allowedExtensions))
                    <img src="/_media/{{ $image->getFilename() }}" alt="..." class="mx-auto">
                @endif
            @endforeach
        </div>
    </main>

@endsection
