
//---------------------------------------------------------------------------------------
var appear = function(){
	document.getElementById("uploadSheet").style.display ="block";
};


//---------------------------------------------------------------------------------------
var hideItem = function(itemID){
	var item = document.getElementById(itemID);
	item.style.display ="none";

};

var unhideItem = function(itemID){
	var item = document.getElementById(itemID);
	item.style.display ="block";

};


//---------------------------------------------------------------------------------------
var agreementHideToggle = function(){
	var agreement_checkbox = document.getElementById('agreement');
	if(agreement_checkbox.checked){
		unhideItem('textboxPane'); 

	}else{
		hideItem('textboxPane');

	}
};

//---------------------------------------------------------------------------------------
var checkMeOtherSpan = function(){
	var item = document.getElementById('other');
	if (item.checked){
		item.checked=false;
		document.getElementById('finalise').style.opacity="0.0";
		document.getElementById('finalise2').style.opacity="0.0";
	}
	else{
		item.checked=true; 
		otherCheck();
	}
};

var otherCheck = function(){
	var all_not_empty =0;
	var name_box = document.getElementById('name');
	var email_box = document.getElementById('email');
	var item_name_box = document.getElementById('itemName');
	var item_brand_box = document.getElementById('itemBrand');
	var info_box = document.getElementById('info');
	var gents_category_checkbox = document.getElementById('gents');
	var ladies_category_checkbox = document.getElementById('ladies');
	var boxes_array =[name_box.value,email_box.value,item_name_box.value,item_brand_box.value,info_box.value];
	gents_category_checkbox.checked=false; 
	ladies_category_checkbox.checked=false; 

	if (document.getElementById("other").checked){
		for (var i = 0; i < boxes_array.length; i++) {
			if(boxes_array[i] ==""){
				if(i ==0){
					name_box.style.border = "2px solid red";
				}
				else if(i==1){
					email_box.style.border = "2px solid red";

				}
				else if(i==2){
					item_name_box.style.border = "2px solid red";

				}
				else if(i==3){
					item_brand_box.style.border = "2px solid red";

				}
				else if(i==4){
					info_box.style.border = "2px solid red";
				}

			}else{
				all_not_empty ++;
			}
		}

		
		if (all_not_empty == 5){
			document.getElementById('finalise').style.opacity ="1";
			document.getElementById('finalise').style.cursor ="pointer";			
			document.getElementById('finalise2').style.opacity ="1";
			document.getElementById('finalise2').style.cursor ="pointer";
			document.getElementById('other').checked =true;
			document.getElementById('categoryBox').value ="Other";
			
		}else{
			document.getElementById('other').checked =false;
		}

	}



};


//---------------------------------------------------------------------------------------
var checkMeGentsSpan = function(){
	var item = document.getElementById('gents');
	if (item.checked){
		item.checked=false;
		document.getElementById('finalise').style.opacity="0.0";
		document.getElementById('finalise2').style.opacity="0.0";
	}
	else{
		item.checked=true; 
		gentsCheck();
	}
};

var gentsCheck = function(){
	var all_not_empty =0;
	var name_box = document.getElementById('name');
	var email_box = document.getElementById('email');
	var item_name_box = document.getElementById('itemName');
	var item_brand_box = document.getElementById('itemBrand');
	var info_box = document.getElementById('info');
	var other_category_checkbox = document.getElementById('other');
	var ladies_category_checkbox = document.getElementById('ladies');
	var boxes_array =[name_box.value,email_box.value,item_name_box.value,item_brand_box.value,info_box.value];
	other_category_checkbox.checked=false; 
	ladies_category_checkbox.checked=false; 

	if (document.getElementById("gents").checked){
		for (var i = 0; i < boxes_array.length; i++) {
			if(boxes_array[i] ==""){
				if(i ==0){
					name_box.style.border = "2px solid red";
				}
				else if(i==1){
					email_box.style.border = "2px solid red";

				}
				else if(i==2){
					item_name_box.style.border = "2px solid red";

				}
				else if(i==3){
					item_brand_box.style.border = "2px solid red";

				}
				else if(i==4){
					info_box.style.border = "2px solid red";
				}

			}else{
				all_not_empty ++;
			}
		}

		
		if (all_not_empty == 5){
			document.getElementById('finalise').style.opacity ="1";
			document.getElementById('finalise').style.cursor ="pointer";			
			document.getElementById('finalise2').style.opacity ="1";
			document.getElementById('finalise2').style.cursor ="pointer";
			document.getElementById('gents').checked =true;
			document.getElementById('categoryBox').value ="Gents";
			
		}else{
			document.getElementById('gents').checked =false;
		}

	}



};

//---------------------------------------------------------------------------------------
var checkMeLadiesSpan = function(){
	var item = document.getElementById('ladies');
	if (item.checked){
		item.checked=false;
		document.getElementById('finalise').style.opacity="0.0";
		document.getElementById('finalise2').style.opacity="0.0";
	}
	else{
		item.checked=true; 
		ladiesCheck();

	}
};

var ladiesCheck = function(){
	var all_not_empty =0;
	var name_box = document.getElementById('name');
	var email_box = document.getElementById('email');
	var item_name_box = document.getElementById('itemName');
	var item_brand_box = document.getElementById('itemBrand');
	var info_box = document.getElementById('info');
	var other_category_checkbox = document.getElementById('other');
	var gents_category_checkbox = document.getElementById('gents');
	var boxes_array =[name_box.value,email_box.value,item_name_box.value,item_brand_box.value,info_box.value];
	other_category_checkbox.checked=false; 
	gents_category_checkbox.checked=false; 

	if (document.getElementById("ladies").checked){
		for (var i = 0; i < boxes_array.length; i++) {
			if(boxes_array[i] ==""){
				if(i ==0){
					name_box.style.border = "2px solid red";
				}
				else if(i==1){
					email_box.style.border = "2px solid red";

				}
				else if(i==2){
					item_name_box.style.border = "2px solid red";

				}
				else if(i==3){
					item_brand_box.style.border = "2px solid red";

				}
				else if(i==4){
					info_box.style.border = "2px solid red";
				}

			}else{
				all_not_empty ++;
			}
		}

		
		if (all_not_empty == 5){
			document.getElementById('finalise').style.opacity ="1";
			document.getElementById('finalise').style.cursor ="pointer";			
			document.getElementById('finalise2').style.opacity ="1";
			document.getElementById('finalise2').style.cursor ="pointer";
			document.getElementById('ladies').checked =true;
			document.getElementById('categoryBox').value ="Ladies";
			
		}else{
			document.getElementById('ladies').checked =false;
		}

	}



};





