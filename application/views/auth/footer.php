<script src=<?= base_url("assets/build/js/lib/jquery/jquery-3.2.1.min.js") ?>></script>
<script src=<?= base_url("assets/build/js/lib/popper/popper.min.js") ?>></script>
<script src=<?= base_url("assets/build/js/lib/tether/tether.min.js") ?>></script>
<script src=<?= base_url("assets/build/js/lib/bootstrap/bootstrap.min.js") ?>></script>
<script src=<?= base_url("assets/build/js/plugins.js") ?>></script>

<!-- editor text -->

<script src=<?= base_url("assets/build/js/lib/summernote/summernote.min.js") ?>></script>
<script>
    $(document).ready(function() {
        $('.summernote').summernote();
    });
</script>
<!-- end editor text -->


<!-- datatables -->
<script src="js/lib/bootstrap-table/bootstrap-table.js"></script>
<script src="js/lib/bootstrap-table/bootstrap-table-resizable.min.js"></script>
<script src="js/lib/bootstrap-table/colResizable-1.5.source.js"></script>
<script src="js/lib/bootstrap-table/bootstrap-table-resize-columns-init.js"></script>
<!-- end datatables -->
<script src=<?= base_url("assets/build/js/app.js") ?>></script>

</body>

</html>