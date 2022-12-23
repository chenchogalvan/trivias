<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>trivia diapsa</title>
    {{-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous"> --}}
    <script defer src="https://unpkg.com/@glhd/alpine-wizard@1/dist/wizard.cdn.min.js"></script>

    <script defer src="https://unpkg.com/alpinejs@3/dist/cdn.min.js"></script>

    <script src="https://cdn.tailwindcss.com"></script>

    <style>
        [x-cloak] {
            display: none;
        }
    </style>

</head>

<body style="background:#222;">
    @if (Session::has('success'))
    <div class="bg-green-600 text-center py-4 lg:px-4">
        <div class="p-2 items-center text-indigo-100 leading-none lg:rounded-full flex lg:inline-flex"
            role="alert">
            <span class="font-semibold mr-2 text-left flex-auto">{{ Session::get('success') }}</span>
        </div>
    </div>
    @endif
    <div class="m-6">
        <div class="hero container max-w-screen-lg mx-auto pb-10">
            <img class="mx-auto" src="https://www.grupodiapsa.com.mx/wp-content/uploads/2017/08/logo_normal.png" alt="">
        </div>
        <div class="max-w-4xl mx-auto py-5">
            <div x-cloak x-data="{{ json_encode($questionsList) }}" class="border rounded overflow-hidden">
                <div class="h-2 border-b bg-blue-50">
                    <div class="h-2"
                        :class="{
                            'bg-blue-500': $wizard.progress().incomplete > 0,
                            'bg-green-500': 0 === $wizard.progress().incomplete,
                        }"
                        role="progressbar" :style="{ width: $wizard.progress().percentage }" aria-valuemin="0"
                        :aria-valuenow="$wizard.progress().complete" :aria-valuemax="$wizard.progress().total"></div>
                </div>

                <div class="flex items-baseline px-6 py-3 bg-sky-400 border-b">
                    <h1 class="text-white	 font-semibold" x-text="$wizard.current().title"></h1>
                    <div class="ml-auto text-sm text-white	">
                        <span class="font-semibold" x-text="$wizard.progress().complete"></span>
                        de
                        <span class="font-semibold" x-text="$wizard.progress().total"></span>
                        respondidas
                    </div>
                </div>
                <div class="p-6 bg-white">
                    <form action="{{ route('storeTrivia') }}" method="POST" id="triviaForm">
                        @csrf
                        <input type="hidden" name="trivia_id" value="{{ $trivia->id }}">
                        <!-- Name -->
                        <div x-wizard:step="name.trim() !== ''" x-wizard:title="{{ $trivia->name }}"
                        class="items-center space-x-6">
                            <div class="grid grid-rows-2 grid-flow-col">
                                <label for="name-input" class="text-xl">
                                    Nombre completo:
                                </label>
                                <input x-model="name" name="name" id="name-input"
                                class="px-4 py-3 rounded-full border border-gray-300 shadow-sm rounded-md sm:text-sm focus:ring-indigo-500 focus:border-indigo-500" required/>
                            </div>
                        </div>

                        @foreach ($questions as $question)
                            <div x-wizard:step="question_{{ $question->id }}[{{ $question->question }}].trim() !== ''" >
                                <div class="grid">
                                    <p class="text-xl">
                                        {{ $question->question }}
                                    </p>
                                    <div class="mt-4 space-y-4">
                                        @foreach ($question->answers as $answer)
                                            <div class="flex flex-row items-center">
                                                <input name="question_{{ $question->id }}" x-model="question_{{ $question->id }}[{{ $question->question }}]" value="{{ $answer->answer }}" type="radio" class="h-4 w-4 border-gray-300 text-indigo-600 focus:ring-indigo-500">
                                                <label class="ml-3 block text-xl font-medium text-gray-700">{{ $answer->answer }}</label>
                                            </div>
                                        @endforeach
                                    </div>

                                </div>
                            </div>
                        @endforeach

                    </form>
                </div>

                <div class="flex bg-gray-50 space-x-6 p-6 border-t">
                    <button
                        class="inline-flex items-center px-4 py-2 border shadow-sm text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        :class="{
                            'cursor-not-allowed border-gray-300 text-gray-500 bg-white hover:bg-gray-50': $wizard
                                .cannotGoForward(),
                            'cursor-pointer text-white bg-blue-600 hover:bg-blue-700': $wizard.canGoForward(),
                        }"
                        @click="$wizard.forward()" :disabled="$wizard.cannotGoForward()" x-show="$wizard.isNotLast()">
                        <span x-text="'Siguiente'">
                            Siguiente
                        </span>
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6 ml-2" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                        </svg>
                    </button>
                    <button
                        form="triviaForm"
                        class="inline-flex items-center px-4 py-2 border shadow-sm text-sm font-medium rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500"
                        :class="{
                            'cursor-not-allowed border-gray-300 text-gray-500 bg-white hover:bg-gray-50': $wizard
                                .isNotComplete(),
                            'cursor-pointer text-white bg-green-600 hover:bg-green-700': $wizard.isComplete(),
                        }"
                        :disabled="$wizard.isNotComplete()" x-show="$wizard.isLast()">
                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24"
                            stroke="currentColor" stroke-width="2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M5 13l4 4L19 7" />
                        </svg>
                        Enviar
                    </button>
                </div>
            </div>
        </div>
    </div>






    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script>
        function sendData(values) {
            console.log(values)
        }
    </script>


</body>

</html>
