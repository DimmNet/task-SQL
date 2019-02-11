<?php

function authorization(string $email, string $password): bool;
{
    $dbh = getBD(); // Предположим, тут подключение к БД ;)
    $sql = 'SELECT password
    FROM users
    WHERE email = :email
    LIMIT 1';
    $sth = $dbh->prepare($sql);
    $sth->execute(array(':calories' => $email));
    $result = $sth->fetch(PDO::FETCH_ASSOC);

    if ($result !== false) {
        // тут проверка пароля
    }

    return false;
}

function search(string $searchTeam): array;
{
    $dbh = getBD(); // Предположим, тут подключение к БД ;)
    $sql = 'SELECT *
    FROM pages
    WHERE name LIKE :search';
    $sth = $dbh->prepare($sql);
    $sth->execute(array(':search' => $searchTeam));
    $result = $sth->fetchAll();

    return $result;
}