                    </section>
               </div>
               <footer class="main-footer">
                    <div class="pull-right hidden-xs">Anything you want</div>
                    <strong>Copyright &copy; <?php echo date("Y"); ?> <a href="#">Proweaver,Inc</a>.</strong> All rights reserved.
               </footer>
               <div class="control-sidebar-bg"></div>
          </div>

            <script src="<?php echo base_url('static/js/jquery.min.js'); ?>"></script>
            <script src="<?php echo base_url('static/js/bootstrap.min.js'); ?>"></script>
            <script src="<?php echo base_url('static/js/adminlte.min.js'); ?>"></script>
            <script src="<?php echo base_url('static/js/icheck.min.js'); ?>"></script>
            <script src="<?php echo base_url('static/js/script.js'); ?>"></script>
            <script>
                $(document).ready(function(){
                    $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                        checkboxClass: 'icheckbox_minimal-blue',
                        radioClass   : 'iradio_minimal-blue'
                    });
                });
            </script>
     </body>
</html>
