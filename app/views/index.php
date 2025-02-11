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
     function getcryptodata() {
         let conn = new XMLHttpRequest();
         conn.open('GET', "http://localhost/crypto-API/app/models/API/php", true);

         conn.onload = function () {
             if (conn.status === 200) {
                 try {
                     let data = JSON.parse(conn.responseText);
                     console.log(data);
                 } catch (error) {
                     console.error("JSON parsing error:", error);
                     console.log("Response received:", conn.responseText);
                 }
             } else {
                 console.error("API request failed with status:", conn.status);
             }
         };

         conn.onerror = function () {
             console.error("Network error while trying to fetch data.");
         };

         conn.send();
     }

     getcryptodata();
 </script>