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
                            <div class="flex items-center justify-center w-full transition-opacity opacity-100 duration-750 lg:grow starting:opacity-0">
                                <div class="flex max-w-[135px] flex-col-reverse sm:max-w-6xl md:max-w-6xl lg:max-w-6xl xl:max-w-6xl ">
                                    <form>
                                        <div class="border-b border-gray-900/10 py-12 px-6">
                                            <div class="sm:col-span-full">
                                                <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                                                    Cadastro de Cliente
                                                </h2>
                                            </div>
                                            <div class="mt-10 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                                                <div class="sm:col-span-3">
                                                    <label for="name" class="block text-sm/6 font-medium text-gray-900">Nome</label>
                                                    <div class="mt-2">
                                                        <input type="text" name="name" id="name" autocomplete="given-name" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="email" class="block text-sm/6 font-medium text-gray-900">Email</label>
                                                    <div class="mt-2">
                                                        <input id="email" name="email" type="email" autocomplete="email" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <label for="phone" class="block text-sm/6 font-medium text-gray-900">Telefone</label>
                                                    <div class="mt-2">
                                                        <input id="phone" name="phone" type="tel" autocomplete="phone" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-1">
                                                    <label for="cnpj" class="block text-sm/6 font-medium text-gray-900">CNPJ</label>
                                                    <div class="mt-2">
                                                        <input id="cnpj" name="cnpj" type="text" autocomplete="cnpj" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-1">
                                                    <label for="cpf" class="block text-sm/6 font-medium text-gray-900">CPF</label>
                                                    <div class="mt-2">
                                                        <input id="cpf" name="cpf" type="text" autocomplete="cpf" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-1">
                                                    <label for="cep" class="block text-sm/6 font-medium text-gray-900">CEP</label>
                                                    <div class="mt-2">
                                                        <input id="cep" name="cep" type="text" autocomplete="cep" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-1">
                                                    <label for="state" class="block text-sm/6 font-medium text-gray-900">Estado</label>
                                                    <div class="mt-2">
                                                        <input id="state" name="state" type="text" autocomplete="state" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-3">
                                                    <label for="street" class="block text-sm/6 font-medium text-gray-900">Rua</label>
                                                    <div class="mt-2">
                                                        <input id="street" name="street" type="text" autocomplete="street" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-1">
                                                    <label for="number" class="block text-sm/6 font-medium text-gray-900">Número</label>
                                                    <div class="mt-2">
                                                        <input id="number" name="number" type="number" autocomplete="number" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                                <div class="sm:col-span-2">
                                                    <label for="neighborhood" class="block text-sm/6 font-medium text-gray-900">Bairro</label>
                                                    <div class="mt-2">
                                                        <input id="neighborhood" name="neighborhood" type="text" autocomplete="neighborhood" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>
                                                <div class="sm:col-span-2">
                                                    <label for="city" class="block text-sm/6 font-medium text-gray-900">Cidade</label>
                                                    <div class="mt-2">
                                                        <input id="city" name="city" type="text" autocomplete="city" class="block w-full rounded-md bg-white px-3 py-1.5 text-base text-gray-900 outline-1 -outline-offset-1 outline-gray-300 placeholder:text-gray-400 focus:outline-2 focus:-outline-offset-2 focus:outline-indigo-600 sm:text-sm/6">
                                                    </div>
                                                </div>

                                            </div>

                                            <div class="mt-6 flex items-center justify-end gap-x-6">
                                                <button type="button" class="text-sm/6 font-semibold text-gray-900">Voltar</button>
                                                <button type="submit" class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-xs hover:bg-indigo-500 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Salvar</button>
                                            </div>

                                        </div>
                                    </form>
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










































