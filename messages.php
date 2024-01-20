<?php
session_start();
$messages = [
    'asha' => [
        'en' => 'Asha',
        'hi' => ' आशा ',
        'ma' =>' आशा '
    ],'aai' => [
        'en' => ' Any Additional Information ',
        'hi' => ' कोई अतिरिक्त जानकारी ',
        'ma' =>' कोणतीही अतिरिक्त माहिती '
    ],
    'userid' => [
        'en' => 'User ID',
        'hi' => ' यूज़र आईडी ',
        'ma' =>' वापरकर्ता आयडी '
    ],
    'rod' => [
        'en' => 'Reason Of Death',
        'hi' => 'मौत का कारण ',
        'ma' =>' मृत्यूचे कारण '
    ],
    'dreg' => [
        'en' => 'Death Registration',
        'hi' => 'मृत्यु पंजीकरण',
        'ma' =>' मृत्यू नोंदणी '
    ],
    'dod' => [
        'en' => 'Date of Death',
        'hi' => 'मृत्यु तिथि',
        'ma' =>' मृत्यूची तारीख '
    ],
    'Submit' => [
        'en' => 'Submit',
        'hi' => ' जमा करें ',
        'ma' =>' सबमिट करा '
    ],
    'doctor' => [
        'en' => 'Doctor',
        'hi' => ' डॉक्टर ',
        'ma' =>' डॉक्टर '
    ],'awfwe' => [
        'en' => 'Asha Workers For Women Empowerment',
        'hi' => ' महिला सशक्तिकरण के लिए आशा कार्यकर्ता ',
        'ma' =>' महिला सक्षमीकरणासाठी आशा कामगार '
    ],'we' => [
        'en' => 'Women Empowerment',
        'hi' => ' महिला सशक्तिकरण',
        'ma' =>' महिला सशक्तीकरण'
    ],'iawwg' => [
        'en' => 'Independent ASHA Workers working in Group for Helping Socity',
        'hi' => 'स्वतंत्र सहायता के लिए समूह में काम करने वाले स्वतंत्र आशा कार्यकर्ता',
        'ma' =>' ग्रुप फॉर हेल्पिंग सोसायटीमध्ये काम करणार्या स्वतंत्र आशा कामगार'
    ],'indep' => [
        'en' => 'Independent ',
        'hi' => 'स्वतंत्र',
        'ma' =>'स्वतंत्र'
    ],'aphrf' => [
        'en' => 'Asha plays her role for Improvement of Rural Health ',
        'hi' => 'आशा ने ग्रामीण स्वास्थ्य में सुधार के लिए अपनी भूमिका निभाई',
        'ma' =>'ग्रामीण आरोग्य सुधारण्यासाठी आशा भूमिका बजावते'
    ],
    'health' => [
        'en' => 'Health ',
        'hi' => 'स्वास्थ्य',
        'ma' =>'आरोग्य'
    ],
    'apih' => [
        'en' => 'Asha plays her role in the improvement of child Health',
        'hi' => 'सआशा ने बाल स्वास्थ्य के सुधार में अपनी भूमिका निभाई है',
        'ma' =>'बाल आरोग्य सुधारण्यासाठी आशा भूमिका बजावते'
    ],
    'cc' => [
        'en' => 'Child Care ',
        'hi' => 'बाल देखभाल',
        'ma' =>'शिशु काल्जी'
    ],
    'ahpw' => [
        'en' => 'Asha Helping out the Pregnant Women Throughout her Pregnancy ',
        'hi' => 'सआशा ने गर्भावस्था के दौरान गर्भवती महिलाओं की मदद की',
        'ma' =>'आशा गर्भधारणा दरम्यान गर्भवती महिलाना मदत करत आहे'
    ],
    'pw' => [
        'en' => 'Pregnant Women ',
        'hi' => 'गर्भवती महिला',
        'ma' =>'गर्भवती महिला'
    ],'education' => [
        'en' => 'Education',
        'hi' => 'शिक्षा',
        'ma' =>'शिक्षण'
    ],'para1' => [
        'en' => 'Asha for Education works with over 200 projects across India. The projects deal with educational issues from pre-primary schooling to professional education in locations from urban slums to isolated rural areas.Since 1997, Asha for Education has disbursed approximately $36.0 million.
			In 2016, Asha for Education raised $3.1 million in revenue and disbursed $3.8 million to projects in India. One of the founders of Asha for Education, Sandeep Pandey, started Asha Parivar in India.',
        'hi' => 'शिक्षा के लिए आशा पूरे भारत में 200 से अधिक परियोजनाओं के साथ काम करती है। यह परियोजनाएँ पूर्व-प्राथमिक स्कूली शिक्षा से लेकर शहरी झुग्गी-झोपड़ी से लेकर अलग-अलग ग्रामीण इलाकों तक की व्यावसायिक शिक्षा तक के मुद्दों से जुड़ी हैं। 1997 में, शिक्षा के लिए आशा ने लगभग $ 36.0 मिलियन का वितरण किया है। 2016 में, शिक्षा के लिए आशा ने राजस्व में $ 3.1 मिलियन और भारत में परियोजनाओं के लिए $ 3.8 मिलियन का वितरण किया। आशा फॉर एजुकेशन के संस्थापकों में से एक संदीप पांडे ने भारत में आशा परिवार की शुरुआत की।',
        'ma' =>'आशा साठी शिक्षण भारतभर 200 पेक्षा जास्त प्रकल्पांसह कार्य करते. शहरी झोपडपट्ट्यापासून वेगळ्या ग्रामीण भागातील स्थानांवर प्री-प्राथमिक शाळांमधून व्यावसायिक शिक्षणापर्यंतच्या शैक्षणिक समस्यांसह प्रकल्प हाताळतात. 1 99 7 पासून आसा फॉर एजुकेशनने सुमारे 36.0 दशलक्ष डॉलर्स वितरित केले आहेत. 2016 मध्ये, आसा फॉर एज्युकेशनने महसूल $ 3.1 दशलक्ष वाढविला आणि भारतातील प्रकल्पांसाठी 3.8 दशलक्ष डॉलर्स वितरित केले.शिक्षणासाठी आशा संस्थापक संदीप पांडे यांनी भारतातील आशा परिवार सुरू केले.'
    ],

//--
    'about_form_us' => [
        'en' => 'About',
        'hi' => 'आपके बारे में',
        'ma' =>'तुझ्याबद्दल'
    ],'submitted' => [
        'en' => 'Submitted',
        'hi' => 'जम हो गया ',
        'ma' =>'सबमिट केले'
    ],
    //Main Page

    'gstr' =>[
        'en' => 'Get Started',
        'hi' => 'शुरु',
        'ma' =>'प्रारंभ करा'
    ],
    's1' =>[
        'en' => 'Helping hand towards the development Society',
        'hi' => 'सोसायटी के विकास के लिए मदद ',
        'ma' =>'विकास सोसायटी दिशेने हात मदत'
    ],
    'mp1' =>[
        'en' => 'One of the key components of the National Rural Health Mission is to provide every village in the country with a trained female community health activist ASHA or Accredited Social Health Activist. Selected from the village itself and accountable to it, the ASHA will be trained to work as an interface between the community and the public health system.',
        'hi' => 'राष्ट्रीय ग्रामीण स्वास्थ्य मिशन के प्रमुख घटकों में से एक देश में हर गाँव को प्रशिक्षित महिला सामुदायिक स्वास्थ्य कार्यकर्ता आशा या मान्यता प्राप्त सामाजिक स्वास्थ्य कार्यकर्ता प्रदान करना है। गांव से ही चयनित और इसके लिए जवाबदेह, आशा को समुदाय और सार्वजनिक स्वास्थ्य प्रणाली के बीच एक इंटरफेस के रूप में काम करने के लिए प्रशिक्षित किया जाएगा।',
        'ma' =>'नॅशनल रूरल हेल्थ मिशनच्या महत्त्वाच्या घटकांपैकी एक म्हणजे देशातील प्रत्येक गावात एक प्रशिक्षित महिला समुदाय आरोग्य कार्यकर्ता आशा किंवा मान्यताप्राप्त सामाजिक आरोग्य कार्यकर्ता असेल. गावातून निवडलेल्या आणि त्यास उत्तरदायी म्हणून, आशा आणि समुदाय आणि सार्वजनिक आरोग्य व्यवस्थे दरम्यान संवाद म्हणून काम करण्यासाठी प्रशिक्षित केले जाईल.'
    ],
    'mp2' =>[
        'en' => 'An accredited social health activist (ASHA) is a community health worker instituted by the government of India\'s Ministry of Health and Family Welfare (MoHFW) as a part of the National Rural Health Mission (NRHM).[1] The mission began in 2005; full implementation was targeted for 2012. Once fully implemented, there is to be "an ASHA in every village" in India, a target that translates into 250,000 ASHAs in 10 states.[2] The grand total number of ASHAs in India was reported in July 2013 to be 870,089.[3] There are 859,331 ASHAs in 32 states and union territories as per the data provided by the states in December 2014. This excludes data from the states of Himachal Pradesh, Goa, Puducherry, and Chandigarh, since the selection of ASHA is under way in these states.',
        'hi' => 'एक मान्यता प्राप्त सामाजिक स्वास्थ्य कार्यकर्ता (ASHA) एक सामुदायिक स्वास्थ्य कार्यकर्ता है जिसे भारत सरकार के स्वास्थ्य और परिवार कल्याण मंत्रालय (MoHFW) द्वारा राष्ट्रीय ग्रामीण स्वास्थ्य मिशन (NRHM) के एक भाग के रूप में स्थापित किया गया है। [१] मिशन 2005 में शुरू हुआ; पूर्ण कार्यान्वयन 2012 के लिए लक्षित किया गया था। एक बार पूरी तरह से लागू होने के बाद, भारत में "प्रत्येक गाँव में एक आशा" होना है, एक लक्ष्य जो 10 राज्यों में 250,000 आशाओं में परिवर्तित होता है। [2] भारत में आशा की कुल संख्या जुलाई 2013 में 870,089 थी। [3] दिसंबर 2014 में राज्यों द्वारा उपलब्ध कराए गए आंकड़ों के अनुसार 32 राज्यों और केंद्र शासित प्रदेशों में 859,331 ASHA हैं। यह इन राज्यों में ASHA के चयन के बाद से हिमाचल प्रदेश, गोवा, पुडुचेरी और चंडीगढ़ राज्यों से डेटा को बाहर करता है। ।',
        'ma' =>'मान्यताप्राप्त सामाजिक आरोग्य कार्यकर्ता (आशा) राष्ट्रीय ग्रामीण आरोग्य मिशन (एनआरएचएम) च्या एक भाग म्हणून भारत सरकारच्या आरोग्य आणि कुटुंब कल्याण मंत्रालयाने (एमओएचएफडब्लू) सरकारद्वारे स्थापित एक समुदाय आरोग्य कर्मचारी आहे. [1] मिशन 2005 मध्ये सुरू झाले; 2012 पर्यंत पूर्ण अंमलबजावणी लक्ष्यित करण्यात आली. संपूर्णपणे अंमलबजावणी झाल्यानंतर भारतात "प्रत्येक गावात आशा" असावी, हे लक्ष्य 10 राज्यांमध्ये 250,000 आशांमध्ये अनुवादित केले जाईल. [2] जुलै 2013 मध्ये भारतातील आशाच्या एकूण संख्येची संख्या 870,089 होती. [3] डिसेंबर 2014 मध्ये राज्यांद्वारे प्रदान केलेल्या आकडेवारीनुसार 32 राज्ये आणि केंद्रशासित प्रदेशांमध्ये 85 9 ,3131 आशा आहेत. या राज्यांमध्ये आशाचा निवड चालू असल्याने हिमाचल प्रदेश, गोवा, पुडुचेरी आणि चंदीगड राज्यांमधील डेटा समाविष्ट नाही. .'
    ],
    'mp3' =>[
        'en' => 'Recognizing the importance of Health in the process of economic and social development and improving the quality of life of our citizens, the Government of India launched the National Rural Health Mission to carry out necessary architectural correction in the basic health care delivery system',
        'hi' => 'आर्थिक और सामाजिक विकास की प्रक्रिया में स्वास्थ्य के महत्व को पहचानते हुए और हमारे नागरिकों के जीवन की गुणवत्ता में सुधार करते हुए, भारत सरकार ने बुनियादी स्वास्थ्य देखभाल वितरण प्रणाली में आवश्यक वास्तु सुधार करने के लिए राष्ट्रीय ग्रामीण स्वास्थ्य मिशन शुरू किया',
        'ma' =>'आर्थिक आणि सामाजिक विकासाच्या प्रक्रियेत आरोग्याचे महत्त्व ओळखणे आणि आमच्या नागरिकांच्या जीवनात गुणवत्ता सुधारणे, भारत सरकारने मूलभूत आरोग्य सेवा पुरवठा प्रणालीमध्ये आवश्यक आर्किटेक्चरल सुधारणा करण्यासाठी राष्ट्रीय ग्रामीण आरोग्य अभियान सुरू केला.'
    ],
    'a1' =>[
        'en' => 'Group of Asha Workers',
        'hi' => 'आशा कार्यकर्ताओं का समूह',
        'ma' =>'आशा कामगारांचे गट'
    ],
    'g1' =>[
        'en' => 'Asha Workers',
        'hi' => 'आशा कार्यकत्री',
        'ma' =>'आशा कामगार'
    ],
    'g2' =>[
        'en' => 'Health Activist',
        'hi' => 'स्वास्थ्य कार्यकर्ता',
        'ma' =>'आरोग्य कार्यकर्ता'
    ],
    'g3' =>[
        'en' => 'Health',
        'hi' => 'स्वास्थ्य',
        'ma' =>'आरोग्य'
    ],
    'b1' =>[
        'en' => 'Accredited Social Health Activist',
        'hi' => 'मान्यता प्राप्त सामाजिक स्वास्थ्य कार्यकर्ता',
        'ma' =>'मान्यताप्राप्त सामाजिक आरोग्य कार्यकर्ता'
    ],
    'd1' =>[
        'en' => 'ASHA plays her role in social health development',
        'hi' => 'आशा सामाजिक स्वास्थ्य विकास में अपनी भूमिका निभाती है',
        'ma' =>'आशा सामाजिक आरोग्याच्या विकासात तिची भूमिका बजावते'
    ],

    //organs
    'head' =>[
        'en' => 'Head',
        'hi' => 'सिर',
        'ma' =>'डोके'
    ],
    'neck' =>[
        'en' => 'Neck',
        'hi' => 'गरदन',
        'ma' =>'मान'
    ],
    'chest' =>[
        'en' => 'Chest',
        'hi' => 'छाती',
        'ma' =>'छाती'
    ],
    'abdomen' =>[
        'en' => 'Abdomen',
        'hi' => 'पेट',
        'ma' =>'ओटीपोट'
    ],
    'thigh' =>[
        'en' => 'Thigh',
        'hi' => 'जांघ',
        'ma' =>'जांभळा'
    ],
    'knee' =>[
        'en' => 'Knee',
        'hi' => 'घुटना',
        'ma' =>'गुडघा'
    ],
    'sexual organ' =>[
        'en' => 'Sexual organs',
        'hi' => 'यौन अंग',
        'ma' =>'लैंगिक अवयव'
    ],
    'foot' =>[
        'en' => 'Foot',
        'hi' => 'पैर',
        'ma' =>'पाय'
    ]

//Pregnancy
    ,
    'pq1' =>[
        'en' => '1.Date Of Last Menstrual Period',
        'hi' => '1. अंतिम मासिक धर्म की तारीख',
        'ma' =>'1. गेल्या मासिक पाळीची तारीख'
    ],
    'pq2' =>[
        'en' => '2.No. of Pregnancies / Previous live births',
        'hi' => '2. गर्भावस्था / पूर्व जीवित जन्मों की संख्या',
        'ma' =>'2. गर्भधारणेची संख्या / मागील जन्मपूर्व जन्म'
    ]

    , //patient form
    'fname' =>[
        'en' => 'First Name',
        'hi' => 'पहला नाम',
        'ma' => 'पहिले नाव'

    ],
    'lname' =>[
        'en' => 'Last Name',
        'hi' => 'अंतिम नाम',
        'ma' => 'आडनाव'
    ],
    'gender' =>[
        'en' => 'Gender',
        'hi' => 'लिंग',
        'ma' => 'लिंग'
    ],
    'male' =>[
        'en' => 'Male',
        'hi' => 'पुरुष',
        'ma' => 'पुरुष'
    ],
    'female' =>[
        'en' => 'Female',
        'hi' => 'महिला',
        'ma' => 'स्त्री'
    ],
    'birthdate' =>[
        'en' => 'Date Of Birth',
        'hi' => 'जन्म की तारीख',
        'ma' => 'जन्मतारीख'
    ],
    'info' =>[
        'en' => 'Medical Info',
        'hi' => 'चिकित्सा जानकारी',
        'ma' => 'वैद्यकीय माहिती'
    ],
    'weight' =>[
        'en' => 'Weight',
        'hi' => 'वजन',
        'ma' => 'वजन'
    ],
    'group' =>[
        'en' => 'Blood Group',
        'hi' => 'रक्त समूह',
        'ma' => 'रक्त गट'
    ],
    'height' =>[
        'en' => 'Height',
        'hi' => 'ऊंचाई',
        'ma' => 'उंची'
    ],
    'history' =>[
        'en' => 'History',
        'hi' => 'इतिहास',
        'ma' => 'इतिहास'
    ],
    'contact' =>[
        'en' => 'Contact',
        'hi' => 'संपर्क करें',
        'ma' => 'संपर्क'
    ],
    'phone' =>[
        'en' => 'Phone No',
        'hi' => 'फोन नंबर',
        'ma' => 'दूरध्वनी क्रमांक'
    ],
    'id' =>[
        'en' => 'User Registration Id',
        'hi' => 'उपयोगकर्ता पंजीकरण आईडी',
        'ma' => 'यूजर नोंदणी आयड'
    ],
    'submit' =>[
        'en' => 'Submit',
        'hi' => 'जमा ',
        'ma' => 'सबमिट '
    ],
    //common ques
    'q1' =>[
        'en' => '1. Do you have any of the following symptoms?',
        'hi' => '1. क्या आपके पास निम्नलिखित में से कोई लक्षण है?',
        'ma' =>'1. आपल्याकडे खालील पैकी काही लक्षणे आहेत का?'
    ],
    'osm' =>[
        'en' => 'Oversensitivity to light,sound,or smells',
        'hi' => 'प्रकाश, ध्वनि या गंध के प्रति संवेदनशीलता',
        'ma' =>' प्रकाश, आवाज किंवा वास यांचे ओव्हरसेन्सिटिव्हिटी'
    ],
    'bv' =>[
        'en' => 'Blurred Vision',
        'hi' => 'धुंधली दृष्टि',
        'ma' =>' धूसर दृष्टी'
    ],
    'is' =>[
        'en' => 'Illusion of surrounding being bigger or smaller they actually are',
        'hi' => 'आसपास के बड़े या छोटे होने का भ्रम वे वास्तव में हैं',
        'ma' =>'प्रत्यक्षात ते मोठे किंवा मोठे असण्याची भिती'
    ],
    'v' =>[
        'en' => ' Vomiting',
        'hi' => ' उल्टी',
        'ma' =>'उलट्या'
    ],
    'fw' =>[
        'en' => 'Feeling weak and tired',
        'hi' => 'कमजोरी और थकान महसूस होना',
        'ma' =>' कमकुवत आणि थकल्यासारखे वाटते'
    ],
    'fs' =>[
        'en' => 'Feeling sick',
        'hi' => 'बीमार महसूस करना',
        'ma' =>'आजारी वाटत आहे'
    ],
    'f' =>[
        'en' => ' Fatigue',
        'hi' => 'थकान',
        'ma' =>'थकवा'
    ],
    'q2' =>[
        'en' => '2. How long are you suffering?',
        'hi' => ' 2. आपको  काब से सिरदर्द है?',
        'ma' =>' 2. किती दिवस दुखत आहात?'
    ],
    'lt' =>[
        'en' => 'Less than 1 day',
        'hi' => '1 दिन से कम',
        'ma' =>'1 दिवसापेक्षा कमी'
    ],
    'd' =>[
        'en' => '2-3 days',
        'hi' => ' दो - तीन दिन',
        'ma' =>' 2-3 दिवस'
    ],
    'aw' =>[
        'en' => 'A Week',
        'hi' => 'एक सप्ताह',
        'ma' =>' एक आठवडा'
    ],
    'mt' =>[
        'en' => 'More than a Week',
        'hi' => ' एक सप्ताह से अधिक',
        'ma' =>'एक आठवडा जास्त'
    ],
    'q3' =>[
        'en' => '3. What is the Intensity?',
        'hi' => '3. तीव्रता क्या है?',
        'ma' =>'3. किती तीव्रता ?'
    ],
    'm' =>[
        'en' => 'Mild ',
        'hi' => 'थोड़ा',
        'ma' =>'सौम्य'
    ],
    'm1' =>[
        'en' => 'Moderate',
        'hi' => 'सहने योग्य',
        'ma' =>' मध्यम'
    ],
    's' =>[
        'en' => 'Severe',
        'hi' => 'असहनीय',
        'ma' =>' गंभीर'
    ],
    'v1' =>[
        'en' => ' Vertigo ',
        'hi' => ' सिर का चक्कर',
        'ma' =>' व्हर्टिगो'
    ],
    'a' =>[
        'en' => 'Anxiety',
        'hi' => ' चिंता',
        'ma' =>'  चिंता'
    ],
    'di' =>[
        'en' => 'Disequilibrium(Feeling unsteady)',
        'hi' => ' डिसीक्विलिब्रियम (अस्थिर महसूस करना)',
        'ma' =>' डिसिक्लिब्रिब्रियम (अस्थिर वाटणे)'
    ],
    'r' =>[
        'en' => 'Ringing or buzzing in ears',
        'hi' => 'कानों में बजना या गूंजना',
        'ma' =>'कान मध्ये रिंग'
    ],
    'nb' =>[
        'en' => 'Nose bleeding',
        'hi' => 'नाक से खून बहना',
        'ma' =>'नाकातुन रक्तस्त्राव'
    ],
    'ph' =>[
        'en' => 'Persistent headache',
        'hi' => 'लगातार सिरदर्द ',
        'ma' =>'सतत डोकेदुखी'
    ],
    'rv' =>[
        'en' => 'Repeated vomiting',
        'hi' => ' बार-बार उल्टी होना',
        'ma' =>'वारंवार उलट्या
        '
    ],
    'do' =>[
        'en' => 'Dilation of one or both pupils of the eyes',
        'hi' => ' आँखों की एक या दोनों पुतलियों का गिरना',
        'ma' =>'डोळ्यातील एक किंवा दोन्ही भुबळ जोडणे'
    ],
    'ds' =>[
        'en' => 'Difficulty in  sleeping',
        'hi' => ' सोने में कठिनाई',
        'ma' =>'झोपण्यात अडचण'
    ],
    'nl' =>[
        'en' => 'No loss of consciousness   ',
        'hi' => 'चेतना का कोई नुकसान नहीं',
        'ma' =>'चेतना नाही नुकसान'
    ],
    'cf' =>[
        'en' => 'Clear fluids draining from the nose or ears',
        'hi' => '  नाक या कान से निकलने वाले स्पष्ट तरल पदार्थ',
        'ma' =>' नाक किंवा कानांमधून वाहणारे द्रव साफ करा'
    ],
    'ap' =>[
        'en' => 'Abdominal pain',
        'hi' => 'पोटदुखी',
        'ma' =>' पेट में दर्द '
    ],
    'h' =>[
        'en' => 'Headache',
        'hi' => 'सरदर्द',
        'ma' =>' डोकेदुखी '
    ]
    ,
    'fwt' =>[
        'en' => 'Feeling weak and tired',
        'hi' => ' कमजोरी और थकान महसूस होना',
        'ma' =>' कमकुवत आणि थकल्यासारखे वाटते '
    ]
    ,
    'st' =>[
        'en' => 'Sore throat',
        'hi' => 'गले में खरास',
        'ma' =>' घसा दुखणे '
    ]
    ,
    'c1' =>[
        'en' => 'Cough',
        'hi' => 'खांसी',
        'ma' =>' खोकला '
    ]
    ,
    'sn' =>[
        'en' => 'stuffy nose',
        'hi' => 'भरा नाक',
        'ma' =>' भडक नाक'
    ]
    ,
    'ba' =>[
        'en' => 'body aches',
        'hi' => ' शरीर मैं दर्द',
        'ma' =>' अंग दुखी'
    ]
    ,
    'c2' =>[
        'en' => 'Constipation',
        'hi' => 'कब्ज',
        'ma' =>'  कब्ज '
    ]
    ,
    'mc' =>[
        'en' => 'Mood changes, from depression to euphoria',
        'hi' => 'मूड बदलता है, अवसाद से व्यंजना तक',
        'ma' =>'  नैराश्यापासून उधळपट्टीपर्यंत मन बदलणे '
    ]
    ,
    'fc' =>[
        'en' => 'Food cravings',
        'hi' => 'भोजन की इच्छा',
        'ma' =>' अन्न इच्छा '
    ]
    ,
    'ns' =>[
        'en' => 'Neck stiffness',
        'hi' => ' गर्दन में अकड़न',
        'ma' =>'  घट्टपणा'
    ]
    ,
    'it' =>[
        'en' => 'Increased thirst and urinationt',
        'hi' => 'बढ़ी हुई प्यास और पेशाब',
        'ma' =>' वाढलेली तहान आणि मूत्रपिंड '
    ]

    //Head Complete here

    //NECK STRINGS
    ,
    'ds1' =>[
        'en' => 'Dry skin',
        'hi' => 'रूखी त्वचा',
        'ma' =>' कोरडी त्वचा '
    ],
    'pc' =>[
        'en' => 'Puffy face',
        'hi' => 'सूजा हुआ चेहरा',
        'ma' =>'  झोपेचा चेहरा'
    ],
    'mw' =>[
        'en' => 'Muscle weakness',
        'hi' => 'मांसपेशी में कमज़ोरी',
        'ma' =>'  स्नायू कमजोरी '
    ],
    'dd' =>[
        'en' => 'Depression',
        'hi' => ' डिप्रेशन',
        'ma' =>'  उदासीनता'
    ]
    ,
    'sh' =>[
        'en' => 'Slowed heart rate',
        'hi' => 'सुस्त दिल की दर',
        'ma' =>' मंद हृदय दर '
    ],
    'c3' =>[
        'en' => 'Coughing',
        'hi' => 'खाँसी',
        'ma' =>'  खोकला'
    ],
    'ds2' =>[
        'en' => 'Difficulty swallowing',
        'hi' => 'निगलने में कठिनाई',
        'ma' =>'गिळण्याची अडचण '
    ],
    'db' =>[
        'en' => 'Difficulty breathing',
        'hi' => 'सांस लेने मे तकलीफ',
        'ma' =>' श्वास घेण्यात अडचण  '
    ],
    'tf' =>[
        'en' => ' tight feeling in your throat',
        'hi' => 'अपने गले में तंग महसूस करना',
        'ma' =>' आपल्या गळ्यात घट्ट भावना '
    ],
    'ho' =>[
        'en' => 'Hoarseness',
        'hi' => 'स्वर बैठना',
        'ma' =>'जोरदारपणा  '
    ],
    'mti' =>[
        'en' => 'Muscle tightness',
        'hi' => 'मांसपेशियों में जकड़न',
        'ma' =>' स्नायू tightness  '
    ],
    'dam' =>[
        'en' => 'Decreased ability to move your head',
        'hi' => ' अपने सिर को स्थानांतरित करने की क्षमता में कमी',
        'ma' =>'आपले डोके हलविण्याची क्षमता कमी केली '
    ],
    'sp' =>[
        'en' => 'spasms',
        'hi' => ' ऐंठन',
        'ma' =>'ऐंठन  '
    ],
    'ln' =>[
        'en' => 'lump in the nose',
        'hi' => ' नाक में गांठ',
        'ma' =>' नाक मध्ये  गांठ '
    ],
    'tw' =>[
        'en' => 'Trouble swallowing (dysphagia)',
        'hi' => ' निगलने में परेशानी (डिस्फेजिया)',
        'ma' =>'समस्या निगलणे (डिसफॅगिया) '
    ],
    'rw' =>[
        'en' => 'red or white patch in the mouth',
        'hi' => 'मुंह में लाल या सफेद पैच',
        'ma' =>'तोंडात लाल किंवा पांढरा पॅच'
    ],
    'no' =>[
        'en' => 'Nasal obstruction',
        'hi' => 'नासिका संबंधी अवरोध',
        'ma' =>' नाक अडथळा '
    ],
    'fn' =>[
        'en' => 'Frequent nose bleeds',
        'hi' => 'बार-बार रक्त बहना',
        'ma' =>' सतत रक्त'
    ],
    'cv' =>[
        'en' => 'Change in voice ',
        'hi' => 'आवाज में बदलाव',
        'ma' =>' आवाज बदला '
    ],
    //neck over
    //chest starts
    'wsb' =>[
        'en' => 'wheezing when breathing',
        'hi' => 'सांस लेते समय घरघराहट ',
        'ma' =>'श्वास घेताना आवाज उठवणे '
    ],
    'cp1' =>[
        'en' => 'Chest Pain',
        'hi' => 'छाती में दर्द',
        'ma' =>'छाती दुखणे '
    ],
    'ct' =>[
        'en' => 'Chest tightness',
        'hi' => 'सीने में जकड़न',
        'ma' =>' छातीत घट्टपणा '
    ],
    'wh' =>[
        'en' => 'Wheezing',
        'hi' => 'घरघराहट',
        'ma' =>' घरघर '
    ],
    'bl' =>[
        'en' => 'Blueness of the lips',
        'hi' => 'होठों का नीलापन',
        'ma' =>' ओठांची उदासीनता '
    ],
    'cc' =>[
        'en' => ' cough with phlegm',
        'hi' => 'कफ के साथ खांसी',
        'ma' =>'घाण सह गंभीर खोकला '
    ],
    'fri' =>[
        'en' => 'Frequent respiratory infections',
        'hi' => 'बार-बार श्वसन संबंधी संक्रमण',
        'ma' =>'वारंवार श्वसन संक्रमण '
    ],
    'wl' =>[
        'en' => 'Weight loss',
        'hi' => 'वजन घटना',
        'ma' =>'वजन कमी होणे '
    ],
    'fsw' =>[
        'en' => 'feeling sick or weak',
        'hi' => 'बीमार या कमजोर महसूस करना',
        'ma' =>' आजारी किंवा अशक्त वाटत '
    ],
    'law' =>[
    'en' => 'loss of appetite and weight',
    'hi' => 'भूख और वजन में कमी',
    'ma' =>' भूक आणि वजन कमी होणे'
],
    'fns' =>[
    'en' => 'fever and night sweats',
    'hi' => 'बुखार और रात को पसीना',
    'ma' =>' ताप आणि रात्री घाम येणे '
],
    'td' =>[
    'en' => 'tenderness',
    'hi' => 'दर्द जब एक प्रभावित क्षेत्र को छुआ है',
    'ma' =>'जेव्हा प्रभावित क्षेत्र स्पर्श होतो तेव्हा वेदना'
],
    'asc' =>[
    'en' => 'a severe cough that lasts for 3 weeks or more',
    'hi' => ' एक गंभीर खांसी जो 3 सप्ताह या उससे अधिक समय तक रहती है',
    'ma' =>'तीव्र खोकला जे 3 आठवडे किंवा त्यापेक्षा जास्त काळ टिकते '
],

    //chest over

    'pab' =>[
    'en' => 'pain around the bellybutton',
    'hi' => ' पेट के चारों ओर दर्द',
    'ma' =>' पेटीच्या बाहेरील वेदना'
],
    'lr' =>[
    'en' => 'lower right side abdominal pain',
    'hi' => 'पेट में दर्द',
    'ma' =>' ओटीपोटात वेदना '

],
    'dr' =>[
    'en' => 'diarrhea',
    'hi' => 'दस्त',
    'ma' =>' अतिसार '
],
    'bb' =>[
        'en' => 'A bulging bump on the outside of the base of your big toe',
        'hi' => 'आपके बड़े पैर की अंगुली पर उभरी हुई गांठ',
        'ma' =>'पायावर फोड '
    ],
    'c' =>[
        'en' => 'Corns',
        'hi' => 'कुरूप',
        'ma' =>'कुरूप '
    ],
    'srs' =>[
        'en' => 'Swelling, redness or soreness around your big toe joint',
        'hi' => 'आपके पैर के जोड़ के आसपास सूजन, लालिमा या खराश',
        'ma' =>'आपल्या अंगठ्याचा संयुक्त जोडी सुमारे सूज, लज्जास्पद किंवा दुखः '
    ],
    'p' =>[
        'en' => 'Persistent or intermittent pain',
        'hi' => 'लगातार या रुक-रुक कर होने वाला दर्द',
        'ma' =>'सतत किंवा अस्वस्थ वेदनाकुरूप '
    ],
    'nr' =>[
        'en' => 'Numbness or reduced ability to feel pain or temperature changes',
        'hi' => 'दर्द या तापमान में परिवर्तन महसूस करने की क्षमता कम होना',
        'ma' =>'वेदना किंवा वेदना किंवा तपमान बदलण्याची क्षमता कमी होन'
    ], 'bs' =>[
        'en' => 'Tingling or burning sensation',
        'hi' => 'झुनझुनी या जलन',
        'ma' =>'चिमटा किंवा जळजळ होणे'
    ], 'cp' =>[
        'en' => 'cramps',
        'hi' => 'ऐंठन',
        'ma' =>'वात '
    ], 'mw' =>[
        'en' => 'Muscle weakness',
        'hi' => 'मांसपेशी में कमज़ोरी',
        'ma' =>'स्नायू कमजोरी '
    ], 'lr' =>[
        'en' => 'Loss of reflexes',
        'hi' => 'सजगता का नुकसान',
        'ma' =>'प्रतिबिंब गमावणे '
    ], 'isb' =>[
        'en' => 'itching, stinging, and burning between your toes',
        'hi' => 'खुजली, चुभने, पैर की उंगलियों के बीच जलन',
        'ma' =>'खाज,आग अंगठ्या दरम्यान '
    ],
    'sw' =>[
        'en' => 'Swelling',
        'hi' => 'सूजन',
        'ma' =>'सूज'
    ],
        'brs' =>[
        'en' => 'bruising',
        'hi' => 'चोट',
        'ma' =>'जखम'
    ],
        'drs' =>[
        'en' => 'dry skin',
        'hi' => 'रूखी त्वचा',
        'ma' =>'कोरडी त्वचा '
    ], 'ps' =>[
        'en' => 'pain when wearing shoes',
        'hi' => 'जूते पहनते समय दर्द',
        'ma' =>'शूज घालताना वेदना '
    ], 'rty' =>[
        'en' => 'rough, tough, yellowing patch of lumpy or bumpy skin',
        'hi' => 'खुरदरी, सख्त, पीली या सांवली त्वचा का पीलापन',
        'ma' =>' त्वचा कठोर, पिवळ्या रंगाचा कुरूप '
    ]
    //Shraddha
    ,
    'hb' =>[
        'en' => 'Heartburn',
        'hi' => 'नाराज़गी',
        'ma' =>'हताश '
    ],
    'stb' =>[
        'en' => 'sour taste in the back of your throat',
        'hi' => 'आपके गले के पीछे खट्टा स्वाद',
        'ma' =>' आपल्या गळ्याच्या मागे खसखस '
    ],
    'fb' =>[
        'en' => 'Frequent belching (burping)',
        'hi' => 'बार-बार पेट में दर्द (डकार आना)',
        'ma' =>'वारंवार बेल्चिंग  '
    ],
    'dpy' =>[
        'en' => 'Discomfort or pain in your stomach ',
        'hi' => 'अपने पेट में बेचैनी या दर्द',
        'ma' =>'आपल्या पोटात अस्वस्थता किंवा वेदना '
    ],
    'fp' =>[
        'en' => 'Food Poisoning',
        'hi' => 'विषाक्त भोजन',
        'ma' =>'अन्न विषबाधा'
    ],
    'vg' =>[
        'en' => 'Viral Gastroenteritis (Stomach Flu)',
        'hi' => 'वायरल गैस्ट्रोएंटेराइटिस (पेट फ्लू)',
        'ma' =>'व्हायरल गॅस्ट्रोएन्टरायटिस (पेट फ्लू) '
    ],
    'ut' =>[
        'en' => 'Urinary Tract Infection',
        'hi' => 'मूत्र पथ के संक्रमण',
        'ma' =>' मूत्रमार्गाच्या भागातील संसर्ग '
    ],
    'arg' =>[
        'en' => ' Acid Reflux and GERD',
        'hi' => 'एसिड भाटा और गर्ड',
        'ma' =>'ऍसिड रेफ्लक्स आणि जीईआरडी '
    ],
    'ps1' =>[
    'en' => 'Premenstrual Syndrome',
    'hi' => 'प्रागार्तव',
    'ma' =>'  मासिक पाली'
],
    'be' =>[
    'en' => 'belching',
    'hi' => 'डकार',
    'ma' =>' बेल्चिंग '
],
    'na' =>[
    'en' => 'nausea',
    'hi' => 'जी मिचलाना',
    'ma' =>' मळमळ '
],
    'fv' =>[
    'en' => 'fever',
    'hi' => 'बुखार',
    'ma' =>' ताप '
],
    'pap' =>[
    'en' => 'Poor appetite',
    'hi' => 'अपर्याप्त भूख',
        'ma' =>' गरीब भूक '
    ],
    'vda' =>[
    'en' => 'Vague discomfort in the abdomen',
    'hi' => 'पेट में अस्पष्ट असुविधा',
        'ma' =>' उदर मध्ये अस्पष्ट अस्वस्थता '
    ],
    'vww' =>[
    'en' => 'Vomiting, with or without blood',
    'hi' => 'खून के साथ या बिना उल्टी',
        'ma' =>'  रक्तासह किंवा त्याशिवाय उलट्या '
    ]
    //thigh
    ,
    'pa' =>[
    'en' => 'pain',
    'hi' => 'दर्द',
        'ma' =>'  वेदना '
    ],
    'co' =>[
    'en' => 'contusion',
    'hi' => 'नील',
        'ma' =>'गोंधळ'
    ],
    'inf' =>[
    'en' => 'Inflammation',
    'hi' => 'सूजन',
        'ma' =>'  सूज'
    ],
    'spm' =>[
    'en' => 'sudden pain in the muscles',
    'hi' => 'मांसपेशियों में अचानक दर्द',
        'ma' =>' स्नायूंमध्ये अचानक वेदना '
    ],
    'clf' =>[
    'en' => 'Cramps can last from a few seconds up to 10 minutes ',
    'hi' => ' ऐंठन कुछ सेकंड से लेकर 10 मिनट तक रह सकती है',
        'ma' =>'  क्रॅम्प काही सेकंदांपासून 10 मिनिटांपर्यंत टिकू शकतात '
    ],
    'pdl' =>[
    'en' => 'pain and tenderness in your legs',
    'hi' => 'आपके पैरों में दर्द और कोमलता',
        'ma' =>' आपल्या पायातील वेदना आणि कोमलता '
    ],
    'lco' =>[
    'en' => 'leg cramps occur in the calf muscles',
    'hi' => 'पैर की ऐंठन बछड़े की मांसपेशियों में होती है',
        'ma' =>' पाय अडकणे वासरांच्या स्नायूंमध्ये होतात '
    ],
    'sep' =>[
    'en' => 'Sudden and severe pain during exercise',
    'hi' => 'व्यायाम के दौरान अचानक और तेज दर्द',
        'ma' =>' व्यायाम दरम्यान अचानक आणि तीव्र वेदना '
    ],
    'pbt' =>[
    'en' => 'Pain in the back of the thigh and lower buttock when walking',
    'hi' => 'चलते समय जांघ और पीठ के निचले हिस्से में दर्द',
        'ma' =>'   चालताना जांभळ्या आणि खालच्या नितंब्याच्या मागच्या वेदना '
    ],
    'te' =>[
    'en' => 'Tenderness',
    'hi' => 'कोमलता',
        'ma' =>' कोमलता '
    ],
    'bru' =>[
    'en' => 'Bruising',
    'hi' => 'चोट',
        'ma' =>'ब्रुझिंग '
    ],
    'ti' =>[
    'en' => 'Tingling ',
    'hi' => ' झुनझुनी',
        'ma' =>' टिंगलिंग '
    ],
    'not' =>[
    'en' => 'numbness in the outer (lateral) part of your thigh',
    'hi' => 'आपकी जांघ के बाहरी (पार्श्व) भाग में सुन्नता',
        'ma' =>'आपल्या जांभळाच्या बाह्य (पार्श्वभूमी) भागामध्ये सौम्यता '
    ]
    ,
    'bps' =>[
    'en' => 'Burning pain on the surface of the outer part of your thigh',
    'hi' => 'आपकी जांघ के बाहरी हिस्से की सतह पर जलन दर्द',
        'ma' =>' आपल्या जांभळाच्या बाह्यभागाच्या पृष्ठभागावर वेदना जळणे'
    ]
    //knee
    ,
    'daj' =>[
    'en' => 'Deep, aching joint pain or stiffness',
    'hi' => 'दीप, जोड़ों का दर्द या जकड़न',
        'ma' =>' खोल, दुखणे किंवा कडकपणा दुखणे'
    ],
    'mjs' =>[
    'en' => 'Minor injury may cause significant pain',
    'hi' => ' मामूली चोट से महत्वपूर्ण दर्द हो सकता है',
        'ma' =>'किरकोळ जखम लक्षणीय वेदना होऊ शकतात '
    ],
    'np' =>[
    'en' => 'Night pain',
    'hi' => 'रात का दर्द',
        'ma' =>' रात्र वेदना '
    ],
    'lrm' =>[
    'en' => 'Limited range of motion and catching of the knee',
    'hi' => 'घुटने की गति और पकड़ने की सीमित सीमा',
        'ma' =>'   घुटमळण्याच्या हालचालीची मर्यादा आणि गुडघा'
    ],
    'sd' =>[
    'en' => 'Swelling or deformity in the joint',
    'hi' => 'संयुक्त में सूजन या विकृति',
        'ma' =>' संयुक्त मध्ये सूज किंवा विकृती '
    ],
    'sjl' =>[
    'en' => 'Swelling of the joint lining',
    'hi' => 'संयुक्त अस्तर की सूजन',
        'ma' =>' संयुक्त अस्तर सूज '
    ],
    'std' =>[
    'en' => 'Soft tissue destruction',
    'hi' => ' मुलायम ऊतक विनाश',
        'ma' =>'  सौम्य ऊतक नाश '
    ],
    'bdt' =>[
    'en' => 'Bone destruction',
    'hi' => 'अस्थि विनाश',
        'ma' =>' हाडांचा नाश '
    ],
    'lm' =>[
    'en' => 'Loss of motion in the knee',
    'hi' => 'घुटने में गति का नुकसान',
        'ma' =>'  गुडघा गती गमावणे '
    ],
    'fea' =>[
    'en' => 'Fever, energy loss, and anemia',
    'hi' => 'बुखार, ऊर्जा की कमी, और एनीमिया',
        'ma' =>' ताप, उर्जा नुकसान आणि अशक्तपणा '
    ],// welcome

        'nav1' =>[
    'en' => 'Home',
    'hi' => 'घर',
    'ma' =>'घर '
],
    'nav2' =>[
    'en' => 'Symptoms Registration',
    'hi' => 'लक्षण पंजीकरण',
    'ma' =>'लक्षणे नोंदणी '
],
    'nav3' =>[
    'en' => 'Logout',
    'hi' => 'बाहर',
    'ma' =>'बाहेर '
],
    'nav4' =>[
    'en' => 'Patient Registration',
    'hi' => 'रोगी का पंजीकरण',
    'ma' =>'रुग्ण नोंदणी'
],
    'nav5' =>[
    'en' => 'Welcome',
    'hi' => 'स्वागत हे',
    'ma' =>'स्वागत् आहे '
],
    'nav6' =>[
    'en' => 'Please Proceed With The Patients Registration',
    'hi' => 'कृपया मरीजों के पंजीकरण के साथ आगे बढ़ें',
    'ma' =>'कृपया रुग्णांच्या नोंदणीसह पुढे जा'
],
    'nav7' =>[
    'en' => 'Patients Registration Link',
    'hi' => 'मरीजों का पंजीकरण लिंक',
    'ma' =>'रुग्णांची नोंदणी लिंक'
],
    'nav8' =>[
    'en' => 'Register',
    'hi' => 'पंजी',
    'ma' =>'नोंदणी करा '
],
    'nav31' =>[
    'en' => 'Patients Symptoms Registration ',
    'hi' => 'मरीजों के लक्षण पंजीकरण ',
    'ma' =>'बरुग्ण लक्षणे नोंदणी'
], //sexual organs
    //male
    'dfp' =>[
    'en' => 'Discharge from the penis',
    'hi' => 'लिंग से डिस्चार्ज होना',
    'ma' =>' पुरुषाचे जननेंद्रिय पासून निर्वहन '
],
    'pu' =>[
    'en' => 'Painful urination',
    'hi' => 'मूत्र त्याग करने में दर्द',
    'ma' =>' पेशी दरम्यान वेदना '
],
    'ip' =>[
    'en' => 'Itching or irritation inside the penis',
    'ma' =>' लिंग के अंदर खुजली या जलन ',
    'hi' => 'पुरुषाचे जननेंद्रिय आत जळजळ किंवा खजा'
],
    'du' =>[
    'en' => 'Dark urine',
    'hi' => 'गहरा पेशाब',
    'ma' =>' गडद मूत्र '
],
    'pi' =>[
    'en' => 'Pain during sexual intercourse',
    'hi' => 'संभोग के दौरान दर्द',
    'ma' =>' लैंगिक संभोग दरम्यान वेदना '
],
    'big' =>[
    'en' => 'blisters in the genital area',
    'hi' => 'जननांग क्षेत्र में फफोले',
    'ma' =>' जननांग क्षेत्रात फोड '
],
    'pej' =>[
    'en' => 'Painful ejaculation',
    'hi' => 'दर्दनाक स्खलन',
    'ma' =>' वेदनादायक उद्गार '
],
    'lap' =>[
    'en' => 'Lower abdominal pain',
    'hi' => 'पेट के निचले हिस्से में दर्द',
    'ma' =>' ओटीपोटात वेदना '
],
    //female
    'vd' =>[
    'en' => 'Vaginal discharge',
    'hi' => 'योनि स्राव',
    'ma' =>' योनि डिस्चार्ज '
],
    'vi' =>[
    'en' => 'Vaginal itching',
    'hi' => 'योनि में खुजली',
    'ma' =>' योनि खजा'
],
    'hmb' =>[
    'en' => 'Heavy menstrual bleeding',
    'hi' => 'भारी मासिक धर्म रक्तस्राव',
    'ma' =>' तीव्र मासिक धर्म रक्तस्त्राव '
],
    'svo' =>[
    'en' => 'Strong vaginal odor',
    'hi' => 'योनि गंध',
    'ma' => 'योनि गंध'
], 'ss1' => [
        'en' => 'Nikshay Poshan Yojana',
        'hi' => ' निक्षय पोशन योजना ',
        'ma' =>'िक्षय वपोषण योजना '
    ],
    'ss2' => [
        'en' => 'Disease',
        'hi' => 'रोग ',
        'ma' =>'आजार '
    ],
    'ss3' => [
        'en' => 'Government Schemes',
        'hi' => ' सरकारी योजनाएं ',
        'ma' =>' सरकारी योजना '
    ],
    'ss4' => [
        'en' => 'Links',
        'hi' => ' लिंक ',
        'ma' =>' वदुवे '
    ],
    'ss5' => [
        'en' => 'TB',
        'hi' => ' टीबी ',
        'ma' =>'टीबी '
    ],
    'ss6' => [
        'en' => 'HIV',
        'hi' => 'एचआईवी ',
        'ma' =>'एचआयव्ही  '
    ],
    'ss7' => [
        'en' => 'National AIDS Control Program',
        'hi' => ' राष्ट्रीय एड्स नियंत्रण कार्यक्रम',
        'ma' =>' राष्ट्रीय एड्स नियंत्रण कार्यक्रम '
    ],
    'ss7' => [
        'en' => 'CANCER',
        'hi' => ' कैंसर ',
        'ma' =>'कर्करोग'
    ],
    'ss8' => [
        'en' => 'Cancer Helpline',
        'hi' => ' कैंसर हेल्पलाइन ',
        'ma' =>' कर्करोग हेल्पलाइन '
    ],
    'ss9' => [
        'en' => 'HEPATITIS',
        'hi' => ' हेपेटाइटिस ',
        'ma' =>' हेपेटीटिस '
    ],
    'ss10' => [
        'en' => 'National Viral Hepatitis',
        'hi' => ' राष्ट्रीय वायरल हेपेटाइटिस ',
        'ma' =>' राष्ट्रीय व्हायरल हेपेटायटीस '
    ],
    'ss11' => [
        'en' => 'TOBACCO',
        'hi' => ' तम्बाकू ',
        'ma' =>' तंबाखू '
    ],
    'ss12' => [
        'en' => 'National Tobacco Control Program',
        'hi' => ' राष्ट्रीय तंबाकू नियंत्रण कार्यक्रम ',
        'ma' =>' नॅशनल तंबाखू नियंत्रण कार्यक्रम'
    ],
    'ss13' => [
        'en' => 'BLINDNESS',
        'hi' => ' अंधापन ',
        'ma' =>' अंधळेना '
    ],
    'ss14' => [
        'en' => 'National Programme for Control of Blindness',
        'hi' => ' यअंधता नियंत्रण के लिए राष्ट्रीय कार्यक्रम ',
        'ma' =>' अंधत्व नियंत्रण राष्ट्रीय कार्यक्रम '
    ],
    'ss15' => [
        'en' => 'POLIO',
        'hi' => 'पोलियो ',
        'ma' =>' पोलिओ '
    ],
    'ss16' => [
        'en' => 'Pulse Polio Program',
        'hi' => ' पल्स पोलिओ प्रोग्राम',
        'ma' =>'पल्स पोलिओ कार्यकम '
    ],
    'ss17' => [
        'en' => 'DIALYSIS',
        'hi' => ' अपोहन ',
        'ma' =>' रक्तशुद्धीकरण '
    ],
    'ss18' => [
        'en' => 'Pradhan Mantri National Dialysis Program',
        'hi' => ' य्रधानमंत्री राष्ट्रीय डायलिसिस कार्यक्रम ',
        'ma' =>' प्रधान मंत्री राष्ट्रीय डायलिसिस कार्यक्रम '
    ],
    'ss19' => [
        'en' => 'ORAL',
        'hi' => ' मौखिक ',
        'ma' =>' तोंडाचा '
    ],
    'ss20' => [
        'en' => 'National Oral Health Program',
        'hi' => 'राष्ट्रीय मौखिक स्वास्थ्य कार्यक्रम ',
        'ma' =>'राष्ट्रीय तोंडी आरोग्य कार्यक्रम'
    ],
    'ss21' => [
        'en' => 'NUTRITION',
        'hi' => ' पोषण ',
        'ma' =>' पोषण '
    ],
    'ss22' => [
        'en' => 'National Nutrition Mission',
        'hi' => ' राष्ट्रीय पोषण मिशन ',
        'ma' =>' वराष्ट्रीय पोषण मिशन '
    ],
    'ss23' => [
        'en' => 'CARDIOVASCULAR DISEASES',
        'hi' => ' हृदय रोग',
        'ma' =>' हृदय रोग '
    ],
    'ss24' => [
        'en' => 'Current Epidemiology and Future Directions',
        'hi' => 'वर्तमान महामारी विज्ञान और भविष्य की दिशाएं ',
        'ma' =>' करंट एपिडेमियोलॉजी आणि फ्युचर दिशानिर्देश '
    ],
    'ss25' => [
        'en' => 'DIABETIC',
        'hi' => ' मधुमेह ',
        'ma' =>' डायबेटिक '
    ],
    'ss26' => [
        'en' => 'Diabetes mellitus',
        'hi' => ' बहुमूत्ररोग',
        'ma' =>' मधुमेह '
    ],
    'ss27' => [
        'en' => 'ALZHEIMER\'S DISEASE',
        'hi' => ' अल्जाइमर रोग',
        'ma' =>' अल्झाइमरचा रोग '
    ],
    'ss28' => [
        'en' => 'Health experts call for Alzheimer\'s',
        'hi' => ' स्वास्थ्य विशेषज्ञ अल्जाइमर के लिए कॉल करते हैं ',
        'ma' =>' आरोग्य तज्ञ अल्झाइमरसाठी कॉल करतात '
    ],
    'ss29' => [
        'en' => 'ARTHRITIS',
        'hi' => 'गठिया ',
        'ma' =>' संधिवात '
    ],
    'ss30' => [
        'en' => 'ARTHRITIS FOUNDATION OF INDIA',
        'hi' => ' भारत का गठिया फाउंडेशन ',
        'ma' =>' संधिवात फाउंडेशन ऑफ इंडिया '
    ],
    'ss31' => [
        'en' => 'Lymphatic Filariasis',
        'hi' => ' लसीका फाइलेरिया ',
        'ma' =>' लिम्फॅटिक फिलीरियासिस'
    ],
    'ss32' => [
        'en' => 'National Filaria Control Programme',
        'hi' => ' राष्ट्रीय फाइलेरिया नियंत्रण कार्यक्रम',
        'ma' =>' राष्ट्रीय फिलेरिया नियंत्रण कार्यक्रम '
    ],
    'ss33' => [
        'en' => 'NRHM',
        'hi' => 'एनआरएचएम ',
        'ma' =>' एनआरएचएम '
    ],
    'ss34' => [
        'en' => 'National Rural Health Mission (NRHM)',
        'hi' => 'राष्ट्रीय ग्रामीण स्वास्थ्य मिशन (NRHM) ',
        'ma' =>' राष्ट्रीय ग्रामीण आरोग्य मिशन (एनआरएचएम) '
    ],
    'ss35' => [
        'en' => 'ASTHMA',
        'hi' => 'दमा',
        'ma' =>' दमा '
    ],
    'ss36' => [
        'en' => 'Global Initiative for Asthma',
        'hi' => 'अस्थमा के लिए वैश्विक पहल ',
        'ma' =>' दम्याचे जागतिक पुढाकार '
    ],
    'ss37' => [
        'en' => 'Transplant Program',
        'hi' => 'प्रत्यारोपण कार्यक्रम ',
        'ma' =>' प्रत्यारोपण कार्यक्रम '
    ],
    'ss38' => [
        'en' => 'National Organ Transplant Programme',
        'hi' => 'राष्ट्रीय अंग प्रत्यारोपण कार्यक्रम ',
        'ma' =>' राष्ट्रीय अवयव प्रत्यारोपण कार्यक्रम '
    ],
    'ss39' => [
        'en' => 'FLUOROSIS',
        'hi' => 'फ्लोरोसिस ',
        'ma' =>' फ्लोरोसिस '
    ],
    'ss40' => [
        'en' => 'NATIONAL PROGRAMME FOR PREVENTION AND CONTROL OF FLUOROSIS',
        'hi' => 'रोकथाम के लिए राष्ट्रीय कार्यक्रम और फ्लोरोसिस का नियंत्रण ',
        'ma' =>' प्रक्षेपण आणि फ्लोरोसिसचे नियंत्रण यासाठी राष्ट्रीय कार्यक्रम '
    ],
    'ss41' => [
        'en' => 'Mental Care',
        'hi' => 'मानसिक देखभाल ',
        'ma' =>' मानसिक काळजी'
    ],
    'ss42' => [
        'en' => 'National Mental Health Programme',
        'hi' => 'राष्ट्रीय मानसिक स्वास्थ्य कार्यक्रम ',
        'ma' =>' राष्ट्रीय मानसिक आरोग्य कार्यक्रम '
    ],
    'ss43' => [
        'en' => 'Malaria Control',
        'hi' => 'मलेरिया नियंत्रण ',
        'ma' =>' मलेरिया नियंत्रण '
    ],
    'ss44' => [
        'en' => 'National Vector Borne Disease Control Programme',
        'hi' => 'राष्ट्रीय वेक्टर जनित रोग नियंत्रण कार्यक्रम ',
        'ma' =>' राष्ट्रीय वेक्टर बोर्न डिसीज कंट्रोल प्रोग्राम'

    ],
    'ss45' => [
        'en' => 'Burning Injuries',
        'hi' => 'जलने की चोट ',
        'ma' =>' भाजने '
    ],
    'ss60' => [
        'en' => 'National Programme on Prevention and Management of Burn Injuries',
        'hi' => 'रोकथाम और जला चोटों के प्रबंधन पर राष्ट्रीय कार्यक्रम ',
        'ma' =>' बर्न इजाजत प्रतिबंध आणि व्यवस्थापन राष्ट्रीय कार्यक्रम '
    ],
    'ss46' => [
        'en' => 'Palliative',
        'hi' => 'पॅलियाटिव्ह ',
        'ma' =>' पॅलियाटिव्ह '
    ],
    'ss47' => [
        'en' => 'National Program for Palliative Care',
        'hi' => 'प्रशामक देखभाल के लिए राष्ट्रीय कार्यक्रम ',
        'ma' =>' पॅलेटीव्ह केअरसाठी राष्ट्रीय कार्यक्रम'
    ],
    'ss48' => [
        'en' => 'Leprosy',
        'hi' => 'कुष्ठ रोग ',
        'ma' =>' कुष्ठरोग'
    ],
    'ss49' => [
        'en' => 'National Leprosy Eradication Programme',
        'hi' => 'राष्ट्रीय कुष्ठ उन्मूलन कार्यक्रम ',
        'ma' =>' राष्ट्रीय कुष्ठरोग निर्मूलन कार्यक्रम '
    ],
    'ss50' => [
        'en' => 'Iodine Deficiency',
        'hi' => 'आयोडीन की कमी ',
        'ma' =>' आयोडीनची कमतरता '
    ],
    'ss51' => [
        'en' => 'National Iodine Deficiency Disorders Control Programme',
        'hi' => 'राष्ट्रीय आयोडीन की कमी विकार नियंत्रण कार्यक्रम ',
        'ma' =>' नॅशनल आयोडिन डेफिशियसी डिसऑर्डर कंट्रोल प्रोग्राम '
    ],
    'ss52' => [
        'en' => 'HBNC',
        'hi' => 'एचबीएनसी ',
        'ma' =>' एचबीएनसी '
    ],
    'ss53' => [
        'en' => 'National Health Mission',
        'hi' => 'राष्ट्रीय आरोग्य मिशन ',
        'ma' =>' राष्ट्रीय आरोग्य मिशन '
    ],
    'ss54' => [
        'en' => 'JSSK',
        'hi' => 'जेएसएसके ',
        'ma' =>' जेएसएसके '
    ],

    'ss55' => [
        'en' => 'IMNCI',
        'hi' => 'एनआरएचएम ',
        'ma' =>' एनआरएचएम '
    ],
    'ss56' => [
        'en' => 'Micro nutrients',
        'hi' => 'सूक्ष्म पोषक तत्व ',
        'ma' =>' सूक्ष्म पोषक '
    ],
    'ss57' => [
        'en' => 'Supplementation with Micro nutrients',
        'hi' => 'सूक्ष्म पोषक तत्वों के साथ पूरक ',
        'ma' =>' सूक्ष्म पोषक तत्त्वे सह पूरक '
    ],
    'ss58' => [
        'en' => 'Child Development',
        'hi' => 'बाल विकास ',
        'ma' =>'बाल विकास '
    ],
    'ss59' => [
        'en' => 'Integrated Child Development Services',
        'hi' => 'समेकित बाल विकास सेवाएं ',
        'ma' =>'एकीकृत बाल विकास सेवा '
    ],
    'ss61' => [
        'en' => 'Government Healthcare Schemes',
        'hi' => 'सरकारी स्वास्थ्य सेवा योजनाएँ',
        'ma' =>'सरकारी आरोग्य सेवा योजना'
    ]

];
$language_options = [
    "en" => "English",
    "hi" => "Hindi",
    "ma" => "Marathi"
];

function currentLanguage(){
    if(isset($_SESSION['lang']))
        return $_SESSION['lang'];
    return "en";
}

function getMessage($key){
    global $messages;

    $lang = currentLanguage();

    return $messages[$key][$lang];
}
