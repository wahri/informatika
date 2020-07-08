<footer class="py-4 bg-light mt-auto">
    <div class="container-fluid">
        <div class="d-flex align-items-center justify-content-center small">
            <div class="text-muted">Copyright &copy; TIFTECH UMRI <?= date('Y') ?></div>
        </div>
    </div>
</footer>
</div>
</div>

<script src="https://code.jquery.com/jquery-3.4.1.min.js" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
<script src="<?= site_url('assets/admin/') ?>js/scripts.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
<!-- <script src="<?= site_url('assets/admin/') ?>assets/demo/chart-area-demo.js"></script>
<script src="<?= site_url('assets/admin/') ?>assets/demo/chart-bar-demo.js"></script> -->
<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" crossorigin="anonymous"></script>
<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" crossorigin="anonymous"></script>
<script src="<?= site_url('assets/admin/') ?>assets/demo/datatables-demo.js"></script>

<script>
    $(function() {
        $("#is_active").click(function() {
            // const id = $(this).data('sliderid')
            // const aktif = $(this).data('isactive')

            console.log("berhasil")
        })
    });
</script>

<script>
    $(document).ready(function() {
        $('#exampleModal').on('show.bs.modal', function(event) {
            var button = $(event.relatedTarget) // Button that triggered the modal
            var idPage = button.data('idpage') // Extract info from data-* attributes
            var method = button.data('method')
            // If necessary, you could initiate an AJAX request here (and then do the updating in a callback).
            // Update the modal's content. We'll use jQuery here, but you could use a data binding library or other methods instead.

            $('#hapus').attr("href", "<?= base_url('admin/') ?>" + method + "/" + idPage)
        })
    });
</script>

<script>
    $(function() {
        $("#link").change(function() {
            let link = $('#link').val()
            if (link === "link") {
                $("#pilihanPage").remove()
                $("#pilihan-link").append(
                    $('<input>', {
                        type: 'text',
                        class: "form-control",
                        name: "link",
                        id: "pilihanPage",
                        placeholder: "Masukkan link"
                    })
                )
            } else {
                $.ajax({
                    method: "GET",
                    url: "<?= base_url('admin/datapage') ?>"
                }).done(function(data) {
                    $("#pilihanPage").remove()
                    $("#pilihan-link").append(
                        $('<select>', {
                            type: 'text',
                            class: "form-control",
                            name: "link",
                            id: "pilihanPage"
                        })
                    )
                    $("#pilihanPage").append(new Option('Pilih'))
                    let j = JSON.parse(data)
                    for (let i = 0; i < j.length; i++) {
                        $("#pilihanPage").append(new Option(j[i].judul, "<?= base_url('page/detail/') ?>" + j[i].id_page))
                        // console.log(j[i])
                    }
                })
            }
        })
    });
</script>




</body>

</html>