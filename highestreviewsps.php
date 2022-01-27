<?php 
          error_reporting( E_ALL );
          ini_set('display_errors' , '1' );
          date_default_timezone_set('America/Los_Angeles');
          $DATABASE_HOST = 'mamidiveena61228.ipagemysql.com';
$DATABASE_USER = 'mamidiveena123';
$DATABASE_PASS = 'Ipage123';
$DATABASE_NAME = 'printsolutions';
        try {
            $pdo = new PDO('mysql:host=' . $DATABASE_HOST . ';dbname=' . $DATABASE_NAME . ';charset=utf8', $DATABASE_USER, $DATABASE_PASS);
        } catch (PDOException $exception) {
            // If there is an error with the connection, stop the script and display the error.
            exit('Failed to connect to database!');
        }
        function time_elapsed_string($datetime, $full = false) {
            // date_default_timezone_set('America/Los_Angeles');
            $now = new DateTime;
            $ago = new DateTime($datetime);
            $diff = $now->diff($ago);
            $diff->w = floor($diff->d / 7);
            $diff->d -= $diff->w * 7;
            $string = array('y' => 'year', 'm' => 'month', 'w' => 'week', 'd' => 'day', 'h' => 'hour', 'i' => 'minute', 's' => 'second');
            foreach ($string as $k => &$v) {
                if ($diff->$k) {
                    $v = $diff->$k . ' ' . $v . ($diff->$k > 1 ? 's' : '');
                } else {
                    unset($string[$k]);
                }
            }
            if (!$full) $string = array_slice($string, 0, 1);
            return $string ? implode(', ', $string) . ' ago' : 'just now';
        }
        
          
        $stmt = $pdo->prepare("SELECT AVG(rating) AS overall_rating, product_name, COUNT(*) AS total_reviews FROM reviews WHERE (product_name = 'Posters') OR (product_name = 'Pens')  GROUP BY product_name ORDER BY total_reviews DESC LIMIT 5");
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach ($reviews as $review): ?>
    <div class="overall_rating">
    <h3 class="name"><?=htmlspecialchars($review['product_name'], ENT_QUOTES)?></h3>
    <span class="total"><?=$review['total_reviews']?> reviews</span>
    </br>
    </br>
</div>
<?php endforeach ?>