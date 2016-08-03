<?php
/**
 * 
 */
class Songs extends DBMapper
{

    /**
     * [getEmployee description]
     * @return [records] [description]
     */
	public function getSong(){

		$sql = "SELECT  * from songs e";

        $stmt = $this->db->query($sql);
        $results = [];
        while($row = $stmt->fetch()) {
            $results[] = $row;
        }
        return $results;
	}

	public function getSongData($request, $response, $args){
		$dataArray = $this->getSong();
        return $response->withJson($dataArray);
	}
}

?>