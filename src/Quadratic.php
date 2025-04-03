<?php

namespace Mitzury\QuadraticSolver;

class Quadratic
{
    /**
     * Решает квадратное уравнение ax^2 + bx + c = 0.
     *
     * @param float $a Коэффициент a
     * @param float $b Коэффициент b
     * @param float $c Коэффициент c
     * @return array Массив корней уравнения
     */
    public function solve(float $a, float $b, float $c): array
    {
        if ($a == 0) {
            throw new \InvalidArgumentException("Коэффициент 'a' не может быть равен нулю.");
        }

        $discriminant = $b ** 2 - 4 * $a * $c;

        if ($discriminant > 0) {
            $x1 = (-$b + sqrt($discriminant)) / (2 * $a);
            $x2 = (-$b - sqrt($discriminant)) / (2 * $a);
            return [$x1, $x2];
        } elseif ($discriminant == 0) {
            $x = -$b / (2 * $a);
            return [$x];
        } else {
            return [];
        }
    }
}
