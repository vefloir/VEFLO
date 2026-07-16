<div class="vf-modal-overlay">

    <div class="vf-modal">

        <div class="vf-modal-header">
            {{ $title ?? 'Modal Title' }}
        </div>

        <div class="vf-modal-body">
            {{ $slot }}
        </div>

        <div class="vf-modal-footer">
            <button class="vf-btn vf-btn-secondary">
                Cancel
            </button>

            <button class="vf-btn vf-btn-primary">
                Confirm
            </button>
        </div>

    </div>

</div>