<?php
# report.class.php - Using an OOP Report Class
# Create:   Michael Monteith
# Date:     3/10/2024
#   The purpose is to make an adaptable report that may have mixed columns

/*
    • Define a Report class with properties for common columns (title, date, and author) and an array for
    dynamic columns.
    • The addColumn method allows you to add custom columns to the report.
    • The generateReport method constructs the report content by combining common and dynamic columns.
    class Report
*/

class Report
{
    private $title;
    private $date;
    private $author;
    private $dynamicColumns = [];
    public function __construct($title, $date, $author)
    {
        $this->title = $title;
        $this->date = $date;
        $this->author = $author;
    }
    public function addColumn($columnName, $columnData)
    {
        $this->dynamicColumns[$columnName] = $columnData;
    }
    public function generateReport()
    {
        $reportContent = "Report: {$this->title}\n";
        $reportContent .= "Date: {$this->date}\n";
        $reportContent .= "Author: {$this->author}\n";
        foreach ($this->dynamicColumns as $columnName => $columnData)
        {
            $reportContent .= "$columnName: $columnData\n";
        }
        return $reportContent;
    }
}