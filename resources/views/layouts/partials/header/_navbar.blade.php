<!--begin::Navbar-->
<div class="app-navbar flex-shrink-0">

    <!--begin::Search-->
    <div class="app-navbar-item align-items-stretch ms-1 ms-lg-4">
        <!--layout-partial:partials/search/_dropdown.html-->
        @include('partials.search._dropdown')
    </div>
    <!--end::Search-->
    <!--begin::Action-->
    <div class="app-navbar-item ms-1 ms-lg-4">
        <a href="#" class="btn btn-flex flex-center btn-sm fw-bold btn-dark py-3 w-40px h-40px w-md-auto"
            data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">
            <i class="ki-outline ki-verify d-inline-flex d-md-none fs-2 p-0 m-0"></i> <span
                class="d-none d-md-inline ps-lg-1">Upgrade Plan</span>
        </a>
    </div>
    <!--end::Action-->
    <!--begin::Activities-->
    <div class="app-navbar-item ms-1 ms-lg-4">
        <!--begin::Drawer toggle-->
        <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px" id="kt_activities_toggle">
            <i class="ki-outline ki-abstract-42 fs-1"></i>
        </div>
        <!--end::Drawer toggle-->
    </div>
    <!--end::Activities-->
    <!--begin::Notifications-->
    <div class="app-navbar-item ms-1 ms-lg-4">
        <!--begin::Menu- wrapper-->
        <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-calendar fs-1"></i>
        </div>
        <!--layout-partial:partials/menus/_notifications-menu.html-->
        @include('partials.menus._notifications-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::Notifications-->
    <div class="app-navbar-item ms-1 ms-lg-4">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <i class="ki-outline ki-element-11 fs-2"></i>
        </div>
        <!--layout-partial:partials/menus/_my-apps-menu.html-->
        @include('partials.menus._my-apps-menu')
        <!--end::Menu wrapper-->
    </div>
    <div class="app-navbar-item ms-1 ms-lg-4">
        <!--begin::Menu wrapper-->
        <div class="btn btn-icon btn-custom w-35px h-35px w-md-40px h-md-40px" id="kt_drawer_chat_toggle">
            <i class="ki-outline ki-message-text-2 fs-2"></i>
            <span
                class="bullet bullet-dot bg-success h-6px w-6px position-absolute translate-middle top-0 start-50 animation-blink">
            </span>
        </div>
        <!--end::Menu wrapper-->
    </div>
    <!--begin::User menu-->
    <div class="app-navbar-item ms-1 ms-lg-4" id="kt_header_user_menu_toggle">
        <!--begin::Menu wrapper-->
        <div class="cursor-pointer symbol symbol-35px symbol-md-40px"
            data-kt-menu-trigger="{default: 'click', lg: 'hover'}" data-kt-menu-attach="parent"
            data-kt-menu-placement="bottom-end">
            <img class="symbol symbol-35px symbol-md-40px" src="assets/media/avatars/300-5.jpg" alt="user" />
        </div>
        <!--layout-partial:partials/menus/_user-account-menu.html-->
        @include('partials.menus._user-account-menu')
        <!--end::Menu wrapper-->
    </div>
    <!--end::User menu-->
    <!--begin::Sidebar menu toggle-->
    <div class="app-navbar-item d-flex align-items-center d-lg-none ms-1 me-n2">
        <a href="#" class="btn btn-icon btn-color-gray-500 btn-active-color-primary w-35px h-35px"
            id="kt_app_sidebar_mobile_toggle">
            <i class="ki-outline ki-burger-menu-2 fs-1"></i> </a>
    </div>
    <!--end::Sidebar menu toggle-->
</div>
<!--end::Navbar-->
