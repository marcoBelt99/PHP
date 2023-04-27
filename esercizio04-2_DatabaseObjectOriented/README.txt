Per avere lo snippet su VS Code del php, fare i seguenti passi:
- File > Preferences > Configure User Snippets > cercare "html.json"
- Aggiugere il seguente blocco :

            "php" : {
                    "prefix": "php",
                    "body": [
                        "<?php ",
                        " $0",
                        "?>"
                    ],
                    "description": "php tag"
                }
- Fatto
