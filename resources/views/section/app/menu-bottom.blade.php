<div id="footer-bar" class="footer-bar-1">
    <a href="/app" class="{{ Request::is('app') ? 'active-nav' : '' }}"><i class="fa fa-home"></i><span>Home</span></a>
    <a href="/app/web" class="{{ Request::is('app/web') ? 'active-nav' : '' }}"><i
            class="fa fa-globe"></i><span>Web</span></a>
    <a href="/app/mobile" class="{{ Request::is('app/mobile') ? 'active-nav' : '' }}"><i
            class="fa fa-mobile"></i><span>Mobile</span></a>
    <a href="/app/desktop" class="{{ Request::is('app/desktop') ? 'active-nav' : '' }}"><i
            class="fa fa-desktop"></i><span>Desktop</span></a>
    <a href="#" class="{{ Request::is('app/user') ? 'active-nav' : '' }}" data-menu="menu-signin"><i
            class="fa fa-user"></i><span>Account</span></a>
</div>
