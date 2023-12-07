<nav>
        <ul class="metismenu" id="menu">
        <li class="<?php if($page=='dashboard') {echo 'active';} ?>"><a href="dashboard.php"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                            
        <li class="<?php if($page=='employee') {echo 'active';} ?>"><a href="employees.php"><i class="ti-id-badge"></i> <span>Staff Section</span></a></li>
                        
        <li class="<?php if($page=='department') {echo 'active';} ?>"><a href="department.php"><i class="fa fa-th-large"></i> <span>Department Section</span></a></li>

         <li class="<?php if($page=='leave') {echo 'active';} ?>"><a href="leave-section.php"><i class="fa fa-sign-out"></i> <span>Leave Types</span></a></li>

        <li class="<?php if($page=='manage-admin') {echo 'active';} ?>"><a href="manage-admin.php"><i class="fa fa-lock"></i> <span>Manage Admin</span></a></li>
                            
    </ul>
</nav>