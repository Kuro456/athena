<?php

namespace Ath\ExerciseBundle\Entity;

use Ath\ExerciseBundle\Entity\ExerciseFile as ExerciseFile;
use Symfony\Component\Form\Form;

interface exercise
{

  const DELIMITER = "\n";

  /* affiche l'énoncé */
  public function getSubject(ExerciseFile $exerciseFile);

  /* retourne un tableau de bonnes réponses */
  public function getListOfRightAnswers(ExerciseFile $exerciseFile);

  /* retourne un tableau de réponses possibles */
  public function getListOfAnswers(ExerciseFile $exerciseFile);

  /* vérifie si la ou les réponses données sont valides ou non */
  public function areRightAnswers(ExerciseFile $exerciseFile, $answers);

  /* initialise l'énoncé */
  public function setContent(ExerciseFile $exerciseFile, Form $form);

  /* récupérer le contenu sous forme d'un tableau */
  public function getContent(ExerciseFile $exerciseFile);

}
