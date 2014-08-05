<?php

require_once('include/Expressions/Expression/Date/DateExpression.php');
/**
 * <b>nextMonthStartDate($date, $number)</b><br>
 * Returns a date object moved forward to the first day of the next month with $number years more.<br/>
 * ex: <i>nextMonthStartDate(date("7/1/2010"), 2)</i> = "1/2/2012"
 **/
class nextMonthStartDateExpression extends DateExpression
{
	/**
	 * Returns the entire enumeration bare.
	 */
	function evaluate() {
        $params = $this->getParameters();

        $date = DateExpression::parse($params[0]->evaluate());
		if(!$date) {
            return false;
        }
		$num = $params[1]->evaluate();

		$date->setDate($date->format('Y'), $date->format('m'), 1);
		$date->add(new DateInterval('P1M'));
		if($num > 0)
			$date->add(new DateInterval('P'.$num .'Y'));
		
        return $date;
	}


	/**
	 * Returns the JS Equivalent of the evaluate function.
	 */
	static function getJSEvaluate() {
		return <<<EOQ
		    var params = this.getParameters();
			var date = SUGAR.util.DateUtils.parse(params[0].evaluate(), 'user');
			var num = params[1].evaluate();
		     //Clone the object to prevent possible issues with other operations on this variable.
		    var d = new Date(date);
			d.setDate(1);
		    d.setMonth(d.getMonth() + 1);
			d.setFullYear(d.getFullYear() + num);
		    return d;
EOQ;
	}

	/**
	 * Returns the opreation name that this Expression should be
	 * called by.
	 */
	static function getOperationName() {
		return "nextMonthStartDate";
	}
    static function getParameterTypes() {
		return array("date", "number");
	}

	/**
	 * Returns the maximum number of parameters needed.
	 */
	static function getParamCount() {
		return 2;
	}

	/**
	 * Returns the String representation of this Expression.
	 */
	function toString() {
	}
}

?>