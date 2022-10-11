@extends('layouts.guest')
@section('content')
    <div
        class="w-full sm:w-[600px] mb-20 sm:mb-0 sm:h-[480px] sm:bg-white bg-transparent rounded sm:rounded-l-none sm:shadow-xl h-full grid-rows-2 items-start">
        <div class="h-1/4 mb-12">
            <div class="px-4 py-2">
                <h2 class="text-xl text-secondary font-medium pb-4 text-center sm:text-left">Contact Me</h2>
            </div>
            <div class="grid grid-cols-1 pb-12 gap-4">
                <div class="w-full px-4">
                    <p class="text-sm font-medium"><span class="font-light">Hello Everyone👋</span> <br> I'am Rachel Ardana
                        Putra Ginting</p>
                    <p class="text-sm font-light">Developer & UIX Designer since 2022. Start from scratch in SMK Negeri 2
                        Langsa to Politeknik Negeri Lhokseumawe with department Informatic Techic</p>
                </div>
            </div>
        </div>
        <div class="h-3/4">
            <div class="grid grid-cols-1 pb-12 gap-4">
                <div class="w-full px-4">
                    <div class="mb-3">
                        <label for="email" class="text-sm">Email Address</label>
                        <input type="text" name="email" id="email" placeholder="Email addres.." class="text-sm w-full rounded-md border-third focus:ring-primary">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="text-sm">Message</label>
                        <textarea name="message" id="message" cols="30" rows="5" class="text-sm w-full rounded-md border-third focus:ring-primary"></textarea>
                    </div>
                    <div class="text-right">
                        <button type="submit" class="px-3 py-1.5 bg-primary rounded-md  text-white hover:bg-violet-800">Submit</button>
                    </div>
            </div>
        </div>
    </div>
@endsection
