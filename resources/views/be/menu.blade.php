<div class="collapse navbar-collapse  w-auto " id="sidenav-collapse-main">
  <ul class="navbar-nav">
    <li class="nav-item">
      <a class="nav-link @if ($tittle === 'Dashboard') active  @endif" href="{{ route('dashboard.index') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg width="12px" height="12px" viewBox="0 0 45 40" version="1.1" xmlns="http://www.w3.org/2000/svg"
            xmlns:xlink="http://www.w3.org/1999/xlink">
            <title>shop </title>
            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
              <g transform="translate(-1716.000000, -439.000000)" fill="#FFFFFF" fill-rule="nonzero">
                <g transform="translate(1716.000000, 291.000000)">
                  <g transform="translate(0.000000, 148.000000)">
                    <path class="color-background opacity-6"
                      d="M46.7199583,10.7414583 L40.8449583,0.949791667 C40.4909749,0.360605034 39.8540131,0 39.1666667,0 L7.83333333,0 C7.1459869,0 6.50902508,0.360605034 6.15504167,0.949791667 L0.280041667,10.7414583 C0.0969176761,11.0460037 -1.23209662e-05,11.3946378 -1.23209662e-05,11.75 C-0.00758042603,16.0663731 3.48367543,19.5725301 7.80004167,19.5833333 L7.81570833,19.5833333 C9.75003686,19.5882688 11.6168794,18.8726691 13.0522917,17.5760417 C16.0171492,20.2556967 20.5292675,20.2556967 23.494125,17.5760417 C26.4604562,20.2616016 30.9794188,20.2616016 33.94575,17.5760417 C36.2421905,19.6477597 39.5441143,20.1708521 42.3684437,18.9103691 C45.1927731,17.649886 47.0084685,14.8428276 47.0000295,11.75 C47.0000295,11.3946378 46.9030823,11.0460037 46.7199583,10.7414583 Z">
                    </path>
                    <path class="color-background"
                      d="M39.198,22.4912623 C37.3776246,22.4928106 35.5817531,22.0149171 33.951625,21.0951667 L33.92225,21.1107282 C31.1430221,22.6838032 27.9255001,22.9318916 24.9844167,21.7998837 C24.4750389,21.605469 23.9777983,21.3722567 23.4960833,21.1018359 L23.4745417,21.1129513 C20.6961809,22.6871153 17.4786145,22.9344611 14.5386667,21.7998837 C14.029926,21.6054643 13.533337,21.3722507 13.0522917,21.1018359 C11.4250962,22.0190609 9.63246555,22.4947009 7.81570833,22.4912623 C7.16510551,22.4842162 6.51607673,22.4173045 5.875,22.2911849 L5.875,44.7220845 C5.875,45.9498589 6.7517757,46.9451667 7.83333333,46.9451667 L19.5833333,46.9451667 L19.5833333,33.6066734 L27.4166667,33.6066734 L27.4166667,46.9451667 L39.1666667,46.9451667 C40.2482243,46.9451667 41.125,45.9498589 41.125,44.7220845 L41.125,22.2822926 C40.4887822,22.4116582 39.8442868,22.4815492 39.198,22.4912623 Z">
                    </path>
                  </g>
                </g>
              </g>
            </g>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Dashboard</span>
      </a>
    </li>

    <!-- Menu Awal Client -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/tables.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <path
              d="M2.744,6.887c-.272,0-.534-.148-.667-.407-.189-.369-.044-.821,.324-1.01l1.922-1.84c.422-.406,.976-.63,1.562-.63h1.458c.71,0,1.386,.341,1.808,.911l.232,.313c.246,.333,.176,.803-.157,1.049-.332,.246-.802,.177-1.049-.157l-.231-.313c-.141-.189-.366-.303-.603-.303h-1.458c-.195,0-.38,.075-.521,.21l-1.867,1.8c-.124,.119-.261,.217-.41,.293-.11,.056-.227,.083-.343,.083Z"
              fill="#1c1f21"></path>
            <path
              d="M15.25,12.5h-2.905c-.414,0-.75-.336-.75-.75s.336-.75,.75-.75h2.905c.414,0,.75,.336,.75,.75s-.336,.75-.75,.75Z"
              fill="#1c1f21" data-color="color-2"></path>
            <path
              d="M12.878,8.842l-1.648-2.122c-.254-.328-.725-.387-1.052-.132-.327,.254-.386,.725-.132,1.052l1.648,2.122c.229,.294,.313,.672,.233,1.036s-.316,.67-.647,.842l-3.273,1.692c-.527,.274-1.178,.133-1.549-.328l-1.083-1.349c-.334-.416-.832-.654-1.364-.654h-.51V6.25c0-.965-.785-1.75-1.75-1.75s-1.75,.785-1.75,1.75v6c0,.965,.785,1.75,1.75,1.75,.879,0,1.602-.654,1.725-1.5h.535c.076,0,.147,.034,.195,.094l1.083,1.349c.535,.667,1.336,1.027,2.15,1.027,.427,0,.858-.099,1.257-.305l3.274-1.693c.728-.376,1.247-1.051,1.423-1.852,.176-.8-.011-1.63-.514-2.278Z"
              fill="#1c1f21"></path>
            <path
              d="M16.25,4.5c-.458,0-.871,.181-1.183,.469l-1.389-1.339c-.422-.406-.976-.63-1.562-.63h-1.807c-.603,0-1.19,.248-1.61,.679l-2.496,2.558c-.78,.8-.772,2.093,.018,2.884,.398,.397,.922,.602,1.451,.602,.41,0,.822-.123,1.178-.373l2.831-1.985c.339-.238,.421-.706,.184-1.045-.238-.339-.706-.421-1.045-.184l-2.831,1.985c-.22,.153-.517,.128-.707-.062-.212-.212-.214-.561-.005-.775l2.496-2.558c.14-.144,.335-.226,.537-.226h1.807c.195,0,.38,.075,.521,.21l1.863,1.796v5.744c0,.965,.785,1.75,1.75,1.75s1.75-.785,1.75-1.75V6.25c0-.965-.785-1.75-1.75-1.75Z"
              fill="#1c1f21" data-color="color-2"></path>
          </svg>
          <title>office</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                  <path class="color-background opacity-6"
                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                  </path>
                  <path class="color-background"
                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                  </path>
                </g>
              </g>
            </g>
          </g>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Client</span>
      </a>
    </li>

    <!-- Menu Akhir Client -->

    <!-- Menu awal kurir -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/tables.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <circle cx="9" cy="2.5" r="2" fill="#1c1f21" data-color="color-2"></circle>
            <path
              d="M15.123,5.011c-4.033,.69-8.213,.69-12.246,0-.409-.071-.796,.204-.866,.613-.07,.408,.204,.796,.612,.866,1.28,.219,2.577,.364,3.877,.451v9.56c0,.414,.336,.75,.75,.75s.75-.336,.75-.75v-4.5h2v4.5c0,.414,.336,.75,.75,.75s.75-.336,.75-.75V6.94c1.3-.086,2.597-.231,3.877-.451,.408-.07,.683-.458,.612-.866-.069-.409-.457-.684-.866-.613Z"
              fill="#1c1f21"></path>
          </svg>
          <title>office</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                  <path class="color-background opacity-6"
                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                  </path>
                  <path class="color-background"
                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                  </path>
                </g>
              </g>
            </g>
          </g>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Couriers</span>
      </a>
    </li>

    <!-- Menu akhir kurir -->

    <!-- Menu awal delivery -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/tables.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <path
              d="M11.75 7.5C12.44 7.5 13 6.9404 13 6.25C13 5.5596 12.44 5 11.75 5C11.06 5 10.5 5.5596 10.5 6.25C10.5 6.9404 11.06 7.5 11.75 7.5Z"
              fill="#1c1f21" data-color="color-2" data-stroke="none"></path>
            <path
              d="M2.85699 12.4692C2.20309 12.7981 1.75 13.468 1.75 14.25V16.25H3.75C4.5317 16.25 5.2016 15.7971 5.5305 15.1433"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-color="color-2"
              fill="none"></path>
            <path
              d="M13.1707 10.0588C16.6759 6.381 16.2472 2.0942 16.2108 1.7892C15.9049 1.7528 11.619 1.3241 7.94118 4.8293C5.71338 6.9526 4.96349 9.3233 4.74579 10.1164L7.88368 13.2543C8.67678 13.0366 11.0474 12.2865 13.1707 10.0588Z"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
            <path
              d="M8.26601 4.5279L6.892 4.2819C5.637 4.0569 4.737 3.959 4 5L1.75 8.2699C1.75 8.2699 3.3528 7.6568 5.5921 7.9669"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
            <path
              d="M10.033 12.4078C10.3431 14.647 9.72998 16.2499 9.72998 16.2499L13 14C14.041 13.263 13.943 12.3629 13.718 11.1079L13.472 9.7339"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
          </svg>
          <title>office</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                  <path class="color-background opacity-6"
                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                  </path>
                  <path class="color-background"
                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                  </path>
                </g>
              </g>
            </g>
          </g>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Delivery</span>
      </a>
    </li>

    <!-- Menu akhir delivery -->

    <!-- Menu Awal Distributor -->

    <li class="nav-item">
      <a class="nav-link @if ($tittle === 'Distributor') active @endif" href="{{ route('distributor.index') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <path
              d="M15.685,4.423L9.816,1.333c-.511-.271-1.121-.27-1.631,0L2.315,4.423c-.494,.26-.801,.769-.801,1.327s.307,1.067,.801,1.327l5.869,3.09c.255,.135,.536,.203,.816,.203s.56-.067,.815-.202l5.87-3.091c.494-.26,.801-.769,.801-1.327s-.307-1.067-.801-1.327Z"
              fill="#1c1f21"></path>
            <path
              d="M15.736,8.25c-.414,0-.75,.336-.75,.75l-5.87,3.091c-.072,.038-.158,.038-.232,0l-5.87-3.091c0-.414-.336-.75-.75-.75s-.75,.336-.75,.75c0,.559,.307,1.067,.801,1.327l5.869,3.09c.255,.135,.536,.203,.816,.203s.56-.067,.815-.202l5.87-3.091c.494-.26,.801-.769,.801-1.327,0-.414-.336-.75-.75-.75Z"
              fill="#1c1f21" data-color="color-2"></path>
            <path
              d="M15.736,11.5c-.414,0-.75,.336-.75,.75l-5.87,3.091c-.072,.038-.158,.038-.232,0l-5.87-3.091c0-.414-.336-.75-.75-.75s-.75,.336-.75,.75c0,.559,.307,1.067,.801,1.327l5.869,3.09c.255,.135,.536,.203,.816,.203s.56-.067,.815-.202l5.87-3.091c.494-.26,.801-.769,.801-1.327,0-.414-.336-.75-.75-.75Z"
              fill="#1c1f21" data-color="color-2"></path>
          </svg>
          <title>office</title>
          <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
            <g transform="translate(-1869.000000, -293.000000)" fill="#FFFFFF" fill-rule="nonzero">
              <g transform="translate(1716.000000, 291.000000)">
                <g id="office" transform="translate(153.000000, 2.000000)">
                  <path class="color-background opacity-6"
                    d="M12.25,17.5 L8.75,17.5 L8.75,1.75 C8.75,0.78225 9.53225,0 10.5,0 L31.5,0 C32.46775,0 33.25,0.78225 33.25,1.75 L33.25,12.25 L29.75,12.25 L29.75,3.5 L12.25,3.5 L12.25,17.5 Z">
                  </path>
                  <path class="color-background"
                    d="M40.25,14 L24.5,14 C23.53225,14 22.75,14.78225 22.75,15.75 L22.75,38.5 L19.25,38.5 L19.25,22.75 C19.25,21.78225 18.46775,21 17.5,21 L1.75,21 C0.78225,21 0,21.78225 0,22.75 L0,40.25 C0,41.21775 0.78225,42 1.75,42 L40.25,42 C41.21775,42 42,41.21775 42,40.25 L42,15.75 C42,14.78225 41.21775,14 40.25,14 Z M12.25,36.75 L7,36.75 L7,33.25 L12.25,33.25 L12.25,36.75 Z M12.25,29.75 L7,29.75 L7,26.25 L12.25,26.25 L12.25,29.75 Z M35,36.75 L29.75,36.75 L29.75,33.25 L35,33.25 L35,36.75 Z M35,29.75 L29.75,29.75 L29.75,26.25 L35,26.25 L35,29.75 Z M35,22.75 L29.75,22.75 L29.75,19.25 L35,19.25 L35,22.75 Z">
                  </path>
                </g>
              </g>
            </g>
          </g>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Distributor</span>
      </a>
    </li>

    <!-- Menu Akhir Distributor -->

    <!-- Menu Awal Products -->

    <li class="nav-item">
      <a class="nav-link @if ($tittle === 'Products') active  @endif" href="{{ route('products.index') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="50px" viewBox="2 0 14 18">
            <title>settings</title>
            <line x1="9" y1="2.25" x2="9" y2="8.25" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></line>
            <rect x="2.75" y="5.25" width="12.5" height="10" rx="2" ry="2" fill="none" stroke="#1c1f21"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
            <path
              d="M3,6.284l1.449-2.922c.338-.681,1.032-1.112,1.792-1.112h5.518c.76,0,1.454,.431,1.792,1.112l1.449,2.923"
              fill="none" stroke="#1c1f21" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
            <line x1="5.25" y1="12.75" x2="7.25" y2="12.75" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></line>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Products</span>
      </a>
    </li>

    <!-- Menu Akhir Products -->

    <!-- Menu Awal Purchase -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/virtual-reality.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>settings</title>
            <line x1="4.75" y1="6.25" x2="7.25" y2="1.75" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></line>
            <line x1="13.25" y1="6.25" x2="10.75" y2="1.75" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></line>
            <path
              d="M15,6.25l-.597,7.166c-.086,1.037-.953,1.834-1.993,1.834H5.59c-1.04,0-1.907-.797-1.993-1.834l-.597-7.166"
              fill="none" stroke="#1c1f21" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
            <line x1="1.75" y1="6.25" x2="16.25" y2="6.25" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5"></line>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Purchase</span>
      </a>
    </li>

    <!-- Menu Akhir Purchase -->

    <!-- Menu Awal Order -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/rtl.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>settings</title>
            <path d="M1.75 1.75L3.10101 2.088C3.49401 2.186 3.78899 2.51199 3.84799 2.91299L4.92731 10.25"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
            <path
              d="M15.25 13.25H4.75C3.9216 13.25 3.25 12.5784 3.25 11.75C3.25 10.9216 3.9216 10.25 4.75 10.25H13.0496C13.4701 10.25 13.8457 9.98691 13.9894 9.59171L15.2618 6.09171C15.4989 5.43951 15.0159 4.75 14.322 4.75H4.11801"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
            <path d="M4 17C4.552 17 5 16.552 5 16C5 15.448 4.552 15 4 15C3.448 15 3 15.448 3 16C3 16.552 3.448 17 4 17Z"
              fill="#1c1f21" data-color="color-2" data-stroke="none"></path>
            <path
              d="M14 17C14.552 17 15 16.552 15 16C15 15.448 14.552 15 14 15C13.448 15 13 15.448 13 16C13 16.552 13.448 17 14 17Z"
              fill="#1c1f21" data-color="color-2" data-stroke="none"></path>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Order</span>
      </a>
    </li>

    <!-- Menu Akhir Order -->

    <!-- Menu Awal Sale -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/rtl.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>settings</title>
            <path
              d="m2.25,4.25h5.586c.265,0,.52.105.707.293l5.1065,5.1065c.781.781.781,2.047,0,2.828l-3.172,3.172c-.781.781-2.047.781-2.828,0l-5.1065-5.1065c-.188-.188-.293-.442-.293-.707v-5.586Z"
              fill="none" stroke="#1c1f21" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
            <path d="m3.75,1.25h5.586c.265,0,.52.105.707.293l5.7705,5.7705" fill="none" stroke="#1c1f21"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></path>
            <circle cx="5.75" cy="7.75" r="1.25" fill="#1c1f21" stroke-width="0" data-color="color-2"></circle>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Sale</span>
      </a>
    </li>

    <!-- Menu Akhir Sale -->

    <!-- Menu Awal Users -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/rtl.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60px" height="60px" viewBox="2 0 14 18">
            <title>user</title>
            <path
              d="M2.60518 13.1674C3.69058 10.7157 6.14168 9 8.99999 9C11.7634 9 14.1462 10.6037 15.2822 12.9257C15.3564 13.0774 15.4289 13.2326 15.4797 13.3894C15.8649 14.5805 15.1811 15.8552 13.9874 16.2313C12.705 16.6354 11.0072 17 8.99999 17C6.99283 17 5.29503 16.6354 4.01259 16.2313C2.74425 15.8317 2.05162 14.4186 2.60518 13.1674Z"
              fill="#1c1f21"></path>
            <path
              d="M9 7.50049C10.7952 7.50049 12.25 6.04543 12.25 4.25049C12.25 2.45554 10.7952 1.00049 9 1.00049C7.20482 1.00049 5.75 2.45554 5.75 4.25049C5.75 6.04543 7.20482 7.50049 9 7.50049Z"
              fill="#1c1f21" data-color="color-2"></path>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Users</span>
      </a>
    </li>

    <!-- Menu Akhir Users -->


    <li class="nav-item mt-3">
      <h6 class="ps-4 ms-2 text-uppercase text-xs font-weight-bolder opacity-6">REPORTS </h6>
    </li>

    <!-- Awal Distributor Report -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/profile.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>settings</title>
            <polyline points="11.5 5.75 9 8.25 6.5 5.75" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></polyline>
            <line x1="9" y1="8.25" x2="9" y2="2.75" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></line>
            <path d="M16.214,9.75h-4.464v1c0,.552-.448,1-1,1h-3.5c-.552,0-1-.448-1-1v-1H1.787" fill="none"
              stroke="#1c1f21" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
            <path
              d="M12,2.75h.137c.822,0,1.561,.503,1.862,1.269l2.113,5.379c.092,.233,.138,.481,.138,.731v3.121c0,1.105-.895,2-2,2H3.75c-1.105,0-2-.895-2-2v-3.121c0-.25,.047-.498,.138-.731l2.113-5.379c.301-.765,1.039-1.269,1.862-1.269h.137"
              fill="none" stroke="#1c1f21" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Distributor Report</span>
      </a>
    </li>

    <!-- Akhir Distributor Report -->

    <!-- Awal Product Report-->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/sign-in.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>document</title>
            <path d="M7.99707 11.25L9.60605 12.75L13.0031 8.25" stroke="#1c1f21" stroke-width="1.5"
              stroke-linecap="round" stroke-linejoin="round" data-color="color-2" fill="none"></path>
            <path
              d="M13.75 5.25H7.25C6.145 5.25 5.25 6.145 5.25 7.25V13.75C5.25 14.855 6.145 15.75 7.25 15.75H13.75C14.855 15.75 15.75 14.855 15.75 13.75V7.25C15.75 6.145 14.855 5.25 13.75 5.25Z"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" fill="none"></path>
            <path
              d="M12.4012 2.74996C12.0022 2.06146 11.2151 1.64841 10.38 1.77291L3.45602 2.80196C2.36402 2.96386 1.61003 3.98093 1.77203 5.07393L2.75002 11.6547"
              stroke="#1c1f21" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" data-color="color-2"
              fill="none"></path>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Products Report</span>
      </a>
    </li>

    <!-- Akhir Product Report-->

    <!-- Awal Purchase Report -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/sign-up.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="60px" height="60px" viewBox="0 0 12 12">
            <title>Report Purchase</title>
            <path d="m10.25,4.5v4.25c0,1.105-.895,2-2,2h-2.25s-2.25,0-2.25,0c-1.105,0-2-.895-2-2v-4.25" fill="none"
              stroke="#1c1f21" stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></path>
            <rect x=".75" y="1.25" width="10.5" height="3" rx="1" ry="1" fill="none" stroke="#1c1f21"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></rect>
            <line x1="5" y1="6.75" x2="7" y2="6.75" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></line>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Purchase Report</span>
      </a>
    </li>

    <!-- Akhir Purchase Report-->

    <!-- Awal Order Report -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/sign-up.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>Report Order</title>
            <path
              d="m14.911,3.089c-.298-1.197-1.373-2.089-2.661-2.089h-6.5c-1.517,0-2.75,1.233-2.75,2.75v11.25L14.911,3.089Z"
              stroke-width="0" fill="#1c1f21"></path>
            <path
              d="m4.591,16.591l4.409-2.689,4.834,2.973c.125.083.271.126.416.126.122,0,.243-.029.354-.089.244-.13.396-.385.396-.661V6.182l-10.409,10.409Z"
              stroke-width="0" fill="#1c1f21"></path>
            <path
              d="m2,16.75c-.192,0-.384-.073-.53-.22-.293-.293-.293-.768,0-1.061L15.47,1.47c.293-.293.768-.293,1.061,0s.293.768,0,1.061L2.53,16.53c-.146.146-.338.22-.53.22Z"
              fill="#1c1f21" stroke-width="0" data-color="color-2"></path>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Order Report</span>
      </a>
    </li>

    <!-- Akhir Order Report -->

    <!-- Awal Sales Report -->
    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/sign-up.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>Report Sale</title>
            <rect x="13.25" y="2.75" width="2.5" height="12.5" rx="1" ry="1" fill="none" stroke="#1c1f21"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
            <rect x="7.75" y="7.75" width="2.5" height="7.5" rx="1" ry="1" fill="none" stroke="#1c1f21"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
            <rect x="2.25" y="11.75" width="2.5" height="3.5" rx="1" ry="1" fill="none" stroke="#1c1f21"
              stroke-linecap="round" stroke-linejoin="round" stroke-width="1.5"></rect>
            <polyline points="6.25 2.75 8.75 2.75 8.75 5.25" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></polyline>
            <line x1="8.5" y1="3" x2="2.75" y2="8.75" fill="none" stroke="#1c1f21" stroke-linecap="round"
              stroke-linejoin="round" stroke-width="1.5" data-color="color-2"></line>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Sale Report</span>
      </a>
    </li>

    <!-- Akhir Sales Report -->

    <!-- Awal Users Report -->

    <li class="nav-item">
      <a class="nav-link  " href="{{ url('pages/sign-up.html') }}">
        <div
          class="icon icon-shape icon-sm shadow border-radius-md bg-white text-center me-2 d-flex align-items-center justify-content-center">
          <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="40px" height="40px" viewBox="2 0 14 18">
            <title>Report Users</title>
            <path
              d="M8 8.5C9.93293 8.5 11.5 6.93191 11.5 5C11.5 3.06809 9.93293 1.5 8 1.5C6.06707 1.5 4.5 3.06809 4.5 5C4.5 6.93191 6.06707 8.5 8 8.5Z"
              fill="#1c1f21"></path>
            <path fill-rule="evenodd" clip-rule="evenodd"
              d="M11.075 10.5C10.5898 10.5 10.1223 10.7926 9.92867 11.2543L8.26274 15H5.75C5.33579 15 5 15.3358 5 15.75C5 16.1642 5.33579 16.5 5.75 16.5H8.75H14.925C15.429 16.5 15.8711 16.1954 16.0675 15.7539L17.6226 12.2622C17.9877 11.4425 17.393 10.5 16.481 10.5H11.075Z"
              fill="#1c1f21" data-color="color-2"></path>
            <path
              d="M3.86331 14.5236L2.10449 14.5236C1.82831 14.5236 1.57447 14.3718 1.44378 14.1285C1.31309 13.8852 1.32669 13.5897 1.47918 13.3595C3.04625 11.1877 5.45082 9.99768 8.0103 10C8.31321 10.0003 8.61609 10.0147 8.91729 10.0439C8.77216 10.2273 8.64882 10.4322 8.5529 10.6565L7.28821 13.5H5.75C4.95977 13.5 4.26469 13.9074 3.86331 14.5236Z"
              fill="#1c1f21"></path>
          </svg>
        </div>
        <span class="nav-link-text ms-1">Users Report</span>
      </a>
    </li>

    <!-- Akhri Users Report -->

  </ul>
</div>