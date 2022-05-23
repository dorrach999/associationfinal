<style>
    /* 
---------------------------------------------
header
--------------------------------------------- 
*/

.background-header {
    background-color: #fed6f7;
    height: 80px!important;
    position: fixed!important;
    top: 0px;
    left: 0px;
    right: 0px;
    box-shadow: 0px 0px 10px rgba(0,0,0,0.15)!important;
  }
  
  .background-header .logo,
  .background-header .main-nav .nav li a {
    color: #1e1e1e!important;
  }
  
  .background-header .main-nav .nav li:hover a {
    color: #db4cb4!important;
  }
  
  .background-header .nav li a.active {
    color: #db4cb4!important;
  }
  
  .header-area {
    background-color: #fff;
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    z-index: 100;
    height: 100px;
    -webkit-transition: all .5s ease 0s;
    -moz-transition: all .5s ease 0s;
    -o-transition: all .5s ease 0s;
    transition: all .5s ease 0s;
  }
  
  .header-area .main-nav {
    min-height: 80px;
    background: transparent;
  }
  
  .header-area .main-nav .logo {
    line-height: 100px;
    color: #fff;
    font-size: 28px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 2px;
    float: left;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
  }
  
  .background-header .main-nav .logo {
    line-height: 75px;
  }
  
  .background-header .nav {
    margin-top: 20px !important;
  }
  
  .header-area .main-nav .nav {
    float: right;
    margin-top: 30px;
    margin-right: 0px;
    background-color: transparent;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    z-index: 999;
  }
  
  .header-area .main-nav .nav li {
    padding-left: 15px;
    padding-right: 15px;
  }
  
  .header-area .main-nav .nav li:last-child {
    padding-right: 0px;
  }
  
  .header-area .main-nav .nav li a {
    display: block;
    font-weight: 600;
    font-size: 15px;
    color: #2a2a2a;
    text-transform: capitalize;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    height: 40px;
    line-height: 40px;
    border: transparent;
    letter-spacing: 1px;
  }
  
  .header-area .main-nav .nav li a {
    color: #2a2a2a;
  }
  
  .header-area .main-nav .nav li:hover a,
  .header-area .main-nav .nav li a.active {
    color: #db4cb4!important;
  }
  
  .background-header .main-nav .nav li:hover a,
  .background-header .main-nav .nav li a.active {
    color: #db4cb4!important;
    opacity: 1;
  }
  
  .header-area .main-nav .nav li.submenu {
    position: relative;
    padding-right: 30px;
  }
  
  .header-area .main-nav .nav li.submenu:after {
    font-family: FontAwesome;
    content: "\f107";
    font-size: 12px;
    color: #2a2a2a;
    position: absolute;
    right: 18px;
    top: 12px;
  }
  
  .background-header .main-nav .nav li.submenu:after {
    color: #2a2a2a;
  }
  
  .header-area .main-nav .nav li.submenu ul {
    position: absolute;
    width: 200px;
    box-shadow: 0 2px 28px 0 rgba(0, 0, 0, 0.06);
    overflow: hidden;
    top: 50px;
    opacity: 0;
    transform: translateY(+2em);
    visibility: hidden;
    z-index: -1;
    transition: all 0.3s ease-in-out 0s, visibility 0s linear 0.3s, z-index 0s linear 0.01s;
  }
  
  .header-area .main-nav .nav li.submenu ul li {
    margin-left: 0px;
    padding-left: 0px;
    padding-right: 0px;
  }
  
  .header-area .main-nav .nav li.submenu ul li a {
    opacity: 1;
    display: block;
    background: #f7f7f7;
    color: #2a2a2a!important;
    padding-left: 20px;
    height: 40px;
    line-height: 40px;
    -webkit-transition: all 0.3s ease 0s;
    -moz-transition: all 0.3s ease 0s;
    -o-transition: all 0.3s ease 0s;
    transition: all 0.3s ease 0s;
    position: relative;
    font-size: 13px;
    font-weight: 400;
    border-bottom: 1px solid #eee;
  }
  
  .header-area .main-nav .nav li.submenu ul li a:hover {
    background: #fff;
    color: #db4cb4!important;
    padding-left: 25px;
  }
  
  .header-area .main-nav .nav li.submenu ul li a:hover:before {
    width: 3px;
  }
  
  .header-area .main-nav .nav li.submenu:hover ul {
    visibility: visible;
    opacity: 1;
    z-index: 1;
    transform: translateY(0%);
    transition-delay: 0s, 0s, 0.3s;
  }
  
  .header-area .main-nav .menu-trigger {
    cursor: pointer;
    display: block;
    position: absolute;
    top: 33px;
    width: 32px;
    height: 40px;
    text-indent: -9999em;
    z-index: 99;
    right: 40px;
    display: none;
  }
  
  .background-header .main-nav .menu-trigger {
    top: 23px;
  }
  
  .header-area .main-nav .menu-trigger span,
  .header-area .main-nav .menu-trigger span:before,
  .header-area .main-nav .menu-trigger span:after {
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    background-color: #1e1e1e;
    display: block;
    position: absolute;
    width: 30px;
    height: 2px;
    left: 0;
  }
  
  .background-header .main-nav .menu-trigger span,
  .background-header .main-nav .menu-trigger span:before,
  .background-header .main-nav .menu-trigger span:after {
    background-color: #1e1e1e;
  }
  
  .header-area .main-nav .menu-trigger span:before,
  .header-area .main-nav .menu-trigger span:after {
    -moz-transition: all 0.4s;
    -o-transition: all 0.4s;
    -webkit-transition: all 0.4s;
    transition: all 0.4s;
    background-color: #1e1e1e;
    display: block;
    position: absolute;
    width: 30px;
    height: 2px;
    left: 0;
    width: 75%;
  }
  
  .background-header .main-nav .menu-trigger span:before,
  .background-header .main-nav .menu-trigger span:after {
    background-color: #1e1e1e;
  }
  
  .header-area .main-nav .menu-trigger span:before,
  .header-area .main-nav .menu-trigger span:after {
    content: "";
  }
  
  .header-area .main-nav .menu-trigger span {
    top: 16px;
  }
  
  .header-area .main-nav .menu-trigger span:before {
    -moz-transform-origin: 33% 100%;
    -ms-transform-origin: 33% 100%;
    -webkit-transform-origin: 33% 100%;
    transform-origin: 33% 100%;
    top: -10px;
    z-index: 10;
  }
  
  .header-area .main-nav .menu-trigger span:after {
    -moz-transform-origin: 33% 0;
    -ms-transform-origin: 33% 0;
    -webkit-transform-origin: 33% 0;
    transform-origin: 33% 0;
    top: 10px;
  }
  
  .header-area .main-nav .menu-trigger.active span,
  .header-area .main-nav .menu-trigger.active span:before,
  .header-area .main-nav .menu-trigger.active span:after {
    background-color: transparent;
    width: 100%;
  }
  
  .header-area .main-nav .menu-trigger.active span:before {
    -moz-transform: translateY(6px) translateX(1px) rotate(45deg);
    -ms-transform: translateY(6px) translateX(1px) rotate(45deg);
    -webkit-transform: translateY(6px) translateX(1px) rotate(45deg);
    transform: translateY(6px) translateX(1px) rotate(45deg);
    background-color: #1e1e1e;
  }
  
  .background-header .main-nav .menu-trigger.active span:before {
    background-color: #1e1e1e;
  }
  
  .header-area .main-nav .menu-trigger.active span:after {
    -moz-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    -ms-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    -webkit-transform: translateY(-6px) translateX(1px) rotate(-45deg);
    transform: translateY(-6px) translateX(1px) rotate(-45deg);
    background-color: #1e1e1e;
  }
  
  .background-header .main-nav .menu-trigger.active span:after {
    background-color: #1e1e1e;
  }
  
  .header-area.header-sticky {
    min-height: 80px;
  }
  
  .header-area .nav {
    margin-top: 30px;
  }
  
  .header-area.header-sticky .nav li a.active {
    color: #db4cb4;
  }
  
  @media (max-width: 1200px) {
    .header-area .main-nav .nav li {
      padding-left: 12px;
      padding-right: 12px;
    }
    .header-area .main-nav:before {
      display: none;
    }
  }
  
  @media (max-width: 767px) {
    .header-area .main-nav .logo {
      color: #1e1e1e;
    }
    .header-area.header-sticky .nav li a:hover,
    .header-area.header-sticky .nav li a.active {
      color: #db4cb4!important;
      opacity: 1;
    }
    .header-area.header-sticky .nav li.search-icon a {
      width: 100%;
    }
    .header-area {
      background-color: #f7f7f7;
      padding: 0px 15px;
      height: 100px;
      box-shadow: none;
      text-align: center;
    }
    .header-area .container {
      padding: 0px;
    }
    .header-area .logo {
      margin-left: 30px;
    }
    .header-area .menu-trigger {
      display: block !important;
    }
    .header-area .main-nav {
      overflow: hidden;
    }
    .header-area .main-nav .nav {
      float: none;
      width: 100%;
      display: none;
      -webkit-transition: all 0s ease 0s;
      -moz-transition: all 0s ease 0s;
      -o-transition: all 0s ease 0s;
      transition: all 0s ease 0s;
      margin-left: 0px;
    }
    .header-area .main-nav .nav li:first-child {
      border-top: 1px solid #eee;
    }
    .header-area.header-sticky .nav {
      margin-top: 100px !important;
    }
    .header-area .main-nav .nav li {
      width: 100%;
      background: #fff;
      border-bottom: 1px solid #eee;
      padding-left: 0px !important;
      padding-right: 0px !important;
    }
    .header-area .main-nav .nav li a {
      height: 50px !important;
      line-height: 50px !important;
      padding: 0px !important;
      border: none !important;
      background: #f7f7f7 !important;
      color: #191a20 !important;
    }
    .header-area .main-nav .nav li a:hover {
      background: #eee !important;
      color: #db4cb4!important;
    }
    .header-area .main-nav .nav li.submenu ul {
      position: relative;
      visibility: inherit;
      opacity: 1;
      z-index: 1;
      transform: translateY(0%);
      transition-delay: 0s, 0s, 0.3s;
      top: 0px;
      width: 100%;
      box-shadow: none;
      height: 0px;
    }
    .header-area .main-nav .nav li.submenu ul li a {
      font-size: 12px;
      font-weight: 400;
    }
    .header-area .main-nav .nav li.submenu ul li a:hover:before {
      width: 0px;
    }
    .header-area .main-nav .nav li.submenu ul.active {
      height: auto !important;
    }
    .header-area .main-nav .nav li.submenu:after {
      color: #3B566E;
      right: 25px;
      font-size: 14px;
      top: 15px;
    }
    .header-area .main-nav .nav li.submenu:hover ul, .header-area .main-nav .nav li.submenu:focus ul {
      height: 0px;
    }
  }
  
  @media (min-width: 767px) {
    .header-area .main-nav .nav {
      display: flex !important;
    }
  }
  
  </style>
<header class="header-area header-sticky" style="background-color:#fed6f7 ;">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav" >
                        <!-- ***** Logo Start ***** -->
                        <a href="#" class="logo">
                            <img  style= "height:2.2em; width:6em ;margin-left:2em;margin-top:10px; " src="admin/assets/images/cancer.png" >
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav" style="margin-left:-5em; ">
                        
                            
                            <li>
                                @if (Route::has('login'))
                                <div class="" >
                                    @auth
                                        <li >
                                            <x-app-layout >
    
                                            </x-app-layout>
                                        </li>
                                    @else
                                        <li><a id ="bt" href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline" style="margin-left:-2em ;margin-right:-2em ;" >Se connecter</a></li>
                
                                        @if (Route::has('register'))
                                            <li><a id ="bt" href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline" >S'inscrire</a></li>
                                        @endif
                                    @endauth
                                </div>
                            @endif
                            </li>
                            
                        </ul>        
                        {{-- <a class='menu-trigger'>
                            <span>Menu</span>
                        </a> --}}
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->