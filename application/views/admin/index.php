<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <table class="table">
                            
                <thead>
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
                                                            <td><?php echo $row->stt ;?></td>
                                                            <td><?php echo $row->tit ; ?></td>
                                                        </tr>
                                                    
                                                <?php
                                                    
                                                    
                                            }
                                            
                                     ?>
                </tbody>
            </table>
                        <?php echo $this->pagination->create_links(); ?>
            <form method="POST" action="">
            
             <label>Username :</label>
             <input type="text" name="username" class="form-control" value=""/> <br/>
            <label>Password :</label> <input type="password" name="password" class="form-control" value=""/> <br/>
            <input class="btn btn-success" type="submit" name="submit_login" value="Login"/>
        </form>
        </div>
    </body>
</html>