<aside>
    <div class="navigation">

        <div class="menu">
            <ul>
                <li>
                    <a href="{{ route('admin.index') }}">
                        <span class="icon">
                            <i class='bx bx-car'></i>
                        </span>
                        <span class="title">
                            Admin
                        </span>
                    </a>
                </li>
                <li>
                    <a href="{{ route('admin.index') }}">
                        <span class="icon">
                            <i class='bx bx-home'></i>
                        </span>
                        <span class="title">
                            Dash board
                        </span>
                    </a>
                </li>
                <li>
                    <button class="a" onclick="toggleSubMenu('accountSubMenu')">
                        <span class="icon">
                            <i class='bx bx-user'></i>
                        </span>
                        <span class="title">
                            Manage Account
                            <i class='bx bx-chevron-right bx-md'></i>
                        </span>

                    </button>
                    <div class="submenu" id="accountSubMenu">
                        <a href="" class="sub-item">List Accounts</a>
                        <a href="" class="sub-item">Add Accounts</a>
                    </div>
                </li>
                <li>
                    <button class="a" onclick="toggleSubMenu('productSubMenu')">
                        <span class="icon">
                            <i class='bx bxs-car'></i>
                        </span>
                        <span class="title">
                            Manage Products
                            <i class='bx bx-chevron-right bx-md'></i>
                        </span>
                    </button>
                    <div class="submenu" id="productSubMenu">
                        <a href="{{ route('product.index') }}" class="sub-item">List Products</a>
                        <a href="{{ route('product.create') }}" class="sub-item">Add Products</a>
                    </div>
                </li>
                <li>
                    <button class="a" onclick="toggleSubMenu('brandSubMenu')">
                        <span class="icon">
                            <i class='bx bx-cart-alt'></i>
                        </span>
                        <span class="title">
                            Manage Brand
                            <i class='bx bx-chevron-right bx-md'></i>
                        </span>
                    </button>
                    <div class="submenu" id="brandSubMenu">
                        <a href="{{ route('brand.index') }}" class="sub-item">List Brand</a>
                        <a href="{{ route('brand.create') }}" class="sub-item">Add Brand</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</aside>