<?php
include 'RandomGenerators.php';
include 'Misc.php';

/**
 * Description of DungeonGenerator
 *
 * @author Teemu Matvejeff
 */
/* ******************************* */
// Define the borders of dungeon.
function dungeonArea($width, $height) {
    $dungeon_area = array();

//        // Function to generate Dungeon area.
    for ($index = 0; $index < $height; $index++) {
        $row = array();
        for ($j = 0; $j < $width; $j++) {
            $row[$j] = "X";
        }
        $dungeon_area[$index] = $row;
    }

    return $dungeon_area;
}

/* ******************************* */

// Fuction to draw room to the dungeon map.
function makeRoom($dungeon_area, $room_coordinates, $room_area ) {
    $room_width = count($room_area(0));
    $room_height = count($room_area);
    $room = array();

    for ($index = $room_coordinates[1]; $index < ($room_coordinates[1] + $room_height); $index++) {
        $row = array();
        for ($j = $room_coordinates[0]; $j < ($room_coordinates[0] + $room_width); $j++) {
            $dungeon_area[$index][$j] = ".";
        }
        $room[$index] = $row;
    }

    return $room;
}

/* ******************************* */

// Function to ensure that generated rooms don´t overlap.
function doesOverlap($corner_x, $corner_y, $dungeon_area, $width, $height) {
    $overlap = true;

    for ($index = 0; $index < $height; $index++) {
        for ($j = 0; $j < $width; $j++) {
            
        }
    }
}

/* ******************************* */

// Function resposible for creation of complete dungeon map.
function makeMap($width, $height) {
    $dungeon_area = dungeonArea($width, $height); //Define dungeon area.
    $room_position = roomPosition($width, $height); //Define room position.
    $room_area = roomArea($dungeon_area); //Defining room size
}
?>

<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
<?php
roomPosition();
//        dungeonArea(20, 30);
//        makeRoom(10, 10);
?>
    </body>
</html>
