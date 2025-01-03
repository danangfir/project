@extends('Master.Layouts.app', ['title' => $title])

@section('content')
<div class="page-header">
    <h1 class="page-title"></h1>
</div>
<div class="row row-sm">
    <div class="col-12">
        <div class="card">
            <div class="card-body text-center">
                <h3></h3>
                <h1 class="fw-bold" style="font-size: 80px;"></h1>
                <h3 class="fw-bold"></h3>
                <div class="d-flex flex-wrap flex-md-nowrap">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="{{url('assets/default/shopepay.png')}}" height="60px" alt="" srcset="">
                            <h4 class="fw-bold mt-3"></h4>
                        </div>
                    </div>
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="{{url('assets/default/gopay.png')}}" height="60px" alt="" srcset="">
                            <h4 class="fw-bold mt-3"></h4>
                        </div>
                    </div>
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="{{url('assets/default/dana.png')}}" height="60px" alt="" srcset="">
                            <h4 class="fw-bold mt-3"></h4>
                        </div>
                    </div>
                    <a target="_blank" href="https://trakteer.id/radhiantdev/showcase/source-code-inventoryweb-EOyYj">
                        <div class="card shadow-none">
                            <div class="card-body">
                                <img src="{{url('assets/default/trakter.png')}}" height="60px" alt="" srcset="">
                                <h4 class="fw-bold mt-3"></h4>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="d-flex flex-wrap flex-md-nowrap">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="{{url('assets/default/bri.png')}}" height="60px" alt="" srcset="">
                            <h4 class="fw-bold mt-3"> <br></h4>
                        </div>
                    </div>

                </div>
                <h3 class="fw-bold"></h3>
                <div class="d-flex flex-wrap flex-md-nowrap">
                    <div class="card shadow-none">
                        <div class="card-body">
                            <img src="{{url('assets/default/wa.svg')}}" height="80px" alt="" srcset="">
                            <h4 class="fw-bold mt-3"><a target="_blank" href="https://wa.me/087817379229"></a></h4>
                        </div>
                    </div>
                </div>
                <br>
            </div>
        </div>
    </div>
</div>
@endsection
