<?// подключение служебной части пролога  
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/main/include/prolog_before.php");
CModule::IncludeModule("sale");
  $EVENT_TYPE = 'NEW_ORDER'; // тип почтового шаблона   
	
             
            $arMailFields['NAME'] = $_REQUEST['NAME'];  
            $arMailFields['LAST_NAME'] = $_REQUEST['LAST_NAME'];  
            $arMailFields['EMAIL'] = $_REQUEST['EMAIL']; 
			$arMailFields['ALL_SUMM'] = $_REQUEST['all_summ'];	
			$arMailFields['CITY'] = $_REQUEST['new_city'];
			
			
			$arMailFields['NUMBER'] = $_REQUEST['text1']; 
			$arMailFields['PRODUCT1'] = $_REQUEST['product_name1'];  
			$arMailFields['LINK1'] = $_REQUEST['product_id1'];  
			$arMailFields['COUNT1'] = $_REQUEST['product_count1']; 
			$arMailFields['TEXT_COUNT'] = "Количество:"; 
	////////////////////////////////////////////////		   
			if ($_REQUEST["product_name2"] <> ""){
				$arMailFields['NUMBER2'] = $_REQUEST['text2']; 
					$arMailFields['PRODUCT2'] = $_REQUEST['product_name2'];  
				  $arMailFields['LINK2'] = $_REQUEST['product_id2'];  
				   $arMailFields['COUNT2'] = $_REQUEST['product_count2'];
				   $arMailFields['TEXT_COUNT2'] = "Количество:"; 
			}
			if ($_REQUEST["product_name2"] == "undefined"){
				$arMailFields['NUMBER2'] = ""; 
					$arMailFields['PRODUCT2'] = " ";  
				  $arMailFields['LINK2'] = " ";  
				   $arMailFields['COUNT2'] = " ";
				   $arMailFields['TEXT_COUNT2'] = ""; 
			}
		
	
////////////////////////////////////////////////
		if ($_REQUEST["product_name3"] <> ""){	
			$arMailFields['NUMBER3'] = $_REQUEST['text3']; 
			$arMailFields['PRODUCT3'] = $_REQUEST['product_name3'];  
			  $arMailFields['LINK3'] = $_REQUEST['product_id3'];  
			   $arMailFields['COUNT3'] = $_REQUEST['product_count3'];
			   $arMailFields['TEXT_COUNT3'] = "Количество:"; 
		}
		if ($_REQUEST["product_name3"] == "undefined"){
			$arMailFields['NUMBER3'] =""; 
					$arMailFields['PRODUCT3'] = " ";  
				  $arMailFields['LINK3'] = " ";  
				   $arMailFields['COUNT3'] = " ";
				   $arMailFields['TEXT_COUNT3'] = ""; 
			}
	////////////////////////////////////////////////		
		if ($_REQUEST["product_name4"] <> ""){
			$arMailFields['NUMBER4'] = $_REQUEST['text4']; 
				$arMailFields['PRODUCT4'] = $_REQUEST['product_name4'];  
			  $arMailFields['LINK4'] = $_REQUEST['product_id4'];  
			   $arMailFields['COUNT4'] = $_REQUEST['product_count4'];
			   $arMailFields['TEXT_COUNT4'] = "Количество:";
		}
		if ($_REQUEST["product_name4"] == "undefined"){
			$arMailFields['NUMBER4'] = ""; 
					$arMailFields['PRODUCT4'] = " ";  
				  $arMailFields['LINK4'] = " ";  
				   $arMailFields['COUNT4'] = " ";
				   $arMailFields['TEXT_COUNT4'] = "";
			}
	////////////////////////////////////////////////	
		if ($_REQUEST["product_name5"] <> ""){
			$arMailFields['NUMBER5'] = $_REQUEST['text5']; 
$arMailFields['PRODUCT5'] = $_REQUEST['product_name5'];  
			  $arMailFields['LINK5'] = $_REQUEST['product_id5'];  
			   $arMailFields['COUNT5'] = $_REQUEST['product_count5'];	
 $arMailFields['TEXT_COUNT5'] = "Количество:";			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
			
		}  
		if ($_REQUEST["product_name5"] == "undefined"){
					$arMailFields['PRODUCT5'] = " ";  
				  $arMailFields['LINK5'] = " ";  
				   $arMailFields['COUNT5'] = " ";
				   $arMailFields['NUMBER5'] = ""; 
				    $arMailFields['TEXT_COUNT5'] = "";
			}
	////////////////////////////////////////////////		
			if ($_REQUEST["product_name6"] <> ""){
				$arMailFields['NUMBER6'] = $_REQUEST['text6']; 
				$arMailFields['PRODUCT6'] = $_REQUEST['product_name6'];  
			  $arMailFields['LINK6'] = $_REQUEST['product_id6'];  
			  $arMailFields['COUNT6'] = $_REQUEST['product_count6'];	
$arMailFields['TEXT_COUNT6'] = "Количество:";			  
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name6"] == "undefined"){
			$arMailFields['NUMBER6'] = ""; 
					$arMailFields['PRODUCT6'] = " ";  
				  $arMailFields['LINK6'] = " ";  
				   $arMailFields['COUNT6'] = " ";
				   $arMailFields['TEXT_COUNT6'] = "";
			}
			
		/////////////////////////////////////////////////////
		
			if ($_REQUEST["product_name7"] <> ""){
				
				$arMailFields['NUMBER7'] = $_REQUEST['text7']; 
				$arMailFields['TEXT_COUNT7'] = "Количество:";
				
				$arMailFields['PRODUCT7'] = $_REQUEST['product_name7'];  
			  $arMailFields['LINK7'] = $_REQUEST['product_id7'];  
			   $arMailFields['COUNT7'] = $_REQUEST['product_count7'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name7"] == "undefined"){
			
					$arMailFields['NUMBER7'] = ""; 
					$arMailFields['TEXT_COUNT7'] = "";
					
					$arMailFields['PRODUCT7'] = " ";  
				  $arMailFields['LINK7'] = " ";  
				   $arMailFields['COUNT7'] = " ";
				   $arMailFields['TEXT_COUNT7'] = "";
			}
		////////////////////////////////////////////////	
			if ($_REQUEST["product_name8"] <> ""){
				
				$arMailFields['NUMBER8'] = $_REQUEST['text8']; 
				$arMailFields['TEXT_COUNT8'] = "Количество:";
				
				$arMailFields['PRODUCT8'] = $_REQUEST['product_name8'];  
			  $arMailFields['LINK8'] = $_REQUEST['product_id8'];  
			   $arMailFields['COUNT8'] = $_REQUEST['product_count8'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name8"] == "undefined"){
					$arMailFields['PRODUCT8'] = " ";  
				  $arMailFields['LINK8'] = " ";  
				   $arMailFields['COUNT8'] = " ";
				   
				   $arMailFields['NUMBER8'] = ""; 
					$arMailFields['TEXT_COUNT8'] = "";
			}
		
			////////////////////////////////////////////////	
		
			if ($_REQUEST["product_name9"] <> ""){
				
				$arMailFields['NUMBER9'] = $_REQUEST['text9']; 
				$arMailFields['TEXT_COUNT9'] = "Количество:";
				
				$arMailFields['PRODUCT9'] = $_REQUEST['product_name9'];  
			  $arMailFields['LINK9'] = $_REQUEST['product_id9'];  
			   $arMailFields['COUNT9'] = $_REQUEST['product_count9'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name9"] == "undefined"){
					$arMailFields['PRODUCT9'] = " ";  
				  $arMailFields['LINK9'] = " ";  
				   $arMailFields['COUNT9'] = " ";
				   
				    $arMailFields['NUMBER9'] = ""; 
					$arMailFields['TEXT_COUNT9'] = "";
				   
			}
			
			////////////////////////////////////////////////		
			
			if ($_REQUEST["product_name10"] <> ""){
				
					$arMailFields['NUMBER10'] = $_REQUEST['text10']; 
				$arMailFields['TEXT_COUNT10'] = "Количество:";
				
				$arMailFields['PRODUCT10'] = $_REQUEST['product_name10'];  
			  $arMailFields['LINK10'] = $_REQUEST['product_id10'];  
			   $arMailFields['COUNT10'] = $_REQUEST['product_count10'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name10"] == "undefined"){
					$arMailFields['PRODUCT10'] = " ";  
				  $arMailFields['LINK10'] = " ";  
				   $arMailFields['COUNT10'] = " ";
				   
				    $arMailFields['NUMBER10'] = ""; 
					$arMailFields['TEXT_COUNT10'] = "";
			}
			
			
			////////////////////////////////////////////////	

			if ($_REQUEST["product_name11"] <> ""){
				
				$arMailFields['NUMBER11'] = $_REQUEST['text11']; 
				$arMailFields['TEXT_COUNT11'] = "Количество:";
				
					$arMailFields['PRODUCT11'] = $_REQUEST['product_name11'];  
				  $arMailFields['LINK11'] = $_REQUEST['product_id11'];  
				   $arMailFields['COUNT11'] = $_REQUEST['product_count11'];
			}
			if ($_REQUEST["product_name11"] == "undefined"){
					$arMailFields['PRODUCT11'] = " ";  
				  $arMailFields['LINK11'] = " ";  
				   $arMailFields['COUNT11'] = " ";
				   
				    $arMailFields['NUMBER11'] = ""; 
					$arMailFields['TEXT_COUNT11'] = "";
			}
		
			////////////////////////////////////////////////	
	
		if ($_REQUEST["product_name12"] <> ""){	
		
				$arMailFields['NUMBER12'] = $_REQUEST['text12']; 
				$arMailFields['TEXT_COUNT12'] = "Количество:";
		
			$arMailFields['PRODUCT12'] = $_REQUEST['product_name12'];  
			  $arMailFields['LINK12'] = $_REQUEST['product_id12'];  
			   $arMailFields['COUNT12'] = $_REQUEST['product_count12'];
		}
		if ($_REQUEST["product_name12"] == "undefined"){
					$arMailFields['PRODUCT12'] = " ";  
				  $arMailFields['LINK12'] = " ";  
				   $arMailFields['COUNT12'] = " ";
				   
				   $arMailFields['NUMBER12'] = ""; 
					$arMailFields['TEXT_COUNT12'] = "";
			}
		
			////////////////////////////////////////////////			
			
		if ($_REQUEST["product_name13"] <> ""){
			
			$arMailFields['NUMBER13'] = $_REQUEST['text13']; 
				$arMailFields['TEXT_COUNT13'] = "Количество:";
				
				$arMailFields['PRODUCT13'] = $_REQUEST['product_name13'];  
			  $arMailFields['LINK13'] = $_REQUEST['product_id13'];  
			   $arMailFields['COUNT13'] = $_REQUEST['product_count13'];
		}
		if ($_REQUEST["product_name13"] == "undefined"){
					$arMailFields['PRODUCT13'] = " ";  
				  $arMailFields['LINK13'] = " ";  
				   $arMailFields['COUNT13'] = " ";
				   
				     $arMailFields['NUMBER13'] = ""; 
					$arMailFields['TEXT_COUNT13'] = "";
			}
			
		
	////////////////////////////////////////////////			
		
		if ($_REQUEST["product_name14"] <> ""){
			
			$arMailFields['NUMBER14'] = $_REQUEST['text14']; 
				$arMailFields['TEXT_COUNT14'] = "Количество:";
				
$arMailFields['PRODUCT14'] = $_REQUEST['product_name14'];  
			  $arMailFields['LINK14'] = $_REQUEST['product_id14'];  
			   $arMailFields['COUNT14'] = $_REQUEST['product_count14'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name14"] == "undefined"){
					$arMailFields['PRODUCT14'] = " ";  
				  $arMailFields['LINK14'] = " ";  
				   $arMailFields['COUNT14'] = " ";
				   
				    $arMailFields['NUMBER14'] = ""; 
					$arMailFields['TEXT_COUNT14'] = "";
			}
			
		
			////////////////////////////////////////////////	
			
			
			if ($_REQUEST["product_name15"] <> ""){
				
					$arMailFields['NUMBER15'] = $_REQUEST['text15']; 
				$arMailFields['TEXT_COUNT15'] = "Количество:";
				
				$arMailFields['PRODUCT15'] = $_REQUEST['product_name15'];  
			  $arMailFields['LINK15'] = $_REQUEST['product_id15'];  
			   $arMailFields['COUNT15'] = $_REQUEST['product_count15'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name15"] == "undefined"){
					$arMailFields['PRODUCT15'] = " ";  
				  $arMailFields['LINK15'] = " ";  
				   $arMailFields['COUNT15'] = " ";
				   
				    $arMailFields['NUMBER15'] = ""; 
					$arMailFields['TEXT_COUNT15'] = "";
			}
			
			
			////////////////////////////////////////////////		
			
			if ($_REQUEST["product_name16"] <> ""){
				
				$arMailFields['NUMBER16'] = $_REQUEST['text16']; 
				$arMailFields['TEXT_COUNT16'] = "Количество:";
				
				$arMailFields['PRODUCT16'] = $_REQUEST['product_name16'];  
			  $arMailFields['LINK16'] = $_REQUEST['product_id16'];  
			   $arMailFields['COUNT16'] = $_REQUEST['product_count16'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name16"] == "undefined"){
					$arMailFields['PRODUCT16'] = " ";  
				  $arMailFields['LINK16'] = " ";  
				   $arMailFields['COUNT16'] = " ";
				   
				   $arMailFields['NUMBER16'] = ""; 
					$arMailFields['TEXT_COUNT16'] = "";
			}
			
			////////////////////////////////////////////////		
			
			if ($_REQUEST["product_name17"] <> ""){
				
				$arMailFields['NUMBER17'] = $_REQUEST['text17']; 
				$arMailFields['TEXT_COUNT17'] = "Количество:";
				
				$arMailFields['PRODUCT17'] = $_REQUEST['product_name17'];  
			  $arMailFields['LINK17'] = $_REQUEST['product_id17'];  
			   $arMailFields['COUNT17'] = $_REQUEST['product_count17'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name17"] == "undefined"){
					$arMailFields['PRODUCT17'] = " ";  
				  $arMailFields['LINK17'] = " ";  
				   $arMailFields['COUNT17'] = " ";
				   
				    $arMailFields['NUMBER17'] = ""; 
					$arMailFields['TEXT_COUNT17'] = "";
			}
			
			////////////////////////////////////////////////		
			
			if ($_REQUEST["product_name18"] <> ""){
				
				$arMailFields['NUMBER18'] = $_REQUEST['text18']; 
				$arMailFields['TEXT_COUNT18'] = "Количество:";
				
				$arMailFields['PRODUCT18'] = $_REQUEST['product_name18'];  
			  $arMailFields['LINK18'] = $_REQUEST['product_id18'];  
			   $arMailFields['COUNT18'] = $_REQUEST['product_count18'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name18"] == "undefined"){
					$arMailFields['PRODUCT18'] = " ";  
				  $arMailFields['LINK18'] = " ";  
				   $arMailFields['COUNT18'] = " ";
				   
				    $arMailFields['NUMBER18'] = ""; 
					$arMailFields['TEXT_COUNT18'] = "";
			}
		
	////////////////////////////////////////////////			
			
			
			if ($_REQUEST["product_name19"] <> ""){
				
				$arMailFields['NUMBER19'] = $_REQUEST['text19']; 
				$arMailFields['TEXT_COUNT19'] = "Количество:";
				
				$arMailFields['PRODUCT19'] = $_REQUEST['product_name19'];  
			  $arMailFields['LINK19'] = $_REQUEST['product_id19'];  
			   $arMailFields['COUNT19'] = $_REQUEST['product_count19'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name19"] == "undefined"){
					$arMailFields['PRODUCT19'] = " ";  
				  $arMailFields['LINK19'] = " ";  
				   $arMailFields['COUNT19'] = " ";
				   
				    $arMailFields['NUMBER19'] = ""; 
					$arMailFields['TEXT_COUNT19'] = "";
			}
			
			
			////////////////////////////////////////////////	

			//20-30
			if ($_REQUEST["product_name20"] <> ""){
				
					$arMailFields['NUMBER20'] = $_REQUEST['text20']; 
				$arMailFields['TEXT_COUNT20'] = "Количество:";
				
				
					$arMailFields['PRODUCT20'] = $_REQUEST['product_name20'];  
				  $arMailFields['LINK20'] = $_REQUEST['product_id20'];  
				   $arMailFields['COUNT20'] = $_REQUEST['product_count20'];
			}
			if ($_REQUEST["product_name20"] == "undefined"){
					$arMailFields['PRODUCT20'] = " ";  
				  $arMailFields['LINK20'] = " ";  
				   $arMailFields['COUNT20'] = " ";
				   
				      
				    $arMailFields['NUMBER20'] = ""; 
					$arMailFields['TEXT_COUNT20'] = "";
			}
		
			////////////////////////////////////////////////	
	
	
		if ($_REQUEST["product_name21"] <> ""){	
		
		$arMailFields['NUMBER21'] = $_REQUEST['text21']; 
				$arMailFields['TEXT_COUNT21'] = "Количество:";
		
			$arMailFields['PRODUCT21'] = $_REQUEST['product_name21'];  
			  $arMailFields['LINK21'] = $_REQUEST['product_id21'];  
			   $arMailFields['COUNT21'] = $_REQUEST['product_count21'];
		}
		if ($_REQUEST["product_name21"] == "undefined"){
					$arMailFields['PRODUCT21'] = " ";  
				  $arMailFields['LINK21'] = " ";  
				   $arMailFields['COUNT21'] = " ";
				   
				    $arMailFields['NUMBER21'] = ""; 
					$arMailFields['TEXT_COUNT21'] = "";
			}
		
			////////////////////////////////////////////////	
		
				if ($_REQUEST["product_name22"] <> ""){	
				
				$arMailFields['NUMBER22'] = $_REQUEST['text22']; 
				$arMailFields['TEXT_COUNT22'] = "Количество:";
				
			$arMailFields['PRODUCT22'] = $_REQUEST['product_name22'];  
			  $arMailFields['LINK22'] = $_REQUEST['product_id22'];  
			   $arMailFields['COUNT22'] = $_REQUEST['product_count22'];
		}
		if ($_REQUEST["product_name22"] == "undefined"){
					$arMailFields['PRODUCT22'] = " ";  
				  $arMailFields['LINK22'] = " ";  
				   $arMailFields['COUNT22'] = " ";
				   
				    $arMailFields['NUMBER22'] = ""; 
					$arMailFields['TEXT_COUNT22'] = "";
			}
		
			////////////////////////////////////////////////	
		
			
		if ($_REQUEST["product_name23"] <> ""){
			
			
				$arMailFields['NUMBER23'] = $_REQUEST['text23']; 
				$arMailFields['TEXT_COUNT23'] = "Количество:";
			
				$arMailFields['PRODUCT23'] = $_REQUEST['product_name23'];  
			  $arMailFields['LINK23'] = $_REQUEST['product_id23'];  
			   $arMailFields['COUNT23'] = $_REQUEST['product_count23'];
		}
		if ($_REQUEST["product_name23"] == "undefined"){
					$arMailFields['PRODUCT23'] = " ";  
				  $arMailFields['LINK23'] = " ";  
				   $arMailFields['COUNT23'] = " ";
				   
				    $arMailFields['NUMBER23'] = ""; 
					$arMailFields['TEXT_COUNT23'] = "";
			}
			
			////////////////////////////////////////////////		
		
		if ($_REQUEST["product_name24"] <> ""){
			
			$arMailFields['NUMBER24'] = $_REQUEST['text24']; 
				$arMailFields['TEXT_COUNT24'] = "Количество:";
			
			  $arMailFields['PRODUCT24'] = $_REQUEST['product_name24'];  
			  $arMailFields['LINK24'] = $_REQUEST['product_id24'];  
			   $arMailFields['COUNT24'] = $_REQUEST['product_count24'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name24"] == "undefined"){
					$arMailFields['PRODUCT24'] = " ";  
				  $arMailFields['LINK24'] = " ";  
				   $arMailFields['COUNT24'] = " ";
				   
				    $arMailFields['NUMBER24'] = ""; 
					$arMailFields['TEXT_COUNT24'] = "";
			}
		

			////////////////////////////////////////////////	
		
			if ($_REQUEST["product_name25"] <> ""){
				
				$arMailFields['NUMBER25'] = $_REQUEST['text25']; 
				$arMailFields['TEXT_COUNT25'] = "Количество:";
				
				$arMailFields['PRODUCT25'] = $_REQUEST['product_name25'];  
			  $arMailFields['LINK25'] = $_REQUEST['product_id25'];  
			   $arMailFields['COUNT25'] = $_REQUEST['product_count25'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name25"] == "undefined"){
					$arMailFields['PRODUCT25'] = " ";  
				  $arMailFields['LINK25'] = " ";  
				   $arMailFields['COUNT25'] = " ";
				   
				    $arMailFields['NUMBER25'] = ""; 
					$arMailFields['TEXT_COUNT25'] = "";
			}
		
			////////////////////////////////////////////////	
		
			
			if ($_REQUEST["product_name26"] <> ""){
				
				$arMailFields['NUMBER26'] = $_REQUEST['text26']; 
				$arMailFields['TEXT_COUNT26'] = "Количество:";
				
				$arMailFields['PRODUCT26'] = $_REQUEST['product_name26'];  
			  $arMailFields['LINK26'] = $_REQUEST['product_id26'];  
			   $arMailFields['COUNT26'] = $_REQUEST['product_count26'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name26"] == "undefined"){
					$arMailFields['PRODUCT26'] = " ";  
				  $arMailFields['LINK26'] = " ";  
				   $arMailFields['COUNT26'] = " ";
				   
				    $arMailFields['NUMBER26'] = ""; 
					$arMailFields['TEXT_COUNT26'] = "";
			}
			
			////////////////////////////////////////////////		
			
			if ($_REQUEST["product_name27"] <> ""){
				
				$arMailFields['NUMBER27'] = $_REQUEST['text27']; 
				$arMailFields['TEXT_COUNT27'] = "Количество:";
				
				$arMailFields['PRODUCT27'] = $_REQUEST['product_name27'];  
			  $arMailFields['LINK27'] = $_REQUEST['product_id27'];  
			   $arMailFields['COUNT27'] = $_REQUEST['product_count27'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name27"] == "undefined"){
					$arMailFields['PRODUCT27'] = " ";  
				  $arMailFields['LINK27'] = " ";  
				   $arMailFields['COUNT27'] = " ";
				   
				    $arMailFields['NUMBER27'] = ""; 
					$arMailFields['TEXT_COUNT27'] = "";
			}
			
			
			////////////////////////////////////////////////		
			
			if ($_REQUEST["product_name28"] <> ""){
				
					$arMailFields['NUMBER28'] = $_REQUEST['text28']; 
				$arMailFields['TEXT_COUNT28'] = "Количество:";
				
				$arMailFields['PRODUCT28'] = $_REQUEST['product_name28'];  
			  $arMailFields['LINK28'] = $_REQUEST['product_id28'];  
			   $arMailFields['COUNT28'] = $_REQUEST['product_count28'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name28"] == "undefined"){
					$arMailFields['PRODUCT28'] = " ";  
				  $arMailFields['LINK28'] = " ";  
				   $arMailFields['COUNT28'] = " ";
				   
				    $arMailFields['NUMBER28'] = ""; 
					$arMailFields['TEXT_COUNT28'] = "";
			}
			
			////////////////////////////////////////////////		
			
			if ($_REQUEST["product_name29"] <> ""){
				
					$arMailFields['NUMBER29'] = $_REQUEST['text29']; 
				$arMailFields['TEXT_COUNT29'] = "Количество:";
				
				$arMailFields['PRODUCT29'] = $_REQUEST['product_name29'];  
			  $arMailFields['LINK29'] = $_REQUEST['product_id29'];  
			   $arMailFields['COUNT29'] = $_REQUEST['product_count29'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name29"] == "undefined"){
					$arMailFields['PRODUCT29'] = " ";  
				  $arMailFields['LINK29'] = " ";  
				   $arMailFields['COUNT29'] = " ";
				   
				     $arMailFields['NUMBER29'] = ""; 
					$arMailFields['TEXT_COUNT29'] = "";
			}
			
				////////////////////////////////////////////////	
			
			
			if ($_REQUEST["product_name30"] <> ""){
				
				$arMailFields['NUMBER30'] = $_REQUEST['text30']; 
				$arMailFields['TEXT_COUNT30'] = "Количество:";
				
				$arMailFields['PRODUCT30'] = $_REQUEST['product_name30'];  
			  $arMailFields['LINK30'] = $_REQUEST['product_id30'];  
			   $arMailFields['COUNT30'] = $_REQUEST['product_count30'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name30"] == "undefined"){
					$arMailFields['PRODUCT30'] = " ";  
				  $arMailFields['LINK30'] = " ";  
				   $arMailFields['COUNT30'] = " ";
				   
				      $arMailFields['NUMBER30'] = ""; 
					$arMailFields['TEXT_COUNT30'] = "";
			}	
			
					////////////////////////////////////////////////	
			
			
			if ($_REQUEST["product_name31"] <> ""){
				
				$arMailFields['NUMBER31'] = $_REQUEST['text31']; 
				$arMailFields['TEXT_COUNT31'] = "Количество:";
				
				$arMailFields['PRODUCT31'] = $_REQUEST['product_name31'];  
			  $arMailFields['LINK31'] = $_REQUEST['product_id31'];  
			   $arMailFields['COUNT31'] = $_REQUEST['product_count31'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name31"] == "undefined"){
					$arMailFields['PRODUCT31'] = " ";  
				  $arMailFields['LINK31'] = " ";  
				   $arMailFields['COUNT31'] = " ";
				   
				      $arMailFields['NUMBER31'] = ""; 
					$arMailFields['TEXT_COUNT31'] = "";
			}	
			
					////////////////////////////////////////////////	
			
			
			if ($_REQUEST["product_name32"] <> ""){
				
				$arMailFields['NUMBER32'] = $_REQUEST['text32']; 
				$arMailFields['TEXT_COUNT32'] = "Количество:";
				
				$arMailFields['PRODUCT32'] = $_REQUEST['product_name32'];  
			  $arMailFields['LINK32'] = $_REQUEST['product_id32'];  
			   $arMailFields['COUNT32'] = $_REQUEST['product_count32'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name32"] == "undefined"){
					$arMailFields['PRODUCT32'] = " ";  
				  $arMailFields['LINK32'] = " ";  
				   $arMailFields['COUNT32'] = " ";
				   
				      $arMailFields['NUMBER32'] = ""; 
					$arMailFields['TEXT_COUNT32'] = "";
			}	
			
					////////////////////////////////////////////////	
			
			
			if ($_REQUEST["product_name33"] <> ""){
				
				$arMailFields['NUMBER33'] = $_REQUEST['text33']; 
				$arMailFields['TEXT_COUNT33'] = "Количество:";
				
				$arMailFields['PRODUCT33'] = $_REQUEST['product_name33'];  
			  $arMailFields['LINK33'] = $_REQUEST['product_id33'];  
			   $arMailFields['COUNT33'] = $_REQUEST['product_count33'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name33"] == "undefined"){
					$arMailFields['PRODUCT33'] = " ";  
				  $arMailFields['LINK33'] = " ";  
				   $arMailFields['COUNT33'] = " ";
				   
				      $arMailFields['NUMBER33'] = ""; 
					$arMailFields['TEXT_COUNT33'] = "";
			}	
			
				////////////////////////////////////////////////	34
			
			
			if ($_REQUEST["product_name34"] <> ""){
				
				$arMailFields['NUMBER34'] = $_REQUEST['text34']; 
				$arMailFields['TEXT_COUNT34'] = "Количество:";
				
				$arMailFields['PRODUCT34'] = $_REQUEST['product_name34'];  
			  $arMailFields['LINK34'] = $_REQUEST['product_id34'];  
			   $arMailFields['COUNT34'] = $_REQUEST['product_count34'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name34"] == "undefined"){
					$arMailFields['PRODUCT34'] = " ";  
				  $arMailFields['LINK34'] = " ";  
				   $arMailFields['COUNT34'] = " ";
				   
				      $arMailFields['NUMBER34'] = ""; 
					$arMailFields['TEXT_COUNT34'] = "";
			}		
			
			////////////////////////////////////////////////	35
			
			
			if ($_REQUEST["product_name35"] <> ""){
				
				$arMailFields['NUMBER35'] = $_REQUEST['text35']; 
				$arMailFields['TEXT_COUNT35'] = "Количество:";
				
				$arMailFields['PRODUCT35'] = $_REQUEST['product_name35'];  
			  $arMailFields['LINK35'] = $_REQUEST['product_id35'];  
			   $arMailFields['COUNT35'] = $_REQUEST['product_count35'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name35"] == "undefined"){
					$arMailFields['PRODUCT35'] = " ";  
				  $arMailFields['LINK35'] = " ";  
				   $arMailFields['COUNT35'] = " ";
				   
				      $arMailFields['NUMBER35'] = ""; 
					$arMailFields['TEXT_COUNT35'] = "";
			}			
			
			////////////////////////////////////////////////	36
			
			
			if ($_REQUEST["product_name36"] <> ""){
				
				$arMailFields['NUMBER36'] = $_REQUEST['text36']; 
				$arMailFields['TEXT_COUNT36'] = "Количество:";
				
				$arMailFields['PRODUCT36'] = $_REQUEST['product_name36'];  
			  $arMailFields['LINK36'] = $_REQUEST['product_id36'];  
			   $arMailFields['COUNT36'] = $_REQUEST['product_count36'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name36"] == "undefined"){
					$arMailFields['PRODUCT36'] = " ";  
				  $arMailFields['LINK36'] = " ";  
				   $arMailFields['COUNT36'] = " ";
				   
				      $arMailFields['NUMBER36'] = ""; 
					$arMailFields['TEXT_COUNT36'] = "";
			}		

	////////////////////////////////////////////////	37
			
			
			if ($_REQUEST["product_name37"] <> ""){
				
				$arMailFields['NUMBER37'] = $_REQUEST['text37']; 
				$arMailFields['TEXT_COUNT37'] = "Количество:";
				
				$arMailFields['PRODUCT37'] = $_REQUEST['product_name37'];  
			  $arMailFields['LINK37'] = $_REQUEST['product_id37'];  
			   $arMailFields['COUNT37'] = $_REQUEST['product_count37'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name37"] == "undefined"){
					$arMailFields['PRODUCT37'] = " ";  
				  $arMailFields['LINK37'] = " ";  
				   $arMailFields['COUNT37'] = " ";
				   
				      $arMailFields['NUMBER37'] = ""; 
					$arMailFields['TEXT_COUNT37'] = "";
			}		

	////////////////////////////////////////////////	38
			
			
			if ($_REQUEST["product_name38"] <> ""){
				
				$arMailFields['NUMBER38'] = $_REQUEST['text38']; 
				$arMailFields['TEXT_COUNT38'] = "Количество:";
				
				$arMailFields['PRODUCT38'] = $_REQUEST['product_name38'];  
			  $arMailFields['LINK38'] = $_REQUEST['product_id38'];  
			   $arMailFields['COUNT38'] = $_REQUEST['product_count38'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name38"] == "undefined"){
					$arMailFields['PRODUCT38'] = " ";  
				  $arMailFields['LINK38'] = " ";  
				   $arMailFields['COUNT38'] = " ";
				   
				      $arMailFields['NUMBER38'] = ""; 
					$arMailFields['TEXT_COUNT38'] = "";
			}		

	////////////////////////////////////////////////	39
			
			
			if ($_REQUEST["product_name39"] <> ""){
				
				$arMailFields['NUMBER39'] = $_REQUEST['text39']; 
				$arMailFields['TEXT_COUNT39'] = "Количество:";
				
				$arMailFields['PRODUCT39'] = $_REQUEST['product_name39'];  
			  $arMailFields['LINK39'] = $_REQUEST['product_id39'];  
			   $arMailFields['COUNT39'] = $_REQUEST['product_count39'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name39"] == "undefined"){
					$arMailFields['PRODUCT39'] = " ";  
				  $arMailFields['LINK39'] = " ";  
				   $arMailFields['COUNT39'] = " ";
				   
				      $arMailFields['NUMBER39'] = ""; 
					$arMailFields['TEXT_COUNT39'] = "";
			}		


	////////////////////////////////////////////////	40
			
			
			if ($_REQUEST["product_name40"] <> ""){
				
				$arMailFields['NUMBER40'] = $_REQUEST['text40']; 
				$arMailFields['TEXT_COUNT40'] = "Количество:";
				
				$arMailFields['PRODUCT40'] = $_REQUEST['product_name40'];  
			  $arMailFields['LINK40'] = $_REQUEST['product_id40'];  
			   $arMailFields['COUNT40'] = $_REQUEST['product_count40'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name40"] == "undefined"){
					$arMailFields['PRODUCT40'] = " ";  
				  $arMailFields['LINK40'] = " ";  
				   $arMailFields['COUNT40'] = " ";
				   
				      $arMailFields['NUMBER40'] = ""; 
					$arMailFields['TEXT_COUNT40'] = "";
			}		

	////////////////////////////////////////////////	41
			
			
			if ($_REQUEST["product_name41"] <> ""){
				
				$arMailFields['NUMBER41'] = $_REQUEST['text41']; 
				$arMailFields['TEXT_COUNT41'] = "Количество:";
				
				$arMailFields['PRODUCT41'] = $_REQUEST['product_name41'];  
			  $arMailFields['LINK41'] = $_REQUEST['product_id41'];  
			   $arMailFields['COUNT41'] = $_REQUEST['product_count41'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name41"] == "undefined"){
					$arMailFields['PRODUCT41'] = " ";  
				  $arMailFields['LINK41'] = " ";  
				   $arMailFields['COUNT41'] = " ";
				   
				      $arMailFields['NUMBER41'] = ""; 
					$arMailFields['TEXT_COUNT41'] = "";
			}		

	////////////////////////////////////////////////	42
			
			
			if ($_REQUEST["product_name42"] <> ""){
				
				$arMailFields['NUMBER42'] = $_REQUEST['text42']; 
				$arMailFields['TEXT_COUNT42'] = "Количество:";
				
				$arMailFields['PRODUCT42'] = $_REQUEST['product_name42'];  
			  $arMailFields['LINK42'] = $_REQUEST['product_id42'];  
			   $arMailFields['COUNT42'] = $_REQUEST['product_count42'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name42"] == "undefined"){
					$arMailFields['PRODUCT42'] = " ";  
				  $arMailFields['LINK42'] = " ";  
				   $arMailFields['COUNT42'] = " ";
				   
				      $arMailFields['NUMBER42'] = ""; 
					$arMailFields['TEXT_COUNT42'] = "";
			}		


	////////////////////////////////////////////////	43
			
			
			if ($_REQUEST["product_name43"] <> ""){
				
				$arMailFields['NUMBER43'] = $_REQUEST['text43']; 
				$arMailFields['TEXT_COUNT43'] = "Количество:";
				
				$arMailFields['PRODUCT43'] = $_REQUEST['product_name43'];  
			  $arMailFields['LINK43'] = $_REQUEST['product_id43'];  
			   $arMailFields['COUNT43'] = $_REQUEST['product_count43'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name43"] == "undefined"){
					$arMailFields['PRODUCT43'] = " ";  
				  $arMailFields['LINK43'] = " ";  
				   $arMailFields['COUNT43'] = " ";
				   
				      $arMailFields['NUMBER43'] = ""; 
					$arMailFields['TEXT_COUNT43'] = "";
			}		

	////////////////////////////////////////////////	44
			
			
			if ($_REQUEST["product_name44"] <> ""){
				
				$arMailFields['NUMBER44'] = $_REQUEST['text44']; 
				$arMailFields['TEXT_COUNT44'] = "Количество:";
				
				$arMailFields['PRODUCT44'] = $_REQUEST['product_name44'];  
			  $arMailFields['LINK44'] = $_REQUEST['product_id44'];  
			   $arMailFields['COUNT44'] = $_REQUEST['product_count44'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name44"] == "undefined"){
					$arMailFields['PRODUCT44'] = " ";  
				  $arMailFields['LINK44'] = " ";  
				   $arMailFields['COUNT44'] = " ";
				   
				      $arMailFields['NUMBER44'] = ""; 
					$arMailFields['TEXT_COUNT44'] = "";
			}		


	////////////////////////////////////////////////	45
			
			
			if ($_REQUEST["product_name45"] <> ""){
				
				$arMailFields['NUMBER45'] = $_REQUEST['text45']; 
				$arMailFields['TEXT_COUNT45'] = "Количество:";
				
				$arMailFields['PRODUCT45'] = $_REQUEST['product_name45'];  
			  $arMailFields['LINK45'] = $_REQUEST['product_id45'];  
			   $arMailFields['COUNT45'] = $_REQUEST['product_count45'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name45"] == "undefined"){
					$arMailFields['PRODUCT45'] = " ";  
				  $arMailFields['LINK45'] = " ";  
				   $arMailFields['COUNT45'] = " ";
				   
				      $arMailFields['NUMBER45'] = ""; 
					$arMailFields['TEXT_COUNT45'] = "";
			}		


	////////////////////////////////////////////////	46
			
			
			if ($_REQUEST["product_name46"] <> ""){
				
				$arMailFields['NUMBER46'] = $_REQUEST['text46']; 
				$arMailFields['TEXT_COUNT46'] = "Количество:";
				
				$arMailFields['PRODUCT46'] = $_REQUEST['product_name46'];  
			  $arMailFields['LINK46'] = $_REQUEST['product_id46'];  
			   $arMailFields['COUNT46'] = $_REQUEST['product_count46'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name46"] == "undefined"){
					$arMailFields['PRODUCT46'] = " ";  
				  $arMailFields['LINK46'] = " ";  
				   $arMailFields['COUNT46'] = " ";
				   
				      $arMailFields['NUMBER46'] = ""; 
					$arMailFields['TEXT_COUNT46'] = "";
			}		


	////////////////////////////////////////////////	47
			
			
			if ($_REQUEST["product_name47"] <> ""){
				
				$arMailFields['NUMBER47'] = $_REQUEST['text47']; 
				$arMailFields['TEXT_COUNT47'] = "Количество:";
				
				$arMailFields['PRODUCT47'] = $_REQUEST['product_name47'];  
			  $arMailFields['LINK47'] = $_REQUEST['product_id47'];  
			   $arMailFields['COUNT47'] = $_REQUEST['product_count47'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name47"] == "undefined"){
					$arMailFields['PRODUCT47'] = " ";  
				  $arMailFields['LINK47'] = " ";  
				   $arMailFields['COUNT47'] = " ";
				   
				      $arMailFields['NUMBER47'] = ""; 
					$arMailFields['TEXT_COUNT47'] = "";
			}		

	////////////////////////////////////////////////	48
			
			
			if ($_REQUEST["product_name48"] <> ""){
				
				$arMailFields['NUMBER48'] = $_REQUEST['text48']; 
				$arMailFields['TEXT_COUNT48'] = "Количество:";
				
				$arMailFields['PRODUCT48'] = $_REQUEST['product_name48'];  
			  $arMailFields['LINK48'] = $_REQUEST['product_id48'];  
			   $arMailFields['COUNT48'] = $_REQUEST['product_count48'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name48"] == "undefined"){
					$arMailFields['PRODUCT48'] = " ";  
				  $arMailFields['LINK48'] = " ";  
				   $arMailFields['COUNT48'] = " ";
				   
				      $arMailFields['NUMBER48'] = ""; 
					$arMailFields['TEXT_COUNT48'] = "";
			}		

	////////////////////////////////////////////////	49
			
			
			if ($_REQUEST["product_name49"] <> ""){
				
				$arMailFields['NUMBER49'] = $_REQUEST['text49']; 
				$arMailFields['TEXT_COUNT49'] = "Количество:";
				
				$arMailFields['PRODUCT49'] = $_REQUEST['product_name49'];  
			  $arMailFields['LINK49'] = $_REQUEST['product_id49'];  
			   $arMailFields['COUNT49'] = $_REQUEST['product_count49'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name49"] == "undefined"){
					$arMailFields['PRODUCT49'] = " ";  
				  $arMailFields['LINK49'] = " ";  
				   $arMailFields['COUNT49'] = " ";
				   
				      $arMailFields['NUMBER49'] = ""; 
					$arMailFields['TEXT_COUNT49'] = "";
			}		


	////////////////////////////////////////////////	50
			
			
			if ($_REQUEST["product_name50"] <> ""){
				
				$arMailFields['NUMBER50'] = $_REQUEST['text50']; 
				$arMailFields['TEXT_COUNT50'] = "Количество:";
				
				$arMailFields['PRODUCT50'] = $_REQUEST['product_name50'];  
			  $arMailFields['LINK50'] = $_REQUEST['product_id50'];  
			   $arMailFields['COUNT50'] = $_REQUEST['product_count50'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name50"] == "undefined"){
					$arMailFields['PRODUCT50'] = " ";  
				  $arMailFields['LINK50'] = " ";  
				   $arMailFields['COUNT50'] = " ";
				   
				      $arMailFields['NUMBER50'] = ""; 
					$arMailFields['TEXT_COUNT50'] = "";
			}		


	////////////////////////////////////////////////	51
			
			
			if ($_REQUEST["product_name51"] <> ""){
				
				$arMailFields['NUMBER51'] = $_REQUEST['text51']; 
				$arMailFields['TEXT_COUNT51'] = "Количество:";
				
				$arMailFields['PRODUCT51'] = $_REQUEST['product_name51'];  
			  $arMailFields['LINK51'] = $_REQUEST['product_id51'];  
			   $arMailFields['COUNT51'] = $_REQUEST['product_count51'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name51"] == "undefined"){
					$arMailFields['PRODUCT51'] = " ";  
				  $arMailFields['LINK51'] = " ";  
				   $arMailFields['COUNT51'] = " ";
				   
				      $arMailFields['NUMBER51'] = ""; 
					$arMailFields['TEXT_COUNT51'] = "";
			}		

	////////////////////////////////////////////////	52
			
			
			if ($_REQUEST["product_name52"] <> ""){
				
				$arMailFields['NUMBER52'] = $_REQUEST['text52']; 
				$arMailFields['TEXT_COUNT52'] = "Количество:";
				
				$arMailFields['PRODUCT52'] = $_REQUEST['product_name52'];  
			  $arMailFields['LINK52'] = $_REQUEST['product_id52'];  
			   $arMailFields['COUNT52'] = $_REQUEST['product_count52'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name52"] == "undefined"){
					$arMailFields['PRODUCT52'] = " ";  
				  $arMailFields['LINK52'] = " ";  
				   $arMailFields['COUNT52'] = " ";
				   
				      $arMailFields['NUMBER52'] = ""; 
					$arMailFields['TEXT_COUNT52'] = "";
			}		

	////////////////////////////////////////////////	53
			
			
			if ($_REQUEST["product_name53"] <> ""){
				
				$arMailFields['NUMBER53'] = $_REQUEST['text53']; 
				$arMailFields['TEXT_COUNT53'] = "Количество:";
				
				$arMailFields['PRODUCT53'] = $_REQUEST['product_name53'];  
			  $arMailFields['LINK53'] = $_REQUEST['product_id53'];  
			   $arMailFields['COUNT53'] = $_REQUEST['product_count53'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name53"] == "undefined"){
					$arMailFields['PRODUCT53'] = " ";  
				  $arMailFields['LINK53'] = " ";  
				   $arMailFields['COUNT53'] = " ";
				   
				      $arMailFields['NUMBER53'] = ""; 
					$arMailFields['TEXT_COUNT53'] = "";
			}		

	////////////////////////////////////////////////	54
			
			
			if ($_REQUEST["product_name54"] <> ""){
				
				$arMailFields['NUMBER54'] = $_REQUEST['text54']; 
				$arMailFields['TEXT_COUNT54'] = "Количество:";
				
				$arMailFields['PRODUCT54'] = $_REQUEST['product_name54'];  
			  $arMailFields['LINK54'] = $_REQUEST['product_id54'];  
			   $arMailFields['COUNT54'] = $_REQUEST['product_count54'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name54"] == "undefined"){
					$arMailFields['PRODUCT54'] = " ";  
				  $arMailFields['LINK54'] = " ";  
				   $arMailFields['COUNT54'] = " ";
				   
				      $arMailFields['NUMBER54'] = ""; 
					$arMailFields['TEXT_COUNT54'] = "";
			}		

	////////////////////////////////////////////////	55
			
			
			if ($_REQUEST["product_name55"] <> ""){
				
				$arMailFields['NUMBER55'] = $_REQUEST['text55']; 
				$arMailFields['TEXT_COUNT55'] = "Количество:";
				
				$arMailFields['PRODUCT55'] = $_REQUEST['product_name55'];  
			  $arMailFields['LINK55'] = $_REQUEST['product_id55'];  
			   $arMailFields['COUNT55'] = $_REQUEST['product_count55'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name55"] == "undefined"){
					$arMailFields['PRODUCT55'] = " ";  
				  $arMailFields['LINK55'] = " ";  
				   $arMailFields['COUNT55'] = " ";
				   
				      $arMailFields['NUMBER55'] = ""; 
					$arMailFields['TEXT_COUNT55'] = "";
			}		

	////////////////////////////////////////////////	56
			
			
			if ($_REQUEST["product_name56"] <> ""){
				
				$arMailFields['NUMBER56'] = $_REQUEST['text56']; 
				$arMailFields['TEXT_COUNT56'] = "Количество:";
				
				$arMailFields['PRODUCT56'] = $_REQUEST['product_name56'];  
			  $arMailFields['LINK56'] = $_REQUEST['product_id56'];  
			   $arMailFields['COUNT56'] = $_REQUEST['product_count56'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name56"] == "undefined"){
					$arMailFields['PRODUCT56'] = " ";  
				  $arMailFields['LINK56'] = " ";  
				   $arMailFields['COUNT56'] = " ";
				   
				      $arMailFields['NUMBER56'] = ""; 
					$arMailFields['TEXT_COUNT56'] = "";
			}		


	////////////////////////////////////////////////	57
			
			
			if ($_REQUEST["product_name57"] <> ""){
				
				$arMailFields['NUMBER57'] = $_REQUEST['text57']; 
				$arMailFields['TEXT_COUNT57'] = "Количество:";
				
				$arMailFields['PRODUCT57'] = $_REQUEST['product_name57'];  
			  $arMailFields['LINK57'] = $_REQUEST['product_id57'];  
			   $arMailFields['COUNT57'] = $_REQUEST['product_count57'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name57"] == "undefined"){
					$arMailFields['PRODUCT57'] = " ";  
				  $arMailFields['LINK57'] = " ";  
				   $arMailFields['COUNT57'] = " ";
				   
				      $arMailFields['NUMBER57'] = ""; 
					$arMailFields['TEXT_COUNT57'] = "";
			}		

	////////////////////////////////////////////////	58
			
			
			if ($_REQUEST["product_name58"] <> ""){
				
				$arMailFields['NUMBER58'] = $_REQUEST['text58']; 
				$arMailFields['TEXT_COUNT58'] = "Количество:";
				
				$arMailFields['PRODUCT58'] = $_REQUEST['product_name58'];  
			  $arMailFields['LINK58'] = $_REQUEST['product_id58'];  
			   $arMailFields['COUNT58'] = $_REQUEST['product_count58'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name58"] == "undefined"){
					$arMailFields['PRODUCT58'] = " ";  
				  $arMailFields['LINK58'] = " ";  
				   $arMailFields['COUNT58'] = " ";
				   
				      $arMailFields['NUMBER58'] = ""; 
					$arMailFields['TEXT_COUNT58'] = "";
			}		

	////////////////////////////////////////////////	59
			
			
			if ($_REQUEST["product_name59"] <> ""){
				
				$arMailFields['NUMBER59'] = $_REQUEST['text59']; 
				$arMailFields['TEXT_COUNT59'] = "Количество:";
				
				$arMailFields['PRODUCT59'] = $_REQUEST['product_name59'];  
			  $arMailFields['LINK59'] = $_REQUEST['product_id59'];  
			   $arMailFields['COUNT59'] = $_REQUEST['product_count59'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name59"] == "undefined"){
					$arMailFields['PRODUCT59'] = " ";  
				  $arMailFields['LINK59'] = " ";  
				   $arMailFields['COUNT59'] = " ";
				   
				      $arMailFields['NUMBER59'] = ""; 
					$arMailFields['TEXT_COUNT59'] = "";
			}		

	////////////////////////////////////////////////	60
			
			
			if ($_REQUEST["product_name60"] <> ""){
				
				$arMailFields['NUMBER60'] = $_REQUEST['text60']; 
				$arMailFields['TEXT_COUNT60'] = "Количество:";
				
				$arMailFields['PRODUCT60'] = $_REQUEST['product_name60'];  
			  $arMailFields['LINK60'] = $_REQUEST['product_id60'];  
			   $arMailFields['COUNT60'] = $_REQUEST['product_count60'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name60"] == "undefined"){
					$arMailFields['PRODUCT60'] = " ";  
				  $arMailFields['LINK60'] = " ";  
				   $arMailFields['COUNT60'] = " ";
				   
				      $arMailFields['NUMBER60'] = ""; 
					$arMailFields['TEXT_COUNT60'] = "";
			}		

	////////////////////////////////////////////////	61
			
			
			if ($_REQUEST["product_name61"] <> ""){
				
				$arMailFields['NUMBER61'] = $_REQUEST['text61']; 
				$arMailFields['TEXT_COUNT61'] = "Количество:";
				
				$arMailFields['PRODUCT61'] = $_REQUEST['product_name61'];  
			  $arMailFields['LINK61'] = $_REQUEST['product_id61'];  
			   $arMailFields['COUNT61'] = $_REQUEST['product_count61'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name61"] == "undefined"){
					$arMailFields['PRODUCT61'] = " ";  
				  $arMailFields['LINK61'] = " ";  
				   $arMailFields['COUNT61'] = " ";
				   
				      $arMailFields['NUMBER61'] = ""; 
					$arMailFields['TEXT_COUNT61'] = "";
			}		

	////////////////////////////////////////////////	62
			
			
			if ($_REQUEST["product_name62"] <> ""){
				
				$arMailFields['NUMBER62'] = $_REQUEST['text62']; 
				$arMailFields['TEXT_COUNT62'] = "Количество:";
				
				$arMailFields['PRODUCT62'] = $_REQUEST['product_name62'];  
			  $arMailFields['LINK62'] = $_REQUEST['product_id62'];  
			   $arMailFields['COUNT62'] = $_REQUEST['product_count62'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name62"] == "undefined"){
					$arMailFields['PRODUCT62'] = " ";  
				  $arMailFields['LINK62'] = " ";  
				   $arMailFields['COUNT62'] = " ";
				   
				      $arMailFields['NUMBER62'] = ""; 
					$arMailFields['TEXT_COUNT62'] = "";
			}		

	////////////////////////////////////////////////	63
			
			
			if ($_REQUEST["product_name63"] <> ""){
				
				$arMailFields['NUMBER63'] = $_REQUEST['text63']; 
				$arMailFields['TEXT_COUNT63'] = "Количество:";
				
				$arMailFields['PRODUCT63'] = $_REQUEST['product_name63'];  
			  $arMailFields['LINK63'] = $_REQUEST['product_id63'];  
			   $arMailFields['COUNT63'] = $_REQUEST['product_count63'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name63"] == "undefined"){
					$arMailFields['PRODUCT63'] = " ";  
				  $arMailFields['LINK63'] = " ";  
				   $arMailFields['COUNT63'] = " ";
				   
				      $arMailFields['NUMBER63'] = ""; 
					$arMailFields['TEXT_COUNT63'] = "";
			}		

	////////////////////////////////////////////////	64
			
			
			if ($_REQUEST["product_name64"] <> ""){
				
				$arMailFields['NUMBER64'] = $_REQUEST['text64']; 
				$arMailFields['TEXT_COUNT64'] = "Количество:";
				
				$arMailFields['PRODUCT64'] = $_REQUEST['product_name64'];  
			  $arMailFields['LINK64'] = $_REQUEST['product_id64'];  
			   $arMailFields['COUNT64'] = $_REQUEST['product_count64'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name64"] == "undefined"){
					$arMailFields['PRODUCT64'] = " ";  
				  $arMailFields['LINK64'] = " ";  
				   $arMailFields['COUNT64'] = " ";
				   
				      $arMailFields['NUMBER64'] = ""; 
					$arMailFields['TEXT_COUNT64'] = "";
			}		

	////////////////////////////////////////////////	65
			
			
			if ($_REQUEST["product_name65"] <> ""){
				
				$arMailFields['NUMBER65'] = $_REQUEST['text65']; 
				$arMailFields['TEXT_COUNT65'] = "Количество:";
				
				$arMailFields['PRODUCT65'] = $_REQUEST['product_name65'];  
			  $arMailFields['LINK65'] = $_REQUEST['product_id65'];  
			   $arMailFields['COUNT65'] = $_REQUEST['product_count65'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name65"] == "undefined"){
					$arMailFields['PRODUCT65'] = " ";  
				  $arMailFields['LINK65'] = " ";  
				   $arMailFields['COUNT65'] = " ";
				   
				      $arMailFields['NUMBER65'] = ""; 
					$arMailFields['TEXT_COUNT65'] = "";
			}		

	////////////////////////////////////////////////	66
			
			
			if ($_REQUEST["product_name66"] <> ""){
				
				$arMailFields['NUMBER66'] = $_REQUEST['text66']; 
				$arMailFields['TEXT_COUNT66'] = "Количество:";
				
				$arMailFields['PRODUCT66'] = $_REQUEST['product_name66'];  
			  $arMailFields['LINK66'] = $_REQUEST['product_id66'];  
			   $arMailFields['COUNT66'] = $_REQUEST['product_count66'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name66"] == "undefined"){
					$arMailFields['PRODUCT66'] = " ";  
				  $arMailFields['LINK66'] = " ";  
				   $arMailFields['COUNT66'] = " ";
				   
				      $arMailFields['NUMBER66'] = ""; 
					$arMailFields['TEXT_COUNT66'] = "";
			}		

	////////////////////////////////////////////////	67
			
			
			if ($_REQUEST["product_name67"] <> ""){
				
				$arMailFields['NUMBER67'] = $_REQUEST['text67']; 
				$arMailFields['TEXT_COUNT67'] = "Количество:";
				
				$arMailFields['PRODUCT67'] = $_REQUEST['product_name67'];  
			  $arMailFields['LINK67'] = $_REQUEST['product_id67'];  
			   $arMailFields['COUNT67'] = $_REQUEST['product_count67'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name67"] == "undefined"){
					$arMailFields['PRODUCT67'] = " ";  
				  $arMailFields['LINK67'] = " ";  
				   $arMailFields['COUNT67'] = " ";
				   
				      $arMailFields['NUMBER67'] = ""; 
					$arMailFields['TEXT_COUNT67'] = "";
			}		

	////////////////////////////////////////////////	68
			
			
			if ($_REQUEST["product_name68"] <> ""){
				
				$arMailFields['NUMBER68'] = $_REQUEST['text68']; 
				$arMailFields['TEXT_COUNT68'] = "Количество:";
				
				$arMailFields['PRODUCT68'] = $_REQUEST['product_name68'];  
			  $arMailFields['LINK68'] = $_REQUEST['product_id68'];  
			   $arMailFields['COUNT68'] = $_REQUEST['product_count68'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name68"] == "undefined"){
					$arMailFields['PRODUCT68'] = " ";  
				  $arMailFields['LINK68'] = " ";  
				   $arMailFields['COUNT68'] = " ";
				   
				      $arMailFields['NUMBER68'] = ""; 
					$arMailFields['TEXT_COUNT68'] = "";
			}		


	////////////////////////////////////////////////	69
			
			
			if ($_REQUEST["product_name69"] <> ""){
				
				$arMailFields['NUMBER69'] = $_REQUEST['text69']; 
				$arMailFields['TEXT_COUNT69'] = "Количество:";
				
				$arMailFields['PRODUCT69'] = $_REQUEST['product_name69'];  
			  $arMailFields['LINK69'] = $_REQUEST['product_id69'];  
			   $arMailFields['COUNT69'] = $_REQUEST['product_count69'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name69"] == "undefined"){
					$arMailFields['PRODUCT69'] = " ";  
				  $arMailFields['LINK69'] = " ";  
				   $arMailFields['COUNT69'] = " ";
				   
				      $arMailFields['NUMBER69'] = ""; 
					$arMailFields['TEXT_COUNT69'] = "";
			}		

	////////////////////////////////////////////////	70
			
			
			if ($_REQUEST["product_name70"] <> ""){
				
				$arMailFields['NUMBER70'] = $_REQUEST['text70']; 
				$arMailFields['TEXT_COUNT70'] = "Количество:";
				
				$arMailFields['PRODUCT70'] = $_REQUEST['product_name70'];  
			  $arMailFields['LINK70'] = $_REQUEST['product_id70'];  
			   $arMailFields['COUNT70'] = $_REQUEST['product_count70'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name70"] == "undefined"){
					$arMailFields['PRODUCT70'] = " ";  
				  $arMailFields['LINK70'] = " ";  
				   $arMailFields['COUNT70'] = " ";
				   
				      $arMailFields['NUMBER70'] = ""; 
					$arMailFields['TEXT_COUNT70'] = "";
			}		

	////////////////////////////////////////////////	71
			
			
			if ($_REQUEST["product_name71"] <> ""){
				
				$arMailFields['NUMBER71'] = $_REQUEST['text71']; 
				$arMailFields['TEXT_COUNT71'] = "Количество:";
				
				$arMailFields['PRODUCT71'] = $_REQUEST['product_name71'];  
			  $arMailFields['LINK71'] = $_REQUEST['product_id71'];  
			   $arMailFields['COUNT71'] = $_REQUEST['product_count71'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name71"] == "undefined"){
					$arMailFields['PRODUCT71'] = " ";  
				  $arMailFields['LINK71'] = " ";  
				   $arMailFields['COUNT71'] = " ";
				   
				      $arMailFields['NUMBER71'] = ""; 
					$arMailFields['TEXT_COUNT71'] = "";
			}		

	////////////////////////////////////////////////	72
			
			
			if ($_REQUEST["product_name72"] <> ""){
				
				$arMailFields['NUMBER72'] = $_REQUEST['text72']; 
				$arMailFields['TEXT_COUNT72'] = "Количество:";
				
				$arMailFields['PRODUCT72'] = $_REQUEST['product_name72'];  
			  $arMailFields['LINK72'] = $_REQUEST['product_id72'];  
			   $arMailFields['COUNT72'] = $_REQUEST['product_count72'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name72"] == "undefined"){
					$arMailFields['PRODUCT72'] = " ";  
				  $arMailFields['LINK72'] = " ";  
				   $arMailFields['COUNT72'] = " ";
				   
				      $arMailFields['NUMBER72'] = ""; 
					$arMailFields['TEXT_COUNT72'] = "";
			}		

	////////////////////////////////////////////////	73
			
			
			if ($_REQUEST["product_name73"] <> ""){
				
				$arMailFields['NUMBER73'] = $_REQUEST['text73']; 
				$arMailFields['TEXT_COUNT73'] = "Количество:";
				
				$arMailFields['PRODUCT73'] = $_REQUEST['product_name73'];  
			  $arMailFields['LINK73'] = $_REQUEST['product_id73'];  
			   $arMailFields['COUNT73'] = $_REQUEST['product_count73'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name73"] == "undefined"){
					$arMailFields['PRODUCT73'] = " ";  
				  $arMailFields['LINK73'] = " ";  
				   $arMailFields['COUNT73'] = " ";
				   
				      $arMailFields['NUMBER73'] = ""; 
					$arMailFields['TEXT_COUNT73'] = "";
			}		

	////////////////////////////////////////////////	74
			
			
			if ($_REQUEST["product_name74"] <> ""){
				
				$arMailFields['NUMBER74'] = $_REQUEST['text74']; 
				$arMailFields['TEXT_COUNT74'] = "Количество:";
				
				$arMailFields['PRODUCT74'] = $_REQUEST['product_name74'];  
			  $arMailFields['LINK74'] = $_REQUEST['product_id74'];  
			   $arMailFields['COUNT74'] = $_REQUEST['product_count74'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name74"] == "undefined"){
					$arMailFields['PRODUCT74'] = " ";  
				  $arMailFields['LINK74'] = " ";  
				   $arMailFields['COUNT74'] = " ";
				   
				      $arMailFields['NUMBER74'] = ""; 
					$arMailFields['TEXT_COUNT74'] = "";
			}		


	////////////////////////////////////////////////	75
			
			
			if ($_REQUEST["product_name75"] <> ""){
				
				$arMailFields['NUMBER75'] = $_REQUEST['text75']; 
				$arMailFields['TEXT_COUNT75'] = "Количество:";
				
				$arMailFields['PRODUCT75'] = $_REQUEST['product_name75'];  
			  $arMailFields['LINK75'] = $_REQUEST['product_id75'];  
			   $arMailFields['COUNT75'] = $_REQUEST['product_count75'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name75"] == "undefined"){
					$arMailFields['PRODUCT75'] = " ";  
				  $arMailFields['LINK75'] = " ";  
				   $arMailFields['COUNT75'] = " ";
				   
				      $arMailFields['NUMBER75'] = ""; 
					$arMailFields['TEXT_COUNT75'] = "";
			}		

	////////////////////////////////////////////////	76
			
			
			if ($_REQUEST["product_name76"] <> ""){
				
				$arMailFields['NUMBER76'] = $_REQUEST['text76']; 
				$arMailFields['TEXT_COUNT76'] = "Количество:";
				
				$arMailFields['PRODUCT76'] = $_REQUEST['product_name76'];  
			  $arMailFields['LINK76'] = $_REQUEST['product_id76'];  
			   $arMailFields['COUNT76'] = $_REQUEST['product_count76'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name76"] == "undefined"){
					$arMailFields['PRODUCT76'] = " ";  
				  $arMailFields['LINK76'] = " ";  
				   $arMailFields['COUNT76'] = " ";
				   
				      $arMailFields['NUMBER76'] = ""; 
					$arMailFields['TEXT_COUNT76'] = "";
			}		

	////////////////////////////////////////////////	77
			
			
			if ($_REQUEST["product_name77"] <> ""){
				
				$arMailFields['NUMBER77'] = $_REQUEST['text77']; 
				$arMailFields['TEXT_COUNT77'] = "Количество:";
				
				$arMailFields['PRODUCT77'] = $_REQUEST['product_name77'];  
			  $arMailFields['LINK77'] = $_REQUEST['product_id77'];  
			   $arMailFields['COUNT77'] = $_REQUEST['product_count77'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name77"] == "undefined"){
					$arMailFields['PRODUCT77'] = " ";  
				  $arMailFields['LINK77'] = " ";  
				   $arMailFields['COUNT77'] = " ";
				   
				      $arMailFields['NUMBER77'] = ""; 
					$arMailFields['TEXT_COUNT77'] = "";
			}		

	////////////////////////////////////////////////	78
			
			
			if ($_REQUEST["product_name78"] <> ""){
				
				$arMailFields['NUMBER78'] = $_REQUEST['text78']; 
				$arMailFields['TEXT_COUNT78'] = "Количество:";
				
				$arMailFields['PRODUCT78'] = $_REQUEST['product_name78'];  
			  $arMailFields['LINK78'] = $_REQUEST['product_id78'];  
			   $arMailFields['COUNT78'] = $_REQUEST['product_count78'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name78"] == "undefined"){
					$arMailFields['PRODUCT78'] = " ";  
				  $arMailFields['LINK78'] = " ";  
				   $arMailFields['COUNT78'] = " ";
				   
				      $arMailFields['NUMBER78'] = ""; 
					$arMailFields['TEXT_COUNT78'] = "";
			}		

	////////////////////////////////////////////////	79
			
			
			if ($_REQUEST["product_name79"] <> ""){
				
				$arMailFields['NUMBER79'] = $_REQUEST['text79']; 
				$arMailFields['TEXT_COUNT79'] = "Количество:";
				
				$arMailFields['PRODUCT79'] = $_REQUEST['product_name79'];  
			  $arMailFields['LINK79'] = $_REQUEST['product_id79'];  
			   $arMailFields['COUNT79'] = $_REQUEST['product_count79'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name79"] == "undefined"){
					$arMailFields['PRODUCT79'] = " ";  
				  $arMailFields['LINK79'] = " ";  
				   $arMailFields['COUNT79'] = " ";
				   
				      $arMailFields['NUMBER79'] = ""; 
					$arMailFields['TEXT_COUNT79'] = "";
			}		

	////////////////////////////////////////////////	80
			
			
			if ($_REQUEST["product_name80"] <> ""){
				
				$arMailFields['NUMBER80'] = $_REQUEST['text80']; 
				$arMailFields['TEXT_COUNT80'] = "Количество:";
				
				$arMailFields['PRODUCT80'] = $_REQUEST['product_name80'];  
			  $arMailFields['LINK80'] = $_REQUEST['product_id80'];  
			   $arMailFields['COUNT80'] = $_REQUEST['product_count80'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name80"] == "undefined"){
					$arMailFields['PRODUCT80'] = " ";  
				  $arMailFields['LINK80'] = " ";  
				   $arMailFields['COUNT80'] = " ";
				   
				      $arMailFields['NUMBER80'] = ""; 
					$arMailFields['TEXT_COUNT80'] = "";
			}		

	////////////////////////////////////////////////	81
			
			
			if ($_REQUEST["product_name81"] <> ""){
				
				$arMailFields['NUMBER81'] = $_REQUEST['text81']; 
				
				
				$arMailFields['TEXT_COUNT81'] = "Количество:";
				
				$arMailFields['PRODUCT81'] = $_REQUEST['product_name81'];  
			  $arMailFields['LINK81'] = $_REQUEST['product_id81'];  
			   $arMailFields['COUNT81'] = $_REQUEST['product_count81'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name81"] == "undefined"){
					$arMailFields['PRODUCT81'] = " ";  
				  $arMailFields['LINK81'] = " ";  
				   $arMailFields['COUNT81'] = " ";
				   
				      $arMailFields['NUMBER81'] = ""; 
					$arMailFields['TEXT_COUNT81'] = "";
			}		

	////////////////////////////////////////////////	82
			
			
			if ($_REQUEST["product_name82"] <> ""){
				
				$arMailFields['NUMBER82'] = $_REQUEST['text82']; 
				$arMailFields['TEXT_COUNT82'] = "Количество:";
				
				$arMailFields['PRODUCT82'] = $_REQUEST['product_name82'];  
			  $arMailFields['LINK82'] = $_REQUEST['product_id82'];  
			   $arMailFields['COUNT82'] = $_REQUEST['product_count82'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name82"] == "undefined"){
					$arMailFields['PRODUCT82'] = " ";  
				  $arMailFields['LINK82'] = " ";  
				   $arMailFields['COUNT82'] = " ";
				   
				      $arMailFields['NUMBER82'] = ""; 
					$arMailFields['TEXT_COUNT82'] = "";
			}					
			
			
				////////////////////////////////////////////////	83
			
			
			if ($_REQUEST["product_name83"] <> ""){
				
				$arMailFields['NUMBER83'] = $_REQUEST['text83']; 
				$arMailFields['TEXT_COUNT83'] = "Количество:";
				
				$arMailFields['PRODUCT83'] = $_REQUEST['product_name83'];  
			  $arMailFields['LINK83'] = $_REQUEST['product_id83'];  
			   $arMailFields['COUNT83'] = $_REQUEST['product_count83'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name83"] == "undefined"){
					$arMailFields['PRODUCT83'] = " ";  
				  $arMailFields['LINK83'] = " ";  
				   $arMailFields['COUNT83'] = " ";
				   
				      $arMailFields['NUMBER83'] = ""; 
					$arMailFields['TEXT_COUNT83'] = "";
			}		
			
				////////////////////////////////////////////////	84
			
			
			if ($_REQUEST["product_name84"] <> ""){
				
				$arMailFields['NUMBER84'] = $_REQUEST['text84']; 
				$arMailFields['TEXT_COUNT84'] = "Количество:";
				
				$arMailFields['PRODUCT84'] = $_REQUEST['product_name84'];  
			  $arMailFields['LINK84'] = $_REQUEST['product_id84'];  
			   $arMailFields['COUNT84'] = $_REQUEST['product_count84'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name84"] == "undefined"){
					$arMailFields['PRODUCT84'] = " ";  
				  $arMailFields['LINK84'] = " ";  
				   $arMailFields['COUNT84'] = " ";
				   
				      $arMailFields['NUMBER84'] = ""; 
					$arMailFields['TEXT_COUNT84'] = "";
			}		
			
				////////////////////////////////////////////////	85
			
			
			if ($_REQUEST["product_name85"] <> ""){
				
				$arMailFields['NUMBER85'] = $_REQUEST['text85']; 
				$arMailFields['TEXT_COUNT85'] = "Количество:";
				
				$arMailFields['PRODUCT85'] = $_REQUEST['product_name85'];  
			  $arMailFields['LINK85'] = $_REQUEST['product_id85'];  
			   $arMailFields['COUNT85'] = $_REQUEST['product_count85'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name85"] == "undefined"){
					$arMailFields['PRODUCT85'] = " ";  
				  $arMailFields['LINK85'] = " ";  
				   $arMailFields['COUNT85'] = " ";
				   
				      $arMailFields['NUMBER85'] = ""; 
					$arMailFields['TEXT_COUNT85'] = "";
			}		
			
				////////////////////////////////////////////////	86
			
			
			if ($_REQUEST["product_name86"] <> ""){
				
				$arMailFields['NUMBER86'] = $_REQUEST['text86']; 
				$arMailFields['TEXT_COUNT86'] = "Количество:";
				
				$arMailFields['PRODUCT86'] = $_REQUEST['product_name86'];  
			  $arMailFields['LINK86'] = $_REQUEST['product_id86'];  
			   $arMailFields['COUNT86'] = $_REQUEST['product_count86'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name86"] == "undefined"){
					$arMailFields['PRODUCT86'] = " ";  
				  $arMailFields['LINK86'] = " ";  
				   $arMailFields['COUNT86'] = " ";
				   
				      $arMailFields['NUMBER86'] = ""; 
					$arMailFields['TEXT_COUNT86'] = "";
			}		
			
				////////////////////////////////////////////////	87
			
			
			if ($_REQUEST["product_name87"] <> ""){
				
				$arMailFields['NUMBER87'] = $_REQUEST['text87']; 
				$arMailFields['TEXT_COUNT87'] = "Количество:";
				
				$arMailFields['PRODUCT87'] = $_REQUEST['product_name87'];  
			  $arMailFields['LINK87'] = $_REQUEST['product_id87'];  
			   $arMailFields['COUNT87'] = $_REQUEST['product_count87'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name87"] == "undefined"){
					$arMailFields['PRODUCT87'] = " ";  
				  $arMailFields['LINK87'] = " ";  
				   $arMailFields['COUNT87'] = " ";
				   
				      $arMailFields['NUMBER87'] = ""; 
					$arMailFields['TEXT_COUNT87'] = "";
			}		
			
			
				////////////////////////////////////////////////	88
			
			
			if ($_REQUEST["product_name88"] <> ""){
				
				$arMailFields['NUMBER88'] = $_REQUEST['text88']; 
				$arMailFields['TEXT_COUNT88'] = "Количество:";
				
				$arMailFields['PRODUCT88'] = $_REQUEST['product_name88'];  
			  $arMailFields['LINK88'] = $_REQUEST['product_id88'];  
			   $arMailFields['COUNT88'] = $_REQUEST['product_count88'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name88"] == "undefined"){
					$arMailFields['PRODUCT88'] = " ";  
				  $arMailFields['LINK88'] = " ";  
				   $arMailFields['COUNT88'] = " ";
				   
				      $arMailFields['NUMBER88'] = ""; 
					$arMailFields['TEXT_COUNT88'] = "";
			}		
			
				////////////////////////////////////////////////	89
			
			
			if ($_REQUEST["product_name89"] <> ""){
				
				$arMailFields['NUMBER89'] = $_REQUEST['text89']; 
				$arMailFields['TEXT_COUNT89'] = "Количество:";
				
				$arMailFields['PRODUCT89'] = $_REQUEST['product_name89'];  
			  $arMailFields['LINK89'] = $_REQUEST['product_id89'];  
			   $arMailFields['COUNT89'] = $_REQUEST['product_count89'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name89"] == "undefined"){
					$arMailFields['PRODUCT89'] = " ";  
				  $arMailFields['LINK89'] = " ";  
				   $arMailFields['COUNT89'] = " ";
				   
				      $arMailFields['NUMBER89'] = ""; 
					$arMailFields['TEXT_COUNT89'] = "";
			}		
			
				////////////////////////////////////////////////	90
			
			
			if ($_REQUEST["product_name90"] <> ""){
				
				$arMailFields['NUMBER90'] = $_REQUEST['text90']; 
				$arMailFields['TEXT_COUNT90'] = "Количество:";
				
				$arMailFields['PRODUCT90'] = $_REQUEST['product_name90'];  
			  $arMailFields['LINK90'] = $_REQUEST['product_id90'];  
			   $arMailFields['COUNT90'] = $_REQUEST['product_count90'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name90"] == "undefined"){
					$arMailFields['PRODUCT90'] = " ";  
				  $arMailFields['LINK90'] = " ";  
				   $arMailFields['COUNT90'] = " ";
				   
				      $arMailFields['NUMBER90'] = ""; 
					$arMailFields['TEXT_COUNT90'] = "";
			}		
			
			
				////////////////////////////////////////////////	91
			
			
			if ($_REQUEST["product_name91"] <> ""){
				
				$arMailFields['NUMBER91'] = $_REQUEST['text91']; 
				$arMailFields['TEXT_COUNT91'] = "Количество:";
				
				$arMailFields['PRODUCT91'] = $_REQUEST['product_name91'];  
			  $arMailFields['LINK91'] = $_REQUEST['product_id91'];  
			   $arMailFields['COUNT91'] = $_REQUEST['product_count91'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name91"] == "undefined"){
					$arMailFields['PRODUCT91'] = " ";  
				  $arMailFields['LINK91'] = " ";  
				   $arMailFields['COUNT91'] = " ";
				   
				      $arMailFields['NUMBER91'] = ""; 
					$arMailFields['TEXT_COUNT91'] = "";
			}		
			
				////////////////////////////////////////////////	92
			
			
			if ($_REQUEST["product_name92"] <> ""){
				
				$arMailFields['NUMBER92'] = $_REQUEST['text92']; 
				$arMailFields['TEXT_COUNT92'] = "Количество:";
				
				$arMailFields['PRODUCT92'] = $_REQUEST['product_name92'];  
			  $arMailFields['LINK92'] = $_REQUEST['product_id92'];  
			   $arMailFields['COUNT92'] = $_REQUEST['product_count92'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name92"] == "undefined"){
					$arMailFields['PRODUCT92'] = " ";  
				  $arMailFields['LINK92'] = " ";  
				   $arMailFields['COUNT92'] = " ";
				   
				      $arMailFields['NUMBER92'] = ""; 
					$arMailFields['TEXT_COUNT92'] = "";
			}		
			
				////////////////////////////////////////////////	93
			
			
			if ($_REQUEST["product_name93"] <> ""){
				
				$arMailFields['NUMBER93'] = $_REQUEST['text93']; 
				$arMailFields['TEXT_COUNT93'] = "Количество:";
				
				$arMailFields['PRODUCT93'] = $_REQUEST['product_name93'];  
			  $arMailFields['LINK93'] = $_REQUEST['product_id93'];  
			   $arMailFields['COUNT93'] = $_REQUEST['product_count93'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name93"] == "undefined"){
					$arMailFields['PRODUCT93'] = " ";  
				  $arMailFields['LINK93'] = " ";  
				   $arMailFields['COUNT93'] = " ";
				   
				      $arMailFields['NUMBER93'] = ""; 
					$arMailFields['TEXT_COUNT93'] = "";
			}		
			
				////////////////////////////////////////////////	94
			
			
			if ($_REQUEST["product_name94"] <> ""){
				
				$arMailFields['NUMBER94'] = $_REQUEST['text94']; 
				$arMailFields['TEXT_COUNT94'] = "Количество:";
				
				$arMailFields['PRODUCT94'] = $_REQUEST['product_name94'];  
			  $arMailFields['LINK94'] = $_REQUEST['product_id94'];  
			   $arMailFields['COUNT94'] = $_REQUEST['product_count94'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name94"] == "undefined"){
					$arMailFields['PRODUCT94'] = " ";  
				  $arMailFields['LINK94'] = " ";  
				   $arMailFields['COUNT94'] = " ";
				   
				      $arMailFields['NUMBER94'] = ""; 
					$arMailFields['TEXT_COUNT94'] = "";
			}		
			
				////////////////////////////////////////////////	95
			
			
			if ($_REQUEST["product_name95"] <> ""){
				
				$arMailFields['NUMBER95'] = $_REQUEST['text95']; 
				$arMailFields['TEXT_COUNT95'] = "Количество:";
				
				$arMailFields['PRODUCT95'] = $_REQUEST['product_name95'];  
			  $arMailFields['LINK95'] = $_REQUEST['product_id95'];  
			   $arMailFields['COUNT95'] = $_REQUEST['product_count95'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name95"] == "undefined"){
					$arMailFields['PRODUCT95'] = " ";  
				  $arMailFields['LINK95'] = " ";  
				   $arMailFields['COUNT95'] = " ";
				   
				      $arMailFields['NUMBER95'] = ""; 
					$arMailFields['TEXT_COUNT95'] = "";
			}		
			
				////////////////////////////////////////////////	96
			
			
			if ($_REQUEST["product_name96"] <> ""){
				
				$arMailFields['NUMBER96'] = $_REQUEST['text96']; 
				$arMailFields['TEXT_COUNT96'] = "Количество:";
				
				$arMailFields['PRODUCT96'] = $_REQUEST['product_name96'];  
			  $arMailFields['LINK96'] = $_REQUEST['product_id96'];  
			   $arMailFields['COUNT96'] = $_REQUEST['product_count96'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name96"] == "undefined"){
					$arMailFields['PRODUCT96'] = " ";  
				  $arMailFields['LINK96'] = " ";  
				   $arMailFields['COUNT96'] = " ";
				   
				      $arMailFields['NUMBER96'] = ""; 
					$arMailFields['TEXT_COUNT96'] = "";
			}		
			
				////////////////////////////////////////////////	97
			
			
			if ($_REQUEST["product_name97"] <> ""){
				
				$arMailFields['NUMBER97'] = $_REQUEST['text97']; 
				$arMailFields['TEXT_COUNT97'] = "Количество:";
				
				$arMailFields['PRODUCT97'] = $_REQUEST['product_name97'];  
			  $arMailFields['LINK97'] = $_REQUEST['product_id97'];  
			   $arMailFields['COUNT97'] = $_REQUEST['product_count97'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name97"] == "undefined"){
					$arMailFields['PRODUCT97'] = " ";  
				  $arMailFields['LINK97'] = " ";  
				   $arMailFields['COUNT97'] = " ";
				   
				      $arMailFields['NUMBER97'] = ""; 
					$arMailFields['TEXT_COUNT97'] = "";
			}		
			
			
				////////////////////////////////////////////////	98
			
			
			if ($_REQUEST["product_name98"] <> ""){
				
				$arMailFields['NUMBER98'] = $_REQUEST['text98']; 
				$arMailFields['TEXT_COUNT98'] = "Количество:";
				
				$arMailFields['PRODUCT98'] = $_REQUEST['product_name98'];  
			  $arMailFields['LINK98'] = $_REQUEST['product_id98'];  
			   $arMailFields['COUNT98'] = $_REQUEST['product_count98'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name98"] == "undefined"){
					$arMailFields['PRODUCT98'] = " ";  
				  $arMailFields['LINK98'] = " ";  
				   $arMailFields['COUNT98'] = " ";
				   
				      $arMailFields['NUMBER98'] = ""; 
					$arMailFields['TEXT_COUNT98'] = "";
			}		
			
			
				////////////////////////////////////////////////	99
			
			
			if ($_REQUEST["product_name99"] <> ""){
				
				$arMailFields['NUMBER99'] = $_REQUEST['text99']; 
				$arMailFields['TEXT_COUNT99'] = "Количество:";
				
				$arMailFields['PRODUCT99'] = $_REQUEST['product_name99'];  
			  $arMailFields['LINK99'] = $_REQUEST['product_id99'];  
			   $arMailFields['COUNT99'] = $_REQUEST['product_count99'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name99"] == "undefined"){
					$arMailFields['PRODUCT99'] = " ";  
				  $arMailFields['LINK99'] = " ";  
				   $arMailFields['COUNT99'] = " ";
				   
				      $arMailFields['NUMBER99'] = ""; 
					$arMailFields['TEXT_COUNT99'] = "";
			}		
			
				////////////////////////////////////////////////	100
			
			
			if ($_REQUEST["product_name100"] <> ""){
				
				$arMailFields['NUMBER100'] = $_REQUEST['text100']; 
				$arMailFields['TEXT_COUNT100'] = "Количество:";
				
				$arMailFields['PRODUCT100'] = $_REQUEST['product_name100'];  
			  $arMailFields['LINK100'] = $_REQUEST['product_id100'];  
			   $arMailFields['COUNT100'] = $_REQUEST['product_count100'];			   
            //$arMailFields['PREVIEW_TEXT'] = $arFields['PREVIEW_TEXT'];  
		}  
		if ($_REQUEST["product_name100"] == "undefined"){
					$arMailFields['PRODUCT100'] = " ";  
				  $arMailFields['LINK100'] = " ";  
				   $arMailFields['COUNT100'] = " ";
				   
				      $arMailFields['NUMBER100'] = ""; 
					$arMailFields['TEXT_COUNT100'] = "";
			}		
			
			
			
			
            CEvent::Send($EVENT_TYPE, SITE_ID, $arMailFields);
			
			
			$EVENT_TYPE2 = 'SEND_ORDER_CLIENT'; // тип почтового шаблона
			 $arMailFields['EMAIL_TO'] = $_REQUEST['EMAIL'];  
			  $arMailFields['ALL_SUMM'] = $_REQUEST['all_summ'];  
			//$arMailFields2 = array( "EMAIL_TO"            => implode(",", $EMAIL_TO));
			 CEvent::Send($EVENT_TYPE2, SITE_ID, $arMailFields);
//$_REQUEST["ID"]

?>


<?
CSaleBasket::DeleteAll(CSaleBasket::GetBasketUserID());
?>