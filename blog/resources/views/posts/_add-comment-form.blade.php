@auth
    <x-panel>
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf

            <header class="flex items-center">
                <img src="https://i.pravatar.cc/40?u={{ $auth()->id() }}"
                     alt=""
                     width="40"
                     height="40"
                     class="rounded-full">

                <h2 class="ml-4">Want to participate?</h2>

                <div class="mt-4">
                    <textarea
                        name="body"
                        class="outline-gray-200 w-full text-sm focus:outline-none focus:ring"
                        id="" cols="30"
                        rows="5"
                        placeholder="Please be respectful with your comments."
                        required></textarea>

                    @error('body')
                        <span class="text-xs text-red-500">{{ $message }}</span>
                    @enderror
                </div>

                <div class="flex justify-end mt-6 pt-6 border-t border-gray-200">
                    <x-submit-button>Post</x-submit-button>
                </div>
            </header>

        </form>
    </x-panel>
@else
    <p class="font-italic">
        <a href="/register" class="text-blue-500 hover:underline">Register</a> or <a href="/login"
                                                                                     class="text-blue-500 hover:underline">log
            in</a> to leave a comment.
    </p>
@endauth
