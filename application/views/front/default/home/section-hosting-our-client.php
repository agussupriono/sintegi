<style>
    .customer{
        padding: 0 270px;
    }
    @media (max-width: 576px) {
       .customer{
            padding: 0;
        }
    }

</style>
<?php
$secHostingOurClient = $this->mBlogs->listBlogsByCategory(23);

if(count($secHostingOurClient)>0){
    foreach ($secHostingOurClient as $dc) {
        $arrComponentHosting = split_curly_braces_component($dc['content']);
        
        foreach ($arrComponentHosting as $comp){
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