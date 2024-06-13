<style>

    #image-user {
        width: 40px;
        height: 40px;
        border-radius: 50%; /* 7px*/
        
        /*
        max-width: 50px;
        max-height: 50px;
        margin-top: 10px;
        margin-bottom: 10px;
        */
    }
    #image-user:hover {
        transition: transform 0.5s ease; /* Smooth transition */
        transform: scale(5); /* Scale the image back to its original size */
        border-radius: 7px;
    }
</style>

<nav class="navbar navbar-expand-lg bg-body-secondary sticky-top">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">แบบประเมิน</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarScroll"
            aria-controls="navbarScroll" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarScroll">
            <ul class="navbar-nav me-auto my-2 my-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('home') ? 'active' : '' }}" aria-current="page" href="{{ url('home') }}">หน้าแรก</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link {{ Request::is('manageDepression') ? 'active' : '' }}" href="{{ route('manageDepression') }}">แบบฟอร์มประเมินภาวะซึมเศร้า</a>
                </li>
            </ul>
            <ul class="navbar-nav ml-auto">
    <li class="nav-item">
        <span class="nav-link"><b>{{ session('name') }}</b></span>
    </li>
</ul>

            {{-- @auth <!-- ตรวจสอบว่ามีการเข้าสู่ระบบหรือไม่ -->
                 <li class="nav-item">
                     <span class="nav-link">{{ Auth::user()->firstname }} {{ Auth::user()->lastname }}</span>
                 </li>
             @endauth --}}
            <ul class="navbar-nav ml-auto">
                <li class="nav-item">
                    <a href="{{ route('logout') }}" class="nav-link" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> ออกจากระบบ </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>
            </ul>
        </div>
    </div>
</nav>

