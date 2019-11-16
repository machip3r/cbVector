<?php
    require_once ('lib/jpgraph/src/jpgraph.php');
    require_once ('lib/jpgraph/src/jpgraph_scatter.php');

    $eFx=$_GET["eFx"];
    $eFy=$_GET["eFy"];
    $longitud=$_GET["l_resultante"];
    $angulo=$_GET["a_resultante"];

    $polex = 6;
    $poley = 70;

    function FldCallback($x,$y,$a) {
        GLOBAL $polex, $poley;
        $maxr = 2000;
        $size="";
        $arrowsize="3";
        $color = "#286090";
        return array($color,$size,$arrowsize);
    }

    $datax = array();
    $datay = array();
    $angle = array();

    if ($eFx<0) {
        if ($eFy<0) {
            for($x=$eFx-1; $x<$eFx; ++$x ) {
                for($y=$eFy-1; $y<$eFy; ++$y) {
                    $a = $angulo;
                    $datax[] = $x;
                    $datay[] = $y;
                    $angle[] = $a;
                }
            }
        } else {
            for($x=$eFx-1; $x<$eFx; ++$x ) {
                for($y=$eFy; $y<$eFy+1; ++$y) {
                    $a = $angulo;
                    $datax[] = $x;
                    $datay[] = $y;
                    $angle[] = $a;
                }
            }
        }
    } else {
        if ($eFy<0) {
            for($x=$eFx; $x<($eFx+1); ++$x ) {
                for($y=$eFy-1; $y<$eFy; ++$y) {
                    $a = $angulo;
                    $datax[] = $x;
                    $datay[] = $y;
                    $angle[] = $a;
                }
            }
        } else {
            for($x=$eFx; $x<($eFx+1); ++$x ) {
                for($y=$eFy; $y<$eFy+1; ++$y) {
                    $a = $angulo;
                    $datax[] = $x;
                    $datay[] = $y;
                    $angle[] = $a;
                }
            }
        }
    }

    /*if ($longitud<50) {
        $size=50;
    } if ($longitud>100) {
        $size=200;
    } elseif ($longitud>200) {
        $size=300;
    } elseif ($longitud>300) {
        $size=400;
    } elseif ($longitud>400) {
        $size=500;
    } elseif ($longitud>500) {
        $size=600;
    } elseif ($longitud>600) {
        $size=700;
    } elseif ($longitud>700) {
        $size=800;
    } elseif ($longitud>800) {
        $size=900;
    } elseif ($longitud>900) {
        $size=1000;
    } elseif ($longitud>1000) {
        $size=5000;
    }*/

    if ($longitud<100) {
        $longitud=300;
    }

    $graph = new Graph(500,500);
    $graph->clearTheme();
    $graph->SetScale("intlin", 3000*-1, 3000, 3000*-1, 3000);
    $graph->SetMarginColor('white');

    $fp = new FieldPlot($datay,$datax,$angle);

    $fp->SetCallback('FldCallback');

    $fp->arrow->SetSize(($longitud/3), 4);

    $graph->Add($fp);

    $graph->Stroke();

?>
