<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="{{ asset('css/main.css') }}">
</head>

<body>
    <div id="masterLayout" class="master-layout bg-red-100 h-[100dvh] flex flex-col">
        <div>
            <x-navbar/>
        </div>
        <div class="bg-blue-100 flex flex-col  flex-1 mx-10 ">
            <x-searchbar/>
            <div class="flex justify-around mt-4">
                <x-film-card/>
            </div>
        </div>
    </div>
</body>

</html>
