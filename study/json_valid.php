<?php
    $json =<<<EOD
{
    "decisionTree": {
        "categoryId": "SICK",
        "disclosureId": "99993",
        "disclosureName": "確認用３",
        "disclosureStatus": "UNDISCLOSED",
        "isDateDependent": "false",
        "reflexiveQuestion": {
            "reflexiveQuestionId": "91063",
            "reflexiveQuestionText": "現在の状況を回答してください。",
            "reflexiveQuestionType": "BOOLEAN",
            "branches": {
                "branch": [
                    {
                        "branchValue": "true",
                        "branchText": "はい",
                        "selected": false
                    },
                    {
                        "branchValue": "false",
                        "branchText": "いいえ",
                        "selected": false
                    }
                ]
            }
        }
    }
}
EOD;
    $json = str_replace("\n", "", $json);
    $json = str_replace(" ", "", $json);

    $json = json_encode($json);
    // var_dump($json);
    $json = json_decode($json);
    var_dump($json);

    $json =<<<EOD
{
    "decisionTree": {
        "categoryId": "SICK",
        "disclosureId": "99993",
        "disclosureName": "確認用３",
        "disclosureStatus": "UNDISCLOSED",
        "isDateDependent": "false",
        "reflexiveQuestion": {
            "reflexiveQuestionId": "91063",
            "reflexiveQuestionText": "現在の状況を回答してください。",
            "reflexiveQuestionType": "BOOLEAN",
            "branches": {
                "branch": [
                    {
                        "branchValue": "true",
                        "branchText": "はい",
                        "selected": false
                    },
                    {
                        "branchValue": "false",
                        "branchText": "いいえ",
                        "selected": false
                    },
                ]
            }
        }
    }
}
EOD;
    $json = str_replace("\n", "", $json);
    $json = str_replace(" ", "", $json);
    // var_dump(json_encode($json));
    $json = json_decode($json);
    var_dump($json);
