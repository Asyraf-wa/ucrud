<?php 
	$c_name = $this->request->getParam('controller');
	$a_name = $this->request->getParam('action');
	//echo $c_name;
	//exit;
?>
<!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.html" class="app-brand-link">
              
              <span class="app-brand-text demo menu-text fw-bolder ms-2">
<style>
.gradient-text {
    display: inline-block;
    font: bold 4.5em/1.5 Bebas, sans-serif;
    color: #5CA17C; /*non-webkit fallback*/
    font-size: 24px;
    text-transform: uppercase;
    background: -webkit-linear-gradient(135deg, #FF9F65, #DED37E, #26BDA6);
    -webkit-background-clip: text;
    -webkit-text-fill-color: transparent;
    padding-bottom: .2em;
    margin-bottom: 0;
    border-bottom: 1px solid #5CA17C;
}
.gradient-animate {
    font-family: 'Tourney', cursive;
    font-weight: 700;
    font-size:30px;
    text-transform:uppercase;
    color: transparent;
        background: linear-gradient(135deg, #1e5799, #2ce0bf, #76dd2c, #dba62b, #e02cbf, #1e5799);
    background-size: 1000px 100%;
    animation: bg 50s linear infinite;
    background-clip: text;
    -webkit-background-clip: text;
    padding-left: 10px
}

.gradient-animate-small {
    font-family: 'Tourney', cursive;
    font-weight: 700;
    font-size:25px;
    text-transform:uppercase;
    color: transparent;
        background: linear-gradient(135deg, #1e5799, #2ce0bf, #76dd2c, #dba62b, #e02cbf, #1e5799);
    background-size: 1000px 100%;
    animation: bg 50s linear infinite;
    background-clip: text;
    -webkit-background-clip: text;
    //padding-left: 10px
}

@keyframes bg {
    0% {
        background-position-x: 0;
    }
    100% {
        background-position-x: 10000px;
    }
}
</style>

	
			<div id="logoFade" class="logo-fade hide"><b class="gradient-animate-small">&lt;&#47;&gt; Code The Pixel</b></div>
			  </span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
			  <i class="fas fa-chevron-left fa-sm" style="padding-left:8px;padding-top:12px;"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
            <!-- Dashboard -->
			<li class="menu-item <?= $c_name == 'Dashboards' && $a_name == 'index'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-solid fa-code"></i> Dashboard'), ['controller' => 'Dashboards', 'action' => 'index', 'prefix' => false], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
			<li class="menu-item <?= $c_name == 'Faqs' && $a_name == 'index'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-regular fa-circle-question"></i> FAQ'), ['controller' => 'Faqs', 'action' => 'index', 'prefix' => false], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
			<li class="menu-item <?= $c_name == 'Contact' && $a_name == 'index'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-regular fa-message"></i> Contact Us'), ['controller' => 'Contacts', 'action' => 'index', 'prefix' => false], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
			
            
            <!-- My Account -->
            <li class="menu-header small text-uppercase"><span class="menu-header-text">My Account</span></li>
            <!-- Cards -->
            <li class="menu-item <?= $c_name == 'Users' && $a_name == 'profile'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-solid fa-user-tie"></i> Profile'), ['controller' => 'Users', 'action' => 'index', 'prefix' => false], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
            <li class="menu-item <?= $c_name == 'Users' && $a_name == 'update_password'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-solid fa-unlock-keyhole"></i> Password'), ['controller' => 'Users', 'action' => 'index', 'prefix' => false], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
            <!-- Administrator -->
            <li class="menu-header small text-uppercase">
              <span class="menu-header-text">Administrator</span>
            </li>
			<li class="menu-item <?= $c_name == 'Users' && $a_name == 'index'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-solid fa-users-viewfinder"></i> User List'), ['prefix' => 'Admin', 'controller' => 'Users', 'action' => 'index'], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
			<li class="menu-item <?= $c_name == 'Settings' && $a_name == 'update'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-solid fa-gear"></i> Configuration'), ['prefix' => 'Admin', 'controller' => 'Settings', 'action' => 'update','1'], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
			<li class="menu-item <?= $c_name == 'todos' && $a_name == 'index'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fa-solid fa-list-check"></i> Todo'), ['prefix' => 'Admin', 'controller' => 'Todos', 'action' => 'index'], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
			<li class="menu-item <?= $c_name == 'audits' && $a_name == 'update'?'active':'' ?>">
              <?= $this->Html->link(__('<i class="menu-icon fas fa-bars"></i> Audit Trail'), ['prefix' => 'Admin', 'controller' => 'Audit', 'action' => 'index'], ['class' => 'menu-link', 'escape' => false]) ?>
            </li>
            <li class="menu-item">
              <a href="javascript:void(0);" class="menu-link menu-toggle">
                <i class="menu-icon fas fa-bars"></i>
                <div data-i18n="Account Settings">User Management</div>
              </a>
              <ul class="menu-sub">
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">User List</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-account.html" class="menu-link">
                    <div data-i18n="Account">User Log</div>
                  </a>
                </li>
                <li class="menu-item">
                  <a href="pages-account-settings-notifications.html" class="menu-link">
                    <div data-i18n="Notifications">User Email</div>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </aside>
        <!-- / Menu -->