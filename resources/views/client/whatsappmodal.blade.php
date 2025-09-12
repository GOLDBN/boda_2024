<!-- Modal WhatsApp Config -->
<div class="modal fade" id="waModal" tabindex="-1" aria-labelledby="waModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header py-2">
        <h5 class="modal-title" id="waModalLabel">Enviar WhatsApp</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>

      <div class="modal-body">
        <div class="mb-2">
          <label class="form-label">Código de país (LADA)</label>
          <input type="text" id="waCountryCode" class="form-control" placeholder="52" list="ladaList">
          <datalist id="ladaList">
            <option value="52">México</option>
            <option value="1">EE.UU./Canadá</option>
            <option value="34">España</option>
            <option value="57">Colombia</option>
            <option value="54">Argentina</option>
            <option value="56">Chile</option>
            <option value="51">Perú</option>
            <option value="593">Ecuador</option>
            <option value="502">Guatemala</option>
            <option value="506">Costa Rica</option>
          </datalist>
          <small class="text-muted d-block mt-1">
            Si el teléfono empieza con “+” o “00”, se usará como internacional y se ignorará la LADA.
          </small>
        </div>

        <div class="mb-2">
          <label class="form-label">Teléfono</label>
          <input type="text" id="waPhone" class="form-control" placeholder="5555555555">
        </div>

        <div class="mb-2">
          <label class="form-label">Mensaje</label>
          <textarea id="waMessage" rows="5" class="form-control"></textarea>
        </div>

        <div class="border rounded p-2 mt-3">
          <div class="small text-muted">Vista previa del enlace:</div>
          <a id="waPreview" href="#" target="_blank" class="small text-break d-inline-block" style="max-width:100%;">—</a>
        </div>
      </div>

      <div class="modal-footer py-2">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <a id="waSendBtn" href="#" target="_blank" class="btn btn-success">Enviar por WhatsApp</a>
      </div>
    </div>
  </div>
</div>
