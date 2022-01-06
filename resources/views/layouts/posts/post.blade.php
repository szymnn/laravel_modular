@include('layouts.components.sidebar')
<div class="col-lg-8 col-md-6 mb-md-0 mb-4">
    <div class="card z-index-2 ">
        <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2 bg-transparent">
            <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                <div class="chart">
                    <canvas id="chart-bars" class="chart-canvas" height="170" width="274" style="display: block; box-sizing: border-box; height: 170px; width: 274.7px;"></canvas>
                </div>
            </div>
        </div>
        <div class="card-body">
            <h6 class="mb-0 ">Website Views</h6>
            <p class="text-sm ">Last Campaign Performance</p>
            <hr class="dark horizontal">
            <div class="d-flex ">
                <i class="material-icons text-sm my-auto me-1">schedule</i>
                <p class="mb-0 text-sm"> campaign sent 2 days ago </p>
            </div>
        </div>
    </div>
</div>
