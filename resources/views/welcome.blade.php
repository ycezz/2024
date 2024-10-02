<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        @vite('resources/css/app.css')
        <title>Simple Todo List</title>
    </head>
    <body class="bg-gray-200 h-screen flex items-center p-4">

        <div class="lg:w-2/4 mx-auto py-8 px-6 bg-gray-800 border border-gray-700 rounded-2xl shadow">
            <h1 class="text-white text-3xl font-bold text-center">Shopping List</h1>
            
            <div class="mt-6 mb-6">
                <form action="/" class="flex items-center space-x-5" method="POST">
                    @csrf

                    <input type="text" name="title" placeholder="Title..." class="bg-gray-700 py-2 px-4 text-white font-medium rounded-md">
                    <button class="bg-blue-500 py-2 px-4 text-white font-semibold rounded-xl">Add List</button>
                </form>
            </div>
            <hr>

            <div class="mt-1">

                @foreach ($todos as $todo)

                    <div 
                    @class(['py-4 flex item-center space-x-6', $todo->isDone ? 'line-through line-through-thick text-red-400' : ''])>
                        <div class="flex-1 pr-8">
                            <h3 class="text-white">{{ $todo->title }}</h3>
                        </div>
                        <div class="flex space-x-5">

                            <form action="/{{ $todo->id }}" method="POST">
                                @csrf
                                @method('PATCH')
                                <button class="text-green-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="m4.5 12.75 6 6 9-13.5" />
                                    </svg>
                                </button>
                            </form>

                            <form action="/{{ $todo->id }}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button class="text-red-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                                    </svg>           
                                </button>                       
                            </form>
                        </div>
                    </div>
                    <hr>
                @endforeach
                {{-- <div class="mt-5">
                    <button class="bg-red-700 text-white py-3 px-4 rounded-xl font-medium">    
                          Delete All                        
                    </button>
                </div> cari tau cara menghapus fitur ini--}}
            </div>
        </div>
       
    </body>
</html>
