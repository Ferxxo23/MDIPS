@extends('layouts.app')

@section('template_title')
    {{ $ordene->name ?? 'Show Ordene' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Show Ordene</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('ordenes.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Producto Id:</strong>
                            {{ $ordene->producto_id }}
                        </div>
                        <div class="form-group">
                            <strong>Proveedor Id:</strong>
                            {{ $ordene->proveedor_id }}
                        </div>
                        <div class="form-group">
                            <strong>Iva:</strong>
                            {{ $ordene->iva }}
                        </div>
                        <div class="form-group">
                            <strong>Fechafactura:</strong>
                            {{ $ordene->fechafactura }}
                        </div>
                        <div class="form-group">
                            <strong>Totalfactura:</strong>
                            {{ $ordene->totalfactura }}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $ordene->cantidad }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
