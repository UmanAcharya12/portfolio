<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite('resources/css/app.css')  
    
  </head>
  
  
  
  <body>
   <section>
    <div class=" grid grid-cols-6 h-screen">
      <div class="text-white p-4 h-screen " style="background-color: #09111B; ">
        <a href="/welcome"> <img src="image/logo.png" alt="My Logo" class=" h-40 ml-7  "/></a>
          <div class="flex flex-col justify-center items-center">
            <nav class="vertical-navbar text-lg font-bold mt-3">
              <a href="#welcome"><button class="hover:text-green-500 hover:bg-gray-800 mt-5 text-white px-4 py-2 rounded-lg">
                  <i class="fas fa-home" style="color: #53eaa8;"></i> HOME
              </button></a>
              <a href="#about"><button class="hover:text-green-500 hover:bg-gray-800 text-white px-4 mt-3 py-2 rounded-lg">
                <i class="fas fa-user" style="color: #53eaa8;"></i> ABOUT ME
            </button> 
              </a>
              <a href="#service"><button class="hover:text-green-500 hover:bg-gray-800 text-white px-4 mt-3 py-2 rounded-lg">
                  <i class="fas fa-briefcase" style="color: #54e6a4;"></i> SERVICES
              </button></a>
              <a href="#skills"><button class="hover:text-green-500 hover:bg-gray-800 text-white px-4 mt-3 py-2 rounded-lg">
                  <i class="fas fa-microchip" style="color: #54e6a4;"></i> SKILLS
              </button></a>
              <a href="#portfolio"><button class="hover:text-green-500 hover:bg-gray-800 text-white px-4 mt-3 py-2 rounded-lg">
                  <i class="fas fa-clipboard" style="color: #54e6a4;"></i> PORTFOLIO
              </button></a>
              <a href="#blog"><button class="hover:text-green-500 hover:bg-gray-800 text-white px-4 mt-3 py-2 rounded-lg">
                  <i class="fas fa-newspaper" style="color: #54e6a4;"></i> BLOG
              </button></a>
              <a href="#contact"><button class="hover:text-green-500 hover:bg-gray-800 text-white px-4 mt-3 py-2 rounded-lg">
                  <i class="fas fa-address-book" style="color: #54e6a4;"></i> CONTACT
              </button></a>
          </nav>
          </div>
          
        </div>
        
  
      
      <div class="col-span-5 h-screen bg-cover bg-center bg-no-repeat p-10" style="background-image: url('image/over.jpg'); overflow: auto">
         @yield('he')
        </div>
      </div>
    </section>
      
  </body>
  
</html>