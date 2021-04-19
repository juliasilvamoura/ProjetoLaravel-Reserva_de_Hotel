@include('layouts.validacao') 
<div class="row"> 
    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12"> 
        <div class="form-group">
        <label for="numero_quarto" class="control-label">Numero do Quarto:</label>
        <input type="text"
                name="numero_quarto"
                id="numero_quarto"
                value="{{ isset( $registro->numero_quarto) ? $registro->numero_quarto : '' }}"
                class="form-control @error('numero_quarto') is-invalid @enderror "/>
                @error('numero_quarto')
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
        <label for="tipo_quarto" class="control-label">Tipo do Quarto:</label>
        <input type="text"
                name="tipo_quarto"
                id="tipo_quarto"
                value="{{ isset( $registro->tipo_quarto) ? $registro->tipo_quarto : '' }}"
                class="form-control @error('tipo_quarto') is-invalid @enderror "/>
            @error('tipo_quarto')
            <div class="invalid-feedback">
                <span ><strong>{{ $message }}</strong></span>
            </div>
            @enderror 
        </div>
    </div>
</div>

