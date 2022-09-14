<?php

declare (strict_types=1);
namespace Rector\Removing\ValueObject;

use Rector\Core\Validation\RectorAssert;
final class RemoveFuncCall
{
    /**
     * @readonly
     * @var string
     */
    private $funcCall;
    /**
     * @var array<int, mixed[]>
     * @readonly
     */
    private $argumentPositionAndValues = [];
    /**
     * @param array<int, mixed[]> $argumentPositionAndValues
     */
    public function __construct(string $funcCall, array $argumentPositionAndValues = [])
    {
        $this->funcCall = $funcCall;
        $this->argumentPositionAndValues = $argumentPositionAndValues;
        RectorAssert::functionName($funcCall);
    }
    public function getFuncCall() : string
    {
        return $this->funcCall;
    }
    /**
     * @return array<int, mixed[]>
     */
    public function getArgumentPositionAndValues() : array
    {
        return $this->argumentPositionAndValues;
    }
}
