        <div style="min-height: 720px;" class="container">
            <a href="<?php base_url(); ?>/CodeIgniter/home/insert" class="btn btn-primary">thêm bài viết</a>
            <table class="table">        
                <thead>
                    <tr>
                        <th>stt</th>
                        <th> tit</th>
                    </tr>
                </thead>
                <tbody>

                    <?php 
                        foreach ($data as $row){
                    ?>                  
                            <tr>
                                <td><?php echo $row->stt ;?></td>
                                <td><?php echo $row->tit ; ?></td>
                                <td><a href="<?php base_url() ?>/CodeIgniter/home/delete/?id=<?php echo $row->stt ?>" >edit</a></td>
                                <td><a href="<?php base_url() ?>/CodeIgniter/home/edit/?id=<?php echo $row->stt ?>" >Delete</a></td>
                            </tr>
                                                    
                    <?php                          
                        }                   
                    ?>
                </tbody>
            </table>
                    <?php echo $this->pagination->create_links(); ?>
        </div>