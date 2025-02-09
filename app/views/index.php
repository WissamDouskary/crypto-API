<h1>lgriiiiiiptooooo simantiiig</h1>
<ul id="coin-list">
    <?php foreach ($data['data']['data'] as $coin): ?>
        <li>
            <strong><?php echo htmlspecialchars($coin['name']); ?></strong>:
            <?php echo '$' . number_format($coin['quote']['USD']['price'], 2); ?>
        </li>
    <?php endforeach; ?>
</ul>

 <script>
     function getcryptodata(){
         let conn = new XMLHttpRequest();
         conn.open('GET', "<?php $data['data']['data'] ?>", true);

         conn.onload = function(){
             if(conn.status == 200){
                 let data = JSON.parse(conn.responseText);
                 console.log(data);
             }
         }
         conn.send();
     }
     getcryptodata();
 </script>