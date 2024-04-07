<div id="side_bar" class="col-2 bg-white     border-end ps-2 pe-1">

    {{-- Book --}}
    <a href="{{ route('books.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('books*') ? 'side_bar_icon_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="side_bar_icon_active rounded bi bi-book me-2"></i>
            <p class="mb-0 text-uppercase">Books</p>
        </div>
    </a>
    {{-- User --}}
    <a href="{{ route('users.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('users*') ? 'side_bar_icon_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="side_bar_icon rounded bi bi-people me-2"></i>
            <p class="mb-0 text-uppercase">Users</p>
        </div>
    </a>
    {{-- Transition --}}
    <a href="{{ route('transactions.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('transactions*') ? 'side_bar_icon_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="side_bar_icon rounded bi bi-receipt me-2"></i>
            <p class="mb-0 text-uppercase">Transitions</p>
        </div>
    </a>

    <hr class="mx-4">

    <p class="mb-3 text-secondary fs-6 mx-4">Library Setting</p>

    {{-- Setting --}}
    <a href="{{ route('settings.index') }}" class="text-decoration-none">
        <div
            class="sidebar_item {{ request()->routeIs('settings*') ? 'side_bar_icon_active' : '' }} d-flex align-items-center p-2 mx-3 mb-2 rounded">
            <i class="side_bar_icon rounded bi bi-gear me-2"></i>
            <p class="mb-0 text-uppercase">Setting</p>
        </div>
    </a>



</div>
