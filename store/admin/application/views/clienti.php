

<div class="col-md-12">
    <h3 class="title-5 m-b-35">Clienti</h3>
       
        <div class="table-responsive">
            <table class="table table-data2">
                <thead>
                    <tr>
                        <th>
                          #
                        </th>
                        <th>nume</th>
                        <th>prenume</th>
                        <th>email</th>
                        <th>judet</th>
                        <th>localitate</th>
                        <th>strada</th>
                        <th>cod postal</th>
                        <th>nr. telefon</th>
                        <th></th>
                    </tr>
                </thead>
            <tbody>
              <?php foreach($clienti as $client): ?>
                <tr class="tr-shadow">
                                      
                    <th scope="row"><?php echo $client->id_client ?></th>
                    <td><?php echo $client->nume ?></td>
                    <td><?php echo $client->prenume ?></td>
                    <td><?php echo $client->email ?></td> 
                    <td><?php echo $client->judet ?></td>
                    <td><?php echo $client->localitate ?></td>
                    <td><?php echo $client->strada ?></td>
                    <td><?php echo $client->cod_postal ?></td> 
                    <td><?php echo $client->nr_telefon ?></td>
                    <td>
                       
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>