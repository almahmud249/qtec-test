<div>
    <aside class=" d-md-block" id="sidebar">
        <div class="logo_wraper">
            <img
                id="logo_img"
                src="https://bppshop.com.bd/static/media/bpp%20shop%20logo%20fainal.2844a9aed39093f55a55.png"
                alt />

            <i id="collaps" class="fa-solid   fa-arrow-left me-3"></i>
            <i id="collaps"  class="fa-solid d-block d-md-none fa-arrow-left me-3"></i>
            <i style="display: none;" id="expand"  class="fa-solid mx-auto fa-arrow-right-long"></i>
        </div>
        <ul id="aside_link_wraper" class="link_wraper">
            <li>
                <a href="dashboard.html">
                    <p class="menu_link">
                        <i class="fa-solid fa-house"></i>
                        <span class="aside_link">Dashboard</span>
                    </p>
                </a>
            </li>
            @if(Auth()->user()->isSuperAdmin())
            <li>
                <a href="{{route('admin.category.create')}}">
                    <p class="menu_link">
                        <i class="fa-solid fa-house"></i>
                        <span class="aside_link">Category</span>
                    </p>
                </a>
            </li>
                <li>
                    <a href="{{route('admin.form.create')}}">
                        <p class="menu_link">
                            <i class="fa-solid fa-house"></i>
                            <span class="aside_link">Dynamic Form</span>
                        </p>
                    </a>
                </li>
            @endif
        </ul>
    </aside>
</div>


