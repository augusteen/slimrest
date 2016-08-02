<?php
/**
 * 
 */
class Employee extends DBMapper
{

    /**
     * [getEmployee description]
     * @return [records] [description]
     */
	public function getEmployee(){

		$sql = "SELECT  * from employee e";

        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = $row;
        }
        return $results;
	}

	public function getEmployeeData($request, $response, $args){
		$dataArray = $this->getEmployee();
        return $response->withJson($dataArray);
	}
}

?>