<?php
require __DIR__.'/domparser/simple_html_dom.php';
class Home extends CI_Controller{
	  public function __construct()
    {
        parent::__construct();
        $this->load->model('Global_model');
  		$this->load->library('form_validation');
        $this->load->library('session');
  		//$data=shopifyData();
    	//$this->load->library('Shopify' , $data);


    }

    public function getPrintorder()
    {
      $this->load->load_admin('print_bill');
    }

    



    public function getOrders()
    {   
       
          $requestData=$_REQUEST;
      
          $apiconfig= getShop_accessToken();
          $this->load->library('Shopify' , $apiconfig);
          $limit=$_POST['length'];
          $ordersCount = $this->shopify->call(['METHOD' => 'GET', 'URL' =>'/admin/orders/count.json'],TRUE);
         $data['orderCount']=$ordersCount->count;
         $start=$_POST['start']/$limit;
         $page=$start+1;
         $htmlarray=array(
                            'limit'=>$limit,
                                'page'=>$page,
                                );


                                $orders=  $this->shopify->call(['METHOD' => 'GET', 'URL' =>'/admin/orders.json','DATA'=>$htmlarray],TRUE);
                                $reco=array();
                                if($orders){
                                    //print_r($orders->orders);
                                   $filterd=  count($orders->orders);
                                     $nestedData=array();
                                   foreach($orders->orders as $order){
                                        //print_r($order->shipping_address->name);
                                    if($order->fulfillment_status=="fulfilled"){
                                            $sfulfil='<div class="circle_green"></div>';
                                            }else{
                                                $sfulfil='<div class="circle_red"></div>';
                                            }
                                            if($order->fulfillment_status=="unpaid"){
                                                    $finan='<div class="circle_red"></div>';
                                            }else if($order->fulfillment_status=="paid"){
                                                 $finan='<div class="circle_green"></div>';
                                            }else{
                                                 $finan='<div class="circle_yellow"></div>';
                                            }
                                            if($order->note=="")
                                            {
                                                $note='<div class="circle_red"></div>';
                                            }
                                            else
                                            {
                                                 $note='<div class="circle_green"></div>';
                                            }
                                            $trackingId='';
                                            $fulfillments=$order->fulfillments;
                                            if(isset($fulfillments[0]->tracking_number)){
                                               $trackingId= $fulfillments[0]->tracking_number;
                                            }
                                            if(isset($order->shipping_address->name)){
                                                $shipping=$order->shipping_address->name;
                                            }else{
                                                $shipping='';
                                            }
                                            if(isset($order->shipping_address->zip)){
                                                $zip=$order->shipping_address->zip;
                                            }else{
                                                $zip='';
                                            }
                                            $nestedData[] = '<input id="select-all-items" name="ordersId" type="checkbox" class="singleCheck" value="'.$order->id.'">';
                                            $nestedData[] = $order->name;
                                            $nestedData[] = $shipping;
                                            $nestedData[] = $zip;
                                            $nestedData[] = $order->total_price;
                                            //$nestedData[] = $order->note;
                                            $nestedData[] = $order->tags;
                                            $nestedData[] = $sfulfil;
                                            $nestedData[] = $order->note;
                                            $nestedData[] = $finan;
                                           // $nestedData[] = $note;
                                            $nestedData[] = $trackingId;
                                            $nestedData[] = '<input type ="button" class="ui-button ui-button--primary ui-title-bar__action" onclick="print_orders('.$order->id.')" value="Print">';
                                            $nestedData[] = '<input type ="button" class="ui-button ui-button--primary ui-title-bar__action" onclick="" value="Archive">';
                                            $reco[] = $nestedData;
                                            $nestedData=array();
                                        }
                                    //echo count($orders['order']);
                                }
                               // print_r($orders-);
                               
                                 
                       $json_data = array(
            "draw"            => intval( $requestData['draw'] ),   // for every request/draw by clientside , they send a number as a parameter, when they recieve a response/data they first check the draw number, so we are sending same number in draw. 
            "recordsTotal"    => intval( $data['orderCount'] ),  // total number of records
            "recordsFiltered" => intval($data['orderCount'] ), // total number of records after searching, if there is no searching then totalFiltered = totalData
            "data"            =>$reco   // total data array
            );

                echo json_encode($json_data);          
                                
                                


    }

 


  

    	
}

