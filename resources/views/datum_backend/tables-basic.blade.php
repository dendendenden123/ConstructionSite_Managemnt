

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Datum | CRM Admin Dashboard Template</title>
      
      <!-- Favicon -->
      <link rel="shortcut icon" href="{{ asset('/datum_assets/images/favicon.ico')  }}" />
      
      <link rel="stylesheet" href="{{ asset('/datum_assets/css/backend-plugin.min.css')  }}">
      <link rel="stylesheet" href="{{ asset('/datum_assets/css/backend.css?v=1.0.0')  }}">  </head>
  <body class="  ">
    <!-- loader Start -->
    <div id="loading">
          <div id="loading-center">
          </div>
    </div>
    <!-- loader END -->
    <!-- Wrapper Start -->
    <div class="wrapper">
      <div class="iq-sidebar  sidebar-default  ">
          <div class="iq-sidebar-logo d-flex align-items-end justify-content-between">
               <a href="/admin" class="header-logo">
                  <img src="{{ asset('/datum_assets/images/logo.png') }}" class="img-fluid rounded-normal light-logo" alt="logo">
                  <img src="{{ asset('/datum_assets/images/logo-dark.png') }}" class="img-fluid rounded-normal d-none sidebar-light-img" alt="logo">
                  <span>Datum</span>            
              </a>
              <div class="side-menu-bt-sidebar-1">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-light wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
                      </svg>
                  </div>
          </div>
          <div class="data-scrollbar" data-scroll="1">
              <nav class="iq-sidebar-menu">
                  <ul id="iq-sidebar-toggle" class="side-menu">
                      <li class=" sidebar-layout">
                          <a href="/admin" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                                  </svg>
                              </i>
                              <span class="ml-2">Dashboard</span>
                              <p class="mb-0 w-10 badge badge-pill badge-primary">6</p>
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2">
                          <span class="text-uppercase small font-weight-bold">Pages</span>
                      </li>
                       <li class=" sidebar-layout">
                          <a href="/datum_app/user-profile.html" class="svg-icon">
                              <i class="">
                                  <svg class="svg-icon" id="iq-user-1-1" xmlns="http://www.w3.org/2000/svg"
                                      fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                          d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                              </i><span class="ml-2">User Profile</span>
                          </a>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z" />
                                  </svg>
                              </i>
                              <span class="ml-2">Authentication</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app1" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/auth-login.html" class="svg-icon">
                                      <i class=""><svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 11c0 3.517-1.009 6.799-2.753 9.571m-3.44-2.04l.054-.09A13.916 13.916 0 008 11a4 4 0 118 0c0 1.017-.07 2.019-.203 3m-2.118 6.844A21.88 21.88 0 0015.171 17m3.839 1.132c.645-2.266.99-4.659.99-7.132A8 8 0 008 4.07M3 15.364c.64-1.319 1-2.8 1-4.364 0-1.457.39-2.823 1.07-4" />
                                      </svg>
                                      </i><span class="">Login</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/auth-sign-up.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-6 9l2 2 4-4" />
                                          </svg>
                                      </i><span class="">Register</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/auth-recover-pwd.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15.232 5.232l3.536 3.536m-2.036-5.036a2.5 2.5 0 113.536 3.536L6.5 21.036H3v-3.572L16.732 3.732z" />
                                          </svg>
                                      </i><span class="">Reset Password</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/auth-confirm-mail.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                      </i><span class="">Confirm Mail</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/auth-lock-screen.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9.75 17L9 20l-1 1h8l-1-1-.75-3M3 13h18M5 17h14a2 2 0 002-2V5a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z" />
                                          </svg>
                                      </i><span class="">Lock Screen</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app6" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                  </svg>
                              </i>
                              <span class="ml-2">Error</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app6" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/pages-error.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 9v6m4-6v6m7-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Error 404</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/pages-error-500.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.364 5.636a9 9 0 010 12.728m0 0l-2.829-2.829m2.829 2.829L21 21M15.536 8.464a5 5 0 010 7.072m0 0l-2.829-2.829m-4.243 2.829a4.978 4.978 0 01-1.414-2.83m-1.414 5.658a9 9 0 01-2.167-9.238m7.824 2.167a1 1 0 111.414 1.414m-1.414-1.414L3 3m8.293 8.293l1.414 1.414" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Error 500</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="/datum_backend/pages-comingsoon.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19.428 15.428a2 2 0 00-1.022-.547l-2.387-.477a6 6 0 00-3.86.517l-.318.158a6 6 0 01-3.86.517L6.05 15.21a2 2 0 00-1.806.547M8 4h8l-1 1v5.172a2 2 0 00.586 1.414l5 5c1.26 1.26.367 3.414-1.415 3.414H4.828c-1.782 0-2.674-2.154-1.414-3.414l5-5A2 2 0 009 10.172V5L8 4z" />
                                  </svg>
                              </i><span class="ml-2">Comingsoon</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="/datum_backend/pages-maintenance.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6V4m0 2a2 2 0 100 4m0-4a2 2 0 110 4m-6 8a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4m6 6v10m6-2a2 2 0 100-4m0 4a2 2 0 110-4m0 4v2m0-6V4" />
                                  </svg>
                              </i><span class="ml-2">Maintenance</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="/datum_backend/pages-blank-page.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2" />
                                  </svg>
                              </i><span class="ml-2">Blank Page</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="/datum_backend/pages-faq.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 6H5a2 2 0 00-2 2v9a2 2 0 002 2h14a2 2 0 002-2V8a2 2 0 00-2-2h-5m-4 0V5a2 2 0 114 0v1m-4 0a2 2 0 104 0m-5 8a2 2 0 100-4 2 2 0 000 4zm0 0c1.306 0 2.417.835 2.83 2M9 14a3.001 3.001 0 00-2.83 2M15 11h3m-3 4h2" />
                                  </svg>
                              </i><span class="ml-2">Faq</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="/datum_backend/pricing.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8c-1.657 0-3 .895-3 2s1.343 2 3 2 3 .895 3 2-1.343 2-3 2m0-8c1.11 0 2.08.402 2.599 1M12 8V7m0 1v8m0 0v1m0-1c-1.11 0-2.08-.402-2.599-1M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                              </i><span class="ml-2">Pricing</span>
                          </a>
                      </li>
                       <li class=" sidebar-layout">
                          <a href="/datum_backend/timeline.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                  </svg>
                              </i><span class="ml-2">Timeline</span>
                          </a>
                      </li>
                      <li class="px-3 pt-3 pb-2">
                          <span class="text-uppercase small font-weight-bold">Components</span>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="iq-ui-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">UI Elements</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active"  width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app2" class="submenu collapse" data-parent="#iq-sidebar-toggle">                        
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-avatars.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-0" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Avatars</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-alerts.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 7h.01M7 3h5c.512 0 1.024.195 1.414.586l7 7a2 2 0 010 2.828l-7 7a2 2 0 01-2.828 0l-7-7A1.994 1.994 0 013 12V7a4 4 0 014-4z" style="stroke-dasharray: 56, 76; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Alerts</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-badges.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-2" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" style="stroke-dasharray: 74, 94; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Badges</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-breadcrumb.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-3" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" style="stroke-dasharray: 48, 68; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Breadcrumb</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-buttons.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="{2}" d="M15 5v2m0 4v2m0 4v2M5 5a2 2 0 00-2 2v3a2 2 0 110 4v3a2 2 0 002 2h14a2 2 0 002-2v-3a2 2 0 110-4V7a2 2 0 00-2-2H5z" style="stroke-dasharray: 72, 92; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Buttons</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-buttons-group.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-5" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Buttons Group</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-boxshadow.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-6" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" style="stroke-dasharray: 84, 104; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Box Shadow</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-colors.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-7" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 21a4 4 0 01-4-4V5a2 2 0 012-2h4a2 2 0 012 2v12a4 4 0 01-4 4zm0 0h12a2 2 0 002-2v-4a2 2 0 00-2-2h-2.343M11 7.343l1.657-1.657a2 2 0 012.828 0l2.829 2.829a2 2 0 010 2.828l-8.486 8.485M7 17h.01" style="stroke-dasharray: 97, 117; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Colors</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-cards.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-8" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M7 15h1m4 0h1m-7 4h12a3 3 0 003-3V8a3 3 0 00-3-3H6a3 3 0 00-3 3v8a3 3 0 003 3z" style="stroke-dasharray: 79, 99; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Cards</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-carousel.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-9" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 4v16M17 4v16M3 8h4m10 0h4M3 12h18M3 16h4m10 0h4M4 20h16a1 1 0 001-1V5a1 1 0 00-1-1H4a1 1 0 00-1 1v14a1 1 0 001 1z" style="stroke-dasharray: 133, 153; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Carousel</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-grid.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-10" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2V6zM14 6a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2V6zM4 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2H6a2 2 0 01-2-2v-2zM14 16a2 2 0 012-2h2a2 2 0 012 2v2a2 2 0 01-2 2h-2a2 2 0 01-2-2v-2z" style="stroke-dasharray: 83, 103; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Grid</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-images.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-12" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" style="stroke-dasharray: 85, 105; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Images</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-list-group.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 10h16M4 14h16M4 18h16" />
                                          </svg>
                                      </i><span class="">list Group</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-media-object.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-14" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" style="stroke-dasharray: 90, 110; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Media</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-modal.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-15" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                              <path d="M12 3h7a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2h-7m0-18H5a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h7m0-18v18" style="stroke-dasharray: 87, 107; stroke-dashoffset: 0;">
                                              </path>
                                          </svg>
                                      </i><span class="">Modal</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-notifications.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-16" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" style="stroke-dasharray: 63, 83; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Notifications</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-pagination.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-ui-1-17" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" style="stroke-dasharray: 19, 39; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Pagination</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-popovers.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 11l3-3m0 0l3 3m-3-3v8m0-13a9 9 0 110 18 9 9 0 010-18z" />
                                          </svg>
                                      </i><span class="">Popovers</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-progressbars.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10" />
                                          </svg>
                                      </i><span class="">Progressbars</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-typography.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-20" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v1m6 11h2m-6 0h-2v4m0-11v3m0 0h.01M12 12h4.01M16 20h4M4 12h4m12 0h.01M5 8h2a1 1 0 001-1V5a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1zm12 0h2a1 1 0 001-1V5a1 1 0 00-1-1h-2a1 1 0 00-1 1v2a1 1 0 001 1zM5 20h2a1 1 0 001-1v-2a1 1 0 00-1-1H5a1 1 0 00-1 1v2a1 1 0 001 1z" style="stroke-dasharray: 67, 87; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Typography</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-tabs.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-21" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" style="stroke-dasharray: 98, 118; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Tabs</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-tooltips.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6m2 8H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                          </svg>
                                      </i><span class="">Tooltips</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/ui-embed-video.html" class="svg-icon">
                                      <i class="">
                                          <svg class="svg-icon" id="iq-ui-1-23" xmlns="http://www.w3.org/2000/svg" fill="none" width="18" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 10l4.553-2.276A1 1 0 0121 8.618v6.764a1 1 0 01-1.447.894L15 14M5 18h8a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" style="stroke-dasharray: 66, 86; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i><span class="">Video</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app3" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg class="svg-icon" id="iq-form-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5H7a2 2 0 00-2 2v12a2 2 0 002 2h10a2 2 0 002-2V7a2 2 0 00-2-2h-2M9 5a2 2 0 002 2h2a2 2 0 002-2M9 5a2 2 0 012-2h2a2 2 0 012 2m-3 7h3m-3 4h3m-6-4h.01M9 16h.01" style="stroke-dasharray: 74, 94; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Forms</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app3" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="sidebar-layout">
                                  <a href="#form1" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-form-1-1" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 18h.01M7 21h10a2 2 0 002-2V5a2 2 0 00-2-2H7a2 2 0 00-2 2v14a2 2 0 002 2z" style="stroke-dasharray: 61, 81; stroke-dashoffset: 0;"></path>
                                          </svg>
                                      </i>
                                      <span class="">Form Control</span>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                      </svg>
                                  </a>
                                  <ul id="form1" class="submenu collapse" data-parent="#app3">
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-layout.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M20 7l-8-4-8 4m16 0l-8 4m8-4v10l-8 4m0-10L4 7m8 4v10M4 7v10l8 4" />
                                                  </svg>
                                              </i><span class="">Form Elements</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-input-group.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 13h6M3 17V7a2 2 0 012-2h6l2 2h6a2 2 0 012 2v8a2 2 0 01-2 2H5a2 2 0 01-2-2z" />
                                                  </svg>
                                              </i><span class="">Form Input</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">   
                                          <a href="/datum_backend/form-validation.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                                  </svg>
                                              </i><span class="">Form Validation</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-switch.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7h12m0 0l-4-4m4 4l-4 4m0 6H4m0 0l4 4m-4-4l4-4" />
                                                  </svg>
                                              </i><span class="">Form Switch</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-chechbox.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7" />
                                                  </svg>
                                              </i><span class="">Form Checkbox</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-radio.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                  </svg>
                                              </i><span class="">Form Radio</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-textarea.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                  </svg>
                                              </i><span class="">Form Textarea</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                              <li class="sidebar-layout">
                                  <a href="#form2" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                                      <i class="">
                                          <svg class="svg-icon" width="18" id="iq-user-1" xmlns="http://www.w3.org/2000/svg" fill="none"
                                              viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                                  d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z" />
                                          </svg>
                                      </i>
                                      <span class="">Form Widget</span>
                                      <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path>
                                      </svg>
                                  </a>
                                  <ul id="form2" class="submenu collapse" data-parent="#app3">
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-datepicker.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7V3m8 4V3m-9 8h10M5 21h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v12a2 2 0 002 2z" />
                                                  </svg>
                                              </i><span class="">Datepicker</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-select.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 15l-2 5L9 9l11 4-5 2zm0 0l5 5M7.188 2.239l.777 2.897M5.136 7.965l-2.898-.777M13.95 4.05l-2.122 2.122m-5.657 5.656l-2.12 2.122" />
                                                  </svg>
                                              </i><span class="">Select2</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-file-uploader.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12" />
                                                  </svg>
                                              </i><span class="">File Upload</span>
                                          </a>
                                      </li>
                                      <li class=" sidebar-layout">
                                          <a href="/datum_backend/form-quill.html" class="svg-icon">
                                              <i class="">
                                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12h6m-6 4h6m2 5H7a2 2 0 01-2-2V5a2 2 0 012-2h5.586a1 1 0 01.707.293l5.414 5.414a1 1 0 01.293.707V19a2 2 0 01-2 2z" />
                                                  </svg>
                                              </i><span class="">Form quill</span>
                                          </a>
                                      </li>
                                  </ul>
                              </li>
                          </ul>
                      </li>
                      <li class="sidebar-layout">
                          <a href="#app5" class="collapsed svg-icon" data-toggle="collapse" aria-expanded="false">
                              <i>
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h18M3 14h18m-9-4v8m-7 0h14a2 2 0 002-2V8a2 2 0 00-2-2H5a2 2 0 00-2 2v8a2 2 0 002 2z" />
                                  </svg>
                              </i>
                              <span class="ml-2">Table</span>
                              <svg xmlns="http://www.w3.org/2000/svg" class="svg-icon iq-arrow-right arrow-active" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                              </svg>
                          </a>
                          <ul id="app5" class="submenu collapse" data-parent="#iq-sidebar-toggle">
                              <li class="active sidebar-layout">
                                  <a href="/datum_backend/tables-basic.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 17V7m0 10a2 2 0 01-2 2H5a2 2 0 01-2-2V7a2 2 0 012-2h2a2 2 0 012 2m0 10a2 2 0 002 2h2a2 2 0 002-2M9 7a2 2 0 012-2h2a2 2 0 012 2m0 10V7m0 10a2 2 0 002 2h2a2 2 0 002-2V7a2 2 0 00-2-2h-2a2 2 0 00-2 2" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Basic Tables</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/table-data.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 7v10c0 2.21 3.582 4 8 4s8-1.79 8-4V7M4 7c0 2.21 3.582 4 8 4s8-1.79 8-4M4 7c0-2.21 3.582-4 8-4s8 1.79 8 4m0 5c0 2.21-3.582 4-8 4s-8-1.79-8-4" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Data Table</span>
                                  </a>
                              </li>
                              <li class=" sidebar-layout">
                                  <a href="/datum_backend/table-editable.html" class="svg-icon">
                                      <i class="">
                                          <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 7v8a2 2 0 002 2h6M8 7V5a2 2 0 012-2h4.586a1 1 0 01.707.293l4.414 4.414a1 1 0 01.293.707V15a2 2 0 01-2 2h-2M8 7H6a2 2 0 00-2 2v10a2 2 0 002 2h8a2 2 0 002-2v-2" />
                                          </svg>
                                      </i>
                                      <span class="ml-2">Editable Table</span>
                                  </a>
                              </li>
                          </ul>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="/datum_backend/chart-apex.html" class="svg-icon">
                              <i class="">
                                  <svg class="svg-icon" id="iq-chart-1" width="18" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 13v-1m4 1v-3m4 3V8M8 21l4-4 4 4M3 4h18M4 4h16v12a1 1 0 01-1 1H5a1 1 0 01-1-1V4z" style="stroke-dasharray: 96, 116; stroke-dashoffset: 0;"></path>
                                  </svg>
                              </i>
                              <span class="ml-2">Chart</span>
                          </a>
                      </li>
                      <li class=" sidebar-layout">
                          <a href="/datum_backend/icon-heroicon.html" class="svg-icon">
                              <i class="">
                                  <svg xmlns="http://www.w3.org/2000/svg" width="18" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                  <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 10l-2 1m0 0l-2-1m2 1v2.5M20 7l-2 1m2-1l-2-1m2 1v2.5M14 4l-2-1-2 1M4 7l2-1M4 7l2 1M4 7v2.5M12 21l-2-1m2 1l2-1m-2 1v-2.5M6 18l-2-1v-2.5M18 18l2-1v-2.5" />
                                  </svg>
                              </i>
                              <span class="ml-2">Icon</span>
                          </a>
                      </li>  
                  </ul>
              </nav>
              <div class="pt-5 pb-5"></div>
          </div>
      </div>
       <div class="iq-top-navbar">
          <div class="iq-navbar-custom">
              <nav class="navbar navbar-expand-lg navbar-light p-0">
                  <div class="side-menu-bt-sidebar">
                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary wrapper-menu" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                      </svg>
                  </div>
                  <div class="d-flex align-items-center">
                      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"  aria-label="Toggle navigation">
                          <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary" width="30" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16m-7 6h7" />
                          </svg>
                      </button>
                      <div class="collapse navbar-collapse" id="navbarSupportedContent">
                          <ul class="navbar-nav ml-auto navbar-list align-items-center">
                              <li class="nav-item nav-icon dropdown"> 
                                  <a href="#" class="search-toggle dropdown-toggle" id="notification-dropdown" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                      <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" class="h-6 w-6 text-secondary" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                                      </svg>
                                      <span class="bg-primary"></span>
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="notification-dropdown">
                                      <div class="card shadow-none m-0 border-0">
                                          <div class="p-3 card-header-border">
                                              <h6 class="text-center">
                                                  Notifications
                                              </h6>
                                          </div>
                                          <div class="card-body overflow-auto card-header-border p-0 card-body-list" style="max-height: 500px;">                                        
                                              <ul class="dropdown-menu-1 overflow-auto list-style-1 mb-0">
                                                  <li class="dropdown-item-1 float-none p-3">
                                                      <div class="list-item d-flex justify-content-start align-items-start">
                                                          <div class="avatar">
                                                              <div class="avatar-img avatar-danger avatar-20">
                                                                  <span>
                                                                      <svg class="icon line" width="30" height="30" id="cart-alt1" stroke="white" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24"><path d="M3,3H5.32a1,1,0,0,1,.93.63L10,13,8.72,15.55A1,1,0,0,0,9.62,17H19" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></path><polyline points="10 13 18.2 13 21 6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></polyline><line x1="20.8" y1="6" x2="7.2" y2="6" style="fill: none;stroke-linecap: round; stroke-linejoin: round; stroke-width: 2;"></line><circle cx="10.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle><circle cx="16.5" cy="20.5" r="0.5" style="fill: none;stroke-miterlimit: 10; stroke-width: 2;"></circle></svg>
                                                                  </span>
                                                              </div>
                                                          </div>
                                                          <div class="list-style-detail ml-2 mr-2">
                                                              <h6 class="font-weight-bold">Your order is placed</h6>
                                                              <p class="m-0">
                                                                  <small class="text-secondary">If several languages coalesce</small>
                                                              </p>
                                                              <p class="m-0">
                                                                  <small class="text-secondary">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                      </svg>
                                                                  3 hours ago</small>
                                                              </p>
                                                          </div>
                                                      </div>                                                
                                                  </li>
                                                   <li class="dropdown-item-1 float-none p-3">
                                                       <div class="list-item d-flex justify-content-start align-items-start">
                                                           <div class="avatar">
                                                              <div class="avatar-img avatar-success avatar-20">
                                                                  <span><img class="avatar is-squared rounded-circle" src="{{ asset('/datum_assets/images/user/2.jpg') }}" alt="2.jpg"></span>
                                                              </div>
                                                          </div>
                                                          <div class="list-style-detail ml-2 mr-2">
                                                              <h6 class="font-weight-bold">New message form cate</h6>
                                                              <p class="m-0">
                                                                  <small class="text-secondary">You have 3 unreded messages</small>
                                                              </p>
                                                              <p class="m-0">
                                                                  <small class="text-secondary">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                      </svg>
                                                                      5 hours ago</small>
                                                              </p>
                                                          </div>
                                                       </div>                                                
                                                  </li>
                                                   <li class="dropdown-item-1 float-none p-3">
                                                       <div class="list-item d-flex justify-content-start align-items-start">
                                                           <div class="avatar">
                                                              <div class="avatar-img avatar-warning avatar-20">
                                                              <span>
                                                                  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" width="30" height="30" stroke="white" id="Capa_1" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                                                  <g>
                                                                      <g>
                                                                          <path d="M386.689,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538    c35.593,0,64.538-28.951,64.538-64.538S422.276,304.403,386.689,304.403z M386.689,401.21c-17.796,0-32.269-14.473-32.269-32.269    c0-17.796,14.473-32.269,32.269-32.269c17.796,0,32.269,14.473,32.269,32.269C418.958,386.738,404.485,401.21,386.689,401.21z"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <path d="M166.185,304.403c-35.587,0-64.538,28.951-64.538,64.538s28.951,64.538,64.538,64.538s64.538-28.951,64.538-64.538    S201.772,304.403,166.185,304.403z M166.185,401.21c-17.796,0-32.269-14.473-32.269-32.269c0-17.796,14.473-32.269,32.269-32.269    c17.791,0,32.269,14.473,32.269,32.269C198.454,386.738,183.981,401.21,166.185,401.21z"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <path d="M430.15,119.675c-2.743-5.448-8.32-8.885-14.419-8.885h-84.975v32.269h75.025l43.934,87.384l28.838-14.5L430.15,119.675z"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <rect x="216.202" y="353.345" width="122.084" height="32.269"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <path d="M117.781,353.345H61.849c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h55.933    c8.912,0,16.134-7.223,16.134-16.134C133.916,360.567,126.693,353.345,117.781,353.345z"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <path d="M508.612,254.709l-31.736-40.874c-3.049-3.937-7.755-6.239-12.741-6.239H346.891V94.655    c0-8.912-7.223-16.134-16.134-16.134H61.849c-8.912,0-16.134,7.223-16.134,16.134s7.223,16.134,16.134,16.134h252.773v112.941    c0,8.912,7.223,16.134,16.134,16.134h125.478l23.497,30.268v83.211h-44.639c-8.912,0-16.134,7.223-16.134,16.134    c0,8.912,7.223,16.134,16.134,16.134h60.773c8.912,0,16.134-7.223,16.135-16.134V264.605    C512,261.023,510.806,257.538,508.612,254.709z"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <path d="M116.706,271.597H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h74.218    c8.912,0,16.134-7.223,16.134-16.134C132.84,278.82,125.617,271.597,116.706,271.597z"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <path d="M153.815,208.134H16.134C7.223,208.134,0,215.357,0,224.269s7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134S162.727,208.134,153.815,208.134z"/>
                                                                      </g>
                                                                  </g>
                                                                  <g>
                                                                      <g>
                                                                          <path d="M180.168,144.672H42.487c-8.912,0-16.134,7.223-16.134,16.134c0,8.912,7.223,16.134,16.134,16.134h137.681    c8.912,0,16.134-7.223,16.134-16.134C196.303,151.895,189.08,144.672,180.168,144.672z"/>
                                                                      </g>
                                                                  </g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g><g></g> </svg>
                                                              </span>
                                                              </div>
                                                          </div>
                                                          <div class="list-style-detail ml-2 mr-2">
                                                              <h6 class="font-weight-bold">Your item is shipped</h6>
                                                              <p class="m-0">
                                                                  <small class="text-secondary">You got new order of goods</small>
                                                              </p>
                                                              <p class="m-0">
                                                                  <small class="text-secondary">
                                                                      <svg xmlns="http://www.w3.org/2000/svg" class="text-secondary mr-1" width="15" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                                                      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z" />
                                                                      </svg>
                                                                      5 hours ago</small>
                                                              </p>
                                                          </div>
                                                       </div>                                                
                                                  </li>
                                              </ul>
                                          </div>
                                          <div class="card-footer text-muted p-3">
                                              <p class="mb-0 text-primary text-center font-weight-bold">Show all notifications</p>
                                          </div>
                                      </div>
                                  </div>
                              </li>                        
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="search-toggle dropdown-toggle" id="dropdownMenuButton2" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                  <img src="{{ asset('/datum_assets/images/Flag/flag001.png') }}" class="img-fluid rounded-circle" alt="user" style="height: 30px; min-width: 30px; width: 30px;">
                                  <span class="bg-primary"></span>
                                  </a>
                                  <div class="iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownMenuButton2">
                                      <div class="card shadow-none m-0 border-0">
                                          <div class=" p-0 ">
                                              <ul class="dropdown-menu-1 list-group list-group-flush">
                                                  <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{ asset('/datum_assets/images/Flag/flag-03.png') }}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>Spanish</a></li>
                                                  <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{ asset('/datum_assets/images/Flag/flag-04.png') }}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>Italian</a></li>
                                                  <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{ asset('/datum_assets/images/Flag/flag-02.png') }}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>French</a></li>
                                                  <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{ asset('/datum_assets/images/Flag/flag-05.png') }}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>German</a></li>
                                                  <li class="dropdown-item-1 list-group-item  px-2"><a class="p-0" href="#"><img src="{{ asset('/datum_assets/images/Flag/flag-06.png') }}" alt="img-flaf" class="img-fluid mr-2" style="width: 15px;height: 15px;min-width: 15px;"/>Japanese</a></li>
                                              </ul>
                                          </div>
                                      </div>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon search-content">
                                  <a href="#" class="search-toggle rounded" id="dropdownSearch" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                      <svg class="svg-icon text-secondary" id="h-suns" height="25" width="25" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                          <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                      </svg>
                                  </a>
                                  <div class="iq-search-bar iq-sub-dropdown dropdown-menu" aria-labelledby="dropdownSearch">
                                      <form action="#" class="searchbox p-2">
                                          <div class="form-group mb-0 position-relative">
                                          <input type="text" class="text search-input font-size-12" placeholder="type here to search...">
                                          <a href="#" class="search-link">
                                              <svg xmlns="http://www.w3.org/2000/svg" class="" width="20" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z" />
                                              </svg>
                                          </a> 
                                          </div>
                                      </form>
                                  </div>
                              </li>
                              <li class="nav-item nav-icon dropdown">
                                  <a href="#" class="nav-item nav-icon dropdown-toggle pr-0 search-toggle" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" >
                                      <img src="{{ asset('/datum_assets/images/user/1.jpg') }}" class="img-fluid avatar-rounded" alt="user">
                                      <span class="mb-0 ml-2 user-name">John Doe</span>
                                  </a>
                                  <ul class="dropdown-menu dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-01-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                          </svg>
                                          <a href="/datum_app/user-profile.html">My Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-02-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z" />
                                          </svg>
                                          <a href="/datum_app/user-profile-edit.html">Edit Profile</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-03-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10.325 4.317c.426-1.756 2.924-1.756 3.35 0a1.724 1.724 0 002.573 1.066c1.543-.94 3.31.826 2.37 2.37a1.724 1.724 0 001.065 2.572c1.756.426 1.756 2.924 0 3.35a1.724 1.724 0 00-1.066 2.573c.94 1.543-.826 3.31-2.37 2.37a1.724 1.724 0 00-2.572 1.065c-.426 1.756-2.924 1.756-3.35 0a1.724 1.724 0 00-2.573-1.066c-1.543.94-3.31-.826-2.37-2.37a1.724 1.724 0 00-1.065-2.572c-1.756-.426-1.756-2.924 0-3.35a1.724 1.724 0 001.066-2.573c-.94-1.543.826-3.31 2.37-2.37.996.608 2.296.07 2.572-1.065z" />
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 12a3 3 0 11-6 0 3 3 0 016 0z" />
                                          </svg>
                                          <a href="/datum_app/user-account-setting.html">Account Settings</a>
                                      </li>
                                      <li class="dropdown-item d-flex svg-icon">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-04-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z" />
                                          </svg>
                                          <a href="/datum_app/user-privacy-setting.html">Privacy Settings</a>
                                      </li>
                                      <li class="dropdown-item  d-flex svg-icon border-top">
                                          <svg class="svg-icon mr-0 text-secondary" id="h-05-p" width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                          </svg>
                                          <form method="POST" action="/logout"> @csrf <button type="submit">Logout</button> </form>
                                      </li>
                                  </ul>
                              </li>
                          </ul>                     
                      </div> 
                  </div>
              </nav>
          </div>
      </div>
      <div class="content-page">
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-12">
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Tables</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-1" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-1">
                           <div class="card"><kbd class="bg-dark"><pre id="tables" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
&#x3C;thead&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
      &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
   &#x3C;/tr&#x3E;
&#x3C;/thead&#x3E;
&#x3C;tbody&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
      &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
      &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
      &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
      &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
      &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
   &#x3C;tr&#x3E;
      &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
      &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
      &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
      &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
   &#x3C;/tr&#x3E;
&#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>The <code>.table </code> class adds basic styling to a table.</p>
                     <table class="table">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Table Head Options</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-2" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-2">
                           <div class="card"><kbd class="bg-dark"><pre id="tables-head" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead class=&#x22;thead-dark&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead class=&#x22;thead-light&#x22;&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Similar to tables and dark tables, use the modifier classes <code class="highlighter-rouge">.thead-light</code> or <code class="highlighter-rouge">.thead-dark</code> to make <code class="highlighter-rouge">&lt;thead&gt;</code>s appear light or dark gray.</p>
                     <table class="table">
                        <thead class="thead-dark">
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table">
                        <thead class="thead-light">
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Borderless table</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-3" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-3">
                           <div class="card"><kbd class="bg-dark"><pre id="borderless-tables" class="text-white"><code>
&#x3C;table class=&#x22;table table-borderless&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Add <code class="highlighter-rouge">.table-borderless</code> for a table without borders.</p>
                     <table class="table table-borderless">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <p><code class="highlighter-rouge">.table-borderless</code> can also be used on dark tables.</p>
                     <table class="table table-borderless table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Small table</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-4" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-4">
                           <div class="card"><kbd class="bg-dark"><pre id="small-tables" class="text-white"><code>
&#x3C;table class=&#x22;table table-sm&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table table-sm table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Add <code class="highlighter-rouge">.table-sm</code> to make tables more compact by cutting cell padding in half.</p>
                     <table class="table table-sm">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-sm table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Captions</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-5" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-5">
                           <div class="card"><kbd class="bg-dark"><pre id="captions" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>A <code class="highlighter-rouge">&lt;caption&gt;</code> functions like a heading for a table. It helps users with screen readers to find a table and understand what it’s about and decide if they want to read it.</p>
                     <table class="table">
                        
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
            
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Table Dark</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-6" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-6">
                           <div class="card"><kbd class="bg-dark"><pre id="table-dark" class="text-white"><code>
&#x3C;table class=&#x22;table table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>You can also invert the colors—with light text on dark backgrounds—with <code class="highlighter-rouge">.table-dark</code>.</p>
                     <table class="table table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Striped Rows</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-7" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-7">
                           <div class="card"><kbd class="bg-dark"><pre id="striped-rows" class="text-white"><code>
&#x3C;table class=&#x22;table table-striped&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table table-striped table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Larry&#x3C;/td&#x3E;
         &#x3C;td&#x3E;the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Use <code class="highlighter-rouge">.table-striped</code> to add zebra-striping to any table row within the <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                     <table class="table table-striped">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-striped table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td>Larry</td>
                              <td>the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Hoverable rows</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-8" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-8">
                           <div class="card"><kbd class="bg-dark"><pre id="tables" class="text-white"><code>
&#x3C;table class=&#x22;table table-hover&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
&#x3C;table class=&#x22;table table-hover table-dark&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;First&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Last&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Handle&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Mark&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Otto&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@mdo&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Jacob&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Thornton&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@fat&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td colspan=&#x22;2&#x22;&#x3E;Larry the Bird&#x3C;/td&#x3E;
         &#x3C;td&#x3E;@twitter&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Add <code class="highlighter-rouge">.table-hover</code> to enable a hover state on table rows within a <code class="highlighter-rouge">&lt;tbody&gt;</code>.</p>
                     <table class="table table-hover">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                     <table class="table table-hover table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">First</th>
                              <th scope="col">Last</th>
                              <th scope="col">Handle</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr>
                              <th scope="row">1</th>
                              <td>Mark</td>
                              <td>Otto</td>
                              <td>@mdo</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Jacob</td>
                              <td>Thornton</td>
                              <td>@fat</td>
                           </tr>
                           <tr>
                              <th scope="row">3</th>
                              <td colspan="2">Larry the Bird</td>
                              <td>@twitter</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Contextual classes</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-9" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-9">
                           <div class="card"><kbd class="bg-dark"><pre id="contextual-classes" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Class&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr class=&#x22;table-active&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Active&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Default&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-primary&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Primary&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-secondary&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Secondary&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-success&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Success&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-danger&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Danger&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-warning&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Warning&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr class=&#x22;table-info&#x22;&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;Info&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Use contextual classes to color table rows or individual cells.</p>
                     <table class="table">
                        <thead>
                           <tr>
                              <th scope="col">Class</th>
                              <th scope="col">Heading</th>
                              <th scope="col">Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="table-active">
                              <th scope="row">Active</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">Default</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-primary">
                              <th scope="row">Primary</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-secondary">
                              <th scope="row">Secondary</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-success">
                              <th scope="row">Success</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-danger">
                              <th scope="row">Danger</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-warning">
                              <th scope="row">Warning</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="table-info">
                              <th scope="row">Info</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                     <p>Regular table background variants are not available with the dark table, however, you may use <a href="https://getbootstrap.com/" target="_blank">text or background utilities</a> to achieve similar styles.</p>
                     <table class="table table-dark">
                        <thead>
                           <tr>
                              <th scope="col">#</th>
                              <th scope="col">Heading</th>
                              <th scope="col">Heading</th>
                           </tr>
                        </thead>
                        <tbody>
                           <tr class="bg-primary">
                              <th scope="row">1</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">2</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-success">
                              <th scope="row">3</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">4</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-info">
                              <th scope="row">5</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">6</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-warning">
                              <th scope="row">7</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr>
                              <th scope="row">8</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                           <tr class="bg-danger">
                              <th scope="row">9</th>
                              <td>Cell</td>
                              <td>Cell</td>
                           </tr>
                        </tbody>
                     </table>
                  </div>
               </div>
               
               <div class="card">
                  <div class="card-header d-flex justify-content-between">
                     <div class="header-title">
                        <h4 class="card-title">Responsive tables</h4>
                     </div>
                  <div class="header-action">
                           <i data-toggle="collapse" data-target="#table-10" aria-expanded="false">
                              <svg width="20" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                 <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 20l4-16m4 4l4 4-4 4M6 16l-4-4 4-4" />
                              </svg>
                           </i>
                        </div>
                  </div>
                  <div class="card-body">
                     <div class="collapse" id="table-10">
                           <div class="card"><kbd class="bg-dark"><pre id="responsive-tables" class="text-white"><code>
&#x3C;table class=&#x22;table&#x22;&#x3E;
   &#x3C;thead&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;#&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
         &#x3C;th scope=&#x22;col&#x22;&#x3E;Heading&#x3C;/th&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/thead&#x3E;
   &#x3C;tbody&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;1&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;2&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
      &#x3C;tr&#x3E;
         &#x3C;th scope=&#x22;row&#x22;&#x3E;3&#x3C;/th&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
         &#x3C;td&#x3E;Cell&#x3C;/td&#x3E;
      &#x3C;/tr&#x3E;
   &#x3C;/tbody&#x3E;
&#x3C;/table&#x3E;
</code></pre></kbd></div>
                        </div>
                     <p>Responsive tables allow tables to be scrolled horizontally with ease. Make any table responsive across all viewports by wrapping a <code class="highlighter-rouge">.table</code> with <code class="highlighter-rouge">.table-responsive</code>. Or, pick a maximum breakpoint with which to have a responsive table up to by using <code class="highlighter-rouge">.table-responsive{-sm|-md|-lg|-xl}</code>.</p>
                     <div class="table-responsive">
                        <table class="table">
                           <thead>
                              <tr>
                                 <th scope="col">#</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                                 <th scope="col">Heading</th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <th scope="row">1</th>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                              </tr>
                              <tr>
                                 <th scope="row">2</th>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                              </tr>
                              <tr>
                                 <th scope="row">3</th>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                                 <td>Cell</td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      </div>
    </div>
    <!-- Wrapper End-->
    <footer class="iq-footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-6">
                    <ul class="list-inline mb-0">
                        <li class="list-inline-item"><a href="/datum_backend/privacy-policy.html">Privacy Policy</a></li>
                        <li class="list-inline-item"><a href="/datum_backend/terms-of-service.html">Terms of Use</a></li>
                    </ul>
                </div>
                <div class="col-lg-6 text-right">
                    <span class="mr-1">
                        Copyright
                        <script>document.write(new Date().getFullYear())</script>© <a href="#" class="">Datum</a>
                        All Rights Reserved.
                    </span>
                </div>
            </div>
        </div>
    </footer>    <!-- Backend Bundle JavaScript -->
    <script src="{{ asset('/datum_assets/js/backend-bundle.min.js') }}"></script>
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('/datum_assets/js/customizer.js') }}"></script>
    
    <script src="{{ asset('/datum_assets/js/sidebar.js') }}"></script>
    
    <!-- Flextree Javascript-->
    <script src="{{ asset('/datum_assets/js/flex-tree.min.js') }}"></script>
    <script src="{{ asset('/datum_assets/js/tree.js') }}"></script>
    
    <!-- Table Treeview JavaScript -->
    <script src="{{ asset('/datum_assets/js/table-treeview.js') }}"></script>
    
    <!-- SweetAlert JavaScript -->
    <script src="{{ asset('/datum_assets/js/sweetalert.js') }}"></script>
    
    <!-- Vectoe Map JavaScript -->
    <script src="{{ asset('/datum_assets/js/vector-map-custom.js') }}"></script>
    
    <!-- Chart Custom JavaScript -->
    <script src="{{ asset('/datum_assets/js/chart-custom.js') }}"></script>
    <script src="{{ asset('/datum_assets/js/charts/01.js') }}"></script>
    <script src="{{ asset('/datum_assets/js/charts/02.js') }}"></script>
    
    <!-- slider JavaScript -->
    <script src="{{ asset('/datum_assets/js/slider.js') }}"></script>
    
    <!-- Emoji picker -->
    <script src="{{ asset('/datum_assets/vendor/emoji-picker-element/index.js') }}" type="module"></script>
    
    
    <!-- app JavaScript -->
    <script src="{{ asset('/datum_assets/js/app.js') }}"></script>  </body>
</html>