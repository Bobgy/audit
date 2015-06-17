@if (isset($errorMessage))
    <div class="box" id="box" style="display:none;">
       <h2 id="error_log" style="color:#FF0000">Mismatch</h2>
    </div>
    <script>
        $("#error_log").html("{{ $errorMessage }}");
        $('#box').show(1000);
    </script>
@endif
