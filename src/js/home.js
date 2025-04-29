
function loadData(name){
	if (name=="btn1"){
		document.getElementById("depH").innerHTML="DENTAL SCIENCES";
		document.getElementById("depIMG").src="images/department/d1.png";
		document.getElementById("depP").innerHTML="The department comprises of a rich team of exceptionally talented and highly skilled dental surgeons offering the entire spectrum of routine and specialised dental care such as oral and maxillofacial surgery, advanced conservative treatment, orthodontics, periodontics, dental implants, paedodontics, aesthetic dentistry, endodontics and restorative dentistry.";
	}

	else if (name=="btn2"){
		document.getElementById("depH").innerHTML="RENAL MEDICINE";
		document.getElementById("depIMG").src="images/department/d2.png";
		document.getElementById("depP").innerHTML="The department of nephrology provides comprehensive, compassionate and evidence-based multi-disciplinary care across a full range of kidney-related diseases ranging from preventive nephrology to kidney transplantation. Our nephrologists work closely with other specialty divisions and departments to integrate patient care and involve patients (and their families) in the decision-making and educate them to promote understanding of the diagnosis and treatment plans.Services offered by our team of highly skilled doctors and staff.";
	}

	else if (name=="btn3"){
		document.getElementById("depH").innerHTML="ORTHOPEDICS AND JOINT REPLACEMENT";
		document.getElementById("depIMG").src="images/department/d3.png";
		document.getElementById("depP").innerHTML="The Department offers a wide spectrum of specialty and super specialty treatments related to Orthopaedics, Joint and Sports Trauma including all types of joint diseases, disorders and injuries - acute as well as chronic.<br>To ensure best possible care outcomes to all our patients we have an enviable clinical talent pool, most modern technology like Fully Modular Theater Complex, Radiology and Imaging equipment, and supportive care like Physiotherapy and Rehabilitation services. We use collective clinical judgment to determine the most appropriate treatment approach to help people reach their optimal level of function as quickly as possible.";
	}

	else if (name=="btn4"){
		document.getElementById("depH").innerHTML="PAEDIATRICS AND NEONATOLOGY";
		document.getElementById("depIMG").src="images/department/d4.png";
		document.getElementById("depP").innerHTML="The Paediatrics & Neonatology department at Kings Hospital Colombo is committed to cater to all the health needs of children and provide the highest quality care.<br>Our aim is to be the paediatric centre of excellence and to shape child health for the future. We provide quality and safe care in a child-friendly and family-centred environment.";
	}

	else if (name=="btn5"){
		document.getElementById("depH").innerHTML="SURGERY";
		document.getElementById("depIMG").src="images/department/d5.png";
		document.getElementById("depP").innerHTML="The Department offers the entire range of surgical interventions from minor procedures to major complex surgeries, with the use of cutting-edge technology like Laparoscopic surgery, key-hole surgery or minimally invasive surgery.";
	}

	else if (name=="btn6"){
		document.getElementById("depH").innerHTML="RESPIRATORY MEDICINE";
		document.getElementById("depIMG").src="images/department/d6.png";
		document.getElementById("depP").innerHTML="Early diagnosis and prompt institution of preventive care is essential to allow patients to have a long and productive life. Our cardiac care experts are available at all times to meet patient's requirements including channelling and consultation, diagnosis and investigation of cardiac ailments, and treatment for all aspects of cardio vascular diseases. We offer state-of-the-art technologies and evidence based clinical care.";
	}

	else if (name=="btn7"){
		document.getElementById("depH").innerHTML="UROLOGY";
		document.getElementById("depIMG").src="images/department/d7.png";
		document.getElementById("depP").innerHTML="We provide comprehensive care to patients suffering from various types of lung diseases such as Asthma, Chronic Bronchitis, COPD, Allergic disorders, respiratory infections, acute and chronic respiratory failure and multisystem disorders affecting the lungs. The department offers great expertise in clinical evaluation, diagnosis and a full range of treatments.";
		}
    
    else{
    	{"invalid"}
    }

}