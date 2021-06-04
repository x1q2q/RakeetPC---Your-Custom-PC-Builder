<?php $this->load->view($template); ?>
    <!--**********************************
        Footer start
    ***********************************-->
    <div class="footer">
        <div class="copyright">
            <p>Copyright © <strong>Rafikbojes</strong><br/> Designed &amp; Developed by <a href="http://dexignzone.com/" target="_blank">DexignZone</a> 2020</p>
        </div>
    </div>
    <!--**********************************
        Footer end
    ***********************************-->
</div>

<!--**********************************
    Scripts
***********************************-->
<!-- Required vendors -->
<script src="<?= base_url('assets'); ?>/vendor/jquery/jquery.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/global/global.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/chart.js/Chart.bundle.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/custom.min.js"></script>
<script src="<?= base_url('assets'); ?>/js/deznav-init.js"></script>
<script src="<?= base_url('assets'); ?>/vendor/owl-carousel/owl.carousel.js"></script>

<?php if($for == 'dashboard'){ ?>
  <!-- Chart piety plugin files -->
  <script src="<?= base_url('assets'); ?>/vendor/peity/jquery.peity.min.js"></script>
  <!-- Apex Chart -->
  <script src="<?= base_url('assets'); ?>/vendor/apexchart/apexchart.js"></script>
  <!-- Dashboard 1 -->
  <script src="<?= base_url('assets'); ?>/js/dashboard/dashboard-1.js"></script>
<?php }else if($for == 'datamerk'){ ?>

  <!-- Datatable -->
  <script src="<?=base_url('assets'); ?>/vendor/datatables/js/jquery.dataTables.min.js"></script>
  <script src="<?=base_url('assets'); ?>/js/plugins-init/datatables.init.js"></script>
<?php } ?>

</body>
</html>
