
</div>
<div class="container">
<!-- Footer pied de page -->
<footer>
    <div class="row justify-content-center mt-2 pt-5">
        <img id="bas" class="img-fluid" src="<?= base_url('assets/images/FOOTER/footer_revisiter.png); ?>" alt="Image_footer">
    </div>
</footer>

</div>

<!---- Lien Popover----->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

<!-- -- -- -- Script pour bootstrap -- -- -- -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<!------- fonction js pour animation poppver -------> 
    <script>
        $(document).ready(function() {
            $('[data-toggle="popover"]').popover({
                placement: 'bottom'
            });
        });
    </script>
<!-------- verification formulaire js ---------->
<script src ="../public/js/verif_formulaire.js"></script>

</body>
</html>