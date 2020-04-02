<!--sidebar-menu-->
<div id="sidebar"><a href="{{url('/trader')}}" class="visible-phone"><i class="icon icon-home"></i> Dashboard</a>
    <ul>
        <li {{$menu_active==1? ' class=active':''}}><a href="{{url('/trader')}}"><i class="icon icon-home"></i> <span>Dashboard</span></a> </li>
        <li class="submenu {{$menu_active==2? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Categories</span></a>
            <ul>
                <li><a href="{{url('/trader/category/create')}}">Add New Category</a></li>
                <li><a href="{{url('/trader/category')}}">List Categories</a></li>
            </ul>
        </li>
        <li class="submenu {{$menu_active==3? ' active':''}}"> <a href="#"><i class="icon icon-th-list"></i> <span>Products</span></a>
            <ul>
                <li><a href="{{url('/trader/product/create')}}">Add New Products</a></li>
                <li><a href="#">List Products</a></li>
            </ul>
        </li>
       
    </ul>
</div>
<!--sidebar-menu-->