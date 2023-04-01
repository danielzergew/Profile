<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Inter:wght@100;300;400;500;700&display=swap" rel="stylesheet">
    <title>Education</title>
    {{-- <style>
        * {
            /* border: 1px solid red; */
        }
    </style> --}}
</head>
<body class="bg-[#2C3639] font-[Inter]">
    <div class="flex fixed left-[50%] translate-x-[-50%] min-h-max h-14 w-fit justify-center rounded-lg shadow-md shadow-black/20 bg-[#2C3639]/50 top-3 backdrop-blur-sm z-20">
        <a href="/" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 text-center uppercase tracking-wider font-regular">Home</p>
        </a>
        <a href="/experiencesandskills" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 text-center uppercase tracking-wider font-regular leading-tight">Experiences and Skills</p>
        </a>
        <a href="/achievements" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] hover:text-[#DCD7C9] bg-[#A27B5C] text-[#DCD7C9] ">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-bold">Achievements</p>
        </a>
        <a href="/education" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-regular">Education</p>
        </a>
        <a href="/about" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-regular">About</p>
        </a>
    </div>
    <div class="h-[55rem] flex relative bg-cover bg-center bg-fixed" style="background-image: url(images/achievementcover2.jpeg)" id="atas">
        <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-9xl text-[#DCD7C9] z-10">Achievements</p>
        <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-[#2C3639]"></div>
    </div>
    <div class="h-fit mx-2 mb-5 pt-10 gap-10 flex justify-evenly flex-wrap">
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/pingpong.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Table Tennis 2nd Place</p>
                <p class="italic">PPTI 4th Cawu - 2022</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/graduate.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Best Graduate</p>
                <p class="italic">12 Grade - 2021</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/finalis.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Finalist Lomba Video Bank Indonesia</p>
                <p class="italic">2020</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/character.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Best in Character</p>
                <p class="italic">10 Grade - 2020</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/leadership.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Best in Leadership</p>
                <p class="italic">9 Grade - 2019</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/character2.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Best in Character</p>
                <p class="italic">8 Grade - 2018</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/academic.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Best in Academic</p>
                <p class="italic">7 Grade - 2017</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/leadership2.png" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Best in Leadership</p>
                <p class="italic">7 Grade - 2016</p>
            </div>
        </div>
        <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
            <div class="w-full h-[70%] bg-cover overflow-hidden">
                <img src="images/medals.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
            </div>
            <div class="w-full h-[30%] p-4">
                <p class="text-3xl font-bold">Elementary Achievements</p>
                <p class="italic">Best in Computer, Art, Music and Matematics - (2009 - 2015)</p>
            </div>
        </div>
    </div>
    <button class="fixed h-12 w-fit bottom-5 right-5 mx-1 rounded-md flex ease-out duration-500 bg-[#DCD7C9] text-[#2C3639] hover:text-[#DCD7C9] hover:bg-[#2C3639] z-20 hover:border hover:border-[#DCD7C9]" id="btt">
        <p class="w-fit h-fit my-auto mx-5 text-center uppercase tracking-wider font-regular">Back to top</p>
    </button>
    <p class="font-light text-[#DCD7C9] text-xs tracking-wider mx-auto text-center w-fit mb-5">danielzerge.wijaya</p>
    <script>
        btt = document.getElementById("btt")
        atas = document.getElementById("atas")
        btt.addEventListener("click", () => {
            atas.scrollIntoView();
        })
    </script>
</body>
</html>
