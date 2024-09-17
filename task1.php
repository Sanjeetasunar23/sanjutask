<?php
//  function groupnamesbyage($people){
//      $result = [];
        

// foreach ($people as $person) {
//     $result[$person->age][] = $person->name;
// }

//     return $result;
// }

// $people = [
//     (object) ['name' => 'ram', 'age' => 25],
//     (object) ['name' => 'sita', 'age' => 30],
//     (object) ['name' => 'shyam', 'age' => 25],
//     (object) ['name' => 'laxman', 'age' => 40],
//     (object) ['name' => 'radha', 'age' => 30]
// ];

// $grouped = groupnamesbyage($people);

// print_r($grouped);


class AgeGroup {
    private $people;

    
    public function __construct($people) {
        $this->people = $people;
    }

    public function getNamesByAge() {
        $result = [];

        foreach ($this->people as $person) {
            $result[$person->age][] = $person->name;
        }

        return $result;
    }
    
}

$people = [
    (object) ['name' => 'ram', 'age' => 25],
    (object) ['name' => 'sita', 'age' => 30],
    (object) ['name' => 'shyam', 'age' => 25],
    (object) ['name' => 'laxman', 'age' => 40],
    (object) ['name' => 'radha', 'age' => 30]
];


$ageGroup = new AgeGroup($people);

$result = $ageGroup->getNamesByAge();
print_r($result);
?>



