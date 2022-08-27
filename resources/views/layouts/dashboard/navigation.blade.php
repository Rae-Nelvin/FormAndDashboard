<!-- start navbar -->
<div class="md:fixed md:w-full md:top-0 md:z-20 flex flex-row flex-wrap items-center bg-white py-[25px] px-10 border-b border-gray-300">  
    
    <!-- navbar content toggle -->
    <button id="navbarToggle" class="hidden md:block md:fixed right-0 mr-6">
      <i class="fad fa-chevron-double-down"></i>
    </button>
    <!-- end navbar content toggle -->

    <!-- navbar content -->
    <div id="navbar" class="animated md:hidden md:fixed md:top-0 md:w-full md:left-0 md:mt-16 md:border-t md:border-b md:border-gray-200 md:p-10 md:bg-white flex-1 pl-3 flex flex-row flex-wrap justify-between items-center md:flex-col md:items-center">
      <!-- left -->
      <form action="#" method="POST" class="w-[626px] border-[1px] h-[50px] border-[#C4CACD]/40 rounded-full py-5 px-10 flex flex-row justify-between items-center flex-nowrap">
        @csrf
        <input type="text" name="search" placeholder="Search..." class="border-0 outline-none focus:outline-none focus:border-0 focus:ring-0">
        <button  class="text-[#C4CACD]/90">
          <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24">
            <path fill="none" stroke="currentColor" stroke-linecap="round" stroke-width="2" d="m21 21l-4.486-4.494M19 10.5a8.5 8.5 0 1 1-17 0a8.5 8.5 0 0 1 17 0Z"/>
          </svg>
        </button>
      </form>
      <!-- end left -->      

      <!-- right -->
      <div class="flex flex-row items-center"> 

        @if(1 == 2)
        <svg xmlns="http://www.w3.org/2000/svg" width="26" height="26" preserveAspectRatio="xMidYMid meet" viewBox="0 0 32 32" class="text-[#0060FF]">
          <path fill="currentColor" d="M28.707 19.293L26 16.586V13a10.014 10.014 0 0 0-9-9.95V1h-2v2.05A10.014 10.014 0 0 0 6 13v3.586l-2.707 2.707A1 1 0 0 0 3 20v3a1 1 0 0 0 1 1h7v.777a5.152 5.152 0 0 0 4.5 5.199A5.006 5.006 0 0 0 21 25v-1h7a1 1 0 0 0 1-1v-3a1 1 0 0 0-.293-.707ZM19 25a3 3 0 0 1-6 0v-1h6Zm8-3H5v-1.586l2.707-2.707A1 1 0 0 0 8 17v-4a8 8 0 0 1 16 0v4a1 1 0 0 0 .293.707L27 20.414Z"/>
        </svg>
        @else 
          <img src="{{ asset('DashboardIcon/img/Group 237544.svg') }}" class="w-[26px] h-[26px]">
        @endif

        <!-- user -->
        
        <div class="flex items-center text-sm font-medium rounded-lg md:mr-0 focus:ring-4 bg-[#F2F8FF] py-[6px] px-[17px] ml-[46px]">
          <span class="sr-only">Open user menu</span>
          <img class="mr-2 w-[45px] h-[45px] rounded-full" src="{{ asset('DashboardIcon/img/user4.png') }}" alt="user photo">
          <div class="flex flex-col items-start ml-[9px]">
            <h1 class="font-semibold text-[13px] text-[#1F1F1F]">Andy Warhol</h1>
            <h2 class="font-medium text-[11px] text-[#5E6E78]">andywarhol@mail.com</h2>
          </div>
          <button id="dropdownAvatarNameButton" data-dropdown-toggle="dropdownAvatarName" type="button">
            <img src="{{ asset('DashboardIcon/img/triple-dots.svg') }}" alt="triple-dots" class="w-5 h-4 ml-[42px]">
          </button>
        </div>

        <!-- Dropdown menu -->
        <div id="dropdownAvatarName" class="z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow hidden" data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="bottom" style="position: absolute; inset: 0px auto auto 0px; margin: 0px; transform: translate(319px, 62px);">
          <ul class="py-1 text-sm text-gray-700" aria-labelledby="dropdownInformdropdownAvatarNameButtonationButton">
            <li>
              <a href="#" class="block py-2 px-4 hover:bg-[#F2F8FF]">Dashboard</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 hover:bg-[#F2F8FF]">Settings</a>
            </li>
            <li>
              <a href="#" class="block py-2 px-4 hover:bg-[#F2F8FF]">Earnings</a>
            </li>
          </ul>
          <div class="py-1">
            <a href="#" class="block py-2 px-4 text-sm text-[#FF5959] hover:bg-[#F2F8FF]">Sign out</a>
          </div>
        </div>

        <!-- end user -->               

      </div>
      <!-- end right -->
    </div>
    <!-- end navbar content -->

  </div>
<!-- end navbar -->