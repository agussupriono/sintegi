<?php
$secHomeOurClient = $this->mBlogs->listBlogsByCategory(7);

if(count($secHomeOurClient)>0){
    foreach ($secHomeOurClient as $dc) {
        $arrComponentHome = split_curly_braces_component($dc['content']);
        
        foreach ($arrComponentHome as $comp){
            if(strpos($comp,'{{')!== false){
                $mycomp = preg_replace('/[{{}}]/', '', $comp);
                if(file_exists(FCPATH.'application/views/front/'.$site['theme'].'/home/'.$mycomp.'.php')){
                    $this->load->view('front/'.$site['theme'].'/home/'.$mycomp);
                } else {
                    echo "";
                }
            } else {
                echo $comp;
            }

        }
    }
}