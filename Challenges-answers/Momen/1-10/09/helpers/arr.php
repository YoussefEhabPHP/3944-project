<?php

class Arr
{

    public static function hasFailingScore(array $scores): bool
    {
        return array_any(
            $scores,
            fn($score) => !Num::isPassingScore($score)
        );
    }
    public static function passingScores(array $scores): array
    {
        return array_values(array_filter(
            $scores,
            fn($score) => Num::isPassingScore($score)
        ));
    }
    public static function firstPassingScore(array $scores): int|float|null
    {
        foreach ($scores as $score) {
            if (Num::isPassingScore($score)) {
                return $score;
            }
        }

        return null;
    }
    public static function studentScores(
        array $names,
        array $scores
    ): array {
        $names = array_map(
            fn($name) => Str::title($name),
            $names
        );

        return array_combine($names, $scores);
    }

    public static function groupProducts(
        array $products,
        int $size
    ): array {
        $products = array_map(
            fn($product) => Str::title($product),
            $products
        );

        return array_chunk($products, $size);
    }
    public static function uniqueProducts(
        array $store1,
        array $store2
    ): array {
        return array_diff($store1, $store2);
    }
    public static function mergeCarts(
        array $cart1,
        array $cart2
    ): array {
        $products = array_merge($cart1, $cart2);

        return array_map(
            fn($product) => Str::title($product),
            $products
        );
    }
    public static function randomWinners(
        array $participants,
        int $count
    ): array {
        // if ($count <= 0 || empty($participants)) {
        //     return [];
        // }

        $count = min($count, count($participants));

        $keys = array_rand($participants, $count);

        if ($count === 1) {
            $keys = [$keys];
        }

        $winners = [];

        foreach ($keys as $key) {
            $winners[] = Str::title($participants[$key]);
        }

        return $winners;
    }
    public static function orderTotal(array $order): float|int
    {
        return array_reduce(
            $order,
            fn($total, $item) =>
            $total + ($item["price"] * $item["quantity"]),
            0
        );
    }
    public static function adultUsers(array $users): array
    {
        $users = array_filter(
            $users,
            fn($user) => Num::isAdult($user["age"])
        );

        return array_values(array_map(
            function ($user) {
                $user["name"] = Str::title($user["name"]);
                return $user;
            },
            $users
        ));
    }
    public static function firstAffordableProduct(
        array $products,
        float $maxPrice
    ): ?array {
        $product = array_find(
            $products,
            fn($product) => $product["price"] <= $maxPrice
        );

        if ($product === null) {
            return null;
        }

        $product["name"] = Str::title($product["name"]);

        return $product;
    }
    
}
