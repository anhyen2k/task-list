<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <style type="text/tailwindcss">
        .btn {
            @apply rounded-md px-3 py-1 text-center font-medium text-slate-700 shadow-sm ring-1 ring-slate-700/10 hover:bg-slate-300 
        }

        .link {
            @apply font-medium text-gray-700 underline decoration-pink-500
        }

        lable {
            /* @apply block uppercase text-slate-700 mb-2 */
        }

        input, textarea {
            @apply shadow-sm appearance-none border w-full py-2 px-3 text-slate-700 leading-tight focus:outline-none
        }

        .error {
            @apply text-red-500 text-sm
        }
    </style>
    <title>Task List</title>
    @yield('styles')
</head>
<body class="container mx-auto my-10 max-w-lg">
    <h1 class="my-4 text-3xl">@yield('title')</h1>

    <div>
        @if(session()->has('success'))
            <div class="mb-10 rounded border border-green-100 px-4 py-3 text-lg text-green-700">
                <strong class="font-bold">Thành công</strong>
                <div>
                    {{ session('success') }}
                </div>
            </div>
        @endif
        @yield('content')
    </div>
</body>
</html>