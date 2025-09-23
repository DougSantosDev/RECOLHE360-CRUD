<div class="mb-3">
    <label for="material_id" class="form-label">Material</label>
    <select name="material_id" id="material_id" class="form-control">
        @foreach($materials as $material)
            <option value="{{ $material->id }}" {{ (isset($agendamento) && $agendamento->material_id == $material->id) ? 'selected' : '' }}>
                {{ $material->nome }}
            </option>
        @endforeach
    </select>
</div>

<div class="mb-3">
    <label for="endereco" class="form-label">Endereço</label>
    <input type="text" name="endereco" class="form-control" value="{{ $agendamento->endereco ?? '' }}">
</div>

<div class="mb-3">
    <label for="data_coleta" class="form-label">Data da Coleta</label>
    <input type="datetime-local" name="data_coleta" class="form-control" value="{{ isset($agendamento) ? \Carbon\Carbon::parse($agendamento->data_coleta)->format('Y-m-d\TH:i') : '' }}">
</div>
