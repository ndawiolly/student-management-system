<nav class="d-flex container p-3 border-bottom justify-content-between  flex-row-reverse flex-lg-row" id="top-navbar">
    <button class="btn btn-outline-dark me-4" id="toggle-sidebar">
        <i class="fa fa-bars" style="color:#3A98B9;"></i>
    </button>

    {{-- <div class="navbar-brand">
        <h3>BHSMS</h3>
    </div> --}}

    <div class="dropdown me-3">
        <button class="btn border-0 dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
          {{ Auth::user()->name }}
        </button>
        <ul class="dropdown-menu mt-3" >
          <li><a class="dropdown-item" href="#">Action</a></li>
          <li><a class="dropdown-item" href="#">Another action</a></li>
          <hr>
          <li>
            <form action="{{ route('logout') }}" method="post" onsubmit="return confirm('Are you sure?')">
                @csrf
                <button class="dropdown-item" > Logout </button>
            </form>
          </li>
        </ul>
      </div>
</nav>
