## Kill Auditor

Web application to audit ship losses in EVE Online. It will web scrape killmails from zkillboard.com, compare them to predefenied fits in the database and return a match or not. It is meant to be used by reimbursment officers in EVE Online to speed up the process of reimbursing ships lost in game.
Fittings are stored in the database and can be added, edited or deleted by the user. They will be imported into the database from pasting EFT or Pyfa fits into the application. The application will then parse the fit and store it in the database.
The application will be built using the Laravel PHP framework and will be hosted on a webserver. The database will be a MySQL database.
1
