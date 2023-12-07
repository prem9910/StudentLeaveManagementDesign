

<nav>
        <ul class="metismenu" id="menu">
        <li class="<?php if($page=='dashboard') {echo 'active';} ?>"><a href="dashboard.php"><i class="ti-dashboard"></i> <span>Dashboard</span></a></li>
                            
        <li class="<?php if($page=='students') {echo 'active';} ?>"><a href="students.php"><i class="ti-id-badge"></i> <span>Student Section</span></a></li>
                        
         
        <li class="<?php if($page=='manage-leave') {echo 'active';} ?>">
            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-briefcase"></i><span>Manage Leave</span></a>

            <ul class="collapse">
                <li ><a href="pending-history.php"><i class="fa fa-spinner"></i> Pending</a></li>
                <li ><a href="approved-history.php"><i class="fa fa-check"></i> Approved</a></li>
                <li ><a href="declined-history.php"><i class="fa fa-times-circle"></i> Declined</a></li>
                <li ><a href="leave-history.php"><i class="fa fa-history"></i> Leave History</a></li>
            </ul>
            
        </li>

        <li class="<?php if($page=='staff-profile') {echo 'active';} ?>"><a href="staff-profile.php"><i class="fa fa-lock"></i> <span>My Profile</span></a></li>
                            
    </ul>
</nav>