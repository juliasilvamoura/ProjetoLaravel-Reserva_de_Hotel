@include('layouts.validacao') 

{{-- <div class="row"> 
    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12"> 
        <div class="form-group">
        <label for="id_reserva" class="control-label">Codigo da Reserva:</label>
        <input type="text"
                name="id_reserva"
                id="id_reserva"
                value="{{ isset( $registro->id_reserva) ? $registro->id_reserva : '' }}"
                class="form-control @error('id_reserva') is-invalid @enderror "/>
            @error('id_reserva')
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
        <label for="data_chegada" class="control-label">Data da Chegada:</label>
        <input type="text"
                name="data_chegada"
                id="data_chegada"
                value="{{ isset( $registro->data_chegada) ? $registro->data_chegada : '' }}"
                class="form-control @error('data_chegada') is-invalid @enderror "/>
                @error('data_chegada')
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
        <label for="data_saida" class="control-label">Data da Saida:</label>
        <input type="text"
                name="data_saida"
                id="data_saida"
                value="{{ isset( $registro->data_saida) ? $registro->data_saida : '' }}"
                class="form-control @error('data_saida') is-invalid @enderror "/>
            @error('data_saida')
            <div class="invalid-feedback">
                <span ><strong>{{ $message }}</strong></span>
            </div>
            @enderror 
        </div>
    </div>
</div>
