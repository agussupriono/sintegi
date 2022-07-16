<?php
//set menu
$menusXS = array(
    'menus' => array(),
    'parent_menus' => array()
);

foreach ($menus as $menu1) {
    $menusXS['menus'][$menu1['menu_id']] = $menu1;
    //creates entry into parent_menus array. parent_menus array contains a list of all menus with children
    $menusXS['parent_menus'][$menu1['parent_menu_id']][] = $menu1['menu_id'];
}
//echo json_encode($menusXS);

function buildMenuS($parent, $menu, $i=1, $strDeep="") {
    $html = "";
    if (isset($menu['parent_menus'][$parent])) {
        foreach ($menu['parent_menus'][$parent] as $menu_id) {
            if (isset($menu['parent_menus'][$menu_id])) {
                $html .= '<li class="ampstart-nav-item ampstart-nav-dropdown relative">';
                $html .= '  <amp-accordion layout="container" disable-session-states="" class="ampstart-dropdown">';
                $html .= '    <section>';
                $html .= '        <header>'.(($strDeep!="") ? $strDeep.">":$strDeep ).$menu['menus'][$menu_id]['menu_name'].'</header>';
            } else {
                $html .= '<li class="ampstart-nav-item">';
                $html .= '  <a href="'.base_url('/blog/detil/').$menu['menus'][$menu_id]['menu_url'].'">'.(($strDeep!="") ? $strDeep.">":$strDeep ).$menu['menus'][$menu_id]['menu_name'].'</a>';
            }
            
            if (isset($menu['parent_menus'][$menu_id])) {
                if($strDeep==""){
                    $strDeep = "&nbsp;&nbsp;";
                } else {
                    $strDeep .= str_repeat($strDeep,2);
                }
                $html .= '              <ul class="ampstart-dropdown-items list-reset m0 p0">';
                $html .= buildMenuS($menu_id, $menu, $i, $strDeep);
                $strDeep = "";
                $html .= '              </ul>';
            }
            
            if (isset($menu['parent_menus'][$menu_id])) {
                $html .= '    </section>';
                $html .= '  </amp-accordion>';
                $html .= '</li>';
            } else {
                $html .= '</li>';    
            }
        }
    }
    return $html;
} ?>
<!-- Start Sidebar -->
<amp-sidebar id="header-sidebar" class="ampstart-sidebar px3 md-hide lg-hide" layout="nodisplay">
    <div class="flex justify-start items-center ampstart-sidebar-header">
        <div role="button" on="tap:header-sidebar.toggle" tabindex="0" class="ampstart-navbar-trigger items-start">✕</div>
    </div>
    <nav class="ampstart-sidebar-nav ampstart-nav">
        <ul class="list-reset m0 p0 ampstart-label">
            <?php echo buildMenuS(0, $menusXS, 1); ?>
        </ul>
    </nav>
</amp-sidebar>
<!-- End Sidebar -->
