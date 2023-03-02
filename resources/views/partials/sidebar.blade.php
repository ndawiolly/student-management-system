<aside class="sidebar text-light ">
    <div class="admin-face py-4 d-flex justify-content-center">
        <a href="#" class="navbar-brand ">
            <img src="{{ asset('images/admin-pro.png') }}" alt="admin-pix" height="70">
        </a>
    </div>
    <div class="d-flex justify-content-center px-2">
        {{ Auth::user()->name }}
    </div>
    <p class="text-center">Program Adminstrator</p>
    <hr class="w-50 mx-auto">

    <div class="p-3" id="list-tems">

        <div class="d-flex gap-4">
            <p><a href="{{ route("admin_dashboard") }}" class="nav-link ">Dashboard</a> </p>
            <h5> >>> MAIN SECTORS</h5>
        </div>

        <hr>
        <ul class="navbar-nav mb-2 mb-lg-0 ">



            <li class="nav-item dropdown">
                <a class="nav-link " href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    <i class="fas fa-folder px-3"></i> Students Classes <i class="fas fa-angle-down float-end"></i>
                </a>
                <ul class="dropdown-menu w-100">
                    <li class="">
                        <a class="dropdown-item" href="{{ route('class') }}"><i class="fas fa-folder-plus"></i> Create
                            Class</a>
                    </li>
                    <li class="">
                        <a class="dropdown-item" href="{{ route('m_class') }}"><i class="fas fa-folder-plus"></i> Manage
                            Class</a>
                    </li>
                </ul>
            </li>



            <li class="nav-item">
                <a href="#" class="nav-link" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fas fa-folder px-3"></i> Subjects <i class="fas fa-angle-down float-end"></i></a>
                <ul class="dropdown-menu w-100">
                    <li class="dropdown-item ">
                        <a href="{{ route('create_sub') }}"><i class="fas fa-folder-plus"></i> Create Subject</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="{{ route('manage_sub') }}"><i class="fas fa-folder-plus"></i> Manage Subject</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#"><i class="fas fa-folder-plus"></i> Add Subject Combination</a>
                    </li>
                    <li class="dropdown-item">
                        <a href="#"><i class="fas fa-folder-plus"></i> Manage Subject Combination</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fas fa-users px-3"></i> Student<i class="fas fa-angle-down float-end"></i></a>
                <ul class="dropdown-menu w-100">
                    <li class="dropdown-item ">
                        <a href="#"><i class="fas fa-folder-plus"></i> Add Student</a>
                    </li>
                    <li class="dropdown-item">
                        <a href=""><i class="fas fa-folder-plus"></i> Manage Student</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fas fa-exclamation-circle px-3"></i> Result<i class="fas fa-angle-down float-end"></i>
                </a>
                <ul class="dropdown-menu w-100">
                    <li class="dropdown-item">
                        <a href="#"><i class="fas fa-folder-plus"></i> Add Result</a>
                    </li>
                    <li class="dropdown-item">
                        <a href=""><i class="fas fa-folder-plus"></i> Manage Result</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#" class="nav-link" data-bs-toggle="dropdown" aria-expanded="false"><i
                        class="fas fa-bell px-3"></i> Notice<i class="fas fa-angle-down float-end"></i></a>
                <ul class="dropdown-menu w-100">
                    <li class="dropdown-item">
                        <a href="#"><i class="fas fa-folder-plus"></i> Add Notice</a>
                    </li>
                    <li class="dropdown-item">
                        <a href=""><i class="fas fa-folder-plus"></i> Manage Notice</a>
                    </li>
                </ul>
            </li>

            <li class="nav-item">
                <a href="#"><i class="fab fa-stack-exchange px-3"></i> Admin Change Pasword<i
                        class=" float-end"></i></a>

            </li>




        </ul>

    </div>
</aside>
