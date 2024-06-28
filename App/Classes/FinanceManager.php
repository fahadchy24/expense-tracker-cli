<?php

namespace App\Classes;

use FileStorage;

class FinanceManager
{
    public float $amount;
    public string $category;


    public function __construct($data)
    {
    }

    public function addIncome($amount, $category)
    {
        $file = fopen('./files/income.txt', 'a');

        fwrite($file, $amount . ',' . $category . "\n");

        fclose($file);

        echo PHP_EOL;

        echo "Income added successfully.\n.\n";
    }

    public function addExpense($amount, $category)
    {
        $file = fopen('./files/expense.txt', 'a');

        fwrite($file, $amount . ',' . $category . "\n");

        echo PHP_EOL;

        echo "Expense added successfully.\n.\n";
    }

    public function showIncomes()
    {
        echo file_get_contents('./files/income.txt');
    }

    public function showExpenses()
    {
        echo file_get_contents('./files/expense.txt');
    }

    public function showSavings()
    {
        //
    }

    public function showCategories()
    {
        echo file_get_contents('./files/category.txt');
    }
}
