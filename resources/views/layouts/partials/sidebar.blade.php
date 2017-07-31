<!--
    Tip 1: You can change the color of the sidebar using: data-color="purple | blue | green | orange | red"

    Tip 2: you can also add an image using data-image tag
-->
<div class="sidebar" data-color="purple" data-image="{{ asset('img/sidebar-1.jpg') }}">

    <div class="logo">
        <a href="{{ url('/') }}" class="simple-text">
            {{ config('app.name', 'Laravel') }}
        </a>
    </div>

    <div class="sidebar-wrapper">
        <ul class="nav">
            <li class="active">
                <a href="#">
                    <i class="material-icons">dashboard</i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">person</i>
                    <p>User Profile</p>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="material-icons">content_paste</i>
                    <p>Table List</p>
                </a>
            </li>
            
        </ul>
    </div>
</div>