<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Panel</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <nav class="col-md-2 d-none d-md-block bg-dark text-white min-vh-100 p-3">
                <h4>Menu</h4>
                <ul class="nav flex-column">
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active bg-secondary' : '' }}" href="{{ route('dashboard') }}">Dashboard</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('products') ? 'active bg-secondary' : '' }}" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('categories') ? 'active bg-secondary' : '' }}" href="{{ route('categories') }}">Categories</a>
                    </li>
                    
                    
                    
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('staff') ? 'active bg-secondary' : '' }}" href="{{ route('staff') }}">Staff</a>
                    </li>
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('reports') ? 'active bg-secondary' : '' }}" href="{{ route('reports') }}">Reports</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white {{ request()->routeIs('settings') ? 'active bg-secondary' : '' }}" href="{{ route('settings') }}">Settings</a>
                    </li>
                </ul>
            </nav>

            <!-- Main Content -->
            <main class="col-md-10 ms-sm-auto px-4">
                @yield('content')
            </main>
        </div>
    </div>
</body>
</html>
