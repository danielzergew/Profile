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
        <a href="/" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 text-center uppercase tracking-wider font-regular">Home</p>
        </a>
        <a href="/experiencesandskills" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 text-center uppercase tracking-wider font-regular leading-tight">Experiences and Skills</p>
        </a>
        <a href="/achievements" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-regular">Achievements</p>
        </a>
        <a href="/education" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] hover:text-[#DCD7C9] bg-[#A27B5C] text-[#DCD7C9] ">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-bold">Education</p>
        </a>
        <a href="/about" class="h-12 w-fit my-auto mx-1 rounded-md flex ease-out duration-500 hover:bg-[#2C3639] text-[#DCD7C9]">
            <p class="w-fit h-fit my-auto mx-10 uppercase tracking-wider font-regular">About</p>
        </a>
    </div>
    <div class="h-[55rem] flex relative bg-cover bg-center bg-fixed mb-28" style="background-image: url(images/kelas.jpg)" id="atas">
        <div class="absolute w-full h-full bg-gradient-to-b from-transparent to-[#2C3639]"></div>
        <div class="h-fit mx-auto bottom-40 absolute left-[50%] translate-x-[-50%]">
            <div class="m-auto h-fit relative flex justify-center">
                <div class="bg-[#A27B5C] aspect-square h-96 rounded-full absolute m-auto self-center z-20"></div>
                <div class="z-30 relative w-96">
                    <img src="images/kursi.png">
                </div>
                <button class="absolute -left-60 top-5 text-right text-5xl font-semibold tracking-wider uppercase paragraph px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] ease-out duration-500 hover:-translate-x-5 hover:bg-[#c5b790] hover:scale-105 z-20" id="kgbtn">kindergarten</button>
                <button class="absolute -right-80 top-28 text-5xl font-semibold tracking-wider uppercase px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] ease-out duration-500 hover:translate-x-5 hover:bg-[#c5b790] hover:scale-105 z-20" id="elebtn">elementary</button>
                <button class="absolute -left-72 top-32 text-5xl font-semibold tracking-wider uppercase px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] z-20 ease-out duration-500 hover:-translate-x-5 hover:bg-[#c5b790] hover:scale-105" id="jhbtn">Junior High</button>
                <button class="absolute -right-52 bottom-20 text-5xl font-semibold tracking-wider uppercase px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] z-30 ease-out duration-500 hover:translate-x-5 hover:bg-[#c5b790] hover:scale-105" id="shbtn">senior high</button>
                <button class="absolute -left-32 bottom-12 text-5xl font-semibold tracking-wider uppercase px-8 py-5 rounded-xl text-[#2C3639] bg-[#DCD7C9] z-30 ease-out duration-500 hover:-translate-x-5 hover:bg-[#c5b790] hover:scale-105" id="colbtn">college</button>
                <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-9xl text-[#DCD7C9] mixblend z-30 absolute -top-44">Education</p>
            </div>
        </div>
    </div>
    <div class="container flex flex-col w-[1200px] mx-auto mb-28">
        <div class="h-52 bg-cover bg-fixed flex bg-center rounded-2xl m-2 shadow-lg shadow-black/30 relative overflow-hidden" style="background-image: url(images/anaktk.jpg)" id="kglabel">
            <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-7xl text-[#DCD7C9] mixblend z-10">Kindergarten</p>
            <div class="w-full h-full absolute bg-gradient-to-br from-transparent to-black/50"></div>
        </div>
        <div class="h-[32rem] flex m-2 overflow-hidden">
            <div class="h-full w-[40%] flex flex-col justify-center items-center text-[#DCD7C9] text-center">
                <p class="w-fit text-5xl">TKK Santa Maria 2</p>
                <p class="w-fit text-3xl font-bold uppercase italic">Malang</p>
                <p class="w-fit text-xl italic">2005 - 2008</p>
            </div>
            <div class="h-full w-[60%] bg-cover bg-center rounded-2xl shadow-lg shadow-black/30" style="background-image: url(images/tksanmar.jpg)"></div>
        </div>
        <div class="h-[32rem] flex m-2 overflow-hidden">
            <div class="h-full w-[60%] bg-cover bg-center rounded-2xl shadow-lg shadow-black/30" style="background-image: url(images/tkcharis.jpg)"></div>
            <div class="h-full w-[40%] flex flex-col justify-center items-center text-[#DCD7C9] text-center">
                <p class="w-fit text-5xl">TK Kidsland</p>
                <p class="w-fit text-3xl font-bold uppercase italic">Malang</p>
                <p class="w-fit text-xl italic">2008 - 2009</p>
            </div>
        </div>
    </div>
    <div class="container flex flex-col w-[1200px] mx-auto mb-28">
        <div class="h-52 bg-cover bg-fixed flex bg-center rounded-2xl m-2 shadow-lg shadow-black/30 relative overflow-hidden" style="background-image: url(images/anaksd.png)" id="elelabel">
            <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-7xl text-[#DCD7C9] mixblend z-10">Elementary</p>
            <div class="w-full h-full absolute bg-gradient-to-br from-transparent to-black/50"></div>
        </div>
        <div class="h-[32rem] flex m-2 overflow-hidden">
            <div class="h-full w-[40%] flex flex-col justify-center items-center text-[#DCD7C9] text-center">
                <p class="w-fit text-5xl">SD Charis National Academy</p>
                <p class="w-fit text-3xl font-bold uppercase italic">Malang</p>
                <p class="w-fit text-xl italic">2009 - 2015</p>
            </div>
            <div class="h-full w-[60%] bg-cover bg-center rounded-2xl shadow-lg shadow-black/30" style="background-image: url(images/sdcharis.jpg)"></div>
        </div>
    </div>
    <div class="container flex flex-col w-[1200px] mx-auto mb-28">
        <div class="h-52 bg-cover bg-fixed flex bg-center rounded-2xl m-2 shadow-lg shadow-black/30 relative overflow-hidden" style="background-image: url(images/anakjhs.jpg)" id="jhlabel">
            <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-7xl text-[#DCD7C9] mixblend z-10">Junior High</p>
            <div class="w-full h-full absolute bg-gradient-to-br from-transparent to-black/50"></div>
        </div>
        <div class="h-[32rem] flex m-2 overflow-hidden">
            <div class="h-full w-[60%] bg-cover bg-center rounded-2xl shadow-lg shadow-black/30" style="background-image: url(images/charisjhs.jpg)"></div>
            <div class="h-full w-[40%] flex flex-col justify-center items-center text-[#DCD7C9] text-center">
                <p class="w-fit text-5xl">SMP Charis National Academy</p>
                <p class="w-fit text-3xl font-bold uppercase italic">Malang</p>
                <p class="w-fit text-xl italic">2015 - 2018</p>
            </div>
        </div>
    </div>
    <div class="container flex flex-col w-[1200px] mx-auto mb-28">
        <div class="h-52 bg-cover bg-fixed flex bg-center rounded-2xl m-2 shadow-lg shadow-black/30 relative overflow-hidden" style="background-image: url(images/anakshs.png)" id="shlabel">
            <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-7xl text-[#DCD7C9] mixblend z-10">Senior high</p>
            <div class="w-full h-full absolute bg-gradient-to-br from-transparent to-black/50"></div>
        </div>
        <div class="h-[32rem] flex m-2 overflow-hidden">
            <div class="h-full w-[40%] flex flex-col justify-center items-center text-[#DCD7C9] text-center">
                <p class="w-fit text-5xl">SMAK Santa Maria</p>
                <p class="w-fit text-3xl font-bold uppercase italic">Malang</p>
                <p class="w-fit text-xl italic">July 2018 - September 2018</p>
            </div>
            <div class="h-full w-[60%] bg-cover bg-center rounded-2xl shadow-lg shadow-black/30" style="background-image: url(images/sanmarsmak.jpg)"></div>
        </div>
        <div class="h-[32rem] flex m-2 overflow-hidden">
            <div class="h-full w-[60%] bg-cover bg-center rounded-2xl shadow-lg shadow-black/30" style="background-image: url(images/charis.jpeg)"></div>
            <div class="h-full w-[40%] flex flex-col justify-center items-center text-[#DCD7C9] text-center">
                <p class="w-fit text-5xl">SMA Charis National Academy</p>
                <p class="w-fit text-3xl font-bold uppercase italic">Malang</p>
                <p class="w-fit text-xl italic">2018 - 2021</p>
            </div>
        </div>
    </div>
    <div class="container flex flex-col w-[1200px] mx-auto mb-28">
        <div class="h-52 bg-cover bg-fixed flex bg-center rounded-2xl m-2 shadow-lg shadow-black/30 relative overflow-hidden" style="background-image: url(images/anakkuliah.jpeg)" id="collabel">
            <p class="w-fit h-fit uppercase m-auto font-bold tracking-wider text-7xl text-[#DCD7C9] mixblend z-10">College</p>
            <div class="w-full h-full absolute bg-gradient-to-br from-transparent to-black/50"></div>
        </div>
        <div class="h-[32rem] flex m-2 overflow-hidden">
            <div class="h-full w-[40%] flex flex-col justify-center items-center text-[#DCD7C9] text-center">
                <p class="w-fit text-5xl">BCA Learning Institue (PPTI)</p>
                <p class="w-fit text-3xl font-bold uppercase italic">Bogor</p>
                <p class="w-fit text-xl italic">2021 - Present</p>
            </div>
            <div class="h-full w-[60%] bg-cover bg-center rounded-2xl shadow-lg shadow-black/30" style="background-image: url(images/bli.jpg)"></div>
        </div>
    </div>
    <button class="fixed h-12 w-fit bottom-5 right-5 mx-1 rounded-md flex ease-out duration-500 bg-[#DCD7C9] text-[#2C3639] hover:text-[#DCD7C9] hover:bg-[#2C3639] z-20 hover:border hover:border-[#DCD7C9]" id="btt">
        <p class="w-fit h-fit my-auto mx-5 text-center uppercase tracking-wider font-regular">Back to top</p>
    </button>
    <p class="font-light text-[#DCD7C9] text-xs tracking-wider mx-auto text-center w-fit">danielzerge.wijaya</p>
    <script>
        kgbtn = document.getElementById("kgbtn")
        kglabel = document.getElementById("kglabel")
        elebtn = document.getElementById("elebtn")
        elelabel = document.getElementById("elelabel")
        jhbtn = document.getElementById("jhbtn")
        jhlabel = document.getElementById("jhlabel")
        shbtn = document.getElementById("shbtn")
        shlabel = document.getElementById("shlabel")
        colbtn = document.getElementById("colbtn")
        collabel = document.getElementById("collabel")
        btt = document.getElementById("btt")
        atas = document.getElementById("atas")

        atas.scrollIntoView();

        kgbtn.addEventListener("click", () => {
            kglabel.scrollIntoView();
        })

        elebtn.addEventListener("click", () => {
            elelabel.scrollIntoView();
        })

        jhbtn.addEventListener("click", () => {
            jhlabel.scrollIntoView();
        })

        shbtn.addEventListener("click", () => {
            shlabel.scrollIntoView();
        })

        colbtn.addEventListener("click", () => {
            collabel.scrollIntoView();
        })

        btt.addEventListener("click", () => {
            atas.scrollIntoView();
        })
    </script>
</body>
</html>
