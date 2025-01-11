<div id="pageLoader" class="page-loader flex-column" style="display: none;">
    <span class="spinner-border text-primary" role="status"></span>
    <span class="text-muted fs-6 fw-semibold mt-5">Loading...</span>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const pageLoader = document.getElementById("pageLoader");

        pageLoader.style.display = "flex"; 

        window.onload = function() {
            setTimeout(function() {
                pageLoader.classList.add("hidden"); 
            }, 1000); 
        };
        window.onerror = function() {
            pageLoader.classList.add("hidden");
        };
    });
</script>
