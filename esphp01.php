<?php

// Creazione della classe
class Company {
    public $name;
    public $location; 
    public $tot_employees;
    public $salary_per_employee;


     
     public static $all_companies = [];

    
    public function __construct($name, $location, $tot_employees, $salary_per_employee) {
        $this->name = $name;
        $this->location = $location;
        $this->tot_employees = $tot_employees;
        $this->salary_per_employee = $salary_per_employee;

       
         self:: $all_companies [] = $this;


    }

    public function Aulab() {
        if($this->tot_employees > 0){
            
            echo "L'ufficio $this->name con sede in $this->location ha ben $this->tot_employees dipendenti e ha una spesa annuale di euro $this->salary_per_employee \n";
        }
        else{
            echo "L'ufficio $this->name con sede in $this->location non ha dipendenti e ha una spesa annuale di euro $this->salary_per_employee \n";

        }
    }

    // Metodo per calcolare e stampare la spesa annuale
    public function spesaAnnuale() {
        $spesa = $this->tot_employees * $this->salary_per_employee;
        echo "La spesa annuale per l'azienda $this->name è di $spesa euro\n"; 
        return $spesa;
    }


   
    // METODO PER CALCOLARE L'INSIEME DELLE SPESE DI TUTTE LE AZIENDE


    public static function spesaTotale(){
        $totale_spese = 0;


      foreach(self::$all_companies as $company){
        $totale_spese += $company->spesaAnnuale();
      }

     
      echo "Il totale delle spese di tutte le aziende è di $totale_spese euro\n";


    }



}

// Creazione delle istanze
$company1 = new Company("Aulab", "Italia", 20, 5000);
$company2 = new Company("Tech Solutions", "Palermo", 100, 35000);
$company3 = new Company("HealthCorp", "Los Angeles", 200, 45000);
$company4 = new Company("EduSoft", "San Francisco", 80, 40000);
$company5 = new Company("GreenEnergy", "Austin", 120, 42000);


$companies = [$company1, $company2, $company3, $company4, $company5];

// Iterazione sulle istanze per calcolare la spesa annuale
foreach ($companies as $company) {
    $company->spesaAnnuale();
}


// Calcolo del totale delle spese

Company::spesaTotale();

// OUTPUT
$company1->Aulab();


?>
