
        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">
				<ul class="metismenu" id="menu">
            <li class="<?php if($for == 'dashboard'){echo "mm-active";} ?>">
              <a href="<?= base_url('admin/'); ?>" class="ai-icon" aria-expanded="true">
                <i class="flaticon-381-networking"></i>
                <span class="nav-text">Dashboard</span>
              </a>
            </li>
            <li class="<?php if($for == 'datamerk'){echo "mm-active";} ?>">
              <a href="<?= base_url('admin/datamerk'); ?>" class="ai-icon" aria-expanded="false">
                <i class="flaticon-381-television"></i>
                <span class="nav-text">Data Merk</span>
              </a>
            </li>
            <li><a class="has-arrow ai-icon" href="javascript:void()" aria-expanded="false">
							<i class="flaticon-381-layer-1"></i>
							<span class="nav-text">Pages</span>
						</a>
                        <ul aria-expanded="false">
                            <li><a href="./page-register.html">Register</a></li>
                            <li><a href="./page-login.html">Login</a></li>
                            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Error</a>
                                <ul aria-expanded="false">
                                    <li><a href="./page-error-400.html">Error 400</a></li>
                                    <li><a href="./page-error-403.html">Error 403</a></li>
                                    <li><a href="./page-error-404.html">Error 404</a></li>
                                    <li><a href="./page-error-500.html">Error 500</a></li>
                                    <li><a href="./page-error-503.html">Error 503</a></li>
                                </ul>
                            </li>
                            <li><a href="./page-lock-screen.html">Lock Screen</a></li>
                        </ul>
                    </li>
                </ul>
				<div class="add-menu-sidebar">
					<img src="<?= base_url('assets'); ?>/images/calendar.png" alt="" class="mr-3">
					<p class="font-w500 mb-0">Build Your Custom PC Now</p>
				</div>
				<div class="copyright">
					<p><strong>Rafikbojes</strong> © 2021 All Rights Reserved</p>
					<p>Made with <span class="heart"></span> by DexignZone</p>
				</div>
			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->
