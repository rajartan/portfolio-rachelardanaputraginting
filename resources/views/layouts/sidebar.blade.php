<div class="w-full md:w-16">
    <div class="w-full flex fixed bottom-0 left-0 right-0 md:static z-40 flex-row md:flex-col justify-center md:p-2 md:gap-2">
        <div
            class="hidden w-full rounded md:flex shadow-xl flex-col justify-center items-center text-third font-medium">
            <a href="" class="block p-4 text-third bg-white rounded {{ Request::is('/') ? 'text-fourth' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-list" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
              </svg></a>
        </div>
        <div class="w-full pt-6">
            <div class="flex flex-row md:flex-col rounded shadow-xl border-t border-primary md:border-none md:mt-0 bg-white justify-center gap-5 md:gap-3 pb-2">
                <div class="flex flex-col justify-center items-center text-third font-medium">
                    <a href="{{ route('about') }}" class="block {{ Request::is('about') ? 'text-fourth' : '' }} p-4"><svg
                            xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            fill="currentColor" class="-mb-2 bi bi-file-person-fill"
                            viewBox="0 0 16 16">
                            <path
                                d="M12 0H4a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h8a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2zm-1 7a3 3 0 1 1-6 0 3 3 0 0 1 6 0zm-3 4c2.623 0 4.146.826 5 1.755V14a1 1 0 0 1-1 1H4a1 1 0 0 1-1-1v-1.245C3.854 11.825 5.377 11 8 11z" />
                        </svg></a>
                    <span class="text-[9px] {{ Request::is('about') ? 'text-fourth' : '' }}">ABOUT</span>
                </div>
                <div class="flex flex-col justify-center items-center text-third font-medium">
                    <a href="{{ route('skills') }}" class="block p-4 {{ Request::is('skills') ? 'text-fourth' : '' }}"><svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="currentColor" class="bi bi-gear-fill -mb-2" viewBox="0 0 16 16">
                        <path d="M9.405 1.05c-.413-1.4-2.397-1.4-2.81 0l-.1.34a1.464 1.464 0 0 1-2.105.872l-.31-.17c-1.283-.698-2.686.705-1.987 1.987l.169.311c.446.82.023 1.841-.872 2.105l-.34.1c-1.4.413-1.4 2.397 0 2.81l.34.1a1.464 1.464 0 0 1 .872 2.105l-.17.31c-.698 1.283.705 2.686 1.987 1.987l.311-.169a1.464 1.464 0 0 1 2.105.872l.1.34c.413 1.4 2.397 1.4 2.81 0l.1-.34a1.464 1.464 0 0 1 2.105-.872l.31.17c1.283.698 2.686-.705 1.987-1.987l-.169-.311a1.464 1.464 0 0 1 .872-2.105l.34-.1c1.4-.413 1.4-2.397 0-2.81l-.34-.1a1.464 1.464 0 0 1-.872-2.105l.17-.31c.698-1.283-.705-2.686-1.987-1.987l-.311.169a1.464 1.464 0 0 1-2.105-.872l-.1-.34zM8 10.93a2.929 2.929 0 1 1 0-5.86 2.929 2.929 0 0 1 0 5.858z"/>
                      </svg></a>
                    <span class="text-[9px] {{ Request::is('skills') ? 'text-fourth' : '' }}">SKILLS</span>
                </div>
                <div class="flex flex-col justify-center items-center text-third font-medium">
                    <a href="{{ route('projects') }}" class="block p-4 {{ Request::is('projects') ? 'text-fourth' : '' }}"><svg xmlns="http://www.w3.org/2000/svg"
                            width="18" height="18" fill="currentColor"
                            class="-mb-2 bi bi-person-workspace" viewBox="0 0 16 16">
                            <path
                                d="M4 16s-1 0-1-1 1-4 5-4 5 3 5 4-1 1-1 1H4Zm4-5.95a2.5 2.5 0 1 0 0-5 2.5 2.5 0 0 0 0 5Z" />
                            <path
                                d="M2 1a2 2 0 0 0-2 2v9.5A1.5 1.5 0 0 0 1.5 14h.653a5.373 5.373 0 0 1 1.066-2H1V3a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1v9h-2.219c.554.654.89 1.373 1.066 2h.653a1.5 1.5 0 0 0 1.5-1.5V3a2 2 0 0 0-2-2H2Z" />
                        </svg></a>
                    <span class="text-[9px] {{ Request::is('projects') ? 'text-fourth' : '' }}">PROJECTS</span>
                </div>
                <div class="flex flex-col justify-center items-center text-third font-medium">
                    <a href="" class="block p-4 {{ Request::is('about') ? 'text-fourth' : '' }}"><svg xmlns="http://www.w3.org/2000/svg"
                            width="18" height="18" fill="currentColor"
                            class="-mb-2 bi bi-sticky-fill" viewBox="0 0 16 16">
                            <path
                                d="M2.5 1A1.5 1.5 0 0 0 1 2.5v11A1.5 1.5 0 0 0 2.5 15h6.086a1.5 1.5 0 0 0 1.06-.44l4.915-4.914A1.5 1.5 0 0 0 15 8.586V2.5A1.5 1.5 0 0 0 13.5 1h-11zm6 8.5a1 1 0 0 1 1-1h4.396a.25.25 0 0 1 .177.427l-5.146 5.146a.25.25 0 0 1-.427-.177V9.5z" />
                        </svg></a>
                    <span class="text-[9px] {{ Request::is('about') ? 'text-fourth' : '' }}">BLOG</span>
                </div>
                <div class="flex flex-col justify-center items-center text-third font-medium">
                    <a href="" class="block p-4 {{ Request::is('about') ? 'text-fourth' : '' }}"><svg xmlns="http://www.w3.org/2000/svg"
                            width="18" height="18" fill="currentColor"
                            class="-mb-2 bi bi-telephone-fill" viewBox="0 0 16 16">
                            <path fill-rule="evenodd"
                                d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                        </svg></a>
                    <span class="text-[9px] {{ Request::is('about') ? 'text-fourth' : '' }}">CONTACT</span>
                </div>
            </div>
        </div>
    </div>
</div>
