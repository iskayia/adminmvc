</div>

<div class="footer-wrap pd-20 mb-20 card-box">
    FitApp - Toko Fitri Parfum</a>
</div>
</div>
</div>

<!-- js -->
<script src="<?= BaseURL(); ?>/vendors/scripts/core.js"></script>
<script src="<?= BaseURL(); ?>/vendors/scripts/script.min.js"></script>
<script src="<?= BaseURL(); ?>/vendors/scripts/process.js"></script>
<script src="<?= BaseURL(); ?>/vendors/scripts/layout-settings.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".add-more-bm").click(function() {
            var html = $(".copy").html();
            $(".after-add-more-bm").after(html);
        });

        // saat tombol remove dklik control group akan dihapus 
        $("body").on("click", ".remove-bm", function() {
            $(this).parents(".form-bm").remove();
        });
    });
</script>
</body>

</html>