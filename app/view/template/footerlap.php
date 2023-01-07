</div>

<div class="footer-wrap pd-20 mb-20 card-box">
	FitApp - <a href="https://github.com/dropways" target="_blank">Toko Fitri Parfum</a>
</div>
</div>
</div>

<!-- js -->
<!-- <script src="<?= BaseURL(); ?>/vendors/scripts/core.js"></script>
	<script src="<?= BaseURL(); ?>/vendors/scripts/script.min.js"></script>
	<script src="<?= BaseURL(); ?>/vendors/scripts/process.js"></script>
	<script src="<?= BaseURL(); ?>/vendors/scripts/layout-settings.js"></script> -->


<script>
	$(function() {
		$('input[name="daterange"]').daterangepicker({
			opens: 'left'
		}, function(start, end, label) {
			console.log("A new date selection was made: " + start.format('YYYY-MM-DD') + ' to ' + end.format('YYYY-MM-DD'));
		});
	});
</script>
</body>

</html>