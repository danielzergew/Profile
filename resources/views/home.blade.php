<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <style>
        * {
            /* border: 1px solid red; */
        }
    </style>
    <title>Hi I'm Daniel</title>

</head>
<body class="bg-[#2C3639] flex fixed h-full w-full font-[Inter]">
    <div class="m-auto relative flex justify-center">
        <div class="bg-[#A27B5C] aspect-square h-96 rounded-full absolute m-auto self-center"></div>
        <div class="container w-fit absolute -left-64 -top-10 text-[#DCD7C9]">
            <p class="font-medium text-7xl">Hi</p>
            <div class="flex">
                <p class="font-regular text-6xl self-end mr-3">I'm</p>
                <p class="text-7xl font-bold">Daniel</p>
            </div>
            <p class="font-light tracking-wider">let's get to know more about me:</p>
        </div>
        <div class="z-10 relative">
            <img src="images/fotodaniel.png">
            <div class="w-full h-[200px] absolute -bottom-2 bg-gradient-to-t from-[#2C3639] via-transparent to-tranparant"></div>
            <div class="w-full h-[200px] absolute -bottom-2 bg-gradient-to-t from-[#2C3639] via-transparent to-tranparant"></div>
        </div>
        <a href="/experiencesandskills" class="absolute -right-80 top-20 text-right text-5xl font-semibold tracking-wider uppercase paragraph px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9]  ease-out duration-500 hover:translate-x-5 hover:bg-[#c5b790] hover:scale-105">Experiences<br>and Skills</a>
        <a href="/about" class="absolute -left-48 top-40 text-5xl font-semibold tracking-wider uppercase px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] ease-out duration-500 hover:-translate-x-5 hover:bg-[#c5b790] hover:scale-105">About</a>
        <a href="/education" class="absolute -left-52 bottom-10 text-5xl font-semibold tracking-wider uppercase px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] z-20 ease-out duration-500 hover:-translate-x-5 hover:bg-[#c5b790] hover:scale-105">Education</a>
        <a href="/achievements" class="absolute -right-72 bottom-36 text-5xl font-semibold tracking-wider uppercase px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] z-20 ease-out duration-500 hover:translate-x-5 hover:bg-[#c5b790] hover:scale-105">Achievements</a>
    </div>
    <p class="absolute bottom-5 font-light left-[50%] translate-x-[-50%] text-[#DCD7C9] text-xs tracking-wider">danielzerge.wijaya</p>
</body>
</html>

{{-- 2C3639
3F4E4F
A27B5C
DCD7C9 --}}
