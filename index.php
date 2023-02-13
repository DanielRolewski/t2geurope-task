<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>T2G Europe Recruitment Tasks</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <h1>T2G Europe Recruitment Task List</h1>
    <p>
        <a href="tasks/php/task-one/main.php" alt="php/task-one">php/task-one</a>
    </p>
    <p>
        <a href="tasks/php/task-two/main.php" alt="php/task-two">php/task-two</a>
    </p>
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

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>