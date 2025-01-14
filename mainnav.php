<?php
include_once("includes/db_func.php");
$query = "SELECT id, title, href, parent_id, sublevel, icon FROM sidebar_menu ORDER BY `order` ASC, title";
// echo $query;
$result = mysqli_query($conn, $query) or die("database error:" . mysqli_error($conn));
// Create an array to conatin a list of items and parents
$menus = array(
    'items' => array(),
    'parents' => array(),
    'groups' => array()
);
// Builds the array lists with data from the SQL result
while ($items = mysqli_fetch_assoc($result)) {
    // Create current menus item id into array
    $menus['items'][$items['id']] = $items;
    // Creates list of all items with children
    $menus['parents'][$items['parent_id']][] = $items['id'];

    // Creates main group
    $menus['groups'][$items['parent_id']==0][] = $items['id'];

    // print_r ($menus);
}

// print_r ($menus);
// exit();
// function to create dynamic treeview menus
function createMenu($parent, $menu)
{
    $html = "";
    if (isset($menu['parents'][$parent])) {
        // $html .= '<ul class="sina-menu sina-menu-right" data-in="fadeInLeft" data-out="fadeInOut">';
        foreach ($menu['parents'][$parent] as $itemId) {
            // echo $itemId."\n";
            if (!isset($menu['parents'][$itemId])) {
                $html .= "<li class='nav-item'>
                         <!-- no child -->
                         <a href='" . $menu['items'][$itemId]['href'] . "' class='nav-link'>";
                if($menu['items'][$itemId]['sublevel'] == 1){
                    $html .= "<i class='" . $menu['items'][$itemId]['icon'] . "  fs-5 me-2'></i>";
                }
                // $html .= "<i class='" . $menu['items'][$itemId]['icon'] . "  fs-5 me-2'></i>";
                $html .= "<span class='nav-label'>" . $menu['items'][$itemId]['title'] . "</span></a>
                     </li>";
            }
            if (isset($menu['parents'][$itemId])) {
                $html .= "<li class='nav-item has-sub'>
                <a href='" . $menu['items'][$itemId]['href'] . "' class='mininav-toggle nav-link collapsed'>";
                if($menu['items'][$itemId]['sublevel'] == 1){
                    $html .= "<i class='" . $menu['items'][$itemId]['icon'] . "  fs-5 me-2'></i>";
                }
                $html .= " <span class='nav-label ms-1'>" . $menu['items'][$itemId]['title'] . "</span></a>";
                $html .= '<ul class="mininav-content nav collapse">
                            <li data-popper-arrow class="arrow"></li>';
                $html .= createMenu($itemId, $menu);
                $html .= '</ul>';
                $html .= "</li>";
            }
        }
        // $html .= "</ul>";
    }
    return $html;
}

function createGroup($group, $menu)
{
    $htmls = "";
    
    if(isset($menu['groups'][$group])){
        foreach ($menu['parents'][$group] as $grpItem) {
            // echo "$grpItem\n";
            $htmls .= "<!-- ". $menu['items'][$grpItem]['title'] ." Category -->
            <div class='mainnav__categoriy py-3'>
                <h6 class='mainnav__caption mt-0 fw-bold'>". $menu['items'][$grpItem]['title'] ."</h6>
                <ul class='mainnav__menu nav flex-column'>";
            $htmls .= createMenu($grpItem, $menu);
            $htmls .= "</ul>
            </div>
            <!-- END : ". $menu['items'][$grpItem]['title'] ." Category -->";
        }
        
    }
    return $htmls;
}
?>
      <!-- MAIN NAVIGATION -->
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
    <nav id="mainnav-container" class="mainnav">
        <div class="mainnav__inner">

            <!-- Navigation menu -->
            <div class="mainnav__top-content scrollable-content pb-5">

                <?php include 'profile_widget.php'; ?>

                <?php echo createGroup(0, $menus); ?>
            </div>
            <!-- End - Navigation menu -->
            <!-- Bottom navigation menu -->
            <div class="mainnav__bottom-content border-top pb-2">
               <ul id="mainnav" class="mainnav__menu nav flex-column">
                  <li class="nav-item">
                     <a href="logout.php" class="nav-link mininav-toggle collapsed" aria-expanded="false">
                        <i class="demo-pli-unlock fs-5 me-2"></i>
                        <span class="nav-label ms-1">Logout</span>
                     </a>
                  </li>
               </ul>
            </div>
            <!-- End - Bottom navigation menu -->
        </div>
    </nav>
      <!-- ~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~~ -->
      <!-- END - MAIN NAVIGATION -->