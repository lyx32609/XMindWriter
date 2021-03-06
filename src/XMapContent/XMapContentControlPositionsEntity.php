<?php


namespace sinri\XMindWriter\XMapContent;


use sinri\XMindWriter\core\XMapNodeEntity;
use XMLWriter;

class XMapContentControlPositionsEntity extends XMapNodeEntity
{
    /**
     * @var XMapContentControlPositionEntity[] [0,2] control points of this relationship
     */
    protected $controlPointList;

    /**
     * @return XMapContentControlPositionEntity[]
     */
    public function getControlPointList()
    {
        return $this->controlPointList;
    }

    /**
     * @param XMapContentControlPositionEntity[] $controlPointList
     * @return XMapContentControlPositionsEntity
     */
    public function setControlPointList($controlPointList)
    {
        $this->controlPointList = $controlPointList;
        return $this;
    }

    protected function nodeTag()
    {
        return "control-points";
    }

    /**
     * @param XMLWriter $xmlWriter
     * @return void
     */
    protected function writeThisNode($xmlWriter)
    {
        $xmlWriter->startElement($this->nodeTag());

        foreach ($this->controlPointList as $controlPositionEntity){
            self::writeThatNode($xmlWriter,$controlPositionEntity);
        }

        $xmlWriter->endElement();
    }
}