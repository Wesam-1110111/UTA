<div class="scrollbar side-menu-bg" style="overflow: scroll">
    <ul class="nav navbar-nav side-menu" id="sidebarnav">
        <!-- menu item Dashboard-->
        <li>
            <a href="<?php echo e(route('dashboard.Students')); ?>">
                <div class="pull-left"><i class="ti-home"></i><span
                        class="right-nav-text">المواد الدراسية</span>
                </div>
                <div class="clearfix"></div>
            </a>
        </li>
        <!-- menu title -->
        <li class="mt-10 mb-10 text-muted pl-4 font-medium menu-title">منصة شيتاتي </li>

        <!-- المقررات الدراسية-->
        <li>
            <a href="<?php echo e(route('dashboard.Students',['Favorite' => 'Favorite'])); ?>"><i class="fas fa-book-open"></i><span class="right-nav-text">موادي
                    </span></a>
        </li>

    </ul>
</div>
<?php /**PATH C:\xampp\htdocs\Ahlia_University\resources\views/layouts/main-sidebar/student-main-sidebar.blade.php ENDPATH**/ ?>