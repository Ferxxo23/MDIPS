<div class="box box-info padding-1">
    <div class="box-body">
        
       

        <div class="form-group">
            {{ Form::label('producto_id') }}
            {{ Form::select('producto_id', $products, $factura->producto_id, ['class' => 'form-control' . ($errors->has('producto_id') ? ' is-invalid' : ''), 'placeholder' => 'Producto Id']) }}
            {!! $errors->first('producto_id', '<div class="invalid-feedback">:message</div>') !!}
        </div>


        <div class="form-group">
            {{ Form::label('iva') }}
            {{ Form::text('iva', $factura->iva, ['class' => 'form-control' . ($errors->has('iva') ? ' is-invalid' : ''), 'placeholder' => 'Iva']) }}
            {!! $errors->first('iva', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('fechafactura') }}
            {{ Form::text('fechafactura', $factura->fechafactura, ['class' => 'form-control' . ($errors->has('fechafactura') ? ' is-invalid' : ''), 'placeholder' => 'Fechafactura']) }}
            {!! $errors->first('fechafactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('totalfactura') }}
            {{ Form::text('totalfactura', $factura->totalfactura, ['class' => 'form-control' . ($errors->has('totalfactura') ? ' is-invalid' : ''), 'placeholder' => 'Totalfactura']) }}
            {!! $errors->first('totalfactura', '<div class="invalid-feedback">:message</div>') !!}
        </div>
        <div class="form-group">
            {{ Form::label('cantidad') }}
            {{ Form::text('cantidad', $factura->cantidad, ['class' => 'form-control' . ($errors->has('cantidad') ? ' is-invalid' : ''), 'placeholder' => 'Cantidad']) }}
            {!! $errors->first('cantidad', '<div class="invalid-feedback">:message</div>') !!}
        </div>

    </div>
    <div class="box-footer mt20">
        <button type="submit" class="btn btn-primary">Submit</button>
    </div>
</div>