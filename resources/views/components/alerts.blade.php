@if(Session::has('success') || Session::has('error'))
    <div id="alert" class="bg-{{ $status }} bs-toast toast fade show position-absolute bottom-1 end-1">
        <div class="toast-header">
            <div class="me-auto fw-semibold">Уведомление</div>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            {{ $message }}
        </div>
    </div>
@endif
<script>
    var alert = document.getElementById("alert");
    setTimeout(() => {
        alert.className = "hidden"
    }, 7000);
</script>
