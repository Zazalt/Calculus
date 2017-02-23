<?php

namespace Zazalt\Calculus\Extensions;

trait Calculus2D
{
    /**
     * Calculating distance between two points on a flat plane
     *
     * @param   array $pointA
     * @param   array $pointB
     * @return  integer
     * @docs    https://en.wikipedia.org/wiki/Euclidean_distance#Two_dimensions
     * @docs    http://stackoverflow.com/questions/15747673/caluclating-distance-between-two-points-on-a-flat-plane-php
     */
    public function distanceBetweenTwoPoints(array $pointA = [], array $pointB = []): float
    {
        return sqrt( pow($pointB[0] - $pointA[0], 2) + pow($pointB[1] - $pointA[1],2) );
    }

    /**
     * Resize a rectangle object until it falls in desired dimension, but keep aspect ratio
     * A usefull function/method when want to resize an image
     *
     * @param   array $rectangleDimensions
     * @param   array $rectangleNewDimensions
     * @return  array
     */
    public function resizeRectangle(array $rectangleDimensions = [], array $rectangleNewDimensions = []): array
    {
        $newWidth = $newHeight = min($rectangleNewDimensions[1], $rectangleNewDimensions[0]);

        if($rectangleDimensions[0] != $rectangleDimensions[1]) {
            if($rectangleDimensions[0] > $rectangleDimensions[1]) {
                $newWidth = $rectangleNewDimensions[0];
                $newHeight = (($newWidth * $rectangleDimensions[1]) / $rectangleDimensions[0]);
                //fix height
                if($newHeight > $rectangleNewDimensions[1]) {
                    $newHeight = $rectangleNewDimensions[1];
                    $newWidth = (($rectangleDimensions[0] * $newHeight) / $rectangleDimensions[1]);
                }
            } else {
                $newHeight = $rectangleNewDimensions[1];
                $newWidth = (($rectangleDimensions[0] * $newHeight) / $rectangleDimensions[1]);
                //fix width
                if($newWidth > $rectangleNewDimensions[0]) {
                    $newWidth = $rectangleNewDimensions[0];
                    $newHeight = (($newWidth * $rectangleDimensions[1]) / $rectangleDimensions[0]);
                }
            }
        }

        return [
            'width'     => (int) $newWidth,
            'height'    => (int) $newHeight
        ];
    }
}