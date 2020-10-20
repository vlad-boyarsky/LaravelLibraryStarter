# LaravelLibraryStarter
Prepare repository for the library

<h5>Library:</h5>
<hr>
<h6>composer.json</h6>
<pre>
      "extra": {
        "laravel": {
            "providers": [
                "\\RouteLib\\ServiceProvider"
            ]
        }
      }
</pre>
<hr>
<h5>Laravel:</h5>
<hr>
<h6>composer.json</h6>
<pre>
     "repositories": [
        {
            "type": "path",
            "url": "../lib"
        }
    ]
</pre>
<hr>
URI /route-lib return page with message:

<h4>Work correct 🥳</h4>


