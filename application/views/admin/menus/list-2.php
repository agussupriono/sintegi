<?php
// Session 
if ($this->session->flashdata('sukses')) {
    echo '<div class="alert alert-success">';
    echo $this->session->flashdata('sukses');
    echo '</div>';
}
// Error
echo validation_errors('<div class="alert alert-success">', '</div>');

//set menu
$menusX = array(
    'menus' => array(),
    'parent_menus' => array()
);

foreach ($menu as $menu1) {
    $menusX['menus'][$menu1['menu_id']] = $menu1;
    //creates entry into parent_menus array. parent_menus array contains a list of all menus with children
    $menusX['parent_menus'][$menu1['parent_menu_id']][] = $menu1['menu_id'];
}
//echo json_encode($menusX);

function buildMenu($parent, $menu, $i=1, $strDeep="") {
    $html = "";
    if (isset($menu['parent_menus'][$parent])) {
        foreach ($menu['parent_menus'][$parent] as $menu_id) {

            $html .= '<tr class="odd gradeX">';
            $html .= '  <td>'.$i.'</td>';
            $html .= '  <td>';
            $html .= '      <img src="'.base_url('assets/upload/image/thumbs/' . $menu['menus'][$menu_id]['menu_image']).'" width="50px">';
            $html .= '  </td>';
            $html .= '  <td>';
            $html .=       $strDeep." ".substr(strip_tags($menu['menus'][$menu_id]['menu_name']), 0, 20);
            $html .= '  </td>';     
            $html .= '  <td>'.$menu['menus'][$menu_id]['status'].'</td>';        
            $html .= '  <td>'.date('l, d/m/Y', strtotime($menu['menus'][$menu_id]['dates'])).'</td>';
            $html .= '  <td class="center">';
            $html .= '    <a href="'.base_url('admin/menus/edit/' . $menu['menus'][$menu_id]['menu_id']).'" class="btn btn-primary"><i class="fa fa-pencil"></i></a>';
            $html .= '    <!--  Modals-->';
            $html .= '    <button class="btn btn-success" data-toggle="modal" data-target="#View'.$menu['menus'][$menu_id]['menu_id'].'"><i class="fa fa-eye"></i></button>';

            $html .= '    <div class="modal fade" id="View'.$menu['menus'][$menu_id]['menu_id'].'" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">';
            $html .= '        <div class="modal-dialog">';
            $html .= '            <div class="modal-content">';
            $html .= '                <div class="modal-header">';
            $html .= '                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>';
            $html .= '                    <h4 class="modal-title" id="myModalLabel">View Post</h4>';
            $html .= '                </div>';
            $html .= '                <div class="modal-body">';
            $html .= '                    <div class="col-md-12">';
            $html .= '                          <table width="100%" border="0" cellspacing="0" cellpadding="0" class="table table-striped table-bordered table-hover">';
            $html .= '                              <tr>';
            $html .= '                                  <img src="'.base_url('assets/upload/image/' . $menu['menus'][$menu_id]['menu_image']).'" width="539px">';
            $html .= '                                  <td>Menus Name</td>';
            $html .= '                                  <td>'.$menu['menus'][$menu_id]['menu_name'].'</td>';
            $html .= '                              </tr>';
            $html .= '                              <tr>';
            $html .= '                                  <td>Status</td>';
            $html .= '                                  <td>'.$menu['menus'][$menu_id]['status'].'</td>';
            $html .= '                              </tr>';
            $html .= '                              <tr>';
            $html .= '                                  <td>Date Update</td>';
            $html .= '                                  <td>'.date('l, d/m/Y', strtotime($menu['menus'][$menu_id]['dates'])).'</td>';
            $html .= '                              </tr>';
            $html .= '                              <tr>';
            $html .= '                                  <td>&nbsp;</td>';
            $html .= '                                  <td>';
            $html .= '                                      <a href="'.base_url('admin/menus/edit/' . $menu['menus'][$menu_id]['menu_id']).'" class="btn btn-primary">Edit</a>';
            $html .= '                                      <a href="'.base_url('admin/menus/delete/' . $menu['menus'][$menu_id]['menu_id']).'" class="btn btn-danger">Delete</a>';
            $html .= '                                  </td>';
            $html .= '                              </tr>';
            $html .= '                          </table>';
            $html .= '                    </div>';
            $html .= '                    <div class="clearfix"></div>';
            $html .= '                </div>';
            $html .= '                <div class="modal-footer">';
            $html .= '                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>';
            $html .= '                </div>';
            $html .= '            </div>';
            $html .= '        </div>';
            $html .= '    </div>';
            $html .= '    <!-- End Modals-->';     
            $html .= '    <a href="'.base_url('admin/menus/delete/' . $menu['menus'][$menu_id]['menu_id']).'" class="btn btn-danger" onClick="return confirm(\'Are you sure?\')"><i class="fa fa-trash"></i></a>';

            $html .= '  </td>';
            $html .= '</tr>';
                
            if (isset($menu['parent_menus'][$menu_id])) {
                if($strDeep==""){
                    $strDeep = "--";
                } else {
                    $strDeep .= str_repeat($strDeep,2);
                }
                $i++;
                $html .= buildMenu($menu_id, $menu, $i, $strDeep);
            } else {
                $strDeep = "";
            }
            $i++;
        }
    }
    return $html;
}
    
?>

<!--  Modals-->
<div class="panel-body">
    <p><a href="<?php echo base_url('admin/menus/create') ?>" class="btn btn-primary"><i class="fa fa-plus"></i> Create New Menu</a></p>
    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
        <thead>
            <tr>
                <th>#</th>
                <th width="50px">Image</th>
                <th>Menu Name</th>
                <th>Status</th>
                <th>Date Upload</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php echo buildMenu(0, $menusX, 1); ?>
        </tbody>
    </table>