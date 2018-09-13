Here is where the business specific project level Gherkin files.  These files can include `Snippets` and `Partials`.  The script `preprocessGherkin.php` will output to the `temp` directory.

The three files that are located here are part of the tutorial of doing your first project with QaNoErr.

*  `loginForm.hbs.feature` is the main `feature`.   The `hbs` means that the file may contain `handlebars` syntax.  QaNoErr uses a `php` implementation of `handlebars` templates.  You can read about it here:  [https://github.com/zordius/lightncandy](https://github.com/zordius/lightncandy)

*  `loginForm.partial.feature` - This file is referenced from `loginForm.hbs.feature` and has two parameters passed in: `{{name}}` and `{{password}}`.  This is referred to as a `partial`.

*  `spinner.snippet.feature` - This file is also referenced from `loginForm.hbs.feature` and contains static data.  It replaces the reference.  It is referred to as a `snippet`.

