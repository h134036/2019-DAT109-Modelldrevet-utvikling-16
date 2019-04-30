<?php
/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/

class EXPO
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //EXPO State Machines
  private static $BrukerLoggetInn = 1;
  private static $BrukerLoggedUt = 2;
  private $bruker;

  private static $StemmingKanIkkeStemme = 1;
  private static $StemmingKanStemme = 2;
  private $stemming;

  private static $StemmeStemmePaaProsjekt = 1;
  private static $StemmeTakkForStemme = 2;
  private static $StemmeStemmeOppdatert = 3;
  private $stemme;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public function __construct()
  {
    $this->setBruker(self::$BrukerLoggetInn);
    $this->setStemming(self::$StemmingKanIkkeStemme);
    $this->setStemme(self::$StemmeStemmePaaProsjekt);
  }

  //------------------------
  // INTERFACE
  //------------------------

  public function getBrukerFullName()
  {
    $answer = $this->getBruker();
    return $answer;
  }

  public function getStemmingFullName()
  {
    $answer = $this->getStemming();
    return $answer;
  }

  public function getStemmeFullName()
  {
    $answer = $this->getStemme();
    return $answer;
  }

  public function getBruker()
  {
    if ($this->bruker == self::$BrukerLoggetInn) { return "BrukerLoggetInn"; }
    elseif ($this->bruker == self::$BrukerLoggedUt) { return "BrukerLoggedUt"; }
    return null;
  }

  public function getStemming()
  {
    if ($this->stemming == self::$StemmingKanIkkeStemme) { return "StemmingKanIkkeStemme"; }
    elseif ($this->stemming == self::$StemmingKanStemme) { return "StemmingKanStemme"; }
    return null;
  }

  public function getStemme()
  {
    if ($this->stemme == self::$StemmeStemmePaaProsjekt) { return "StemmeStemmePaaProsjekt"; }
    elseif ($this->stemme == self::$StemmeTakkForStemme) { return "StemmeTakkForStemme"; }
    elseif ($this->stemme == self::$StemmeStemmeOppdatert) { return "StemmeStemmeOppdatert"; }
    return null;
  }

  public function loggerUt()
  {
    $wasEventProcessed = false;
    
    $aBruker = $this->bruker;
    if ($aBruker == self::$BrukerLoggetInn)
    {
      loggUt();
      $this->setBruker(self::$BrukerLoggedUt);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function loggeInn()
  {
    $wasEventProcessed = false;
    
    $aBruker = $this->bruker;
    if ($aBruker == self::$BrukerLoggedUt)
    {
      loggInn();
      $this->setBruker(self::$BrukerLoggetInn);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function skriverEpost()
  {
    $wasEventProcessed = false;
    
    $aStemming = $this->stemming;
    if ($aStemming == self::$StemmingKanIkkeStemme)
    {
      lagreEpost();
      $this->setStemming(self::$StemmingKanStemme);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function fjernerCookies()
  {
    $wasEventProcessed = false;
    
    $aStemming = $this->stemming;
    if ($aStemming == self::$StemmingKanStemme)
    {
      fjerneEpost();
      $this->setStemming(self::$StemmingKanIkkeStemme);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function harStemtPaaProsjektFor()
  {
    $wasEventProcessed = false;
    
    $aStemme = $this->stemme;
    if ($aStemme == self::$StemmeStemmePaaProsjekt)
    {
      slettGammelStemme();stem();
      $this->setStemme(self::$StemmeStemmeOppdatert);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  public function harIkkeStemtPaaProsjektFor()
  {
    $wasEventProcessed = false;
    
    $aStemme = $this->stemme;
    if ($aStemme == self::$StemmeStemmePaaProsjekt)
    {
      stem();
      $this->setStemme(self::$StemmeTakkForStemme);
      $wasEventProcessed = true;
    }
    return $wasEventProcessed;
  }

  private function setBruker($aBruker)
  {
    $this->bruker = $aBruker;
  }

  private function setStemming($aStemming)
  {
    $this->stemming = $aStemming;
  }

  private function setStemme($aStemme)
  {
    $this->stemme = $aStemme;
  }

  public function equals($compareTo)
  {
    return $this == $compareTo;
  }

  public function delete()
  {}

  public function loggUt()
  {
    
  }

  public function loggInn()
  {
    
  }

  public function lagreEpost()
  {
    
  }

  public function fjerneEpost()
  {
    
  }

}
?>