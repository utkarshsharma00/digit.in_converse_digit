<?php



$json = '{   "Mobiles" : 
       		 [
               {
                   "product_name":"Xiaomi Redmi Note 5"
                   ,"unit_price":"INR 15000"
                   , "url":"https://www.amazon.in/Redmi-Note-Gold-64-RAM/dp/B07BMBNCGB"
                  
               }
               ,
               {    
                    "product_name":"Xiaomi Redmi Note 4"
                   ,"unit_price":"INR 12000"
                   
               }
               ,
               {
                    "product_name":"Apple Iphone X"
                   ,"unit_price":"INR 88000"
                   
               }
               ,
               {
                    "product_name":"One Plus 6"
                   ,"unit_price":"INR 38000"
                   
               }
               ,
               {
                    "product_name":"One Plus 5T"
                   ,"unit_price":"INR 33000"
                   
               }
               ,
               {
                    "product_name":"One Plus 5"
                   ,"unit_price":"INR 31000"
                   
               }
               ,
               {
                    "product_name":"Samsung Galaxy S8"
                   ,"unit_price":"INR 45900"
                   
               }
               ,
               {
                    "product_name":"Samsung Galaxy S9"
                   ,"unit_price":"INR 57900"
                   
               }
               ,
               {
                    "product_name":"Huawei Honor 7X"
                   ,"unit_price":"INR 12000"
                   
               }
               ,
               {
                    "product_name":"Huawei Honor 10"
                   ,"unit_price":"INR 32000"
                   
               }
               ,
               {
                    "product_name":"Huawei Mate 10"
                   ,"unit_price":"INR 40000"
                   
               }
               ,
               {
                    "product_name":"Nokia 6"
                   ,"unit_price":"INR 12000"
                   
               }
               ,
               {
                    "product_name":"Asus Zenfone Max Pro"
                   ,"unit_price":"INR 12000"
                   
               }
               ,
               {
                    "product_name":"Nokia 8"
                   ,"unit_price":"INR 28000"
                   
               }
               ,
               {
                    "product_name":"Nokia Sirocco"
                   ,"unit_price":"INR 48000"
                   
               }
               
        	] 
		}';
  

$userquery = $_REQUEST['customer_query'];

$json = json_decode($data_json);

foreach($json->Mobiles as $item)
{

 	 if($item->product_name == $userquery)

 		 {

        		$final_json = '{"messages" : [{"text":"' . $item->product_name . '","text":"' . $item->unit_price . '"}]}';

        		echo $final_json;

        		$final_json1 = '{"messages" : [{"text":"' . $item->product_name . '","text":"' . $item->url . '"}]}';
        		echo $final_json1;



  		}

 	/*else{

      			$final_json = '{"messages" : [{"text":"No record found.","text":"Please enter the correct product name..."}]}';

      			echo $final_json;


  		} */ 
}

?>