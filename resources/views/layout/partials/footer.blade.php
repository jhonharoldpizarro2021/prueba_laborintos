<footer class="text-muted">
    <div class="container">
        <p class="float-right">
            <a href="#">Back to top</a>
        </p>
        <p>Album example is &copy; Bootstrap, but please download and customize it for yourself!</p>
        <p>New to Bootstrap? <a href="../../">Visit the homepage</a> or read our <a
                href="../../getting-started/">getting started guide</a>.</p>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    <script>
        jQuery(document).ready(function() {
            jQuery('.has-animation').each(function(index) {
                jQuery(this).delay($(this).data('delay')).queue(function() {
                    jQuery(this).addClass('animate-in');
                });
            });
        });

        if ("loading" in HTMLImageElement.prototype) {
            console.log("Browser support `loading`...");
        } else {
            console.log("Not supported");
        }

    </script>
</footer>
