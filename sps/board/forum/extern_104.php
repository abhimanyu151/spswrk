<?xml version="1.0" encoding="utf-8"?>
<feed xmlns="http://www.w3.org/2005/Atom">
	<title type="html"><![CDATA[spokensanskrit.de forum / Request database for research.]]></title>
	<link rel="self" href="http://spokensanskrit.de/board/forum/extern.php?action=feed&amp;tid=516&amp;type=atom"/>
	<link href="http://spokensanskrit.de/board/forum/viewtopic.php?id=516"/>
	<updated>2011-08-23T20:53:55Z</updated>
	<generator>FluxBB</generator>
	<id>http://spokensanskrit.de/board/forum/viewtopic.php?id=516</id>
	<entry>
		<title type="html"><![CDATA[Re: Request database for research.]]></title>
		<link rel="alternate" href="http://spokensanskrit.de/board/forum/viewtopic.php?pid=1042#p1042"/>
		<content type="html"><![CDATA[<p>नमस्कारः ।<br />भवतोः संस्कृतसंवाद उत्तमः ।<br />भवद्भ्यां धन्यवादः ॥</p><p>अलेक्सण्डरः</p>]]></content>
		<author>
			<name><![CDATA[Alex]]></name>
			<uri>http://spokensanskrit.de/board/forum/profile.php?id=293</uri>
		</author>
		<updated>2011-08-23T20:53:55Z</updated>
		<id>http://spokensanskrit.de/board/forum/viewtopic.php?pid=1042#p1042</id>
	</entry>
	<entry>
		<title type="html"><![CDATA[Re: Request database for research.]]></title>
		<link rel="alternate" href="http://spokensanskrit.de/board/forum/viewtopic.php?pid=1017#p1017"/>
		<content type="html"><![CDATA[<p>namastE ajAta,</p><p>भवतः सूचनाभ्यः धन्यः अस्मि। Translation is a hard problem, but we must start somewhere - a bad translator is better than nothing. For now, I decided to spend some effort building a very simple vocabulary trainer. I now have a prototype ready : please visit <a href="http://vishvas-vasuki.appspot.com/work/sanskrit/vocabularyBuilder/readme.htm">http://vishvas-vasuki.appspot.com/work/ … readme.htm</a> for details and screenshots; and its page on userscripts.org is <a href="http://userscripts.org/scripts/show/108522">http://userscripts.org/scripts/show/108522</a> .</p><p>It is an example of a user script/ greasemonkey script: people write such scripts to personalize the way they consume websites [eg: see the great repository at <a href="http://userscripts.org">http://userscripts.org</a>/ ]. It has bugs, and it currently only works with google Chrome as far as I know. As you may have noticed, it relies on your dictionary [which has the nice feature of showing words used in everyday language at the top]. There are many ways to make it better, but first I seek help from your end.</p><p>Can you provide some sort of an internet API (programming interfaces) which accepts a batched list of words, and returns the best single translations for each it can find preferably in JSON format (see wikipedia). It is very common for websites these days to provide such API: Eg: google, yahoo, twitter etc.. It is simple to implement, and is part of an extremely common standard framework called AJAX.</p><p>Let me list the benefits from your perspective:<br />1. It will increase the number of times your dictionary is used, give people more motivation to edit and expand your dictionary.</p><p>2. Batch lookup will enable many other tools such as this which will benefit saMskR^ita-priyas, by giving them an option other than making HTTP GET requests (which is cumbersome and a big demotivating factor).</p><p>3. Provision of such an API will reduce unnecessary/ excessive traffic from such tools.</p><p>4. Some things can only be done at a remote location, rather than in a browser script. Eg: phrase chunking, stemming words before look-up, figuring out their right conjugations etc.., which one could implement in the future. </p><p>Please note you can accomplish all this without having to make the database public. सुसंस्कृताः इतोऽपि अधिकं भवत्-कृतज्ञाः भविष्यन्ति। जयतु संस्कृतं!</p>]]></content>
		<author>
			<name><![CDATA[vishvas.vasuki]]></name>
			<uri>http://spokensanskrit.de/board/forum/profile.php?id=282</uri>
		</author>
		<updated>2011-07-28T23:24:47Z</updated>
		<id>http://spokensanskrit.de/board/forum/viewtopic.php?pid=1017#p1017</id>
	</entry>
	<entry>
		<title type="html"><![CDATA[Re: Request database for research.]]></title>
		<link rel="alternate" href="http://spokensanskrit.de/board/forum/viewtopic.php?pid=956#p956"/>
		<content type="html"><![CDATA[<p>(My apologies for switching to English. This matter is too technical for me to be precise enough in Sanskrit.)</p><p>1) This is to clarify what I said earlier: SpokenSanskrit.de dictionary and Monier-Williams in essence do the same thing, i.e., provide one-to-many mapping from Sanskrit to English and vice-versa.&#160; The distinguishing feature of our dictionary facilitates a human to quickly go back and forth between various contexts a word is applicable in. The front-end of SpokenSanskrit.de dictionary is targeted for humans to browse &amp; to avail this feature. The backend is very close to what MW has but for the sentences/phrases. So if you want to use what is in the backend you should be able to easily adapt what is already available in MW for your purposes.</p><p>2) When translating, dictionary can only help in providing many choices at word level and no more. The state-of-art today, as I understand from the literature, is building a statistical model (i.e., a hybrid HMM) out of a broad spectrum corpus of source and target text. We don&#039;t have such a Sanskrit corpus yet. One of the successful machine translation project was translating weather reports. Something similar would be better to attempt as a translation project. Since the weather report domain is well defined, the corpus would be a small and finite set so a browser plug-in would be quite doable in a few months of full-time work. For instance this browser plugin could translate and display weather report in Sanskrit from Yahoo weather widget in the browser window. That would be cool as this is something thousands of folks will use every day and hence will go beyond being just a academic exercise. If that is successful, you can extend the work to larger domains such as stock market reports, and so on.</p><p>My two cents.</p>]]></content>
		<author>
			<name><![CDATA[theunborn]]></name>
			<uri>http://spokensanskrit.de/board/forum/profile.php?id=228</uri>
		</author>
		<updated>2011-06-27T02:14:28Z</updated>
		<id>http://spokensanskrit.de/board/forum/viewtopic.php?pid=956#p956</id>
	</entry>
	<entry>
		<title type="html"><![CDATA[Re: Request database for research.]]></title>
		<link rel="alternate" href="http://spokensanskrit.de/board/forum/viewtopic.php?pid=955#p955"/>
		<content type="html"><![CDATA[<p>typos क्षम्यतां॥</p><p>प्रय्तिष्यामि -&gt; प्रयतिष्यामि। पार्ध्वे -&gt; पार्श्वे।&#160; कौशलं programming -&gt; programming कौशलः।</p>]]></content>
		<author>
			<name><![CDATA[vishvas.vasuki]]></name>
			<uri>http://spokensanskrit.de/board/forum/profile.php?id=282</uri>
		</author>
		<updated>2011-06-26T03:41:54Z</updated>
		<id>http://spokensanskrit.de/board/forum/viewtopic.php?pid=955#p955</id>
	</entry>
	<entry>
		<title type="html"><![CDATA[Re: Request database for research.]]></title>
		<link rel="alternate" href="http://spokensanskrit.de/board/forum/viewtopic.php?pid=954#p954"/>
		<content type="html"><![CDATA[<p>नमस्ते श्री-अजात!</p><p>Monier Williams शब्दकोशं उपयोजयितुं प्रय्तिष्यामि - धन्यवादाः। परन्तु आङ्ग्ल-संस्कृत-शब्दकोशः अपि digitized अभविष्यत् चेत् बहु प्रयोजकः भवेत्। अन्यत् च मयि कानिचन एतत्-संबन्धिनि उपायानि सन्ति भवत्-कार्यं वर्धयितुं - उदाहरणाय आङ्ग्ल-अन्तर्जालपुटेषु नामपदानां अनुवादं कृत्वा पार्ध्वे दर्शयितुं browser plugin (एतत् संस्कृत-अध्ययद्भ्यः उपयोग्यः स्यात्, wikipedia इत्यादिषु लेखन-अनुवादाय अपि)। ईदृशेभ्यः कार्येभ्यः मम समयं च कौशलं programming किंचित् समर्पयितुं शक्नुयां - परन्तु भवतः आङ्ग्ल-संस्कृत-शब्दकोशस्य च आवश्यकता भविष्यति - किं अभिप्रायः भवतः?</p><p>--विश्वासः</p>]]></content>
		<author>
			<name><![CDATA[vishvas.vasuki]]></name>
			<uri>http://spokensanskrit.de/board/forum/profile.php?id=282</uri>
		</author>
		<updated>2011-06-26T03:38:24Z</updated>
		<id>http://spokensanskrit.de/board/forum/viewtopic.php?pid=954#p954</id>
	</entry>
	<entry>
		<title type="html"><![CDATA[Re: Request database for research.]]></title>
		<link rel="alternate" href="http://spokensanskrit.de/board/forum/viewtopic.php?pid=953#p953"/>
		<content type="html"><![CDATA[<p>नमस्ते महोदय,</p><p>भवतः सन्देशाय बहवह धन्यवादाः ।&#160; वयम् एतम् सब्दकोषं सर्वदा परिवर्तयामः | काश्चन जनाः प्रतिदिनं नूतनाः पदाः नूतनानि वाक्यानि च सब्दकोषे योजयन्ति अपि। अतः इदानीं सब्दकोषस्य वितरणं न शक्यते । एतत् विषयं वयं FAQ-पूटे अपि दद्मः अस्ति ।<br />भवान् केवलं संस्कृतपदाः तेषाम् अर्थाः च इच्छति चेत् U of Colgne (http://www.sanskrit-lexicon.uni-koeln.de/)&#160; जालस्थानतः तेषां off-line version स्वीकर्तुं शक्यते । कृपया तेषां जालस्थानं पश्यतु</p><p>धन्यवादः</p><p>(Thanks a lot for your email. We are constantly updating this dictionary. Also some folks add new sentences and words to the dictionary everyday. So distribution of this dictionary is not possible at present. We have indicated this in the FAQ as well.<br />If you are only interested in Sankskrit words and their meanings, you can pick up Monier-Williams&#039; dictionary at Univ. Cologne [offline-version]. Please do see their web site for more details.</p><p>Thanks.)</p>]]></content>
		<author>
			<name><![CDATA[theunborn]]></name>
			<uri>http://spokensanskrit.de/board/forum/profile.php?id=228</uri>
		</author>
		<updated>2011-06-26T02:50:59Z</updated>
		<id>http://spokensanskrit.de/board/forum/viewtopic.php?pid=953#p953</id>
	</entry>
	<entry>
		<title type="html"><![CDATA[Request database for research.]]></title>
		<link rel="alternate" href="http://spokensanskrit.de/board/forum/viewtopic.php?pid=952#p952"/>
		<content type="html"><![CDATA[<p>नमस्ते ।</p><p>भवतः शब्दकोशाय संस्कृत-प्रियाणां च पुनर्जीवित-संस्कृत-काङ्क्षतां हार्दिक-धन्यवादाः। (Sanskrit lovers and those who would see sanskrit rekindled thank you from the bottom of their hearts.) I want to do some Sanskrit computational linguistics research (and perhaps contribute some useful tools to this website in the process). Can I please get access to your database of words and meanings?</p><p>--<br />धन्यः<br />विश्वासः</p>]]></content>
		<author>
			<name><![CDATA[vishvas.vasuki]]></name>
			<uri>http://spokensanskrit.de/board/forum/profile.php?id=282</uri>
		</author>
		<updated>2011-06-25T22:17:08Z</updated>
		<id>http://spokensanskrit.de/board/forum/viewtopic.php?pid=952#p952</id>
	</entry>
</feed>
