#!/usr/bin/env bash

MODELS=(
    Banner
    Category
    Good
    MenuItem
    Menu
    News
    Order
    Page
    Product
    Project
    Service
    Study
    Vacancy
)

for m in "${MODELS[@]}"
do
    php artisan admin:make:resource-files $m
done
