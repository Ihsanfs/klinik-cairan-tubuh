@extends('layouts.admin')
@php
    $profile=asset(Storage::url('tindak-lanjut/dokumen'));
@endphp
@section('page-title')
{{__('Tindak lanjut')}}
@endsection
@section('content')
<section class="section">
    <div class="section-header">
        <h1>{{__('Tindak Lanjut')}}</h1>
        <div class="section-header-breadcrumb">
            <div class="breadcrumb-item active"><a href="{{route('home')}}">{{__('DASHBOARD')}}</a></div>
            @if(Auth::user()->type === 'satker')
                <div class="breadcrumb-item"><a href="{{route('lhpSatker.index')}}">{{__('LHP SATKER')}}</a></div>
                <div class="breadcrumb-item">{{__('UPLOAD TINDAK LANJUT')}}</div>
            @elseif(Auth::user()->type === 'unor')
                <div class="breadcrumb-item"><a href="{{route('lhpSatker.index')}}">{{__('LHP')}}</a></div>
                <div class="breadcrumb-item">{{__('CEK KELENGKAPAN DOKUMEN')}}</div>
            @endif
        </div>
    </div>

    <div class="card-body">


            <div class="row">
                <div class="form-group col-md-3">
                    {{ Form::label('lhp_no', __('Nomor LHP') ) }}
                    {{-- {{ Form::text('lhp_no', $rekom->temuan->lhp->lhp_no ?? '', array('class' => 'form-control')) }} --}}
                    <input type="text" class="form-control">

                    <div class="form-group mt-3" >
                        {{ Form::label('temuan_cat', __('Kategori Temuan')) }}
                        <select name="temuan_cat" class="form-control">
                            <option value="1">SPI</option>
                            <option value="1">SPI</option>
                            <option value="1">SPI</option>
                                                </select>
                    </div>
                </div>
                <div class="form-group col-md-9">
                    <div class="form-group col-md-12">
                    {{ Form::label('lhp_desc', __('Uraian LHP') ) }}
                    {{-- {{ Form::textarea('lhp_desc', $rekom->temuan->lhp->lhp_desc ?? '', array('class' => 'form-control textarea justify','rows'=>10)) }} --}}
                    @error('tl_desc')
                    <span class="invalid-tl_desc" role="alert">
                        <strong class="text-danger"></strong>
                    </span>
                    @enderror
                    </div>
                    <div class="form-group col-md-12">
                        {{ Form::label('temuan_text', __('Uraian Temuan') ) }}
                        {{-- {{ Form::textarea('temuan_text', $rekom->temuan->temuan_text ?? '', array('class' => 'form-control textarea text-justify')) }} --}}
                        @error('temuan_text')
                        <span class="invalid-tl_desc" role="alert">
                            <strong class="text-danger"></strong>
                        </span>
                        @enderror
                    </div>

                    <div class="form-group col-md-12 ml-auto">
                        {{ Form::label('rekom_text', __('Uraian Rekomendasi') ) }}
                        {{-- {{ Form::textarea('rekom_text', $rekom->rekom_text ?? '', array('class' => 'form-control text-justify textarea','cols'=>30,'rows'=>10)) }} --}}
                        @error('rekom_text')
                        <span class="invalid-tl_desc" role="alert">
                            <strong class="text-danger"></strong>
                        </span>
                        @enderror
                    </div>

                </div>



                <div class="col-md-12">

                    <div class="form-group">
                        <label for="Nilai_idr">Nilai Kementrian IDR</label>
                        <input type="text" class="form-control text-right"  name="rekom_nilai_idr" >
                    </div>

                    <div class="form-group">
                        <label for="Nilai_usd">Nilai Kementrian USD</label>
                        <input type="text" class="form-control  text-right"   name="rekom_nilai_usd" >
                    </div>

                    <div class="form-group">
                        <label for="Nilai eur">Nilai Kementrian EUR</label>
                        <input type="text" class="form-control  text-right"   name="rekom_nilai_eur" >
                    </div>


                    <div class="form-group">
                        <label for="Nilai jpy">Nilai Kementrian JPY</label>
                        <input type="text" class="form-control  text-right"   name="rekom_nilai_jpy" >
                    </div>

                </div>

                {{-- <div class="col-md-6">

                    <div class="form-group">
                        <label for="Sisa Nilai_idr">Nilai Satker IDR</label>

                        <input type="text" class="form-control text-right" value="{{ $idr ? number_format($rekom->rekom_nilai_idr - $idr, 2): '0.00' }}" name="sisa_nilai_idr" disabled = "true">

                    </div>

                    <div class="form-group">
                        <label for="Sisa Nilai_usd">Nilai Satker USD</label>
                        <input type="text" class="form-control text-right" value="{{ $usd ? number_format($rekom->rekom_nilai_usd - $usd, 2): '0.00' }}" name="sisa_nilai_usd" disabled = "true">
                    </div>

                    <div class="form-group">
                        <label for="Sisa Nilai eur">Nilai Satker  EUR</label>
                        <input type="text" class="form-control text-right" value="{{ $eur? number_format($rekom->rekom_nilai_jpy - $eur, 2): '0.00' }}" name="sisa_nilai_eur" disabled = "true">
                    </div>

                    <div class="form-group">
                        <label for="Sisa Nilai jpy">Nilai Satker  JPY</label>
                        <input type="text" class="form-control text-right" value="{{ $jpy ? number_format($rekom->rekom_nilai_jpy - $jpy, 2): '0.00' }}" name="sisa_nilai_jpy" disabled = "true">
                    </div>


                </div> --}}


            </div>


    </div>

</section>





