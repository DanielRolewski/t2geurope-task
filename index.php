<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <title>T2G Europe Recruitment Tasks</title>
</head>
<body>
    <h1>T2G Europe Recruitment Task List</h1>
    <a href="tasks/php/task-one/main.php" alt="php/task-one">php/task-one</a>
    <div>
        <p>Pierwsze zadanie z sekcji MySQL</p>
        <pre>
        SELECT tickets.id AS "Winning Ticket Ids"
        FROM `tickets`
        LEFT JOIN `draws` ON tickets.draw_id = draws.id
        LEFT JOIN `lotteries` ON draws.lottery_id = lotteries.id
        WHERE lotteries.name = "GG World X"
        AND tickets.number IN (
            SELECT draws.won_number
            FROM `draws`
            LEFT JOIN `lotteries` ON lotteries.id = draws.lottery_id
            WHERE lotteries.name = "GG World X"
            AND draws.won_number IS NOT NULL
        );
        </pre>
    </div>
</body>
</html>