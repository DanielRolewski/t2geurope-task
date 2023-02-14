<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>T2G Europe Recruitment Task List</title>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
    <div class="nav justify-content-center bg-primary">
        <h1 class="text-white">T2G Europe Recruitment Task List</h1>
    </div>
    <div class="d-flex justify-content-center flex-column">
        <div class="mt-5 list-group column">
            <a class="col-8 align-self-center text-white" href="tasks/php/task-one/main.php" alt="php/task-one">
                <button class="w-100 btn btn-primary">First task from PHP section</button>
            </a>
            <a class="mt-3 col-8 align-self-center text-white" href="tasks/php/task-two/main.php" alt="php/task-two">
                <button class="w-100 btn btn-primary">Second task from PHP section</button>
            </a>

            <div class="mt-3 col-8 align-self-center btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">First task from MySQL section</button>
                <div class="w-75 bg-dark dropdown-menu">
                    <pre class="text-white">
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
            </div>
            <div class="mt-3 col-8 align-self-center btn-group">
                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Second task from MySQL section</button>
                <div class="w-75 bg-dark dropdown-menu">
                    <pre class="text-white">
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
            </div>
        </div>
    </div>

    <!-- Bootstrap -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>