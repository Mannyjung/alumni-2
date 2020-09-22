<?php function addpagina2(){
    $this->form_validation->set_rules('titolo', 'Titolo', 'trim');
    $this->form_validation->set_rules('testo', 'Testo', 'trim');

    if($_FILES["file"]["size"] > 0){
        $tmpName = $_FILES["file"]['tmp_name'];         
        $fp = fopen($tmpName, 'r');
        $file = fread($fp, filesize($tmpName));
        $file = addslashes($file);
        fclose($fp);
    }

    $pagina = array();
    $pagina['titolo'] = $this->input->post('titolo');
    $pagina['testo'] = $this->input->post('testo');
    $pagina['file'] = $file;

    $this->db->insert('pagine', $pagina);
    redirect('home/pagine');
}