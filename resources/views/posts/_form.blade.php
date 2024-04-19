@csrf

<label class="uppercase text-gray-700 text-xs" for="">title</label>
<span class="text-xs text-red-600">@error('title') {{ $message }} @enderror</span>
<input type="text" name="title" class="rounded border-gray-200 w-full mb-4" value="{{ old('title', $post->title) }}">

<label class="uppercase text-gray-700 text-xs" for="">Content</label>
<span class="text-xs text-red-600">@error('body') {{ $message }} @enderror</span>
<textarea name="body"  class="rounded boirder-gray-200 w-full mb-4 textarea1"  rows="5" resize:none >{{ old('body', $post->body) }}</textarea>


<div class="flex justify-between items-center">
    <a href="{{route('posts.index')}}" class="text-indigo-600" >Volver</a>
    <input type="submit" value="Enviar" class="bg-gray-800 text-white rounded px-4 py-2">
</div>

