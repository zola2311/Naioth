<div class="vertical-menu">

    <div data-simplebar class="h-100">

        <!-- User details -->


        <!--- Sidemenu -->
        <div id="sidebar-menu">
            <!-- Left Menu Start -->
            <ul class="metismenu list-unstyled" id="side-menu">
                <li class="menu-title">Menu</li>

{{--                <li>--}}
{{--                    <a href="index.html" class="waves-effect">--}}
{{--                        <i class="ri-dashboard-line"></i><span class="badge rounded-pill bg-success float-end">3</span>--}}
{{--                        <span>Dashboard</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

{{--                <li>--}}
{{--                    <a href="calendar.html" class=" waves-effect">--}}
{{--                        <i class="ri-calendar-2-line"></i>--}}
{{--                        <span>Calendar</span>--}}
{{--                    </a>--}}
{{--                </li>--}}

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Gallery Category Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('categories.index')}}">All Categories</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('gallery.categories.create')}}">Create gallery category</a></li>

                    </ul>


                </li>

               <li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Gallery images Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.images')}}">All Images</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('images.upload')}}">Upload images</a></li>

                    </ul>


                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Testimony Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.testimony')}}">Create testimonys</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.testimonies')}}">All testimonies</a></li>

                    </ul>


                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Article Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.article')}}">Create Article</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.articles')}}">All Articles</a></li>

                    </ul>


                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Shorts Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.short')}}">Create Short</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.shorts')}}">All Short</a></li>

                    </ul>


                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Sermons Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.sermon')}}">Create Sermon</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.sermons')}}">All Sermons</a></li>

                    </ul>


                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Series Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.series')}}">Create Series</a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.series')}}">All Series</a></li>

                    </ul>


                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Prayers Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.prayer')}}">Create Prayers </a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.prayers')}}">All Prayers </a></li>

                    </ul>


                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Events Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.event')}}">Create Event </a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.events')}}">All Events </a></li>

                    </ul>


                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Member Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.member')}}">Create Member </a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.members')}}">All Member </a></li>

                    </ul>


                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-mail-send-line"></i>
                        <span>Worships Setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('create.worship')}}">Upload Worships </a></li>
                    </ul>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{route('all.worships')}}">All Worships </a></li>

                    </ul>
                </li>

                <li class="menu-title">Pages</li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-account-circle-line"></i>
                        <span>Contacts</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
                        <li><a href="{{ route('contact.message') }}">Contact messages</a></li>
{{--                        <li><a href="{{ route('add.blog.category') }}">Add Blog Category</a></li>--}}
                    </ul>
                </li>

                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Blog Page</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
{{--                        <li><a href="{{ route('all.blog') }}">All Blog</a></li>--}}

{{--                        <li><a href="{{ route('add.blog') }}">Add Blog</a></li>--}}

{{--                <li>--}}




{{--                    <a href="javascript: void(0);" class="has-arrow waves-effect">--}}
{{--                        <i class="ri-profile-line"></i>--}}
{{--                        <span>Utility</span>--}}
{{--                    </a>--}}
{{--                    <ul class="sub-menu" aria-expanded="false">--}}
{{--                        <li><a href="pages-starter.html">Starter Page</a></li>--}}
{{--                        <li><a href="pages-timeline.html">Timeline</a></li>--}}
{{--                        <li><a href="pages-directory.html">Directory</a></li>--}}
{{--                        <li><a href="pages-invoice.html">Invoice</a></li>--}}
{{--                        <li><a href="pages-404.html">Error 404</a></li>--}}
{{--                        <li><a href="pages-500.html">Error 500</a></li>--}}
                    </ul>
{{--                </li>--}}


                <li class="menu-title">Components</li>


            </ul>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Footer page setup</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
{{--                        <li><a href="{{ route('footer.setup') }}">Footer setup</a></li>--}}
                    </ul>

                </li>
                <li>
                    <a href="javascript: void(0);" class="has-arrow waves-effect">
                        <i class="ri-profile-line"></i>
                        <span>Contact message</span>
                    </a>
                    <ul class="sub-menu" aria-expanded="false">
{{--                        <li><a href="{{ route('contact.message') }}">Contact message</a></li>--}}
                    </ul>

                </li>
        </div>
        <!-- Sidebar -->
    </div>
</div>
