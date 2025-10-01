<!--begin::Header-->
<div id="kt_app_header" class="app-header " data-kt-sticky="true" data-kt-sticky-activate="{default: false, lg: true}"
    data-kt-sticky-name="app-header-sticky" data-kt-sticky-offset="{default: false, lg: '300px'}">
    <!--begin::Header container-->
    <div class="app-container  container-fluid d-flex align-items-stretch justify-content-between "
        id="kt_app_header_container">
        <!--layout-partial:layout/partials/header/_logo.html-->
        @include('layouts.partials.header._logo')
        <!--begin::Header wrapper-->
        <div class="d-flex align-items-stretch justify-content-between flex-lg-grow-1">
            <!--layout-partial:layout/partials/header/_menu.html-->
            @include('layouts.partials.header._menu')
            <!--layout-partial:layout/partials/header/_navbar.html-->
            @include('layouts.partials.header._navbar')
        </div>
        <!--end::Header wrapper-->
    </div>
    <!--end::Header container-->
</div>
<!--end::Header-->
