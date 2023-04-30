@extends('layouts.app')

@section('content')

<div class="row" style="justify-content: center;">
    <div class="card" style="justify-content: center;">
        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQCRRNhPDfP_n9gWbDrSMba6bR4dgsxSRE353R59IPfQIx_ypmeOt1sXNMKCHRmYuLPRrk&usqp=CAU" alt="">
    </div>
    
    <div class="col-lg-7">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h5 class="py-2"><strong>Негізгі ақпарат</strong></h5>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="name" class="required">Аты-жөні</label>
                    <input class=" form-control" name="name" type="text" value="{{ Auth::user()->name }}" id="name" readonly>
                </div>
                <div class="form-group">
                    <label for="email" class="required">E-mail</label>
                    <input class=" form-control" name="email" type="email" value="{{ Auth::user()->email }}" id="email" readonly>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
