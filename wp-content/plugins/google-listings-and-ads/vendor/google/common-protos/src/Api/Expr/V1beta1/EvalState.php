<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: google/api/expr/v1beta1/eval.proto

namespace Google\Api\Expr\V1beta1;

use Google\Protobuf\Internal\GPBType;
use Google\Protobuf\Internal\RepeatedField;
use Google\Protobuf\Internal\GPBUtil;

/**
 * The state of an evaluation.
 * Can represent an initial, partial, or completed state of evaluation.
 *
 * Generated from protobuf message <code>google.api.expr.v1beta1.EvalState</code>
 */
class EvalState extends \Google\Protobuf\Internal\Message
{
    /**
     * The unique values referenced in this message.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.ExprValue values = 1;</code>
     */
    private $values;
    /**
     * An ordered list of results.
     * Tracks the flow of evaluation through the expression.
     * May be sparse.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.EvalState.Result results = 3;</code>
     */
    private $results;

    /**
     * Constructor.
     *
     * @param array $data {
     *     Optional. Data for populating the Message object.
     *
     *     @type \Google\Api\Expr\V1beta1\ExprValue[]|\Google\Protobuf\Internal\RepeatedField $values
     *           The unique values referenced in this message.
     *     @type \Google\Api\Expr\V1beta1\EvalState\Result[]|\Google\Protobuf\Internal\RepeatedField $results
     *           An ordered list of results.
     *           Tracks the flow of evaluation through the expression.
     *           May be sparse.
     * }
     */
    public function __construct($data = NULL) {
        \GPBMetadata\Google\Api\Expr\V1Beta1\PBEval::initOnce();
        parent::__construct($data);
    }

    /**
     * The unique values referenced in this message.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.ExprValue values = 1;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getValues()
    {
        return $this->values;
    }

    /**
     * The unique values referenced in this message.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.ExprValue values = 1;</code>
     * @param \Google\Api\Expr\V1beta1\ExprValue[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setValues($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1beta1\ExprValue::class);
        $this->values = $arr;

        return $this;
    }

    /**
     * An ordered list of results.
     * Tracks the flow of evaluation through the expression.
     * May be sparse.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.EvalState.Result results = 3;</code>
     * @return \Google\Protobuf\Internal\RepeatedField
     */
    public function getResults()
    {
        return $this->results;
    }

    /**
     * An ordered list of results.
     * Tracks the flow of evaluation through the expression.
     * May be sparse.
     *
     * Generated from protobuf field <code>repeated .google.api.expr.v1beta1.EvalState.Result results = 3;</code>
     * @param \Google\Api\Expr\V1beta1\EvalState\Result[]|\Google\Protobuf\Internal\RepeatedField $var
     * @return $this
     */
    public function setResults($var)
    {
        $arr = GPBUtil::checkRepeatedField($var, \Google\Protobuf\Internal\GPBType::MESSAGE, \Google\Api\Expr\V1beta1\EvalState\Result::class);
        $this->results = $arr;

        return $this;
    }

}
