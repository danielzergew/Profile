<!DOCTYPE html>
<html lang="en" class="scroll-smooth h-full">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>Education</title>
    <style>
        * {
            /* border: 1px solid red; */
        }
    </style>
</head>
<?php $color = '' ?>
@switch($singleAchievement['rarity'])
    @case('R')
        <?php $color = 'to-[#3F4E4F]' ?>
        @break
    @case('SR')
        <?php $color = 'to-yellow-700' ?>
        @break
    @case('SSR')
        <?php $color = 'to-red-800' ?>
        @break
@endswitch
<body class="bg-[#2C3639] font-[Inter] h-full flex justify-center items-center">
    <div class="rounded-2xl flex items-end text-[#DCD7C9] shadow-lg shadow-black/30 group overflow-hidden ease-out duration-500 hover:scale-[97%] w-4/5 h-4/5 bg-cover relative">
        <div class="w-full h-full bg-cover group-hover:scale-110 duration-500 ease-out bg-top" style="background-image: url('/images/{{ $singleAchievement['photo'] }}')"></div>
        <div class="w-full h-[50%] bg-gradient-to-b from-transparent {{ $color }} flex items-end absolute">
            <div class="w-full h-fit p-4 duration-500 ease-out group-hover:pr-28">
                <p class="text-3xl font-bold duration-500 ease-out delay-150 group-hover:-translate-y-10 group-hover:translate-x-10 group-hover:text-4xl">{{ $singleAchievement["title"] }}</p>
                <p class="italic font-thin duration-500 ease-out delay-[250ms] group-hover:-translate-y-10 group-hover:translate-x-10 group-hover:text-xl">{{ $singleAchievement["year"] }}</p>
                <p class="italic duration-500 ease-out delay-[350ms] group-hover:-translate-y-10 group-hover:translate-x-10 group-hover:text-xl">{{ $singleAchievement["desc"] }}</p>
            </div>
        </div>
    </div>
    <a href="/achievements" class="fixed h-12 w-fit bottom-5 right-5 mx-1 rounded-md flex ease-out duration-500 bg-[#DCD7C9] text-[#2C3639] hover:text-[#DCD7C9] hover:bg-[#2C3639] z-20 hover:border hover:border-[#DCD7C9]" id="btt">
        <p class="w-fit h-fit my-auto mx-5 text-center uppercase tracking-wider font-regular">Back</p>
    </a>
</body>
</html>
