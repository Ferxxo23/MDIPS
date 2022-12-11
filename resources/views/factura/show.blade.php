@extends('layouts.app')

@section('template_title')
    {{ $factura->name ?? 'Show Factura' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Factura</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('facturas.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $factura->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $factura->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafactura:</strong>
                            {{ $factura->fechafactura }}
                        </div>
                        <div class="form-group">
                            <strong>Totalfactura:</strong>
                            {{ $factura->totalfactura }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $factura->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
