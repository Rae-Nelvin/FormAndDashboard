  <!-- start sidebar -->
  <div id="sideBar" class="relative flex flex-col flex-wrap bg-white border-r border-gray-300 py-[25px] px-14 flex-none w-auto md:-ml-64 md:fixed md:top-0 md:z-30 md:h-full md:shadow-xl animated faster">
    
    <!-- sidebar content -->
    <div class="flex flex-col">

      <!-- sidebar toggle -->
      <div class="text-right hidden md:block mb-4">
        <button id="sideBarHideBtn">
          <i class="fad fa-times-circle"></i>
        </button>
      </div>
      <!-- end sidebar toggle -->

      <img src="{{ asset('DashboardIcon/logo-CC.svg') }}" alt="Logo-CC" class="mb-[30px]">

      <div class="flex flex-col space-y-2">
        <a href="{{ route('admin.renderDashboard') }}" class="{{ request()->is('admin/dashboard') 
        ? 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-[#0060FF] bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' 
        : 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' }}">
          <svg width="20" height="20" aria-hidden="true" focusable="false" role="img" viewBox="0 0 25 25" xmlns="http://www.w3.org/2000/svg" class="mr-[13px]">
            <path fill="currentColor" d="M4.16667 13.5417H10.4167C10.6929 13.5417 10.9579 13.4319 11.1532 13.2366C11.3486 13.0412 11.4583 12.7763 11.4583 12.5V4.16667C11.4583 3.8904 11.3486 3.62545 11.1532 3.4301C10.9579 3.23475 10.6929 3.125 10.4167 3.125H4.16667C3.8904 3.125 3.62545 3.23475 3.4301 3.4301C3.23475 3.62545 3.125 3.8904 3.125 4.16667V12.5C3.125 12.7763 3.23475 13.0412 3.4301 13.2366C3.62545 13.4319 3.8904 13.5417 4.16667 13.5417ZM3.125 20.8333C3.125 21.1096 3.23475 21.3746 3.4301 21.5699C3.62545 21.7653 3.8904 21.875 4.16667 21.875H10.4167C10.6929 21.875 10.9579 21.7653 11.1532 21.5699C11.3486 21.3746 11.4583 21.1096 11.4583 20.8333V16.6667C11.4583 16.3904 11.3486 16.1254 11.1532 15.9301C10.9579 15.7347 10.6929 15.625 10.4167 15.625H4.16667C3.8904 15.625 3.62545 15.7347 3.4301 15.9301C3.23475 16.1254 3.125 16.3904 3.125 16.6667V20.8333ZM13.5417 20.8333C13.5417 21.1096 13.6514 21.3746 13.8468 21.5699C14.0421 21.7653 14.3071 21.875 14.5833 21.875H20.8333C21.1096 21.875 21.3746 21.7653 21.5699 21.5699C21.7653 21.3746 21.875 21.1096 21.875 20.8333V13.5417C21.875 13.2654 21.7653 13.0004 21.5699 12.8051C21.3746 12.6097 21.1096 12.5 20.8333 12.5H14.5833C14.3071 12.5 14.0421 12.6097 13.8468 12.8051C13.6514 13.0004 13.5417 13.2654 13.5417 13.5417V20.8333ZM14.5833 10.4167H20.8333C21.1096 10.4167 21.3746 10.3069 21.5699 10.1116C21.7653 9.91622 21.875 9.65127 21.875 9.375V4.16667C21.875 3.8904 21.7653 3.62545 21.5699 3.4301C21.3746 3.23475 21.1096 3.125 20.8333 3.125H14.5833C14.3071 3.125 14.0421 3.23475 13.8468 3.4301C13.6514 3.62545 13.5417 3.8904 13.5417 4.16667V9.375C13.5417 9.65127 13.6514 9.91622 13.8468 10.1116C14.0421 10.3069 14.3071 10.4167 14.5833 10.4167Z"/>
          </svg>               
          Dashboard
        </a>
        <!-- end link -->
  
        <!-- link -->
        <a href="#" class="flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 576 512" class="mr-[13px]">
            <path fill="currentColor" d="M0 64C0 28.65 28.65 0 64 0h160v128c0 17.7 14.3 32 32 32h128v38.6c-73.9 20.9-128 88.8-128 169.4c0 59.1 29.1 111.3 73.7 143.3c-3.1.4-6.4.7-9.7.7H64c-35.35 0-64-28.7-64-64V64zm256 64V0l128 128H256zm32 240c0-79.5 64.5-144 144-144s144 64.5 144 144s-64.5 144-144 144s-144-64.5-144-144zm144 96c13.3 0 24-10.7 24-24s-10.7-24-24-24s-24 10.7-24 24s10.7 24 24 24zm-64-136c0 8.8 7.2 16 16 16s16-7.2 16-16v-6.4c0-5.3 4.3-9.6 9.6-9.6h40.5c7.7 0 13.9 6.2 13.9 13.9c0 5.2-2.9 9.9-7.4 12.4l-32 16.8c-5.3 2.8-8.6 8.2-8.6 14.1V384c0 8.8 7.2 16 16 16s16-7.2 16-16v-5.1l23.5-12.3c15.1-8 24.5-24.5 24.5-40.7c0-25.3-20.6-45.9-45.9-45.9h-40.5c-23 0-41.6 18.6-41.6 41.6v6.4z"/>
          </svg>             
          Paket Pertanyaan
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('admin.renderJawaban') }}" class="{{ request()->is('admin/jawaban') || request()->is('jawaban/sectionChart') || request()->is('jawaban/sectionTable') 
        ? 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-[#0060FF] bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' 
        : 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="mr-[13px]">
            <path fill="currentColor" d="M8 18h10.237L20 19.385V9h1a1 1 0 0 1 1 1v13.5L17.545 20H9a1 1 0 0 1-1-1v-1zm-2.545-2L1 19.5V4a1 1 0 0 1 1-1h15a1 1 0 0 1 1 1v12H5.455z"/>
          </svg>            
          Jawaban
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('admin.renderPengguna') }}" class="{{ request()->is('admin/pengguna') 
        ? 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-[#0060FF] bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' 
        : 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" class="mr-[13px]">
            <path fill="currentColor" d="M858.5 763.6a374 374 0 0 0-80.6-119.5a375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1c-.4.2-.8.3-1.2.5c-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8c2-77.2 33-149.5 87.8-204.3c56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"/>
          </svg>         
          Pengguna
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 1024 1024" class="mr-[13px]">
            <path fill="currentColor" d="M858.5 763.6a374 374 0 0 0-80.6-119.5a375.63 375.63 0 0 0-119.5-80.6c-.4-.2-.8-.3-1.2-.5C719.5 518 760 444.7 760 362c0-137-111-248-248-248S264 225 264 362c0 82.7 40.5 156 102.8 201.1c-.4.2-.8.3-1.2.5c-44.8 18.9-85 46-119.5 80.6a375.63 375.63 0 0 0-80.6 119.5A371.7 371.7 0 0 0 136 901.8a8 8 0 0 0 8 8.2h60c4.4 0 7.9-3.5 8-7.8c2-77.2 33-149.5 87.8-204.3c56.7-56.7 132-87.9 212.2-87.9s155.5 31.2 212.2 87.9C779 752.7 810 825 812 902.2c.1 4.4 3.6 7.8 8 7.8h60a8 8 0 0 0 8-8.2c-1-47.8-10.9-94.3-29.5-138.2zM512 534c-45.9 0-89.1-17.9-121.6-50.4S340 407.9 340 362c0-45.9 17.9-89.1 50.4-121.6S466.1 190 512 190s89.1 17.9 121.6 50.4S684 316.1 684 362c0 45.9-17.9 89.1-50.4 121.6S557.9 534 512 534z"/>
          </svg>              
          Profil
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="{{ route('admin.renderAssign') }}" class="{{ request()->is('admin/assign') || request()->is('assign/table') || request()->is('assign/detail')
        ? 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-[#0060FF] bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' 
        : 'flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500' }}">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="mr-[13px]">
            <path fill="currentColor" d="M19 3h-4.18C14.4 1.84 13.3 1 12 1c-1.3 0-2.4.84-2.82 2H5c-1.1 0-2 .9-2 2v14c0 1.1.9 2 2 2h14c1.1 0 2-.9 2-2V5c0-1.1-.9-2-2-2zm-7 0c.55 0 1 .45 1 1s-.45 1-1 1s-1-.45-1-1s.45-1 1-1zm0 4c1.66 0 3 1.34 3 3s-1.34 3-3 3s-3-1.34-3-3s1.34-3 3-3zm6 12H6v-1.4c0-2 4-3.1 6-3.1s6 1.1 6 3.1V19z"/>
          </svg>            
          Assign People
        </a>
        <!-- end link -->

        <!-- link -->
        <a href="#" class="flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 20 20" class="mr-[13px]">
            <path fill="currentColor" d="M11.078 0c.294 0 .557.183.656.457l.706 1.957c.253.063.47.126.654.192c.201.072.46.181.78.33l1.644-.87a.702.702 0 0 1 .832.131l1.446 1.495c.192.199.246.49.138.744l-.771 1.807c.128.235.23.436.308.604c.084.183.188.435.312.76l1.797.77c.27.115.437.385.419.674l-.132 2.075a.69.69 0 0 1-.46.605l-1.702.605c-.049.235-.1.436-.154.606a8.79 8.79 0 0 1-.298.774l.855 1.89a.683.683 0 0 1-.168.793l-1.626 1.452a.703.703 0 0 1-.796.096l-1.676-.888a7.23 7.23 0 0 1-.81.367l-.732.274l-.65 1.8a.696.696 0 0 1-.64.457L9.11 20a.697.697 0 0 1-.669-.447l-.766-2.027a14.625 14.625 0 0 1-.776-.29a9.987 9.987 0 0 1-.618-.293l-1.9.812a.702.702 0 0 1-.755-.133L2.22 16.303a.683.683 0 0 1-.155-.783l.817-1.78a9.517 9.517 0 0 1-.302-.644a14.395 14.395 0 0 1-.3-.811L.49 11.74a.69.69 0 0 1-.49-.683l.07-1.921a.688.688 0 0 1 .392-.594L2.34 7.64c.087-.319.163-.567.23-.748a8.99 8.99 0 0 1 .314-.712L2.07 4.46a.683.683 0 0 1 .15-.79l1.404-1.326a.702.702 0 0 1 .75-.138l1.898.784c.21-.14.4-.253.572-.344c.205-.109.479-.223.824-.346l.66-1.841A.696.696 0 0 1 8.984 0h2.094Zm-1.054 7.019c-1.667 0-3.018 1.335-3.018 2.983c0 1.648 1.351 2.984 3.018 2.984c1.666 0 3.017-1.336 3.017-2.984s-1.35-2.983-3.017-2.983Z"/>
          </svg>            
          Pengaturan
        </a>
        <!-- end link -->

        <div class="flex justify-center my-7">
          <hr class="w-[205px] items-center" />
        </div>

        <!-- link -->
        <a href="#" class="flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-black hover:text-[#0060FF] hover:bg-[#D5E6FB] focus:bg-[#D5E6FB] focus:text-[#0060FF] transition ease-in-out duration-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="mr-[13px]"><g fill="none" stroke="currentColor" stroke-width="2">
            <circle cx="12" cy="12" r="10"/><path stroke-linecap="round" d="M10 8.484C10.5 7.494 11 7 12 7c1.246 0 2 .989 2 1.978s-.5 1.483-2 2.473V13m0 3.5v.5"/></g>
          </svg>            
          Bantuan
        </a>
        <!-- end link -->

        <!-- link -->
        <button data-modal-toggle="popup-modal-logout" class="flex items-center text-lg py-[17px] px-9 rounded-lg font-medium text-[#FF5959] hover:text-[#FFF] hover:bg-[#FF5959] focus:bg-[#FFF] focus:text-[#FFF] transition ease-in-out duration-500">
          <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" preserveAspectRatio="xMidYMid meet" viewBox="0 0 24 24" class="mr-[13px]"><g fill="currentColor">
            <path fill-rule="evenodd" d="M11 20a1 1 0 0 0-1-1H5V5h5a1 1 0 1 0 0-2H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h5a1 1 0 0 0 1-1z" clip-rule="evenodd"/><path d="M21.714 12.7a.996.996 0 0 0 .286-.697v-.006a.997.997 0 0 0-.293-.704l-4-4a1 1 0 1 0-1.414 1.414L18.586 11H9a1 1 0 1 0 0 2h9.586l-2.293 2.293a1 1 0 0 0 1.414 1.414l4-4l.007-.007z"/></g>
          </svg>        
          Keluar
        </button>
        <!-- end link -->

      </div>

    </div>
    <!-- end sidebar content -->

  </div>
  <!-- end sidbar -->

<!-- Start of Logout Modal -->
<div id="popup-modal-logout" tabindex="-1" class="hidden overflow-y-auto overflow-x-hidden fixed top-0 right-0 left-0 z-50 md:inset-0 h-modal md:h-full">
  <div class="relative p-4 w-[617px] h-full md:h-auto">
      <div class="relative bg-white rounded-lg shadow dark:bg-gray-700">
          <button type="button" class="absolute top-3 right-2.5 text-gray-400 bg-transparent hover:bg-gray-200 hover:text-gray-900 rounded-lg text-sm p-1.5 ml-auto inline-flex items-center dark:hover:bg-gray-800 dark:hover:text-white" data-modal-toggle="popup-modal-logout">
              <svg aria-hidden="true" class="w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd"></path></svg>
              <span class="sr-only">Close modal</span>
          </button>
          <div class="py-6 px-8 text-center items-center flex flex-col">
              <img src="{{ asset('DashboardIcon/img/logout-more-logo.png') }}" alt="logout-logo" class="w-20 h-20">
              <h3 class="mb-2 text-2xl font-medium text-[#23262F] mt-4">Apakah anda yakin ingin keluar?</h3>
              <div class="flex flex-row mt-8 space-x-[16px]">
                <form action="{{ route('logout') }}" method="POST">
                  @csrf
                    <button data-modal-toggle="popup-modal-logout" type="submit" class="text-white bg-[#E53535] hover:bg-[#ac2828] focus:ring-4 focus:outline-none focus:ring-red-300 font-normal rounded-full text-base inline-flex items-center px-[92px] py-5 text-center cursor-pointer transition-all duration-500 ease-in-out">
                      Keluar
                    </button>
                  </form>
                  <button data-modal-toggle="popup-modal-logout" type="button" class="text-[#23262F] bg-[#F1F1F1] hover:bg-[#bebebe] focus:ring-4 focus:outline-none focus:ring-gray-200 rounded-full text-base font-normal px-[92px] py-5 focus:z-10 transition-all duration-500 ease-in-out">Batalkan</button>
              </div>
          </div>
      </div>
  </div>
</div>
<!-- End of Logout Modal -->