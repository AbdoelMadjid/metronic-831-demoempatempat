<!--begin::Chart widget 13-->
<div class="card card-flush h-md-100">
    <!--begin::Header-->
    <div class="card-header pt-7">
        <!--begin::Title-->
        <h3 class="card-title align-items-start flex-column">
            <span class="card-label fw-bold text-gray-900">Sales Statistics</span>
            <span class="text-gray-500 pt-2 fw-semibold fs-6">Top Selling Products</span>
        </h3>
        <!--end::Title-->
        <!--begin::Toolbar-->
        <div class="card-toolbar">
            <!--begin::Menu-->
            <button class="btn btn-icon btn-color-gray-500 btn-active-color-primary justify-content-end"
                data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-overflow="true">
                <i class="ki-outline ki-dots-square fs-1 text-gray-500 me-n1"></i>
            </button>
            <!--layout-partial:partials/menus/_menu-4.html-->
            @include('partials.menus._menu-4')
            <!--end::Menu-->
        </div>
        <!--end::Toolbar-->
    </div>
    <!--end::Header-->
    <!--begin::Body-->
    <div class="card-body pt-5">
        <!--begin::Chart container-->
        <div id="kt_charts_widget_13_chart" class="w-100 h-325px"></div>
        <!--end::Chart container-->
    </div>
    <!--end::Body-->
</div>
<!--end::Chart widget 13-->
