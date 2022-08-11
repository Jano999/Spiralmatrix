<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
        margin-top: 20%;
        font-family: sans-serif;
        text-align: center;
        background-color: black;

    }
    h1{
        color:antiquewhite
    }
    h2{
        color: #fff;
    }
</style>
<body> 



    <script>

const darkdimension = [
    [11, 12, 13],
    [21, 22, 23],
    [31, 32, 33],
   
  ];

const mindblowingexercice = darkdimension => {
    const result = [];
 
    const rowCount = darkdimension.length;
    const columnCount = darkdimension[0].length;
    let startRow = 0;
    let endRow = rowCount - 1;
    let startColumn = 0;
    let endColumn = columnCount - 1;
 
    while (endRow >= startRow && endColumn >= startColumn) {    
      for (let column = startColumn; column <= endColumn; column++) {      
        result.push(darkdimension[startRow][column]);
      }    
      startRow++;      
      for (let row = startRow; row <= endRow; row++) {
        result.push(darkdimension[row][endColumn]);
      }
      endColumn--;      
      if (endRow >= startRow) {        
        for (let column = endColumn; column >= startColumn; column--) {
          result.push(darkdimension[endRow][column]);
        }
      }
      endRow--;      
      if (endColumn >= startColumn) {      
        for (let row = endRow; row >= startRow; row--) {
          result.push(darkdimension[row][startColumn]);
        }
      }
      startColumn++;
    }
      return result;
  };

    </script>
<h1>JavaScript</h1>
<h2><script>  document.write(mindblowingexercice(darkdimension));</script></h2>
    <?php
$matrix = [[11, 12, 13], [21, 22, 23], [31, 32, 33]];

function printValue($matrix, $row, $column) {
    echo $matrix[$row][$column] . "\t";
}

function printMatrix($matrix) {
    $matrixSize = count($matrix);
    for ($row = 0; $row < $matrixSize; $row++) {
        for ($column = 0; $column < $matrixSize; $column++) {
            printValue($matrix, $row, $column);
        }
        echo "<br>";
    }
}
function advancedmatrixskill($matrix) {
    $matrixSize = count($matrix);
    $top = $left = 0;
    $bottom = $right = $matrixSize - 1;
    $direction = 0;
    //PODMIENKY PRE SMER
    while ($top <= $bottom && $left <= $right) {
        if ($direction === 0) {
            // Z LAVA DO PRAVA
            for ($column = $left; $column <= $right; $column++) {
                printValue($matrix, $top, $column);
            }
            $top++;
        } else if ($direction == 1) {
            // Z HORA DOLE
            for ($row = $top; $row <= $bottom; $row++) {
                printValue($matrix, $row, $right);
            }
            $right--;
        } else if ($direction == 2) {
            // Z PRAVA DO LAVA
            for ($column = $right; $column >= $left; $column--) {
                printValue($matrix, $bottom, $column);
            }
            $bottom--;
        } else if ($direction == 3) {
            // Z DOLA HORE
            for ($row = $bottom; $row >= $top; $row--) {
                printValue($matrix, $row, $left);
            }
            $left++;
        }
        $direction = (++$direction % 3);
    }
}

    
    
    
    
    
    
    ?>
    <h1>PHP</h1>
    <h2> <?php echo advancedmatrixskill($matrix); ?></h2>
</body>
</html>