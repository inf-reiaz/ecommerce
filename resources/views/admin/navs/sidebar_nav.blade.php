
            <aside id="aside" class="ui-aside">
                <ul class="nav" ui-nav>
                    <li class="nav-head">
                        <h5 class="nav-title text-uppercase light-txt">Navigation</h5>
                    </li>
                    <li class="active">
                        <a href="{{ route('dashboard') }}"><i class="fa fa-home"></i><span>Dashboard</span></a>
                    </li>
                    <?php $u = Auth::user();?>
                    @if($u->roles->name == 'dev')
                    <li class="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/roles','admin/roles/create','admin/permissions','admin/permissions/create']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-users"></i><span>Users & Roles </span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/roles','admin/roles/create','admin/permissions','admin/permissions/create']) ? 'display: block' : '' }}">
                            <li class="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user']) ? 'active' : '' }}">
                                <a href=""><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub" style="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user']) ? 'display: block' : '' }}">
                                    <li class="{{ Request::is( 'admin/all-user') ? 'active' : '' }}"><a href="{{ action('UsersController@getAllUser') }}"><span>All Users </span></a></li>
                                    <li class="{{ Request::is( 'admin/user-create') ? 'active' : '' }}"><a href="{{ action('UsersController@getUserCreate') }}"><span>Create User </span></a></li>
                                    <li class="{{ Request::is( 'admin/block-user') ? 'active' : '' }}"><a href="{{ route('blockuser') }}"><span>Block User </span></a></li>
                                </ul>
                            </li>
                            <li  class="{{ Request::is(['admin/roles','admin/roles/create']) ? 'active' : '' }}">
                                <a href=""><span>Role</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub" style="{{ Request::is(['admin/roles','admin/roles/create']) ? 'display: block' : '' }}">
                                    <li class="{{ Request::is( 'admin/roles') ? 'active' : '' }}" ><a href="{{ action('RolesController@index') }}"><span>All Roles </span></a></li>
                                    <li class="{{ Request::is( 'admin/roles/create') ? 'active' : '' }}"><a href="{{ action('RolesController@create') }}"><span>Create Role </span></a></li>
                                </ul>
                            </li>
                            <li class="{{ Request::is(['admin/permissions','admin/permissions/create']) ? 'active' : '' }}">
                                <a href=""><span>Permissions</span><i class="fa fa-angle-right pull-right"></i></a>
                                <ul class="nav nav-sub" style="{{ Request::is(['admin/permissions','admin/permissions/create']) ? 'display: block' : '' }}">
                                    <li class="{{ Request::is( 'admin/permissions') ? 'active' : '' }}"><a href="{{ action('PermissionController@index') }}"><span> All Permissions </span></a></li>
                                    <li class="{{ Request::is( 'admin/permissions/create') ? 'active' : '' }}"><a href="{{ action('PermissionController@create') }}"><span>Create Permission</span></a></li>
                                </ul>
                            </li>
                        </ul>
                    </li>
                    @else
                    <li class="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/subscriber']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-users"></i><span>Users</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub"  style="{{ Request::is(['admin/all-user','admin/user-create','admin/block-user','admin/subscriber']) ? 'display: block' : '' }}">
                            <li class="{{ Request::is('admin/all-user') ? 'active' : '' }}"><a href="{{ route('alluser') }}"><span>All Users</span></a></li>
                            <li class="{{ Request::is('admin/block-user') ? 'active' : '' }}"><a href="{{ route('blockuser') }}"><span>Block User</span></a></li>
                            <li class="{{ Request::is('admin/subscriber') ? 'active' : '' }}"><a href="{{ route('subscriber') }}"><span>Subscriber</span></a></li>
                        </ul>
                    </li>
                    @endif
                    

                    <li class="{{ Request::is(['admin/settings','admin/meta-tag']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-server"></i><span>Settings</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub"  style="{{ Request::is( 'admin/settings') ? 'display: block' : '' }} {{ Request::is( 'admin/meta-tag') ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Settings</span></a></li>
                            <li class="{{ Request::is( 'admin/settings') ? 'active' : '' }}"><a href="{{ action('SettingsController@index') }}"><span>App Settings</span></a></li>
                            <li class="{{ Request::is( 'admin/meta-tag') ? 'active' : '' }}"><a href="{{ action('MetaSettingsController@index') }}"><span>Meta Settings</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/products','admin/products/create','admin/product-search','admin/products-search']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-server"></i><span> Products</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub"   style="{{ Request::is(['admin/products','admin/products/create','admin/product-search','admin/products-search']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Products</span></a></li>
                            <li class="{{ Request::is( 'admin/products') ? 'active' : '' }}"><a href="{{ action('ProductsController@index') }}"><span>All Product</span></a></li>
                            <li class="{{ Request::is( 'admin/products/create') ? 'active' : '' }}"><a href="{{ action('ProductsController@create') }}"><span>Add New Product</span></a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/orders','admin/orders-search','admin/order-search']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-server"></i><span> Orders</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/orders','admin/orders-search','admin/order-search']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Orders</span></a></li>
                            <li  class="{{ Request::is(['admin/orders']) ? 'active' : '' }}"><a href="{{ action('AdminOrder@index') }}"><span>All Orders</span></a></li>
                        </ul>
                    </li>
                    
                    
                    
                    <li class="{{ Request::is(['admin/offer-sliders','admin/offer-sliders/create']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-server"></i><span> Offer Slider</span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub" style="{{ Request::is(['admin/offer-sliders','admin/offer-sliders/create']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Offer Slider</span></a></li>
                            <li class="{{ Request::is(['admin/offer-sliders']) ? 'active' : '' }}"><a href="{{ action('SlidersController@index') }}"><span>All Offer Slider</span></a></li>
                            <li class="{{ Request::is(['admin/offer-sliders/create']) ? 'active' : '' }}"><a href="{{ action('SlidersController@create') }}"><span>Add Offer Slider </span></a></li>
                        </ul>
                    </li>
                    
                    <li class="{{ Request::is(['admin/subscriber']) ? 'active' : '' }}">
                        <a href="{{ action('DashboardController@subscriber') }}"><i class="fa fa-server"></i><span> Subscribe </span></a>
                    </li>

                    
                    <li class="{{ Request::is(['admin/my-strock','admin/my-strock-search','admin/my-strock-search-by-date']) ? 'active' : '' }}">
                        <a href="#"><i class="fa fa-server"></i><span> Stock Management </span><i class="fa fa-angle-right pull-right"></i></a>
                        <ul class="nav nav-sub"  style="{{ Request::is(['admin/my-strock','admin/my-strock-search','admin/my-strock-search-by-date']) ? 'display: block' : '' }}">
                            <li class="nav-sub-header"><a href="#"><span>Stock Management</span></a></li>
                            <li class="{{ Request::is(['admin/my-strock']) ? 'active' : '' }}"><a href="{{ action('StockManagement@index') }}"><span>My Strok</span></a></li>
                        </ul>
                    </li>

                </ul>
            </aside>
            