<?php
/**
 * Created by PhpStorm.
 * User: Mauricio
 * Date: 25/6/2017
 * Time: 7:39 PM
 */

class ItemHistory_Model extends Base_Model
{

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
                  `ih`.`itemcode`,
                  `ie`.`description`,
                   `ih`.`isLastState`                 
                FROM `itemhistory` AS `ih`
                LEFT JOIN `itemstate` AS `ie` ON `ie`.`itemstatecode` = `ih`.`itemstate` 
                
                WHERE  `ih`.`itemcode` = '$pItemcode';
                
            ";
            $query = $this->db->query($sql);

            return $query->result();
        }
        catch (Exception $e)
        {
            return null;
        }

    }

}