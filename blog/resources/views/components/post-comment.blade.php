@props(['comment'])

<x-panel class="bg-gray-60">
    <article class="flex bg-gray-100 space-x-4">
        <div class="flex-shrink-0">
            <img src="https://i.pravatar.cc/60?u={{ $comment->user_id }}" alt="" width="60" height="60" class="rounded-xl">
        </div>

        <div>
            <header>
                <h3 class="font-bold mb-4">{{ $comment->author->username }}</h3>

                <p class="text-sx">
                    Posted
                    <time>{{ $comment->created_at->format(date("F j, Y, g:i a")) }}</time>
                </p>

                <p>
                    {{ $comment->body }}
                </p>
            </header>
        </div>
    </article>
</x-panel>
