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
    <style>
        * {
            /* border: 1px solid red; */
        }
    </style>
</head>
<body class="bg-[#2C3639] font-[Inter]">
    <div class="flex fixed left-[50%] translate-x-[-50%] min-h-max h-14 w-fit justify-center rounded-lg shadow-md shadow-black/20 bg-[#2C3639]/50 top-3 backdrop-blur-sm z-20">
        {{-- <p class="absolute">danielzerge.wijaya</p> --}}
        <a href="/" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 text-center uppercase tracking-wider font-regular">Home</p>
        </a>
        <a href="/experiencesandskills" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] hover:text-[#DCD7C9] bg-[#A27B5C] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 text-center uppercase tracking-wider font-bold leading-tight">Experiences and Skills</p>
        </a>
        <a href="/achievements" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-regular">Achievements</p>
        </a>
        <a href="/education" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-regular">Education</p>
        </a>
        <a href="/about" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-regular">About</p>
        </a>
    </div>
    <div class="h-[55rem] flex relative bg-cover bg-center bg-fixed" style="background-image: url(images/expcover.jpg)" id="atas">
        <div class="w-fit h-fit m-auto z-10">
            <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-9xl text-[#DCD7C9] text-center">Experiences and skills</p>
            <div class="flex gap-5 justify-center">
                <button class="text-4xl font-semibold tracking-wider uppercase px-5 py-3 rounded-xl text-[#2C3639] bg-[#DCD7C9] ease-out duration-500 hover:bg-[#c5b790] hover:scale-105 z-20" id="wsbtn">Work Skills</button>
                <button class="text-4xl font-semibold tracking-wider uppercase px-5 py-3 rounded-xl text-[#2C3639] bg-[#DCD7C9] ease-out duration-500 hover:bg-[#c5b790] hover:scale-105 z-20" id="psbtn">Personal Skills</button>
                <button class="text-4xl font-semibold tracking-wider uppercase px-5 py-3 rounded-xl text-[#2C3639] bg-[#DCD7C9] ease-out duration-500 hover:bg-[#c5b790] hover:scale-105 z-20" id="expbtn">Experiences</button>
            </div>
        </div>
        <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-[#2C3639]"></div>
    </div>
    <div class="container flex flex-col w-[1200px] mx-auto">
        <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-6xl text-[#DCD7C9] text-center mb-5 pt-20" id="wslbl">Work Skills</p>
        <div class="w-full flex justify-center gap-2 flex-wrap">
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">UI/UX Design</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">logo design</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Web Development</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Software engineer</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Database Management</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">App Development</p>
        </div>
    </div>
    <div class="container flex flex-col w-[1200px] mx-auto">
        <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-6xl text-[#DCD7C9] text-center mb-5 pt-20" id="pslbl">Personal Skills</p>
        <div class="w-full flex justify-center gap-2 flex-wrap h-fit">
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Fast Learner</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Motivated</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Kind and pleasant</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">organized</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">time management</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Leadership</p>
            <p class="w-fit uppercase text-[#DCD7C9] py-2 px-4 tracking-wider rounded-md border-[1px] border-[#DCD7C9] text-sm hover:text-[#2C3639] hover:bg-[#DCD7C9] ease-out duration-500">Character</p>
        </div>
    </div>
    <div class="w-full flex flex-col mx-auto mb-5 h-fit" id="explbl">
        <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-6xl text-[#DCD7C9] text-center mb-5 pt-20">Experiences</p>
        <div class="h-fit mx-2 mb-2 gap-10 flex justify-evenly flex-wrap">
            <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
                <div class="w-full h-[70%] bg-cover overflow-hidden">
                    <img src="images/malaria.png" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <div class="w-full h-[30%] p-4">
                    <p class="text-3xl font-bold">Malaria Identification Using Transfer learning</p>
                    <p class="italic">Computational Biology and Machine Learning Group Project - 2022</p>
                </div>
            </div>
            <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
                <div class="w-full h-[70%] bg-cover overflow-hidden">
                    <img src="images/logo bulet.png" class=" w-full ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <div class="w-full h-[30%] p-4">
                    <p class="text-3xl font-bold">RTB Life - Web Application</p>
                    <p class="italic">Software Engineer Group Project - 2022</p>
                </div>
            </div>
            <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
                <div class="w-full h-[70%] bg-cover overflow-hidden">
                    <img src="images/mentorbio.png" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <div class="w-full h-[30%] p-4">
                    <p class="text-3xl font-bold">Laboratorium Computational Biology Mentor</p>
                    <p class="italic">Mentoring for class with Stefanus Luigi Marchellino - 2022</p>
                </div>
            </div>
            <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
                <div class="w-full h-[70%] bg-cover overflow-hidden">
                    <img src="images/muree.jpg" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <div class="w-full h-[30%] p-4">
                    <p class="text-3xl font-bold">MUREE - Music Recommendation AI Web</p>
                    <p class="italic">Artificial Intelligence Group Project - 2022</p>
                </div>
            </div>
            <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
                <div class="w-full h-[70%] bg-cover overflow-hidden">
                    <img src="images/mentorfisika.png" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <div class="w-full h-[30%] p-4">
                    <p class="text-3xl font-bold">Laboratorium Computational Physics Mentor</p>
                    <p class="italic">Mentoring for class with Stefanus Luigi Marchellino - 2022</p>
                </div>
            </div>
            <div class="rounded-2xl flex flex-col text-[#DCD7C9] bg-[#3F4E4F] shadow-lg shadow-black/30 group hover:bg-[#2C3639] ease-out duration-500 h-max w-96 overflow-hidden">
                <div class="w-full h-[70%] bg-cover overflow-hidden">
                    <img src="images/calorietracker.png" class="ease-out duration-500 group-hover:scale-110 group-hover:rotate-3">
                </div>
                <div class="w-full h-[30%] p-4">
                    <p class="text-3xl font-bold">Calorie Tracker - Android App</p>
                    <p class="italic">Final Project of Senior High School - 2021</p>
                </div>
            </div>
        </div>
    </div>
    <button class="fixed h-12 w-fit bottom-5 right-5 mx-1 rounded-md flex ease-out duration-500 bg-[#DCD7C9] text-[#2C3639] hover:text-[#DCD7C9] hover:bg-[#2C3639] z-20 hover:border hover:border-[#DCD7C9]" id="btt">
        <p class="w-fit h-fit my-auto mx-5 text-center uppercase tracking-wider font-regular">Back to top</p>
    </button>
    <p class="font-light text-[#DCD7C9] text-xs tracking-wider mx-auto text-center w-fit mb-5">danielzerge.wijaya</p>
    <script>
        wsbtn = document.getElementById("wsbtn")
        wslbl = document.getElementById("wslbl")
        psbtn = document.getElementById("psbtn")
        pslbl = document.getElementById("pslbl")
        expbtn = document.getElementById("expbtn")
        explbl = document.getElementById("explbl")
        btt = document.getElementById("btt")
        atas = document.getElementById("atas")

        wsbtn.addEventListener("click", () => {
            wslbl.scrollIntoView();
        })

        psbtn.addEventListener("click", () => {
            pslbl.scrollIntoView();
        })

        expbtn.addEventListener("click", () => {
            explbl.scrollIntoView();
        })

        btt.addEventListener("click", () => {
            atas.scrollIntoView();
        })
    </script>
</body>
</html>
