<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 25/6/2017
 * Time: 7:39 PM
 */

class ItemHistory_Model extends Base_Model
{
    public $tableViewHeaders = array('Fecha', 'Estado', 'Actual');

    public function __construct()
    {
        parent::__construct();
    }


    public function getItemHistoryByItem($pItemcode)
    {
        try
        {
            $sql = "
                SELECT 
                  DATE_FORMAT(`ih`.`creationdate`, '%d/%m/%Y - %H:%m:%s') AS `date`,                  
                  `ie`.`description`,
                  CASE `ih`.`isLastState`
                    WHEN 0 THEN '-'
                    WHEN 1 THEN 'Si'
                  END AS isLastState 
                                    
                FROM `itemhistory` AS `ih`
                LEFT JOIN `itemstate` AS `ie` ON `ie`.`itemstatecode` = `ih`.`itemstate`                 
                WHERE  `ih`.`itemcode` = '$pItemcode';                
            ";

            $query = $this->db->query($sql);

            $result = new stdClass();
            $result->header   =  $this->tableViewHeaders;//Array
            $result->body     =  array();

            foreach ($query->result() as $element) {
                $result->body[] = array_values((array) $element);
            }

            return $result;
        }
        catch (Exception $e)
        {
            return null;
        }

    }

}