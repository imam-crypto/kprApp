<footer class="sticky-footer bg-info">
    <div class="container my-2 p-2">
        <div class="copyright text-center my ">
            <span class="text text-light">Copyright &copy; Colaboration with Purnama Tech</span>
        </div>
    </div>
</footer>


<script src="https://js.pusher.com/7.0/pusher.min.js"></script>
<script>
    // Enable pusher logging - don't include this in production
    Pusher.logToConsole = true;

    var pusher = new Pusher('b27ae1d57367681044fc', {
        cluster: 'ap1'
    });

    var channel = pusher.subscribe('my-channel');
    channel.bind('my-event', function(data) {
        alert(JSON.stringify(data));
    });
</script>


</div> <!-- .site-wrap -->
<script src=" <?= base_url('assets/assets_admin') ?>/js/dist/new.js "></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/jquery-3.3.1.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/jquery-migrate-3.0.1.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/jquery-ui.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/popper.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/bootstrap.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/owl.carousel.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/jquery.stellar.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/jquery.countdown.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/bootstrap-datepicker.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/jquery.easing.1.3.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/aos.js"></script>
<script src="j<?= base_url('assets/assets_shop') ?>/s/jquery.fancybox.min.js"></script>
<script src="<?= base_url('assets/assets_shop') ?>/js/jquery.sticky.js"></script>
<script src=" <?= base_url('assets/assets_admin') ?>/js/dist/sweetalert2.all.min.js "></script>

<script src="<?= base_url('assets/assets_shop') ?>/js/main.js"></script>

</body>

</html>