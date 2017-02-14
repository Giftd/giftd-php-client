<?php

namespace Giftd\Exceptions;


class ApiException extends \Exception
{
    public $code;
    public $data;

    protected function _stringifyData($data)
    {
        if (!is_array($data)) {
            return $data;
        }
        $result = array();
        foreach ($data as $key => $value)
        {
            if (is_array($value)) {
                $result[] = implode(", ", $value);
            } else {
                $result[] = $value;
            }
        }
        return implode(", ", $result);
    }

    public function __construct($data, $code = null)
    {
        parent::__construct($this->_stringifyData($data));
        $this->code = $code;
        $this->data = $data;
    }

    public function __toString()
    {
        return parent::__toString() . ($this->code ? "; code = " . $this->code : null);
    }
}
