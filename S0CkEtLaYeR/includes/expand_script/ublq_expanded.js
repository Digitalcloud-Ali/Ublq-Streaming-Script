var ublq_slideSpeed = 10;	// Higher value = faster
var ublq_timer = 10;	// Lower value = faster

var objectIdToSlideDown = false;
var ublq_activeId = false;
var ublq_slideInProgress = false;
function showHideContent(e,inputId)
{
	if(ublq_slideInProgress)return;
	ublq_slideInProgress = true;
	if(!inputId)inputId = this.id;
	inputId = inputId + '';
	var numericId = inputId.replace(/[^0-9]/g,'');
	var answerDiv = document.getElementById('ublq_a' + numericId);

	objectIdToSlideDown = false;
	
	if(!answerDiv.style.display || answerDiv.style.display=='none'){		
		if(ublq_activeId &&  ublq_activeId!=numericId){			
			objectIdToSlideDown = numericId;
			slideContent(ublq_activeId,(ublq_slideSpeed*-1));
		}else{
			
			answerDiv.style.display='block';
			answerDiv.style.visibility = 'visible';
			
			slideContent(numericId,ublq_slideSpeed);
		}
	}else{
		slideContent(numericId,(ublq_slideSpeed*-1));
		ublq_activeId = false;
	}	
}

function slideContent(inputId,direction)
{
	
	var obj =document.getElementById('ublq_a' + inputId);
	var contentObj = document.getElementById('ublq_ac' + inputId);
	height = obj.clientHeight;
	if(height==0)height = obj.offsetHeight;
	height = height + direction;
	rerunFunction = true;
	if(height>contentObj.offsetHeight){
		height = contentObj.offsetHeight;
		rerunFunction = false;
	}
	if(height<=1){
		height = 1;
		rerunFunction = false;
	}

	obj.style.height = height + 'px';
	var topPos = height - contentObj.offsetHeight;
	if(topPos>0)topPos=0;
	contentObj.style.top = topPos + 'px';
	if(rerunFunction){
		setTimeout('slideContent(' + inputId + ',' + direction + ')',ublq_timer);
	}else{
		if(height<=1){
			obj.style.display='none'; 
			if(objectIdToSlideDown && objectIdToSlideDown!=inputId){
				document.getElementById('ublq_a' + objectIdToSlideDown).style.display='block';
				document.getElementById('ublq_a' + objectIdToSlideDown).style.visibility='visible';
				slideContent(objectIdToSlideDown,ublq_slideSpeed);				
			}else{
				ublq_slideInProgress = false;
			}
		}else{
			ublq_activeId = inputId;
			ublq_slideInProgress = false;
		}
	}
}



function initShowHideDivs()
{
	var divs = document.getElementsByTagName('DIV');
	var divCounter = 1;
	for(var no=0;no<divs.length;no++){
		if(divs[no].className=='ublq_upper'){
			divs[no].onclick = showHideContent;
			divs[no].id = 'ublq_q'+divCounter;
			var answer = divs[no].nextSibling;
			while(answer && answer.tagName!='DIV'){
				answer = answer.nextSibling;
			}
			answer.id = 'ublq_a'+divCounter;	
			contentDiv = answer.getElementsByTagName('DIV')[0];
			contentDiv.style.top = 0 - contentDiv.offsetHeight + 'px'; 	
			contentDiv.className='ublq_lower_content';
			contentDiv.id = 'ublq_ac' + divCounter;
			answer.style.display='none';
			answer.style.height='1px';
			divCounter++;
		}		
	}	
}
window.onload = initShowHideDivs;