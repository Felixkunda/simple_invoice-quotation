</style>
<!-- Main Sidebar Container -->
      <aside class="main-sidebar sidebar-light-maroon elevation-4 sidebar-no-expand">
        <!-- Brand Logo -->
        <a href="<?php echo base_url ?>admin" class="brand-link bg-maroon text-sm">
        <img src="<?php echo validate_image($_settings->info('logo'))?>" alt="Store Logo" class="brand-image img-circle elevation-3" style="opacity: .8;
                            width: 30px;
                            height: 30px;
                            max-height: unset;
                            background: white;">
        <span class="brand-text font-weight-light"><?php echo $_settings->info('short_name') ?></span>
        </a>
        <!-- Sidebar -->
        <div class="sidebar os-host os-theme-light os-host-overflow os-host-overflow-y os-host-resize-disabled os-host-transition os-host-scrollbar-horizontal-hidden">
          <div class="os-resize-observer-host observed">
            <div class="os-resize-observer" style="left: 0px; right: auto;"></div>
          </div>
          <div class="os-size-auto-observer observed" style="height: calc(100% + 1px); float: left;">
            <div class="os-resize-observer"></div>
          </div>
          <div class="os-content-glue" style="margin: 0px -8px; width: 249px; height: 646px;"></div>
          <div class="os-padding">
            <div class="os-viewport os-viewport-native-scrollbars-invisible" style="overflow-y: scroll;">
              <div class="os-content" style="padding: 0px 8px; height: 100%; width: 100%;">
                <!-- Sidebar user panel (optional) -->
                <div class="clearfix"></div>
                <!-- Sidebar Menu -->
                <nav class="mt-4">
                   <ul class="nav nav-pills nav-sidebar flex-column text-sm nav-compact nav-flat nav-child-indent nav-collapse-hide-child" data-widget="treeview" role="menu" data-accordion="false">
                    <li class="nav-item dropdown">
                      <a href="./" class="nav-link nav-home">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                          Dashboard
                        </p>
                      </a>
                      <!--Invoice start-->
                    </li> 
                    <li class="nav-header">Invoices</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=invoice" class="nav-link nav-invoice">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                          All invoice Records
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=invoice/manage" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                          New Invoice (Physical courses)
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=invoice/manage&type=2" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                          New Invoice (Online Courses)
                        </p>
                      </a>
                    </li>
                    <!--Invoice end-->
                    
                    
                    <!--QUOTATION START -->
                    
                    <li class="nav-header">Quotaion</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=Quotation" class="nav-link nav-invoice">
                        <i class="nav-icon fas fa-file-invoice"></i>
                        <p>
                          All Quoation Records
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=Quotation/manage" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                          New Quotation (Physical courses)
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=Quotation/manage&type=2" class="nav-link">
                        <i class="nav-icon fas fa-plus"></i>
                        <p>
                          New Quotation (Online Courses)
                        </p>
                      </a>
                    </li>
                    
                    <!--Quotation end-->
                    <li class="nav-header">Master List</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=category" class="nav-link nav-category">
                        <i class="nav-icon fas fa-th-list"></i>
                        <p>
                          Category List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=product" class="nav-link nav-product">
                        <i class="nav-icon fas fa-box"></i>
                        <p>
                          Product List
                        </p>
                      </a>
                    </li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=service" class="nav-link nav-service">
                        <i class="nav-icon fas fa-hands-helping"></i>
                        <p>
                          Service List
                        </p>
                      </a>
                    </li>
                    <li class="nav-header">Report</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=report" class="nav-link nav-report">
                        <i class="nav-icon fas fa-calendar-week"></i>
                        <p>
                          Generate Report
                        </p>
                      </a>
                    </li>
                    <li class="nav-header">Others</li>
                    <li class="nav-item dropdown">
                      <a href="<?php echo base_url ?>admin/?page=system_info" class="nav-link nav-system_info">
                        <i class="nav-icon fas fa-cogs"></i>
                        <p>
                          Settings
                        </p>
                      </a>
                    </li>
                  </ul>
                </nav>
                <!-- /.sidebar-menu -->
              </div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-horizontal os-scrollbar-unusable os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="width: 100%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar os-scrollbar-vertical os-scrollbar-auto-hidden">
            <div class="os-scrollbar-track">
              <div class="os-scrollbar-handle" style="height: 55.017%; transform: translate(0px, 0px);"></div>
            </div>
          </div>
          <div class="os-scrollbar-corner"></div>
        </div>
        <!-- /.sidebar -->
      </aside>
      <script>
    $(document).ready(function(){
      var page = '<?php echo isset($_GET['page']) ? $_GET['page'] : 'home' ?>';
      var s = '<?php echo isset($_GET['s']) ? $_GET['s'] : '' ?>';
      page = page.split('/');
      page = page[0];
      if(s!='')
        page = page+'_'+s;

      if($('.nav-link.nav-'+page).length > 0){
             $('.nav-link.nav-'+page).addClass('active')
        if($('.nav-link.nav-'+page).hasClass('tree-item') == true){
            $('.nav-link.nav-'+page).closest('.nav-treeview').siblings('a').addClass('active')
          $('.nav-link.nav-'+page).closest('.nav-treeview').parent().addClass('menu-open')
        }
        if($('.nav-link.nav-'+page).hasClass('nav-is-tree') == true){
          $('.nav-link.nav-'+page).parent().addClass('menu-open')
        }

      }
     
    })
  </script>