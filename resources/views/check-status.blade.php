<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/daisyui@2.50.0/dist/full.css" rel="stylesheet" type="text/css" />
    <link rel="icon" href="img/logoweb.png">
    <title>Light Service | Check Status</title>
    <script>
      tailwind.config = {
        darkMode:'class',
        theme: {
          extend: {
            spacing: {
              13: '3.25rem',
            },
            fontFamily: {
              inter: ['Inter']
            },
            colors: {
              ralzy: '#bada55',
              kopi: '#c0ffee',
            },
            animation: {
              'spin-slow': "spin 3s linear infinite",
              'goyang': "goyang 1s ease-in-out infinite",
            },
            keyframes: {
              goyang: {
                '0%, 100%' : { transform: 'rotate (-3deg)'},
                '50%': {transform: 'rotate(3deg)'},
              }
            }
          }
        }
      };
    </script>
</head>
<body>

  <!-- navbar -->
  <section>
    <div class="navbar bg-base-100 bg-slate-700 text-slate-400 fixed w-full z-20 top-0 left-0">
        <div class="navbar-start">
          <div class="dropdown">
            <label tabindex="0" class="btn btn-ghost lg:hidden">
              <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none" viewBox="0 0 24 24" stroke="currentColor"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h8m-8 6h16" /></svg>
            </label>
            <ul tabindex="0" class="menu menu-compact dropdown-content mt-3 p-2 shadow bg-base-100 rounded-box w-52">
              <li><a>Check Status</a></li>
              <li tabindex="0">
                <a href="/dashboard" class="justify-between">
                  Login
                </a>
              </li>
              <li><a>Contact Us</a></li>
            </ul>
          </div>
          <a href="" class="btn btn-ghost normal-case hover:bg-slate-500 text-xl text-white"><span class="text-[#FCE22A]">Light</span> Service</a>
        </div>
        <div class="navbar-end hidden lg:flex">
          <ul class="menu menu-horizontal px-1">
            <li><a>Check Status</a></li>
            <li tabindex="0">
              <a href="/dashboard">
                Login
              </a>
            </li>
            <li><a>Contact Us</a></li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Content -->
      <section>
        <div class="container max-w-screen-lg max-h-screen bg-contain bg-no-repeat overflow-hidden bg-center flex">
          <img src="{{URL::asset('img/coba.jpg')}}" alt="" class="h-screen w-full object-cover
           object-center absolute brightness-50">
        </div>

        <div class=" lg:w-96 md:w-80 sm:w-80 max-h-screen w-72 mx-auto left-0 top-60 md:top-72 bg-transparent rounded-md shadow-lg relative">
          <h2 class="text-center text-white font-semibold mb-6 font-inter pt-6 text-2xl mx-auto">Check Your Gadget Here</h2>
          
          <form action="">
          
            <div class="block bg-white rounded-full flex items-center w-full max-w-xl mr-4 p-2.5 shadow-sm border border-gray-200 mb-6">
              <button class="outline-none focus:outline-none">
                <svg class="w-5 text-gray-600 h-5 cursor-pointer" fill="none" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" stroke="currentColor" viewBox="0 0 24 24"><path d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
              </button>
              <input type="search" name="search" id="search" placeholder="masukkan kode registrasi.." class="w-full pl-3 text-sm text-black outline-none focus:outline-none bg-transparent" required/>
            </div>

            <button type="submit" class="text-white mx-auto block bg-blue-200 hover:bg-blue-200 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm w-auto px-5 py-2.5 text-center dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-700">Check Status</button>
          </form>

        </div>
      </section>

      <script src="https://cdn.tailwindcss.com"></script>
      
</body>
</html>