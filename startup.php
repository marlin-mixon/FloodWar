<?php
  if (array_key_exists('method', $_GET) ) {
    $method = $_GET["method"];
    switch ($method) {
      case "startup":
        $method = $_GET['method'];
        $BOARD_WIDTH = $_GET["BOARD_WIDTH"];
        $BOARD_HEIGHT = $_GET["BOARD_HEIGHT"];
        $NONE = $_GET["NONE"];
        $b = array();
        for ($i=0;$i<$BOARD_HEIGHT;$i++) {
          for ($j=0;$j<$BOARD_WIDTH;$j++) {
            $b[$i][$j] = ["color" => rand(1,6), "ownership" => $NONE ];
          }
        }
        
        echo json_encode($b);
        break;             
      default:
        echo "method: $method unknown";
    }
  }
?>
