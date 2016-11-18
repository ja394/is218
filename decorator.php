<html>

<head>
<title>array</title>
</head>
<body>

<?php
//In the Decorator pattern, a class will add functionality to another class, without changing the other classes' structure
//by having BookTitleDecorator make a copy of Book's title value, which is then changed for display. Depending on the implementation, it might be better to actually change the original object. 


 

  include_once('Book.php');
  include_once('BookTitleDecorator.php');
  include_once('BookTitleExclaimDecorator.php');
  include_once('BookTitleStarDecorator.php');

  echo tagins("html");
  echo tagins("head");  
  echo tagins("/head");  
  echo tagins("body");

  echo "BEGIN TESTING DECORATOR PATTERN";
  echo tagins("br").tagins("br");

  $patternBook = 
    new Book("Gamma, Helm, Johnson, and Vlissides",
	            "Design Patterns");
				
  $decorator = new BookTitleDecorator($patternBook);
  $starDecorator = new BookTitleStarDecorator($decorator);
  $exclaimDecorator = new BookTitleExclaimDecorator($decorator);
  
  echo "showing title : "
    .tagins("br");
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after two exclaims added : "
    .tagins("br");
  $exclaimDecorator->exclaimTitle();
  $exclaimDecorator->exclaimTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after star added : "
    .tagins("br");
  $starDecorator->starTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");
  
  echo "showing title after reset: "
    .tagins("br");
  echo $decorator->resetTitle();
  echo $decorator->showTitle();
  echo tagins("br").tagins("br");

  echo tagins("br");
  echo "END TESTING DECORATOR PATTERN";
  echo tagins("br");
  
  echo tagins("/body");
  echo tagins("/html");
  
  //doing this so code can be displayed without breaks
  function tagins($stuffing) {
    return "<".$stuffing.">";
  }

?>
</body>
</html>
