
        <div class="container">

            <div class="">
                <h2>Quản lý dữ liệu</h2>
                <br>
                <table class="table">
                            
                <thead>
                    <a class="btn btn-primary" href="<?php echo base_url().'home/insert'; ?>">thêm</a>
                    <tr>
                        <th>stt</th>
                        <th> tit</th>
                    </tr>
                </thead>
                <tbody>
                                <?php 

                                         foreach ($data as $row)
                                            {

                                                ?>
                                                
                                                        <tr>
                                                            <td><?php echo $row->tit ;?></td>
                                                            <td><?php echo  word_limiter($row->con, 20) ; ?></td>
                                                            <td><img class="src" src="<?php echo base_url().'upload/'. $row->img; ?>" alt=""></td>
                                                            <td><a class="btn btn-danger" href="<?php echo base_url(); ?>home/delete/?id=<?php echo $row->stt ?>"><span class="glyphicon glyphicon-trash"></span></a></td>
                                                            <td><a href="<?php echo base_url(); ?>home/edit/?id=<?php echo $row->stt ?>" class="btn btn-success"><span class="glyphicon glyphicon-pencil"></span></a></td>
                                                        </tr>
                                                    
                                                <?php
                                                    
                                                    
                                            }
                                            
                                     ?>
                </tbody>
            </table>
                        <?php echo $this->pagination->create_links(); ?>
            </div>
                        

            

        </div>
    </body>
</html>