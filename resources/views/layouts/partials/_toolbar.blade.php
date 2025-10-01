<!--begin::Toolbar-->
<div id="kt_app_toolbar" class="app-toolbar  pt-7 pt-lg-10 ">
    <!--begin::Toolbar wrapper-->
    <div class="app-toolbar-wrapper d-flex flex-stack flex-wrap gap-4 w-100">
        <!--layout-partial:layout/partials/_page-title.html-->
        @include('layouts.partials._page-title')
        <!--begin::Actions-->
        <div class="d-flex align-items-center gap-2 gap-lg-3">
            <a href="#"
                class="btn btn-flex btn-color-gray-700 btn-active-color-primary bg-light h-40px fs-7 fw-bold"
                data-bs-toggle="modal" data-bs-target="#kt_modal_view_users">
                History
            </a>
            <a href="#" class="btn btn-sm btn-flex btn-secondary align-self-center px-3" data-bs-toggle="modal"
                data-bs-target="#kt_modal_invite_friends">
                <i class="ki-outline ki-plus-square fs-3"></i> Invite
            </a>
        </div>
        <!--end::Actions-->
    </div>
    <!--end::Toolbar wrapper-->
</div>
<!--end::Toolbar-->
