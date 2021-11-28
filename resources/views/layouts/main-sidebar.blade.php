<!-- main-sidebar -->
		<div class="app-sidebar__overlay" data-toggle="sidebar"></div>
		<aside class="app-sidebar sidebar-scroll">
			<div class="main-sidebar-header active">
				<a class="desktop-logo logo-light active" href="{{ url('/' . $page='home') }}"><img src="{{asset('assets/img/brand/logo.png')}}" class="main-logo" alt="logo"></a>
				<a class="desktop-logo logo-dark active" href="{{ url('/' . $page='home') }}"><img src="{{asset('assets/img/brand/logo.png')}}" class="main-logo dark-theme" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-light active" href="{{ url('/' . $page='home') }}"><img src="{{asset('assets/img/brand/logo2.png')}}" class="logo-icon" alt="logo"></a>
				<a class="logo-icon mobile-logo icon-dark active" href="{{ url('/' . $page='home') }}"><img src="{{asset('assets/img/brand/logo2.png')}}" class="logo-icon dark-theme" alt="logo"></a>
			</div>


			<div class="main-sidemenu">
				<div class="app-sidebar__user clearfix">
					<div class="dropdown user-pro-body">
						<div class="">
							<img alt="user-img" class="avatar avatar-xl brround" src="{{asset('assets/img/faces/male-avatar.jpg')}}"><span class="avatar-status profile-status bg-green"></span>
						</div>
						<div class="user-info">
							<h4 class="font-weight-semibold mt-3 mb-0">{{Auth::user()->name}}</h4>
							<span class="mb-0 text-muted">{{Auth::user()->email}}</span>
						</div>
					</div>
				</div>
				<ul class="side-menu">
					<li class="side-item side-item-category">الرئيسية</li>
					<li class="slide">
						<a class="side-menu__item" href="https://cmp-tch.com/">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>الموقع</title>
                                <path d="M22.125 1.875h-20.25c-0.621 0.001-1.124 0.504-1.125 1.125v18c0.001 0.621 0.504 1.124 1.125 1.125h20.25c0.621-0.001 1.124-0.504 1.125-1.125v-18c-0.001-0.621-0.504-1.124-1.125-1.125h-0zM2.25 3.375h4.5v3.375h-4.5zM21.75 20.625h-19.5v-12.375h19.5zM21.75 6.75h-13.5v-3.375h13.5z"></path>
                            </svg>
                            <span class="side-menu__label">الموقع</span>
                        </a>
					</li>
					<li class="slide">
						<a class="side-menu__item" href="https://cmp-tch.com/blog/">
                            <svg xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24" ><path d="M0 0h24v24H0V0z" fill="none"/>
                                <path d="M5 5h4v6H5zm10 8h4v6h-4zM5 17h4v2H5zM15 5h4v2h-4z" opacity=".3"/>
                                <path d="M3 13h8V3H3v10zm2-8h4v6H5V5zm8 16h8V11h-8v10zm2-8h4v6h-4v-6zM13 3v6h8V3h-8zm6 4h-4V5h4v2zM3 21h8v-6H3v6zm2-4h4v2H5v-2z"/>
                            </svg>
                            <span class="side-menu__label">المدونة</span>
                        </a>
					</li>
                    <li class="slide">

                        <a class="side-menu__item" data-toggle="slide" href="{{route('SocialMedia.index')}}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>facebook</title>
                                <path d="M9 23.25h5.25v-9.375h3.304l0.525-5.25h-3.829v-1.875c0-0.429 0.066-0.55 0.105-0.584 0.044-0.039 0.249-0.166 1.020-0.166h3v-4.772l-0.64-0.095c-0.050-0.007-0.16-0.029-0.276-0.052-0.587-0.116-1.679-0.331-2.834-0.331-3.417 0-5.625 2.208-5.625 5.625v2.25h-3.375v5.25h3.375zM7.125 12.375v-2.25h3.375v-3.75c0-2.583 1.542-4.125 4.125-4.125 0.845 0 1.685 0.139 2.25 0.246v2.004h-1.5c-0.965 0-1.584 0.166-2.009 0.537-0.546 0.478-0.616 1.167-0.616 1.713v3.375h3.671l-0.225 2.25h-3.446v9.375h-2.25v-9.375z"></path>
                            </svg>
                            <span class="side-menu__label">روابط منصات التواصل</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{route('SocialMedia.index')}}">جميع الروابط</a></li>
                            <li><a class="slide-item" href="{{route('SocialMedia.create')}}">إضافة رابط جديد</a></li>
                        </ul>
                    </li>

					<li class="side-item side-item-category">لوحة التحكم</li>
					<li class="slide">
						<a class="side-menu__item" href="{{ url('/' . $page='home') }}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>الرئيسية</title>
                                <path d="M22.016 10.146l-9.309-8.564c-0.283-0.261-0.662-0.421-1.079-0.421-0.44 0-0.839 0.178-1.127 0.467l-9.001 9.001v12.621h8.25v-7.875h4.5v7.875h8.25v-12.658zM21 21.75h-5.25v-6.375c0-0.828-0.672-1.5-1.5-1.5v0h-4.5c-0.828 0-1.5 0.672-1.5 1.5v0 6.375h-5.25v-10.5l8.561-8.561c0.017-0.017 0.040-0.027 0.066-0.027 0.025 0 0.047 0.009 0.064 0.025l-0-0 9.309 8.564z"></path>
                            </svg>
                            <span class="side-menu__label">الرئيسية</span>
                        </a>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{route('preparations.index')}}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>التحضير</title>
                                <path d="M22.029 1.971c-0.754-0.754-1.795-1.22-2.944-1.22s-2.191 0.466-2.944 1.22l-12.773 12.773-2.258 6.657c-0.040 0.113-0.063 0.243-0.063 0.378 0 0.323 0.132 0.616 0.344 0.827l0.004 0.004c0.211 0.212 0.503 0.344 0.826 0.344h0c0.136-0 0.266-0.023 0.388-0.066l-0.008 0.003 6.657-2.258 12.773-12.773c0.754-0.754 1.22-1.795 1.22-2.944s-0.466-2.191-1.22-2.944v0zM8.443 19.325l-5.702 1.934 1.934-5.702 9.785-9.785 3.767 3.767zM20.969 6.799l-1.68 1.68-3.767-3.767 1.68-1.68c0.482-0.483 1.149-0.783 1.886-0.783 1.471 0 2.664 1.193 2.664 2.664 0 0.737-0.299 1.404-0.783 1.886l-0 0z"></path>
                            </svg>
                            <span class="side-menu__label">التحضير</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
							<li><a class="slide-item" href="{{route('preparations.index')}}">كل التحضيرات</a></li>
							<li><a class="slide-item" href="{{route('preparations.create')}}">إضافة تحضير جديد</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{route('presentations.index')}}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg"  class="side-menu__icon" viewBox="0 0 24 24">
                                <title>العروض التقديمية</title>
                                <path d="M22.125 2.25h-20.25c-0.621 0.001-1.124 0.504-1.125 1.125v13.875c0.001 0.621 0.504 1.124 1.125 1.125h9.375v3.375h-3.75v1.5h9v-1.5h-3.75v-3.375h9.375c0.621-0.001 1.124-0.504 1.125-1.125v-13.875c-0.001-0.621-0.504-1.124-1.125-1.125h-0zM21.75 16.875h-19.5v-13.125h19.5z"></path>
                            </svg>
                            <span class="side-menu__label">العروض التقديمية</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
                            <li><a class="slide-item" href="{{route('presentations.index')}}">كل العروض </a></li>
                            <li><a class="slide-item" href="{{route('presentations.create')}}">إضافة عرض جديد</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{route('programs.index')}}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>البرامج</title>
                                <path d="M4.125 1.5c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM4.125 6c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                                <path d="M12 1.5c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM12 6c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                                <path d="M19.875 7.5c1.657 0 3-1.343 3-3s-1.343-3-3-3c-1.657 0-3 1.343-3 3v0c0.002 1.656 1.344 2.998 3 3h0zM19.875 3c0.828 0 1.5 0.672 1.5 1.5s-0.672 1.5-1.5 1.5c-0.828 0-1.5-0.672-1.5-1.5v0c0.001-0.828 0.672-1.499 1.5-1.5h0z"></path>
                                <path d="M4.125 9c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM4.125 13.5c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                                <path d="M12 9c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM12 13.5c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                                <path d="M19.875 9c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM19.875 13.5c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                                <path d="M4.125 16.5c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM4.125 21c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                                <path d="M12 16.5c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM12 21c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                                <path d="M19.875 16.5c-1.657 0-3 1.343-3 3s1.343 3 3 3c1.657 0 3-1.343 3-3v0c-0.002-1.656-1.344-2.998-3-3h-0zM19.875 21c-0.828 0-1.5-0.672-1.5-1.5s0.672-1.5 1.5-1.5c0.828 0 1.5 0.672 1.5 1.5v0c-0.001 0.828-0.672 1.499-1.5 1.5h-0z"></path>
                            </svg>

                            <span class="side-menu__label">البرامج</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
                            <li><a class="slide-item" href="{{route('programs.index')}}">كل البرامج</a></li>
                            <li><a class="slide-item" href="{{route('programs.create')}}">إضافة برنامج جديد</a></li>
						</ul>
					</li>
					<li class="slide">
						<a class="side-menu__item" data-toggle="slide" href="{{route('curriculum-distributions.index')}}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>توزيع المناهج</title>
                                <path d="M0.75 6.75h5.625v-5.625h-5.625zM2.25 2.625h2.625v2.625h-2.625z"></path>
                                <path d="M0.75 15h5.625v-5.625h-5.625zM2.25 10.875h2.625v2.625h-2.625z"></path>
                                <path d="M0.75 23.25h5.625v-5.625h-5.625zM2.25 19.125h2.625v2.625h-2.625z"></path>
                                <path d="M8.25 1.125h15v1.5h-15v-1.5z"></path>
                                <path d="M8.25 5.25h12v1.5h-12v-1.5z"></path>
                                <path d="M8.25 9.375h15v1.5h-15v-1.5z"></path>
                                <path d="M8.25 13.5h12v1.5h-12v-1.5z"></path>
                                <path d="M8.25 21.75h12v1.5h-12v-1.5z"></path>
                                <path d="M8.25 17.625h15v1.5h-15v-1.5z"></path>
                            </svg>
                            <span class="side-menu__label">توزيع المناهج</span><i class="angle fe fe-chevron-down"></i></a>
						<ul class="slide-menu">
                            <li><a class="slide-item" href="{{route('curriculum-distributions.index')}}">كل توزيعات المناهج</a></li>
                            <li><a class="slide-item" href="{{route('curriculum-distributions.create')}}">إضافة توزيع منهاج جديد</a></li>
						</ul>
					</li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="{{route('curriculums.index')}}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>book</title>
                                <path d="M4.766 18.75h16.984v-18h-17.031c-1.568 0.005-2.839 1.275-2.844 2.843v16.575h0.001c-0 0.007-0.001 0.014-0.001 0.021 0 1.659 1.302 3.061 2.844 3.061h17.031v-1.5h-17.031c-0.703 0-1.344-0.744-1.344-1.561 0-0.78 0.637-1.439 1.391-1.439zM16.875 2.266v8.101l-2.269-1.992-2.231 1.98v-8.089zM10.875 2.25v10.125h1.483l2.254-2 2.278 2h1.486v-10.125h1.875v15h-13.871l-0.004-15zM4.719 2.25h0.156l0.004 15h-0.113c-0.512 0-0.991 0.137-1.404 0.377l0.013-0.007v-14.014c0-0.001 0-0.003 0-0.004 0-0.744 0.601-1.347 1.343-1.351h0z"></path>
                            </svg>
                            <span class="side-menu__label">مناهج الطلاب</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{route('curriculums.index')}}">كل مناهج الطلاب</a></li>
                            <li><a class="slide-item" href="{{route('curriculums.create')}}">إضافة منهاج جديد</a></li>
                        </ul>
                    </li>
                    <li class="slide">
                        <a class="side-menu__item" data-toggle="slide" href="{{route('teacherGuides.index')}}">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" class="side-menu__icon" viewBox="0 0 24 24">
                                <title>أدلة المعلمين</title>
                                <path d="M7.193 22.125c-3.521 0-6.375-2.854-6.375-6.375 0-1.76 0.714-3.354 1.867-4.508l9.216-9.216 1.061 1.061-9.216 9.216c-0.882 0.882-1.428 2.101-1.428 3.447 0 2.692 2.183 4.875 4.875 4.875 1.346 0 2.565-0.546 3.447-1.428l9.746-9.746c0.611-0.611 0.989-1.455 0.989-2.386 0-1.864-1.511-3.375-3.375-3.375-0.932 0-1.776 0.378-2.387 0.989l-9.746 9.746c-0.341 0.34-0.552 0.81-0.552 1.329 0 1.036 0.839 1.875 1.875 1.875 0.519 0 0.989-0.211 1.329-0.552l8.42-8.42 1.061 1.061-8.42 8.42c-0.61 0.606-1.45 0.98-2.378 0.98-1.864 0-3.375-1.511-3.375-3.375 0-0.928 0.374-1.768 0.98-2.378l9.746-9.746c0.883-0.888 2.106-1.437 3.457-1.437 2.692 0 4.875 2.183 4.875 4.875 0 1.351-0.549 2.574-1.437 3.456l-9.746 9.746c-1.147 1.153-2.736 1.867-4.49 1.867-0.006 0-0.012 0-0.018-0h0.001z"></path>
                            </svg>
                            <span class="side-menu__label">أدلة المعلمين</span><i class="angle fe fe-chevron-down"></i></a>
                        <ul class="slide-menu">
                            <li><a class="slide-item" href="{{route('teacherGuides.index')}}">كل أدلة المعلمين</a></li>
                            <li><a class="slide-item" href="{{route('teacherGuides.index')}}">إضافة دليل جديد</a></li>
                        </ul>
                    </li>

					<li class="side-item side-item-category">الاعدادت</li>
					<li class="slide">
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('frm-logout').submit();">
                            <i class="bx bx-log-out"></i>  تسجيل خروج
                        </a>
                        <form id="frm-logout" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
					</li>
				</ul>
			</div>
		</aside>
<!-- main-sidebar -->
