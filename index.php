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
    <div>
        <p>Drugie zadanie z sekcji MySQL</p>
        <pre>
        SELECT lotteries.name,
        SUM (lotteries.ticket_price) AS "Total Income From Tickets",
        SUM (
            CASE WHEN
            tickets.bought_date < draws.draw_date
            THEN lotteries.ticket_price
            ELSE 0
            END
        ) AS "Final Profit"
        FROM tickets
        LEFT JOIN draws ON tickets.draw_id = draws.id
        LEFT JOIN lotteries ON draws.lottery_id = lotteries.id
        WHERE MONTHNAME (tickets.bought_date) = 'July'
        AND YEAR (tickets.bought_date) = '2021'
        GROUP BY lotteries.name;
        </pre>
    </div>
</body>
</html>