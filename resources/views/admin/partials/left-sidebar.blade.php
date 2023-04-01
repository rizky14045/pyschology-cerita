<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li>
                    <a href="{{url('admin')}}" class="waves-effect">
                        <i class="fas fa-home"></i>
                        <span> Dashboard </span>
                    </a>
                </li>

                <li>
                    <a href="{{route('admin.pyschology-order.index')}}" class="waves-effect">
                        <i class="fas fa-table"></i>
                        <span>Pyschology Order</span>
                    </a>
                </li>
                <li>
                    <a href="{{route('admin.article.index')}}" class="waves-effect">
                        <i class="far fa-newspaper"></i>
                        <span>Article</span>
                    </a>
                </li>
                <li>
                    <a href="#" class="waves-effect">
                        <i class="far fa-file-excel"></i>
                        <span>Export Data</span>
                    </a>
                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="fas fa-database"></i>
                        <span>Master Data</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li>
                            <a href="{{route('admin.pyschology.index')}}"><i class="fas fa-users"></i>Pyschology</a>
                        </li>
                        <li>
                            <a href="{{route('admin.testimony.index')}}"><i class="fas fa-clock
                                "></i>Testimony</a>
                        </li>
                        <li>
                            <a href="{{route('admin.faq.index')}}"><i class="fas fa-question-circle
                                "></i>Faq</a>
                        </li>
                        <li>
                            <a href="{{route('admin.topic.index')}}"><i class="fas fa-star
                                "></i>Topic</a>
                        </li>
                        <li>
                            <a href="{{route('admin.product.index')}}"><i class="fas fa-desktop
                                "></i>Product</a>
                        </li>
                        <li>
                            <a href="{{route('admin.price.index')}}"><i class="fas fa-money-bill
                                "></i>Price</a>
                        </li>
                        <li>
                            
                            
                            <a href="{{route('admin.user.index')}}"><i class="fas fa-user"></i>User</a>
                        </li>
                        <li>
                            <a href="{{route('admin.settings.general.index')}}"><i class="fas fa-cog"></i>Setting</a>
                        </li>
                    </ul>
                </li>


    

            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>