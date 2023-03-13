<?php

namespace App\Console\Commands;

use App\Models\Employee;
use App\Models\Company;
use Illuminate\Console\Command;

class CompanyEmployeeReportCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate a report of companies and their employees';

    /**
     * Execute the console command.
     */
    public function handle()
{
    $employees = Employee::with('company')->get();
    
    $employeesByCompany = $employees->groupBy('company_id');
    
    foreach ($employeesByCompany as $companyId => $employees) {
        $company = Company::findOrFail($companyId);
        
        $this->info($company->name . ',' . '(' . $company->address . ')' . ':');
        
        foreach ($employees as $employee) {
            $fullName = $employee->first_name . ' ' . $employee->last_name;
            $this->line('-> ' . $fullName);
            
        }
        $this->line('');
    }
}
}
