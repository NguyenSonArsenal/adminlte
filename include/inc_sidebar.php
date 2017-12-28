<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar" style="height: auto;">
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu tree" data-widget="tree">
            <li class="<?= isset($menuActive) && $menuActive=='campaignConstruction' ? 'menu-active' : ''?>">
                <a href="./campaign_construction.php">
                    <i class="fa fa-book"></i>
                    <span>Xây dựng chiến dịch</span>
                </a>
            </li>
            <li class="<?= isset($menuActive) && $menuActive == 'campaign' ? 'menu-active' : '' ?>">
                <a href="./campaign.php">
                    <i class="fa fa-book"></i>
                    <span>Chiến dịch</span>
                </a>
            </li>
            <li class="<?= isset($menuActive) && $menuActive=='landingPage' ? 'menu-active' : ''?>">
                <a href="./landing_page.php">
                    <i class="fa fa-book"></i>
                    <span>Landing page</span>
                </a>
            </li>
            <li class="<?= isset($menuActive) && $menuActive=='product' ? 'menu-active' : ''?>">
                <a href="./product.php">
                    <i class="fa fa-book"></i>
                    <span>Sản phẩm</span>
                </a>
            </li>
            <li class="<?= isset($menuActive) && $menuActive=='channel' ? 'menu-active' : ''?>">
                <a href="./channel.php">
                    <i class="fa fa-book"></i>
                    <span>Kênh</span>
                </a>
            </li>
            <li class="<?= isset($menuActive) && $menuActive=='customerGoal' ? 'menu-active' : ''?>">
                <a href="./customer_goal.php">
                    <i class="fa fa-book"></i>
                    <span>Khách hàng mục tiêu</span>
                </a>
            </li>
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
