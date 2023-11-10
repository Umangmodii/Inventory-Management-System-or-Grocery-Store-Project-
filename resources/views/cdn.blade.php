<link href={{'https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css'}} rel="stylesheet" >

<script src={{'https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js'}}></script>
<script src="https://code.jquery.com/jquery-3.6.0.js"></script>

<script>
    $( function() {
      var availableTags = [
        "ActionScript",
        "AppleScript",
        "Asp",
        "BASIC",
        "C",
        "C++",
        "Clojure",
        "COBOL",
        "ColdFusion",
        "Erlang",
        "Fortran",
        "Groovy",
        "Haskell",
        "Java",
        "JavaScript",
        "Lisp",
        "Perl",
        "PHP",
        "Python",
        "Ruby",
        "Scala",
        "Scheme"
      ];
      $( "#search_product" ).autocomplete({
        source: availableTags
      });
    } );
    </script>