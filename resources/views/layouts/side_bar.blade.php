<div id="side_bar" class="col-2 bg-white border-end ps-2 pe-1">
    <a href="{{ route('dashboard') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('dashboard') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mt-3 rounded">
            <i class="bi bi-house me-2"></i>
            <p class="mb-0 text-uppercase">Dashboard</p>
        </div>
    </a>

    <hr class="mx-4">

    <p class="mb-3 text-secondary fs-6 mx-4">Library Management</p>

    {{-- Category --}}
    <a href="{{ route('category.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('category*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-blockquote-right me-2"></i>
            <p class="mb-0 text-uppercase">Categories</p>
        </div>
    </a>
    {{-- Book --}}
    <a href="{{ route('books.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('books*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-book me-2"></i>
            <p class="mb-0 text-uppercase">Books</p>
        </div>
    </a>
    {{-- Project Book --}}
    <a href="{{ route('project-books.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('project-books*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-file-pdf me-2"></i>
            <p class="mb-0 text-uppercase">Project Books</p>
        </div>
    </a>
    {{-- User --}}
    <a href="{{ route('users.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('users*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-people me-2"></i>
            <p class="mb-0 text-uppercase">Users</p>
        </div>
    </a>
    {{-- Transition --}}
    <a href="{{ route('transactions.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('transactions*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-receipt me-2"></i>
            <p class="mb-0 text-uppercase">Transitions</p>
        </div>
    </a>

    <hr class="mx-4">

    <p class="mb-3 text-secondary fs-6 mx-4">Library Setting</p>

    {{-- Banner --}}
    <a href="{{ route('banners.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('banners*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-images me-2"></i>
            <p class="mb-0 text-uppercase">Banners</p>
        </div>
    </a>

    {{-- Editor Choice --}}
    <a href="{{ route('editor_choices.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('editor_choices*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-star me-2"></i>
            <p class="mb-0 text-uppercase">Editor Choices</p>
        </div>
    </a>

    {{-- Feedbacks --}}
    <a href="{{ route('feedbacks.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('feedbacks*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-messenger me-2"></i>
            <p class="mb-0 text-uppercase">Feedbacks</p>
        </div>
    </a>

    {{-- Setting --}}
    <a href="{{ route('settings.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('settings*') ? 'sidebar_item_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="bi bi-gear me-2"></i>
            <p class="mb-0 text-uppercase">Setting</p>
        </div>
    </a>



</div>
