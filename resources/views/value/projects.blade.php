@extends('layouts.guest')
@section('content')
    <div
        class="w-full md:w-[600px] mb-20 md:mb-0 md:h-[480px] md:bg-white bg-transparent rounded md:rounded-l-none md:shadow-xl h-full grid-rows-2 items-start overflow-y-auto">
        <div class="h-1/2">
            <div class="px-4 py-2">
                <h2 class="text-xl text-secondary font-medium pb-4 text-center md:text-left">My Projects</h2>
                <div class="w-full mb-8">
                    <div class="grid md:grid-cols-2 grid-cols-1 gap-4 justify-center">
                        <div class="relative image h-44 rounded-md">
                            <img src="https://images.unsplash.com/photo-1529400971008-f566de0e6dfc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="" width="50" class="block image-img">
                            <div class="image-overlay">
                                <h3 class="mt-40 text-xs font-medium text-slate-100">Web</h3>
                                <p class="text-sm font-semibold text-white mb-1">Lorem ipsum dolor sit amet </p>
                                <div class="p-1 w-6 rounded-md bg-primary">
                                    <a href="" class="block text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-link-45deg font-bold" viewBox="0 0 16 16">
                                        <path
                                        d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                        <path
                                        d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                    </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="relative image h-44 rounded-md">
                            <img src="https://images.unsplash.com/photo-1529400971008-f566de0e6dfc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="" width="50" class="block image-img">
                            <div class="image-overlay">
                                <h3 class="mt-40 text-xs font-medium text-slate-100">Web</h3>
                                <p class="text-sm font-semibold text-white mb-1">Lorem ipsum dolor sit amet </p>
                                <div class="p-1 w-6 rounded-md bg-primary">
                                    <a href="" class="block text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-link-45deg font-bold" viewBox="0 0 16 16">
                                        <path
                                        d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                        <path
                                        d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                    </svg></a>
                                </div>
                            </div>
                        </div>
                        <div class="relative image h-44 rounded-md">
                            <img src="https://images.unsplash.com/photo-1529400971008-f566de0e6dfc?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxzZWFyY2h8Mnx8d29ya3xlbnwwfHwwfHw%3D&auto=format&fit=crop&w=500&q=60"
                                alt="" width="50" class="block image-img">
                            <div class="image-overlay">
                                <h3 class="mt-40 text-xs font-medium text-slate-100">Web</h3>
                                <p class="text-sm font-semibold text-white mb-1">Lorem ipsum dolor sit amet </p>
                                <div class="p-1 w-6 rounded-md bg-primary">
                                    <a href="" class="block text-white"><svg xmlns="http://www.w3.org/2000/svg" width="16"
                                        height="16" fill="currentColor" class="bi bi-link-45deg font-bold" viewBox="0 0 16 16">
                                        <path
                                        d="M4.715 6.542 3.343 7.914a3 3 0 1 0 4.243 4.243l1.828-1.829A3 3 0 0 0 8.586 5.5L8 6.086a1.002 1.002 0 0 0-.154.199 2 2 0 0 1 .861 3.337L6.88 11.45a2 2 0 1 1-2.83-2.83l.793-.792a4.018 4.018 0 0 1-.128-1.287z" />
                                        <path
                                        d="M6.586 4.672A3 3 0 0 0 7.414 9.5l.775-.776a2 2 0 0 1-.896-3.346L9.12 3.55a2 2 0 1 1 2.83 2.83l-.793.792c.112.42.155.855.128 1.287l1.372-1.372a3 3 0 1 0-4.243-4.243L6.586 4.672z" />
                                    </svg></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
