<?php

namespace App\AppBundle\Wrapper;

use JMS\Serializer\Annotation as Serializer;

class RequestDataWrapper
{
    /**
     * @var int
     * @Serializer\SerializedName("@top")
     * @Serializer\Type("integer")
     */
    private $top;

    /**
     * @var int
     * @Serializer\SerializedName("@left")
     * @Serializer\Type("integer")
     */
    private $left;

    /**
     * @var int
     * @Serializer\SerializedName("@width")
     * @Serializer\Type("integer")
     */
    private $width;

    /**
     * @var int
     * @Serializer\SerializedName("@height")
     * @Serializer\Type("integer")
     */
    private $height;

    /**
     * @var string
     * @Serializer\SerializedName("#text")
     * @Serializer\Type("string")
     */
    private $value;

    /**
     * @return int
     */
    public function getTop()
    {
        return $this->top;
    }

    /**
     * @return int
     */
    public function getLeft()
    {
        return $this->left;
    }

    /**
     * @return int
     */
    public function getWidth()
    {
        return $this->width;
    }

    /**
     * @return int
     */
    public function getHeight()
    {
        return $this->height;
    }

    /**
     * @return int
     */
    public function getValue()
    {
        return $this->value;
    }
}
