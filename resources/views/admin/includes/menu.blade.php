<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

                <li>
                    <a href="{{ route('dashboard') }}" class="waves-effect">
                        <i class="bx bx-home-circle"></i>
                        <span>Dashboards</span>
                    </a>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Blog Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('add-blog-category') }}">Add Category</a></li>
                        <li><a href="{{ route('manage-blog-category') }}">Manage Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Blog Sub Category</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blog-sub-categories.create') }}">Add Sub Category</a></li>
                        <li><a href="{{ route('blog-sub-categories.index') }}">Manage Sub Category</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Blogs</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('blogs.create') }}">Add Blog</a></li>
                        <li><a href="{{ route('blogs.index') }}">Manage Blog</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Services</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('services.create') }}">Add Service</a></li>
                        <li><a href="{{ route('services.index') }}">Manage Service</a></li>
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="bx bx-layout"></i>
                        <span>Articles</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('articles.create') }}">Add Article</a></li>
                        <li><a href="{{ route('articles.index') }}">Manage Article</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Sidebar -->
    </div>
</div>
