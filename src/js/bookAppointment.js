

function doctor() {
    var x = document.getElementById("docSpecializan");
    x.style.visibility = "visible";
}

function sp(name){
	if(name=="sp1"){
		document.getElementById("docName").innerHTML="Dr. Sophia Patel, MD";
		document.getElementById("docDetails").innerHTML="*Specialty: Cardiology <br>* Experience: 15 years. <br>*Bio: Dr. Sophia Patel is a board-certified cardiologist with expertise in diagnosing and treating heart conditions. She is dedicated to providing compassionate care and personalized treatment plans to her patients.";

		document.getElementById("docName2").innerHTML="Dr. Michael Nguyen, MD";
		document.getElementById("docDetails2").innerHTML="*Specialty: Orthopedic Surgery<br>*Experience: 20 years<br>*Bio: Dr. Michael Nguyen is an experienced orthopedic surgeon specializing in joint replacements and sports medicine. He is committed to helping patients regain mobility and improve their quality of life.";

		document.getElementById("docName3").innerHTML="Dr. Emily Chen, MD";
		document.getElementById("docDetails3").innerHTML="*Specialty: Neurology<br>*Experience: 12 years<br>*Bio: Dr. Emily Chen is a neurologist specializing in the diagnosis and treatment of neurological disorders, including epilepsy, multiple sclerosis, and migraines. She provides comprehensive care tailored to each patient's needs.";

		document.getElementById("docName4").innerHTML="Dr. Jamal Khan, MD";
		document.getElementById("docDetails4").innerHTML="*Specialty: Gastroenterology<br>*Experience: 18 years<br>*Bio: Dr. Jamal Khan is a gastroenterologist with expertise in diagnosing and managing gastrointestinal conditions such as Crohn's disease, ulcerative colitis, and liver diseases. He is dedicated to providing high-quality care and improving digestive health.";
	}

	else if(name=="sp2"){
		document.getElementById("docName").innerHTML="Dr. Sarah Patel, MD";
		document.getElementById("docDetails").innerHTML="Location: City Hospital Cardiology Clinic<br>*Experience: 15 years<br>*Bio: Dr. Sarah Patel is a board-certified cardiologist with extensive experience in diagnosing and treating various heart conditions, including coronary artery disease, arrhythmias, and heart failure. She is committed to providing compassionate care and personalized treatment plans to help patients achieve optimal heart health.";

		document.getElementById("docName2").innerHTML="Dr. David Chang, MD";
		document.getElementById("docDetails2").innerHTML="Location: Heart Center of Excellence<br>*Experience: 20 years<br>*Bio: Dr. David Chang is a renowned cardiologist known for his expertise in interventional cardiology and minimally invasive heart procedures. He specializes in cardiac catheterization, angioplasty, and stent placement, providing innovative treatments for patients with complex cardiovascular diseases.";

		document.getElementById("docName3").innerHTML="Dr. Emily Wong, MD";
		document.getElementById("docDetails3").innerHTML="Location: Cardiac Care Clinic<br>*Experience: 12 years<br>*Bio: Dr. Emily Wong is a dedicated cardiologist focusing on preventive cardiology and lifestyle interventions to reduce the risk of heart disease. She emphasizes patient education, risk factor modification, and comprehensive cardiac evaluations to promote heart-healthy living.";

		document.getElementById("docName4").innerHTML="Dr. Michael Lee, MD";
		document.getElementById("docDetails4").innerHTML="Location: Heart Institute<br>*Experience: 18 years<br>*Bio: Dr. Michael Lee is a leading cardiologist specializing in advanced heart failure and transplant cardiology. He provides comprehensive care for patients with end-stage heart failure, offering advanced treatments such as ventricular assist devices (VADs) and heart transplantation to improve outcomes and quality of life.";
	}

	else if(name=="sp3"){
		document.getElementById("docName").innerHTML="Dr. Priya Sharma, MD";
		document.getElementById("docDetails").innerHTML="Clinic: Women's Wellness Center<br>*Experience: 15 years<br>*Bio: Dr. Priya Sharma is a board-certified gynecologist with expertise in obstetrics, gynecological surgeries, and women's reproductive health. She is committed to providing compassionate care and personalized treatment options to her patients.";

		document.getElementById("docName2").innerHTML="Dr. Nalini Fernando, MD";
		document.getElementById("docDetails2").innerHTML="Clinic: FemCare Clinic<br>*Experience: 12 years<br>*Bio: Dr. Nalini Fernando is a dedicated gynecologist specializing in menstrual disorders, fertility issues, and menopause management. She takes a holistic approach to women's health and empowers her patients through education and support.";

		document.getElementById("docName3").innerHTML="Dr. Anusha Perera, MD";
		document.getElementById("docDetails3").innerHTML="Clinic: Blossom Women's Health<br>*Experience: 18 years<br>*Bio: Dr. Anusha Perera is a renowned gynecologist known for her expertise in minimally invasive gynecological surgeries, including laparoscopy and hysteroscopy. She is committed to providing comprehensive and compassionate care to women of all ages.";

		document.getElementById("docName4").innerHTML="Dr. Devika Jayawardena, MD";
		document.getElementById("docDetails4").innerHTML="Clinic: Harmony Women's Clinic<br>*Experience: 10 years<br>*Bio: Dr. Devika Jayawardena is a compassionate gynecologist with a special interest in adolescent gynecology, contraception counseling, and reproductive health education. She strives to create a comfortable and supportive environment for her patients.";
	}

	else if(name=="sp4"){
		document.getElementById("docName").innerHTML="Dr. Sarah Johnson, MD";
		document.getElementById("docDetails").innerHTML="Specialty: Pediatrics<br>*Experience: 15 years<br>*Bio: Dr. Sarah Johnson is a compassionate pediatrician with a focus on providing comprehensive care to infants, children, and adolescents. She is dedicated to promoting the health and well-being of young patients through preventive care, early intervention, and parent education.";

		document.getElementById("docName2").innerHTML="Dr. Michael Lee, MD";
		document.getElementById("docDetails2").innerHTML="Specialty: Pediatric Cardiology<br>*Experience: 12 years<BR>*Bio: Dr. Michael Lee is a board-certified pediatric cardiologist with expertise in diagnosing and treating heart conditions in children. He is committed to delivering specialized care and support to young patients with congenital heart defects, arrhythmias, and other cardiac disorders.";

		document.getElementById("docName3").innerHTML="Dr. Emily Chen, MD";
		document.getElementById("docDetails4").innerHTML="Specialty: Pediatric Neurology<br>*Experience: 10 years<br>*Bio: Dr. Emily Chen is a skilled pediatric neurologist specializing in the diagnosis and management of neurological disorders in children, including epilepsy, developmental delays, and cerebral palsy. She is dedicated to providing compassionate care and support to children and their families";

		document.getElementById("docName4").innerHTML="Dr. David Patel, MD";
		document.getElementById("docDetails4").innerHTML="Specialty: Pediatric Oncology<br>*Experience: 18 years<br>*Bio: Dr. David Patel is a dedicated pediatric oncologist with expertise in treating children with cancer and blood disorders. He is committed to delivering personalized treatment plans, supportive care, and hope to young patients and their families facing pediatric cancers.";
	}
	else if(name=="sp5"){
		document.getElementById("docName").innerHTML="Dr. Samantha Patel, MD";
		document.getElementById("docDetails").innerHTML="Specialty: Neurology<br>*Experience: 20 years<br>*Bio: Dr. Sarah Patel is a highly experienced neurologist known for her expertise in diagnosing and treating various neurological conditions, including migraines, epilepsy, and neuropathies. She is committed to providing compassionate care and personalized treatment plans to her patients.";

		document.getElementById("docName2").innerHTML="Dr. Michael Chen, MD";
		document.getElementById("docDetails2").innerHTML="Specialty: Neurology<br>*Experience: 15 years<br>*Bio: Dr. Michael Chen is a board-certified neurologist with a focus on movement disorders, such as Parkinson's disease and essential tremor. He is dedicated to improving the quality of life for his patients through advanced treatments and comprehensive care.";

		document.getElementById("docName3").innerHTML="Dr. Emily Rodriguez, MD";
		document.getElementById("docDetails3").innerHTML="Specialty: Neurology<br>*Experience: 12 years<br>*Bio: Dr. Emily Rodriguez specializes in neurology with a particular interest in neuromuscular disorders, such as ALS, muscular dystrophy, and myasthenia gravis. She is committed to providing personalized care and support to patients with complex neurological conditions.";

		document.getElementById("docName4").innerHTML="Dr. David Sharma, MD";
		document.getElementById("docDetails4").innerHTML="Specialty: Neurology<br>*Experience: 18 years<br>*Bio: Dr. David Sharma is a renowned neurologist known for his expertise in neuro-oncology, specializing in the diagnosis and treatment of brain tumors and related neurological complications. He is dedicated to providing comprehensive care and support to patients and their families.";
	}

	else if(name=="sp6"){
		document.getElementById("docName").innerHTML="Dr. Maya Sharma, MD";
		document.getElementById("docDetails").innerHTML="Specialty: Endocrinology and Diabetology<br>*Experience: 10 years<br>*Bio: Dr. Maya Sharma is a skilled endocrinologist and diabetologist with a special interest in pediatric endocrinology. She is committed to providing comprehensive care to patients of all ages, focusing on early detection, prevention, and management of endocrine and metabolic disorders.";

		document.getElementById("docName2").innerHTML="Dr. Rajesh Singh, MD";
		document.getElementById("docDetails2").innerHTML="Specialty: Endocrinology and Diabetology<br>*Experience: 12 years<br>*Bio: Dr. Rajesh Singh specializes in endocrinology and diabetology with a focus on thyroid disorders, adrenal diseases, and diabetes management. He is committed to delivering comprehensive care and helping patients achieve long-term control of their endocrine and metabolic conditions.";

		document.getElementById("docName3").innerHTML="Dr. Aisha Patel, MD";
		document.getElementById("docDetails3").innerHTML="Specialty: Endocrinology and Diabetology<br>*Experience: 10 years<br>*Bio: Dr. Aisha Patel is a dedicated endocrinologist and diabetologist with expertise in insulin resistance, polycystic ovary syndrome (PCOS), and gestational diabetes. She believes in a multidisciplinary approach to care and works closely with patients to develop personalized treatment plans";

		document.getElementById("docName4").innerHTML="Dr. Sanjay Gupta, MD";
		document.getElementById("docDetails4").innerHTML="Specialty: Endocrinology and Diabetology<br>*Experience: 18 years<br>*Bio: Dr. Sanjay Gupta is a highly experienced endocrinologist and diabetologist known for his compassionate care and clinical expertise. He specializes in the management of complex endocrine disorders, including pituitary disorders, osteoporosis, and metabolic syndrome.";
	}

	else if(name=="sp7"){
		document.getElementById("docName").innerHTML="Dr. Samantha Patel, MD";
		document.getElementById("docDetails").innerHTML="Specialty: Ophthalmology<br>*Experience: 15 years<br>*Bio: Dr. Samantha Patel is a highly skilled ophthalmologist specializing in cataract surgery, refractive surgery, and corneal transplantation. She is committed to providing excellent vision care and surgical outcomes to her patients.";

		document.getElementById("docName2").innerHTML="Dr. Michael Chen, MD";
		document.getElementById("docDetails2").innerHTML="Specialty: Ophthalmology<br>*Experience: 12 years<br>*Bio: Dr. Michael Chen is a board-certified ophthalmologist with expertise in retinal surgery, including vitrectomy, macular hole repair, and retinal detachment surgery. He is dedicated to preserving and restoring vision for patients with retinal diseases.";

		document.getElementById("docName3").innerHTML="Dr. Emily Rodriguez, MD";
		document.getElementById("docDetails3").innerHTML="Specialty: Ophthalmology<br>*Experience: 10 years<br>*Bio: Dr. Emily Rodriguez specializes in oculoplastic surgery, focusing on eyelid surgery, orbital reconstruction, and tear duct surgery. She is committed to helping patients achieve both functional and aesthetic improvements in their eye health.";

		document.getElementById("docName4").innerHTML="Dr. David Sharma, MD";
		document.getElementById("docDetails4").innerHTML="Specialty: Ophthalmology<br>*Experience: 18 years<br>*Bio: Dr. David Sharma is a renowned ophthalmologist known for his expertise in glaucoma surgery, including trabeculectomy, glaucoma drainage devices, and minimally invasive glaucoma surgery (MIGS). He is dedicated to preserving vision and preventing vision loss in patients with glaucoma.";
	}


	else if(name=="sp8"){
		document.getElementById("docName").innerHTML="Dr. Emily Smith, MD";
		document.getElementById("docDetails").innerHTML="Specialty: Dermatology<br>*Experience: 15 years<br>Bio: Dr. Emily Smith is a board-certified dermatologist known for her expertise in medical and cosmetic dermatology. She specializes in treating skin conditions such as acne, eczema, psoriasis, and performs various cosmetic procedures including Botox, fillers, and laser treatments.";

		document.getElementById("docName2").innerHTML="Dr. David Patel, MD";
		document.getElementById("docDetails2").innerHTML="Specialty: Dermatology<br>*Experience: 12 years<br>*Bio: Dr. David Patel is a dermatologist with a focus on skin cancer detection and treatment, including Mohs surgery. He is dedicated to providing comprehensive skin cancer screenings, surgical excisions, and reconstructive procedures with a patient-centered approach.";

		document.getElementById("docName3").innerHTML="Dr. Sarah Chang, MD";
		document.getElementById("docDetails3").innerHTML="Specialty: Dermatology<br>*Experience: 10 years<br>*Bio: Dr. Sarah Chang specializes in pediatric dermatology, providing expert care for infants, children, and adolescents with skin conditions such as atopic dermatitis, birthmarks, and genetic skin disorders. She is committed to addressing the unique dermatological needs of pediatric patients and their families.";

		document.getElementById("docName4").innerHTML="Dr. Michael Kim, MD";
		document.getElementById("docDetails4").innerHTML="Specialty: Dermatology<br>*Experience: 18 years<br>*Bio: Dr. Michael Kim is a dermatologist with a focus on cosmetic dermatology and dermatologic surgery. He offers a wide range of cosmetic procedures including laser treatments, chemical peels, and microdermabrasion, tailored to each patient's individual needs and goals.";
	}

	else if(name=="sp9"){
		document.getElementById("docName").innerHTML="Dr. Anika Sharma, BAMS";
		document.getElementById("docDetails").innerHTML="Specialty: Ayurvedic Medicine<br>*Experience: 10 years<br>*Bio: Dr. Anika Sharma is a highly skilled Ayurvedic physician with expertise in traditional Ayurvedic diagnosis and treatment methods. She specializes in personalized wellness plans tailored to each patient's unique constitution and health concerns.";

		document.getElementById("docName2").innerHTML="Dr. Vikram Singh, BAMS";
		document.getElementById("docDetails2").innerHTML="Specialty: Ayurvedic Medicine<br>*Experience: 15 years<br>*Bio: Dr. Vikram Singh is a respected Ayurvedic practitioner known for his holistic approach to health and well-being. He offers comprehensive consultations and therapeutic treatments based on ancient Ayurvedic principles to promote balance and vitality.";

		document.getElementById("docName3").innerHTML="Dr. Priya Desai, BAMS";
		document.getElementById("docDetails3").innerHTML="Specialty: Ayurvedic Medicine<br>*Experience: 12 years<br>*Bio: Dr. Priya Desai specializes in Ayurvedic herbal medicine and lifestyle counseling to address a wide range of health issues, including digestive disorders, stress management, and chronic conditions. She is dedicated to helping patients achieve optimal health through natural, sustainable practices.";

		document.getElementById("docName4").innerHTML="Dr. Rahul Gupta, BAMS";
		document.getElementById("docDetails4").innerHTML="Specialty: Ayurvedic Medicine<br>*Experience: 18 years<br>*Bio: Dr. Rahul Gupta is a seasoned Ayurvedic physician with expertise in Panchakarma therapies, detoxification, and rejuvenation treatments. He focuses on restoring harmony and balance to the body, mind, and spirit through personalized Ayurvedic interventions";
	}

	else if(name=="sp10"){
		document.getElementById("docName").innerHTML="Dr. Anil Patel, MD";
		document.getElementById("docDetails").innerHTML="Specialty: Nephrology<br>*Experience: 15 years<br>*Bio: Dr. Priya Sharma is a board-certified nephrologist known for her expertise in the diagnosis and management of kidney diseases. She specializes in kidney transplantation, dialysis, and hypertension management, providing compassionate care to patients with renal disorders.";

		document.getElementById("docName2").innerHTML="Dr. Michael Chang, MD";
		document.getElementById("docDetails2").innerHTML="Specialty: Cardiothoracic Surgery<br>*Experience: 18 years<br>*Bio: Dr. Michael Chang is a highly skilled cardiothoracic surgeon specializing in surgical procedures of the heart and chest. He has extensive experience in coronary artery bypass surgery, valve replacement, and congenital heart defect repair, delivering exceptional care to patients with cardiac conditions.";

		document.getElementById("docName3").innerHTML="Dr. Priya Sharma, MD";
		document.getElementById("docDetails3").innerHTML="Specialty: Nephrology<br>*Experience: 15 years<br>*Bio: Dr. Priya Sharma is a board-certified nephrologist known for her expertise in the diagnosis and management of kidney diseases. She specializes in kidney transplantation, dialysis, and hypertension management, providing compassionate care to patients with renal disorders.";

		document.getElementById("docName4").innerHTML="Dr. Emily Rodriguez, MD";
		document.getElementById("docDetails4").innerHTML="Specialty: Orthopedic Surgery<br>*Experience: 12 years<br>*Bio: Dr. Emily Rodriguez is a board-certified orthopedic surgeon known for her expertise in treating musculoskeletal conditions and sports injuries. She specializes in joint replacement, arthroscopic surgery, and fracture management, helping patients regain mobility and improve their quality of life.";
	}

}

