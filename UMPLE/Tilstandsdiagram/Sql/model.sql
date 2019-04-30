-- PLEASE DO NOT EDIT THIS CODE
-- This code was generated using the UMPLE 1.29.1.4448.81a70243a modeling language!



CREATE TABLE IF NOT EXISTS `expo`
(
  /*------------------------*/
  /* MEMBER VARIABLES       */
  /*------------------------*/
  
  /*EXPO State Machines*/
  bruker ENUM('logget_inn', 'logged_ut'),
  stemming ENUM('kan_ikke_stemme', 'kan_stemme'),
  stemme ENUM('stemme_paa_prosjekt', 'takk_for_stemme', 'stemme_oppdatert'),
  PRIMARY KEY(bruker)

);


