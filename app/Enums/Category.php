<?php
namespace App\Enums;

enum Category: string
{
    case LIFESTYLE = 'Lifestyle';
    case FOOD = 'Healthy food recipes';
    case DIET = 'Diet';
    case DISEASE = 'Disease & Prevention';
    case MENTAL_HEALTH = 'Mental Health';

    public function label(): string
    {
        return match($this) {
            self::LIFESTYLE => 'Lifestyle',
            self::FOOD => 'Healthy Food',
            self::DIET => 'Diet Plan',
            self::DISEASE => 'Disease & Prevention',
            self::MENTAL_HEALTH => 'Mental Health',
        };
    }
}