<?= $this->private(); ?>

<h6 class="text-center">Section <b>Dashboard</b>: content</h6>

<canvas id="myChart" width="400" height="100"></canvas>

<script>
    section_scripts = JSON.parse('<?= json_encode($scripts); ?>')
</script>