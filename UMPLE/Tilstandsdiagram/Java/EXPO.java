/*PLEASE DO NOT EDIT THIS CODE*/
/*This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!*/



// line 2 "model.ump"
// line 47 "model.ump"
public class EXPO
{

  //------------------------
  // MEMBER VARIABLES
  //------------------------

  //EXPO State Machines
  public enum Bruker { LoggetInn, LoggedUt }
  private Bruker bruker;
  public enum Stemming { KanIkkeStemme, KanStemme }
  private Stemming stemming;
  public enum Stemme { stemmePaaProsjekt, TakkForStemme, StemmeOppdatert }
  private Stemme stemme;

  //------------------------
  // CONSTRUCTOR
  //------------------------

  public EXPO()
  {
    setBruker(Bruker.LoggetInn);
    setStemming(Stemming.KanIkkeStemme);
    setStemme(Stemme.stemmePaaProsjekt);
  }

  //------------------------
  // INTERFACE
  //------------------------

  public String getBrukerFullName()
  {
    String answer = bruker.toString();
    return answer;
  }

  public String getStemmingFullName()
  {
    String answer = stemming.toString();
    return answer;
  }

  public String getStemmeFullName()
  {
    String answer = stemme.toString();
    return answer;
  }

  public Bruker getBruker()
  {
    return bruker;
  }

  public Stemming getStemming()
  {
    return stemming;
  }

  public Stemme getStemme()
  {
    return stemme;
  }

  public boolean loggerUt()
  {
    boolean wasEventProcessed = false;
    
    Bruker aBruker = bruker;
    switch (aBruker)
    {
      case LoggetInn:
        // line 5 "model.ump"
        loggUt();
        setBruker(Bruker.LoggedUt);
        wasEventProcessed = true;
        break;
      default:
        // Other states do respond to this event
    }

    return wasEventProcessed;
  }

  public boolean loggeInn()
  {
    boolean wasEventProcessed = false;
    
    Bruker aBruker = bruker;
    switch (aBruker)
    {
      case LoggedUt:
        // line 8 "model.ump"
        loggInn();
        setBruker(Bruker.LoggetInn);
        wasEventProcessed = true;
        break;
      default:
        // Other states do respond to this event
    }

    return wasEventProcessed;
  }

  public boolean skriverEpost()
  {
    boolean wasEventProcessed = false;
    
    Stemming aStemming = stemming;
    switch (aStemming)
    {
      case KanIkkeStemme:
        // line 15 "model.ump"
        lagreEpost();
        setStemming(Stemming.KanStemme);
        wasEventProcessed = true;
        break;
      default:
        // Other states do respond to this event
    }

    return wasEventProcessed;
  }

  public boolean fjernerCookies()
  {
    boolean wasEventProcessed = false;
    
    Stemming aStemming = stemming;
    switch (aStemming)
    {
      case KanStemme:
        // line 18 "model.ump"
        fjerneEpost();
        setStemming(Stemming.KanIkkeStemme);
        wasEventProcessed = true;
        break;
      default:
        // Other states do respond to this event
    }

    return wasEventProcessed;
  }

  public boolean harStemtPaaProsjektFor()
  {
    boolean wasEventProcessed = false;
    
    Stemme aStemme = stemme;
    switch (aStemme)
    {
      case stemmePaaProsjekt:
        // line 24 "model.ump"
        slettGammelStemme();stem();
        setStemme(Stemme.StemmeOppdatert);
        wasEventProcessed = true;
        break;
      default:
        // Other states do respond to this event
    }

    return wasEventProcessed;
  }

  public boolean harIkkeStemtPaaProsjektFor()
  {
    boolean wasEventProcessed = false;
    
    Stemme aStemme = stemme;
    switch (aStemme)
    {
      case stemmePaaProsjekt:
        // line 25 "model.ump"
        stem();
        setStemme(Stemme.TakkForStemme);
        wasEventProcessed = true;
        break;
      default:
        // Other states do respond to this event
    }

    return wasEventProcessed;
  }

  private void setBruker(Bruker aBruker)
  {
    bruker = aBruker;
  }

  private void setStemming(Stemming aStemming)
  {
    stemming = aStemming;
  }

  private void setStemme(Stemme aStemme)
  {
    stemme = aStemme;
  }

  public void delete()
  {}

  // line 37 "model.ump"
  public void loggUt(){
    
  }

  // line 40 "model.ump"
  public void loggInn(){
    
  }

  // line 42 "model.ump"
  public void lagreEpost(){
    
  }

  // line 44 "model.ump"
  public void fjerneEpost(){
    
  }

}