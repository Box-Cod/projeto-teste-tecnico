<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Clients') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">
                @if (Route::has('login'))
                    <nav class="flex items-center justify-end gap-4">
                        @auth
                            <div class="flex items-center justify-center p-12 w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
                                <div class="flex min-w-[135px] max-w-[335px] flex-col-reverse sm:max-w-7xl">


                                    <div class="relative overflow-x-auto">
                                        <div class="flex items-center justify-end flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white">
                                            <div class="relative">
                                                <form action="{{ route('client.create') }}" method="get" enctype="multipart/form-data">
                                                    @csrf
                                                <button class="inline-flex items-center text-white border border-gray-300 font-medium rounded-lg text-sm px-3 py-1.5 bg-green-600 hover:opacity-75" type="submit">
                                                    <span class="pr-2">
                                                        <i>
                                                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor" class="size-4">
                                                                <path d="M8.75 3.75a.75.75 0 0 0-1.5 0v3.5h-3.5a.75.75 0 0 0 0 1.5h3.5v3.5a.75.75 0 0 0 1.5 0v-3.5h3.5a.75.75 0 0 0 0-1.5h-3.5v-3.5Z" />
                                                            </svg>
                                                        </i>
                                                    </span>
                                                    Adicionar cliente
                                                </button>
                                            </div>
                                        </div>
                                        <table class="w-full text-sm text-left rtl:text-right text-gray-500">
                                            <thead class="text-xs text-gray-700 uppercase bg-gray-50  ">
                                                <tr>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Nome
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        CPF
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        CNPJ
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Telefone
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        E-mail
                                                    </th>
                                                    <th scope="col" class="px-6 py-3 text-center">
                                                        Ações
                                                    </th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($clients as $client)
                                                    <tr class="bg-white border-b border-gray-200">
                                                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                            {{ $client->name }}
                                                        </td>
                                                        <td class="px-6 py-4 text-gray-900">
                                                            {{ $client->cpf}}
                                                        </td>
                                                        <td class="px-6 py-4 text-gray-900">
                                                            {{ $client->cnpj }}
                                                        </td>
                                                        <td class="px-6 py-4 text-gray-900">
                                                            {{ $client->phone }}
                                                        </td>
                                                        <td class="px-6 py-4 text-gray-900">
                                                            {{ $client->email }}
                                                        </td>
                                                        <td class="px-6 text-gray-900">
                                                            <div class="flex items-center justify-center">
                                                                <form action="/client/{{ $client->idClient }}" method="get" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="idClient" value="{{ $client->idClient }}">
                                                                    <button type="submit" class="cursor-pointer px-3">
                                                                        <span>
                                                                            <i>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 hover:text-gray-400">
                                                                                    <path d="m2.695 14.762-1.262 3.155a.5.5 0 0 0 .65.65l3.155-1.262a4 4 0 0 0 1.343-.886L17.5 5.501a2.121 2.121 0 0 0-3-3L3.58 13.419a4 4 0 0 0-.885 1.343Z" />
                                                                                </svg>
                                                                            </i>
                                                                        </span>
                                                                    </button>
                                                                </form>
                                                                <form action="{{ route('client.delete') }}" method="post" enctype="multipart/form-data">
                                                                    @csrf
                                                                    <input type="hidden" name="idClient" value="{{ $client->idClient }}">
                                                                    <button type="submit" class="cursor-pointer px-3" >
                                                                        <span>
                                                                            <i>
                                                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" class="size-5 text-red-700 hover:text-red-400">
                                                                                    <path fill-rule="evenodd" d="M8.75 1A2.75 2.75 0 0 0 6 3.75v.443c-.795.077-1.584.176-2.365.298a.75.75 0 1 0 .23 1.482l.149-.022.841 10.518A2.75 2.75 0 0 0 7.596 19h4.807a2.75 2.75 0 0 0 2.742-2.53l.841-10.52.149.023a.75.75 0 0 0 .23-1.482A41.03 41.03 0 0 0 14 4.193V3.75A2.75 2.75 0 0 0 11.25 1h-2.5ZM10 4c.84 0 1.673.025 2.5.075V3.75c0-.69-.56-1.25-1.25-1.25h-2.5c-.69 0-1.25.56-1.25 1.25v.325C8.327 4.025 9.16 4 10 4ZM8.58 7.72a.75.75 0 0 0-1.5.06l.3 7.5a.75.75 0 1 0 1.5-.06l-.3-7.5Zm4.34.06a.75.75 0 1 0-1.5-.06l-.3 7.5a.75.75 0 1 0 1.5.06l.3-7.5Z" clip-rule="evenodd" />
                                                                                </svg>
                                                                            </i>
                                                                        </span>
                                                                    </button>
                                                                </form>
                                                            </div>
                                                        </td>
                                                    </tr>
                                                @empty
                                                <tr class="bg-white border-b border-gray-200">
                                                    <th class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap ">
                                                        Nenhum cliente encontrado.
                                                    </th>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>




                                </div>
                            </div>
                        @else
                            <a
                                href="{{ route('login') }}"
                                class="inline-block px-5 py-1.5 text-[#1b1b18] border border-transparent hover:border-[#19140035] rounded-sm text-sm leading-normal"
                            >
                                Log in
                            </a>
                            @if (Route::has('register'))
                                <a
                                    href="{{ route('register') }}"
                                    class="inline-block px-5 py-1.5 border-[#19140035] hover:border-[#1915014a] border text-[#1b1b18] rounded-sm text-sm leading-normal">
                                    Register
                                </a>
                            @endif
                        @endauth
                    </nav>
                @endif
                @if (Route::has('login'))
                    <div class="h-14.5 hidden lg:block"></div>
                @endif
            </div>
        </div>
    </div>


</x-app-layout>
