<?= $this->private(); ?>

<div class="wrap">
    <div class="row">
        <div class="col-md-12">
            <h1 class="wp-heading-inline">PR Custom</h1> <small>A fancy Wordpress sample plugin stater.</small>
        </div>
    </div>
    <hr class="wp-header-end">

    <div class="row">

        <div id="page-nav" class="col-md-12">
            <?= $this->view('admin._common.page-nav', ['sections' => $route['sections']]); ?>
        </div>

        <div id="section-content" class="col-md-12"></div>

    </div>

    <script>
        const $ = jQuery.noConflict(); // mandatory to use WP JQuery for plugin js scripts
        const nonce = '<?= $nonce ?>'
        const jsAdmin = '/wp-content/plugins/pr-custom/view/assets/js/admin/'

        let page = '<?= $route['page'] ?>'
        let section = '<?= $route['section'] ?>'
        let section_scripts = JSON.parse('{}')

    </script>
</div>