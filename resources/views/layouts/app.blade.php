
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$metaTitle ?: 'UFC'}}</title>
    <meta name="author" content="PRPPG">
    <meta name="description" content="{{$metaDescription}}">

    <!-- Tailwind -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css" rel="stylesheet">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Karla:400,700&display=swap');

        .font-family-karla {
            font-family: karla;
        }
        pre{
            padding:1rem;
            background-color:#1a202c;
            color:white;
            border-radius: 0.5rem;
            margin-bottom:1rem
        }
    </style>

    <!-- AlpineJS -->
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>
    <!-- Font Awesome -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/js/all.min.js" integrity="sha256-KzZiKy0DWYsnwMF+X1DvQngQ2/FxF7MF3Ff72XcpuPs=" crossorigin="anonymous"></script>
</head>
<body class="bg-gray-50 font-family-karla">


    <!-- Text Header -->
    <header class="w-full container mx-auto">
        <div class="flex flex-col items-center py-12">
            <a class="w-full bg-blue-500 text-white font-bold text-sm uppercase rounded hover:bg-blue-800 flex items-center justify-center px-3 py-5 mt-6 text-7xl"
            href="{{route('home')}}">
                UFC Blog
            </a>
            <p class="text-lg text-gray-600">
                {!!\App\Models\TextWidget::getTitle('header')!!}
            </p>
        </div>
    </header>

    <!-- Topic Nav -->
    <nav class="w-full py-4 border-t border-b bg-gray-100" x-data="{ open: false }">
        <div class="block sm:hidden">
            <a
                href="#"
                class="block md:hidden text-base font-bold uppercase text-center flex justify-center items-center"
                @click="open = !open"
            >
                Topics <i :class="open ? 'fa-chevron-down': 'fa-chevron-up'" class="fas ml-2"></i>
            </a>
        </div>
        <div :class="open ? 'block': 'hidden'" class="w-full flex-grow sm:flex sm:items-center sm:w-auto">
            <div class="w-full container mx-auto flex flex-col sm:flex-row items-center justify-center text-sm font-bold uppercase mt-0 px-6 py-2">
                <a href="{{route('home')}}" class="hover:bg-blue-300 hover:text-black rounded py-2 px-4 mx-2">home</a>
                @foreach($categories as $category)
                    <a href="{{route('by-category', $category)}}" class="hover:bg-blue-300 hover:text-black rounded py-2 px-4 mx-2">{{$category->title}}</a>
                @endforeach
                <a href="{{route('about us')}}" class="hover:bg-blue-300 hover:text-black rounded py-2 px-4 mx-2">About us</a>
            </div>
        </div>
    </nav>


    <div class="container mx-auto flex flex-wrap py-6">

        {{$slot}}


    </div>

    <footer class="w-full border-t bg-white pb-12">
        <div class="w-full container mx-auto flex flex-col items-center">
            <div class="uppercase pb-6">&copy; UFC</div>
        </div>
    </footer>



</body>
</html>
