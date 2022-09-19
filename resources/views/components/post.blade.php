@props(['post'=>$post])


<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <div class="mb-4 ">
        <a href="{{ route('users.posts', $post->user)}}" class="font-bold">{{ $post->user->name }}</a>   <span class="text-gray-600 text-sm">{{$post->user->created_at->diffForHumans()}}</span>
        <p class="mb-2">
            {{ $post->body}}
        </p>

        @can('delete',$post)
        <form action="{{ route('posts.destroy',$post)}}" method="post" class="mr-1">
            @csrf
            @method('DELETE')
            <button type="submit" class="text-blue-500">delete</button>
        </form>
        @endcan




        <div class="flex items-center">
            @auth

            @if (!$post->likedBy(auth()->user()))
            <form action="{{route('posts.likes',$post->id)}}" method="post" class="mr-1">
                @csrf
                <button type="submit" class="text-blue-500">Like</button>
            </form>
            @else

            <form action="{{route('posts.likes',$post->id)}}" method="post" class="mr-1">
                @csrf
                @method('DELETE')
                <button type="submit" class="text-blue-500">unLike</button>
            </form>


            @endif


            @endauth


            <span>{{ $post->likes->count() }} {{Str::plural('like',$post->likes->count())}}</span>
        </div>

    </div>
</div>
