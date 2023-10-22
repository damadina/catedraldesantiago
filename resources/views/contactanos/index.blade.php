<x-app-layout>
    <div class="container py-10">
        @if(session('info'))
            <div class="flex items-center bg-blue-500 text-white text-sm font-bold px-4 py-3 my-8" role="alert">
                <svg class="fill-current w-4 h-4 mr-2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.432 0c1.34 0 2.01.912 2.01 1.957 0 1.305-1.164 2.512-2.679 2.512-1.269 0-2.009-.75-1.974-1.99C9.789 1.436 10.67 0 12.432 0zM8.309 20c-1.058 0-1.833-.652-1.093-3.524l1.214-5.092c.211-.814.246-1.141 0-1.141-.317 0-1.689.562-2.502 1.117l-.528-.88c2.572-2.186 5.531-3.467 6.801-3.467 1.057 0 1.233 1.273.705 3.23l-1.391 5.352c-.246.945-.141 1.271.106 1.271.317 0 1.357-.392 2.379-1.207l.6.814C12.098 19.02 9.365 20 8.309 20z"/></svg>
                <span>{{session('info')}}</span>
            </div>
        @endif




        <form class="w-full max-w-lg" action="{{route('contactanos.store')}}" method="POST">
            @csrf
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full md:w-1/2 px-3 mb-6 md:mb-0">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-first-name">
                        Nombre
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-catedral rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                        name="name" type="text" placeholder="Nombre">
                    @error('name')
                        <p><strong>{{$message}}</strong></p>
                    @enderror

                </div>

            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        E-mail
                    </label>
                    <input
                        class="appearance-none block w-full bg-gray-200 text-gray-700 border border-catedral rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                        id="email" name="email" type="email">
                    @error('email')
                        <p><strong>{{$message}}</strong></p>
                    @enderror

                </div>
            </div>
            <div class="flex flex-wrap -mx-3 mb-6">
                <div class="w-full px-3">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                        for="grid-password">
                        Mensaje
                    </label>
                    <textarea
                        class=" w-full bg-gray-200 text-gray-700 border border-catedral rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500 h-48 resize-none"
                        name = "mensaje" id="message">
                    </textarea>
                    @error('mensaje')
                        <p><strong>{{$message}}</strong></p>
                    @enderror

                </div>
            </div>
            <div class="md:flex md:items-center">
                <div class="md:w-1/3">
                    <button
                        class="shadow bg-catedral hover:bg-teal-400 focus:shadow-outline focus:outline-none text-white font-bold py-2 px-4 rounded"
                        type="submit">
                        Enviar
                    </button>
                </div>
                <div class="md:w-2/3"></div>
            </div>
        </form>

    </div>
    <section>
        <x-catedral-footer slug='contactanos'/>
    </section>
</x-app-layout>
