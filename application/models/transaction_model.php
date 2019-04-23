<?php
if ( !defined( "BASEPATH" ) )
exit( "No direct script access allowed" );
class transaction_model extends CI_Model
{
public function create($contact_id,$client_id,$invoice,$date,$status,$message,$typeofwork,$periodofassignment,$personalloted,$source,$invoicenumber,$fees,$claims,$vat,$invoiceamount,$balance,$jobnumber)
{
$data=array("contact_id" => $contact_id,"client_id" => $client_id,"invoice" => $invoice,"date" => $date,"status" => $status,"message" => $message,"typeofwork" => $typeofwork,"periodofassignment" => $periodofassignment,"personalloted" => $personalloted,"source" => $source,"invoicenumber" => $invoicenumber,"fees" => $fees,"claims" => $claims,"vat" => $vat,"invoiceamount" => $invoiceamount,"balance" => $balance,"jobnumber" => $jobnumber);
$query=$this->db->insert( "amsri_transaction", $data );
$id=$this->db->insert_id();
if(!$query)
return  0;
else
return  $id;
}
public function beforeedit($id)
{
$this->db->where("id",$id);
$query=$this->db->get("amsri_transaction")->row();
return $query;
}
public function deleteSelected($ids)
{
    if(count($ids) > 0) {
        $str = '';
        foreach($ids as $key=> $value){
            $str.= $value;
            $str.=",";
        }
        $str = rtrim($str,',');
        $query=$this->db->query("DELETE FROM `amsri_transaction` WHERE `id` IN ($str)");
        // print_r($query);
        return $query;
    }
    else{
        return false;
    }
    
}
public function gettransactiondetail($id)
{
    $query = $this->db->query("SELECT  `amsri_transaction`.`id`  AS `id` ,  `amsri_transaction`.`contact_id`  AS `contact_id` ,  `amsri_client`.`projectname`  AS `client_id` ,  `amsri_transaction`.`invoiceamount`  AS `invoiceamount` ,  `amsri_transaction`.`invoice`  AS `invoice` ,  `amsri_transaction`.`date`  AS `date` ,  `amsri_transaction`.`status`  AS `status` ,  `amsri_transaction`.`message`  AS `message` ,  `amsri_transaction`.`timestamp`  AS `timestamp` ,  `amsri_transaction`.`jobnumber`  AS `jobnumber` ,  `amsri_contact`.`name`  AS `personalloted` ,  `amsri_transaction`.`invoicenumber`  AS `invoicenumber` ,  `amsri_transaction`.`source`  AS `source` ,  `amsri_transaction`.`fees`  AS `fees` ,  `amsri_transaction`.`claims`  AS `claims` ,  `amsri_transaction`.`vat`  AS `vat` ,  `amsri_transaction`.`typeofwork`  AS `typeofwork` ,  `amsri_transaction`.`periodofassignment`  AS `periodofassignment` , `amsri_transaction`.`balance`  AS `balance` 
    FROM `amsri_transaction` LEFT JOIN `amsri_client` ON `amsri_client`.`client_id`=`amsri_transaction`.`client_id` LEFT JOIN `amsri_contact` ON `amsri_contact`.`contact_id`=`amsri_transaction`.`personalloted`  
    WHERE  `amsri_transaction`.`id`='$id'")->row();
    return $query;
}
function getsingletransaction($id){
$this->db->where("id",$id);
$query=$this->db->get("amsri_transaction")->row();
return $query;
}
public function edit($id,$contact_id,$client_id,$invoice,$date,$status,$message,$typeofwork,$periodofassignment,$personalloted,$source,$invoicenumber,$fees,$claims,$vat,$invoiceamount,$balance,$jobnumber)
{
    if($invoice=="")
    {
    $invoice=$this->transaction_model->getsingletransaction($id);
    $invoice=$invoice->invoice;
    }
$data=array("contact_id" => $contact_id,"client_id" => $client_id,"invoice" => $invoice,"date" => $date,"status" => $status,"message" => $message,"typeofwork" => $typeofwork,"periodofassignment" => $periodofassignment,"personalloted" => $personalloted,"source" => $source,"invoicenumber" => $invoicenumber,"fees" => $fees,"claims" => $claims,"vat" => $vat,"invoiceamount" => $invoiceamount,"balance" => $balance,"jobnumber" => $jobnumber);
$this->db->where( "id", $id );
$query=$this->db->update( "amsri_transaction", $data );
return 1;
}
public function delete($id)
{
$query=$this->db->query("DELETE FROM `amsri_transaction` WHERE `id`='$id'");
return $query;
}
public function getdropdown()
{
    $query=$this->db->query("SELECT * FROM `amsri_transaction` ORDER BY `id` 
                        ASC")->result();
    $return=array(
    "" => "Select Option"
    );
    foreach($query as $row)
    {
    $return[$row->id]=$row->name;
    }
    return $return;
}
public function getamsristaffdropdown()
{
$query=$this->db->query("SELECT * FROM `amsri_contact` WHERE `group`=2 ORDER BY `contact_id` ASC")->result();
$return=array(
"" => "Select Option"
);
foreach($query as $row)
{
$return[$row->contact_id]=$row->name;
}
return $return;
}

public function getjobnumberdropdown(){
    $query=$this->db->query("SELECT * FROM `amsri_transaction` ORDER BY `timestamp` DESC")->result();
    $return=array(
    "" => "Select Option"
    );
    foreach($query as $row)
    {
    $return[$row->contact_id]=$row->name;
    }
    return $return;
    }
    
    public function getinvoices($id){
        $query = $this->db->query("SELECT * FROM `amsri_invoice` WHERE  `transactionid`='$id'")->result();
        return $query;
    }

    public function invoicesubmit($data,$id)
    {
        foreach($data as $row) {
            $filename = $row['file_name'];
            $query=$this->db->query("INSERT INTO `amsri_invoice`(`transactionid`,`image`) VALUES ('$id','$filename')");
            if(!$query){
                return false;
            } 
        }
        return 1;
    }

    public function deleteinvoices($id){
        $query = $this->db->query("SELECT * FROM `amsri_invoice` WHERE  `id`='$id'")->row();
        $file = $query->image;
        $myFile = base_url('uploads')."/".$file;
        // echo $myFile;
        unlink($myFile);
        // die();
        $query=$this->db->query("DELETE FROM `amsri_invoice` WHERE `id`='$id'");
            if($query){
                return 1;
            } else{
                return 0;
            }
    }
}
?>
