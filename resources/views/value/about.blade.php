@extends('layouts.guest')
@section('content')
    <div
        class="w-full md:w-[600px] mb-20 md:mb-0 md:h-[480px] md:bg-white bg-transparent rounded md:rounded-l-none md:shadow-xl h-full grid-rows-2 items-start">
        <div class="h-1/2">
            <div class="px-4 py-2">
                <h2 class="text-xl text-secondary font-medium pb-4 text-center md:text-left">About Me</h2>
            </div>
            <div class="grid md:grid-cols-2 grid-cols-1 pb-12 gap-4">
                <div class="w-full px-4">
                    <p class="text-sm font-medium"><span class="font-light">Hello Everyone👋</span> <br> I'am Rachel Ardana
                        Putra Ginting</p>
                    <p class="text-sm font-light">Developer & UIX Designer since 2022. Start from scratch in SMK Negeri 2
                        Langsa to Politeknik Negeri Lhokseumawe with department Informatic Techic</p>
                </div>
                <div class="w-full px-4">
                    <div class="grid grid-cols-2 justify-between pt-2 text-sm">
                        <p class="text-violet-600 font-medium">Age</p>
                        <p class="text-right text-third">18</p>
                    </div>
                    <div class="grid grid-cols-2 justify-between pt-2 text-sm">
                        <p class="text-violet-600 font-medium">Residence</p>
                        <p class="text-right text-third">IDN</p>
                    </div>
                    <div class="grid grid-cols-2 justify-between pt-2 text-sm">
                        <p class="text-violet-600 font-medium">Freelance</p>
                        <p class="text-right text-third">Available</p>
                    </div>
                    <div class="grid grid-cols-2 justify-between pt-2 text-sm">
                        <p class="text-violet-600 font-medium">Address</p>
                        <p class="text-right text-third">Aceh Tamiang, Aceh</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="h-1/2">
            <div class="px-4 py-2">
                <h2 class="text-xl text-secondary font-medium pb-4">My Service</h2>
                <div class="grid md:grid-cols-2 grid-cols-1 pb-12">
                    <div class="w-full px-4 pb-8">
                        <div class="my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="mx-auto bi bi-code-slash p-2 bg-violet-600 rounded-full text-white"
                                viewBox="0 0 16 16">
                                <path
                                    d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-center text-secondary">Web Development</p>
                        <p class="text-sm font-light text-center text-secondary"> Modern and mobile-ready website that will
                            help you reach all of your marketing</p>
                    </div>
                    <div class="w-full px-4 pb-8">
                        <div class="my-4">
                            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor"
                                class="mx-auto bi bi-card-image p-2 bg-violet-600 rounded-full text-white"
                                viewBox="0 0 16 16">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                                <path
                                    d="M1.5 2A1.5 1.5 0 0 0 0 3.5v9A1.5 1.5 0 0 0 1.5 14h13a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-13zm13 1a.5.5 0 0 1 .5.5v6l-3.775-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12v.54A.505.505 0 0 1 1 12.5v-9a.5.5 0 0 1 .5-.5h13z" />
                            </svg>
                        </div>
                        <p class="text-sm font-medium text-center text-secondary">UIX Designer</p>
                        <p class="text-sm font-light text-center text-secondary"> Modern and mobile-ready website that will
                            help you reach all of your marketing</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
