<?php
# phpreport.php - Using an OOP Report Class
# Created:   Michael Monteith
# Date:     3/10/2024
#   The purpose is to make an adaptable report that may have mixed columns

include_once "classes/report.class.php";

    // Example usage:
    $myReport = new Report("Sales Report", "2024-02-12", "John Doe");
    $myReport->addColumn("Revenue", "$50,000");
    $myReport->addColumn("Expenses", "$20,000");
    echo $myReport->generateReport();

?>