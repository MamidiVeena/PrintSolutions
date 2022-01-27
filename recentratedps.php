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
        
          
        $stmt = $pdo->prepare("SELECT u.firstname as name, r.product_name as product_name, r.content as content, r.rating as rating, r.submit_date as submit_date FROM reviews r JOIN allusers u on r.email= u.email WHERE (product_name = 'Pens') OR (product_name = 'Posters')  ORDER BY submit_date DESC LIMIT 5");
    $stmt->execute();
    $reviews = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<?php foreach ($reviews as $review): ?>
<div class="review">
    <h3 class="name"><?=htmlspecialchars($review['name'], ENT_QUOTES)?></h3>
    <div>
        <span class="rating"><?=str_repeat('&#9733;', $review['rating'])?></span>
        <span class="date"><?=time_elapsed_string($review['submit_date'])?></span>
    </div>
    <p class="content"><?=htmlspecialchars($review['content'], ENT_QUOTES)?></p>
</div>
<?php endforeach ?>