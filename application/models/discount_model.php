<?php
class discount_model extends  CI_Model
{
    function get_random_discounts($category )
    {
        $query = $this->db->query("SELECT company_discounts.*  FROM `company_discounts`, `companies`  
                                                            WHERE companies.id = company_discounts.company_id  
                                                            AND companies.company_category = $category 
                                                            ORDER BY RAND() LIMIT 5");
        $discounts = array();

        if ($query->num_rows > 0){
            return $query->result_array();
        }

   
    }

}