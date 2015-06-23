<?php
if (isset($answers)) {
    include(__DIR__ . '../../../lib/answers.php');
    $wronganswers = 0;
    $rightanswers = 120;
    $wrongquestions = [];
    foreach ($rightAnswers as $key => $value) {
        if ($value != $answers[$key]) {
            $wronganswers += 1;
            $wrongquestions[] = $key + 1;
        }
    }
    $rightanswers -= $wronganswers;
    print $_POST["testName"] . "<br />";
    if (!empty($_POST["testEmail"])) {
        print $_POST["testEmail"] . "<br />";
    }
    if (!empty($_POST["testNumber"])) {
        print $_POST["testNumber"] . "<br />";
    }
    print "Количество ошибочных ответов: " . $wronganswers . "<br />";
    print "Количество правильных ответов: " . $rightanswers . "<br />";
    if (!empty($wrongquestions)) {
        print "Были допущены ошибки в ответах номер ";
        foreach ($wrongquestions as $value) {
            print $value . " ";
        }
    } else {
        print "Нет ни одной ошибки!";
    }
} else {
    include(ROOT . "/templates/answerForm.php");
}