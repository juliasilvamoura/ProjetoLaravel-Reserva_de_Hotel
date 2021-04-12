@include('layouts.validacao') 
<div class="row"> 
    <div class="col-xs-12 col-sm-6 col-md-12 col-lg-12"> 
        <div class="form-group">
        <label for="nome" class="control-label">Nome:</label>
        <input type="text"
                name="nome"
                id="nome"
                value="{{ isset( $registro->nome) ? $registro->nome : '' }}"
                class="form-control @error('nome') is-invalid @enderror "/>
                @error('nome')
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
        <label for="cpf" class="control-label">Cpf:</label>
        <input type="text"
                name="cpf"
                id="cpf"
                value="{{ isset( $registro->cpf) ? $registro->cpf : '' }}"
                class="form-control @error('cpf') is-invalid @enderror "/>
            @error('cpf')
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
        <label for="telefone" class="control-label">Telefone:</label>
        <input type="text"
                name="telefone"
                id="telefone"
                value="{{ isset( $registro->telefone) ? $registro->telefone : '' }}"
                class="form-control @error('telefone') is-invalid @enderror "/>
                @error('telefone')
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
        <label for="endereco" class="control-label">Endereco:</label>
        <input type="text"
                name="endereco"
                id="endereco"
                value="{{ isset( $registro->endereco) ? $registro->endereco : '' }}"
                class="form-control @error('endereco') is-invalid @enderror "/>
            @error('endereco')
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
        <label for="bairro" class="control-label">Bairro:</label>
        <input type="text"
                name="bairro"
                id="bairro"
                value="{{ isset( $registro->bairro) ? $registro->bairro : '' }}"
                class="form-control @error('bairro') is-invalid @enderror "/>
            @error('bairro')
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
        <label for="numero" class="control-label">Numero:</label>
        <input type="text"
                name="numero"
                id="numero"
                value="{{ isset( $registro->numero) ? $registro->numero : '' }}"
                class="form-control @error('numero') is-invalid @enderror "/>
            @error('numero')
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
        <label for="cidade" class="control-label">Cidade:</label>
        <input type="text"
                name="cidade"
                id="cidade"
                value="{{ isset( $registro->cidade) ? $registro->cidade : '' }}"
                class="form-control @error('cidade') is-invalid @enderror "/>
                @error('cidade')
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
        <label for="estado" class="control-label">Estado:</label>
        <input type="text"
                name="estado"
                id="estado"
                value="{{ isset( $registro->estado) ? $registro->estado : '' }}"
                class="form-control @error('estado') is-invalid @enderror "/>
                @error('estado')
                <div class="invalid-feedback">
                    <span ><strong>{{ $message }}</strong></span>
                </div>
                @enderror 
        </div>
    </div>
</div>