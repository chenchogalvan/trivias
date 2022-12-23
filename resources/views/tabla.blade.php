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

    <!-- This is an example component -->
    <div class="max-w-2xl mx-auto">
        <livewire:table-trivia-one :trivia="$trivia->id" />
    </div>





    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">
    </script>

    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>


    <script>
        function sendData(values) {
            console.log(values)
        }
    </script>


</body>

</html>
