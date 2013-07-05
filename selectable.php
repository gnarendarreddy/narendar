<!doctype html>
 
<html lang="en">
<head>
  <meta charset="utf-8" />
  <title>selectable</title>
  <link rel="stylesheet" href="http://code.jquery.com/ui/1.10.3/themes/smoothness/jquery-ui.css" />
  <script src="http://code.jquery.com/jquery-1.9.1.js"></script>
  <script src="http://code.jquery.com/ui/1.10.3/jquery-ui.js"></script>
  <link rel="stylesheet" href="/resources/demos/style.css" />
 <style>

  #feedback { font-size: 1.4em; }
  #selectable .ui-selecting { background: #FECA40; }
  #selectable .ui-selected { background: #F39814; color: white; }
  #selectable { list-style-type: none; margin: 0; padding: 0; width: 60%; }
  #selectable li { margin: 3px; padding: 0.4em; font-size: 1.4em; height: 18px; }
  </style>
  
  <script>
  $(function() {
    $( "#resizable").resizable();
    $( "#selectable" ).selectable();
  });
  </script>
</head>
<body>
 <div id="resizable" style="">
<ol id="selectable">
  <li class="ui-widget-content" style="color:green">line 1</li>
  <li class="ui-widget-content">line 2</li>
  <li class="ui-widget-content">line 3</li>
  <li class="ui-widget-content">line 4</li>
  <li class="ui-widget-content">line 5</li>
  <li class="ui-widget-content">line 6</li>
  <li class="ui-widget-content">line 7</li>
</ol>
</div>
 
 
</body>
</html>