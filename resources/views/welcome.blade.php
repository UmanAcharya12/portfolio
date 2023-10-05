@extends('layout.app')


@section('he')
<div class="h-[100vh] " id="welcome">
<h1 class="text-left font-bold text-xl sm:text-4xl md:text-4xl ">HI, I'M UMAN! SOFTWARE <br>ENGINEER</h1>
<br>

<p style="font-size: 16px; font-weight: 400; line-height: 1.7; margin: 0; color: var(--bodyColor);">
    I'm a passionate UI/UX designer with a mission to create <br>delightful and intuitive digital experiences. 
    <br>With a strong foundation in design principles and a keen <br> eye for detail, 
    I specialize in translating complex ideas into <br>user-friendly interfaces that captivate and engage.
</p>
<main class="flex-grow">
    <div class="flex justify-start items-center mt-4">
        <a href="cv.pdf" class="bg-green-500 text-white px-4 py-2 rounded-lg flex items-center hover:bg-green-600">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 14h-2v-2h2v2zm0-4h-2V7h2v5z"></path>
            </svg>
            Download CV
        </a>
        <a href="https://www.youtube.com/watch?v=B-ytMSuwbf8" class="bg-green-500 text-white px-4 py-2 rounded-lg flex items-center hover:bg-green-600 ml-4">
            <svg class="w-6 h-6 mr-2" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24">
                <path d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-2 14v-4l6 4-6 4z"></path>
            </svg>
            Watch Video
           </a>
    

        </div>
        
</main>
</div>
<div id="about">
  @include('about')
</div>
<div id="service">
  @include('service')
</div>
<div id="skills">
    @include('skills')
</div>
<div id="portfolio">
    @include('portfolio')
</div>
<div id="blog">
    @include('blog')
</div>
<div id="contact">
    @include('contact')
</div>
@endsection
