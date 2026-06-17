@extends('layouts.master')
@section('title', 'Dashboard')

@section('content')
<div class="card border-0 shadow-sm rounded-4 mb-4 bg-primary text-white overflow-hidden">
    <div class="card-body p-5 position-relative">
        <div class="position-relative z-1">
            <h3 class="fw-bold text-white mb-3">Dari Hobi Jadi Bisnis, Dari Rasa Jadi Keluarga.</h3>
            <p class="fs-5 mb-0 w-75" style="line-height: 1.8; opacity: 0.9;">
                <strong>Nikmat Rasanyo..!</strong> adalah rumah bagi para pencinta, pelaku, dan inovator kuliner. 
                Tempat kolaborasi melahirkan kreasi, dan komunitas mendorong pertumbuhan bisnis FnB-mu.
            </p>
        </div>
        <i class="bx bx-restaurant position-absolute text-white" style="font-size: 15rem; right: -10px; bottom: -30px; opacity: 0.1;"></i>
    </div>
</div>

<div class="d-flex align-items-center mb-3 mt-4">
    <h5 class="fw-bold text-dark mb-0">Kenapa harus Sodapnya..!?</h5>
</div>

<div class="row g-4">
    <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100 rounded-4 text-center">
            <div class="card-body p-4">
                <div class="avatar avatar-md mx-auto mb-3">
                    <span class="avatar-initial rounded-circle bg-label-primary fs-3">🍳</span>
                </div>
                <h6 class="fw-bold mb-0 text-dark">Networking Kuliner</h6>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100 rounded-4 text-center">
            <div class="card-body p-4">
                <div class="avatar avatar-md mx-auto mb-3">
                    <span class="avatar-initial rounded-circle bg-label-warning fs-3">💡</span>
                </div>
                <h6 class="fw-bold mb-0 text-dark">Knowledge Sharing</h6>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100 rounded-4 text-center">
            <div class="card-body p-4">
                <div class="avatar avatar-md mx-auto mb-3">
                    <span class="avatar-initial rounded-circle bg-label-success fs-3">🤝</span>
                </div>
                <h6 class="fw-bold mb-0 text-dark">Kolaborasi Bisnis</h6>
            </div>
        </div>
    </div>
    
    <div class="col-md-6 col-lg-3">
        <div class="card border-0 shadow-sm h-100 rounded-4 text-center">
            <div class="card-body p-4">
                <div class="avatar avatar-md mx-auto mb-3">
                    <span class="avatar-initial rounded-circle bg-label-info fs-3">🚀</span>
                </div>
                <h6 class="fw-bold mb-0 text-dark">Eksposur Brand</h6>
            </div>
        </div>
    </div>
</div>
@endsection