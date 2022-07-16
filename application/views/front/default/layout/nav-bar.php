<?php
//set menu
$menusX = array(
    'menus' => array(),
    'parent_menus' => array()
);

foreach ($menus as $menu1) {
    $menusX['menus'][$menu1['menu_id']] = $menu1;
    //creates entry into parent_menus array. parent_menus array contains a list of all menus with children
    $menusX['parent_menus'][$menu1['parent_menu_id']][] = $menu1['menu_id'];
}
//echo json_encode($menusX);

function buildMenu($parent, $menu, $i=1, $strDeep="") {
    $html = "";
    if (isset($menu['parent_menus'][$parent])) {
        foreach ($menu['parent_menus'][$parent] as $menu_id) {
            $arrCSS = explode(" ", $menu['menus'][$menu_id]['css']);
            
            if($menu['menus'][$menu_id]['parent_menu_id']=='0'){
                $html .= '<li class="ampstart-nav-item '.$menu['menus'][$menu_id]['css'].'">';
                if(in_array("last-menu",$arrCSS)){ // last menu edit
                    $html .= '<div class="bdr"></div>';
                    $html .= '<p class="'.$menu['menus'][$menu_id]['css'].'">'.$menu['menus'][$menu_id]['menu_name'].' ☰</p>';   
                } else {
                    if($menu['menus'][$menu_id]['menu_url']=="#"){
                        $html .= '<a href="'.base_url().'">';
                    } else {
                        $html .= '<a href="'.base_url('/blog/detil/').$menu['menus'][$menu_id]['menu_url'].'">';
                    }
                    $html .= '<p class="'.$menu['menus'][$menu_id]['css'].'">'.$menu['menus'][$menu_id]['menu_name'].'</p>';  
                    $html .= '</a>';
                }
            } else {
                if(in_array("related",$arrCSS)){ // related
                    $html .= '<li class="submenu-item related col-2 pl2">';
                } else if(in_array("related-menu",$arrCSS)){ // related
                    $html .= '<li class="left-align">';
                } else {
                    $html .= '<li class="submenu-item col-3 px2">';
                }
                if($menu['menus'][$menu_id]['menu_image']!=""){ //mengandung image
                    if($menu['menus'][$menu_id]['menu_url']=="#"){
                        $html .= '<a href="'.base_url().'">';
                    } else {
                        $html .= '<a href="'.base_url('/blog/detil/').$menu['menus'][$menu_id]['menu_url'].'">';
                    }
                    $html .= '<div class="submenu-img" style="background-image:url('.base_url('/assets/upload/image/').$menu['menus'][$menu_id]['menu_image'].')"></div>';
                    $html .= '<h3 class="'.$menu['menus'][$menu_id]['css'].'">'.$menu['menus'][$menu_id]['menu_name'].'</h3>';
                    $html .= '<p>'.$menu['menus'][$menu_id]['menu_desc'].'</p>';
                    $html .= '</a>';
                } else if(in_array("related-menu",$arrCSS)){ // related
                    if($menu['menus'][$menu_id]['menu_url']=="#"){
                        $html .= '<a class="'.$menu['menus'][$menu_id]['css'].'" href="'.base_url().'">'.$menu['menus'][$menu_id]['menu_name'].'</a>';
                    } else {
                        $html .= '<a class="'.$menu['menus'][$menu_id]['css'].'" href="'.base_url('/blog/detil/').$menu['menus'][$menu_id]['menu_url'].'">'.$menu['menus'][$menu_id]['menu_name'].'</a>';
                    }
                } else {
                    if($menu['menus'][$menu_id]['menu_url']=="#"){
                        $html .= '<a href="'.base_url().'"><p class="mb2 left-align '.$menu['menus'][$menu_id]['css'].'"><b>'.$menu['menus'][$menu_id]['menu_name'].'</b></p></a>';
                    } else {
                        $html .= '<a href="'.base_url('/blog/detil/').$menu['menus'][$menu_id]['menu_url'].'"><p class="mb2 left-align '.$menu['menus'][$menu_id]['css'].'"><b>'.$menu['menus'][$menu_id]['menu_name'].'</b></p></a>';
                    }
                    
                }
            }
            
            if (isset($menu['parent_menus'][$menu_id])) {
                if(in_array("related",$arrCSS)){
                    $html .= '<ul class="related-menu left">';
                    $html .= buildMenu($menu_id, $menu, $i, $strDeep);
                    $html .= '</ul>';
                } else {
                    $html .= '<div class="nav-submenu">';    
                    $html .= '  <div class="container">';
                    $html .= '    <ul class="list-reset flex flex-wrap">';
                    $html .= buildMenu($menu_id, $menu, $i, $strDeep);
                    $html .= '    </ul>';
                    $html .= '  </div>';
                    $html .= '</div>';
                }
            } 
            $html .= '</li>';
                
            $i++;
            
        }
    }
    return $html;
}


?>
<nav class="ampstart-headerbar-nav ampstart-nav xs-hide sm-hide col-10">
    <ul class="list-reset center m0 p0 flex justify-end">
        <?php echo buildMenu(0, $menusX, 1); ?>
    </ul>
</nav>