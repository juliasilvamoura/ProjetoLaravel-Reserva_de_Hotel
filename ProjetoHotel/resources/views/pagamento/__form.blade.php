@include('layouts.validacao') 


{{-- <div class="row"> 
    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12"> 
        <div class="form-group">
        <label for="id_pagamento" class="control-label">Codigo do Pagamento:</label>
        <input type="text"
                name="id_pagamento"
                id="id_pagamento"
                value="{{ isset( $registro->id_pagamento) ? $registro->id_pagamento : '' }}"
                class="form-control @error('id_pagamento') is-invalid @enderror "/>
            @error('id_pagamento')
            <div class="invalid-feedback">
                <span ><strong>{{ $message }}</strong></span>
            </div>
            @enderror 
        </div>
    </div>
</div> --}}

<div class="row"> 
    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12"> 
        <div class="form-group">
        <label for="valor" class="control-label">Valor:</label>
        <input type="text"
                name="valor"
                id="valor"
                value="{{ isset( $registro->valor) ? $registro->valor : '' }}"
                class="form-control @error('valor') is-invalid @enderror "/>
                @error('valor')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror 
        </div>
    </div>
</div>

<div class="row">
    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12"> 
        <div class="form-group">
            <label for="data" class="control-label">Data:</label> 
            <input type="text" 
                   name="data" 
                   id="data"
                   value="{{ isset( $registro->data ) ? date('d/m/Y', strtotime($registro->data)) : '' }}" 
                   class="form-control @error('data') is-invalid @enderror "/>
            @error('data')
            <div class="invalid-feedback">
                <span ><strong>{{ $message }}</strong></span>
            </div>
            @enderror

