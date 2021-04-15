<?php

/* - Going to Bed -

This small project provides practice for:
    > Creating objects from classes
    > Writing and using methods
    > Using static methods

The farmer is creating pyjamas for his farm animals... */


<?php

// The farmer likes names to be entirely lowercase, except for the second letter, which should always be uppercase

class StringUtilities{
  public static function secondCase($str){
    if (strlen($str) > 1){
      $str = strtolower($str);
      $str[1] = strtoupper($str[1]);
    }
    return $str;
  }
}

class Pyjamas{
  private $owner, $fit, $color;
  function __construct($owner = "unclaimed", $fit = "regular", $color = "purple"){
    $this->owner = StringUtilities::secondCase($owner);
    $this->fit = $fit;
    $this->color = $color;
  }

  public function describe(){
    return "These " . $this->fit . " " . $this->color . " pyjamas are owned by " . $this->owner . ".";
  }

  // Setter for 'fit' variable
  public function setFit($new_fit) {
    $this->fit = $new_fit;
  }
}

class buttonablePyjamas extends Pyjamas{
  private $button_state = "unbuttoned";
  public function describe(){
      return Pyjamas::describe() . ".. They are also " . $this->button_state;
  }
  public function toggleButtons(){
    if ($this->button_state == "unbuttoned"){
      $this->button_state = "buttoned";
    } else {
      $this->button_state = "unbuttoned";
    }
  }
}

$chicken_pjs = new Pyjamas("Chicken", "small", "blue");
echo $chicken_pjs->describe() . "\n";

$moose_pjs = new buttonablePyjamas("Moose", "large", "red");
$moose_pjs->toggleButtons();
echo $moose_pjs->describe() . "\n";