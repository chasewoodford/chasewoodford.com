<?//begin code admpanel
$id = 137; 
$razdelid = "32"; 
$razdel_id = "32"; 
$razdel_picture = ""; 
$razdel_link = "/perform/academic/index.php"; 
$id_author = 0; 
$title = "Questions for Authorities"; 
$description = "How to evaluate whether brainwave biofeedback is an appropriate addition to schools."; 
$partsfragmented = 1; 
$date_posted = "23-03-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/perform/academic/questions.php"; 
$doc_identificate_name = "questions"; 
$content_source = ""; 
$content_source_url = ""; 
$url_archive_file = ""; 
//end code admpanel
?><?$site_root="/home4/jobhuntnow/public_html/alertfocus.com/";
include ($site_root."/support/database.php");
$db = connect_db();
$document_template_link = get_document_template_link($db,$template);
$tpl_file = get_tplfiledocument_link($db,$template);
$doc_content =<<<eod
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: center" align=center><B style="mso-bidi-font-weight: normal">Questions for School Authorities<?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: right" align=right>by Gary Ames<o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt; TEXT-ALIGN: right" align=right>&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Neurofeedback is mental focus and attention training using computer assisted feedback.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>It involves a new paradigm, I want to ask about your core principles and your record of support for new initiatives.&nbsp; What is your approach when considering a new educational program?</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Please think about educational initiatives or learning programs you have already supported and opposed.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Can you list some on both sides? </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What evidence, issue, or reason placed it on one side or the other? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">1 a. Supported adoption of program. <SPAN style="mso-spacerun: yes">&nbsp;</SPAN>- Reason</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">2 a. Supported adoption of program.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>- Reason</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">1 b. Opposed adoption of program.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>- Reason&nbsp; </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">2 b. Opposed adoption of program.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>- Reason&nbsp; </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Have you established a minimal proof requirement for new initiatives? <SPAN style="mso-spacerun: yes">&nbsp;</SPAN>What evidence quality, authority, diversity of scientific research, prestigious recommendations, etc. are proper for the District’s approval process?&nbsp; How much is enough for you? </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What factors into the return on educational investment and makes for a “go decision”?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>What is your test of support or your cost / benefit effectiveness formula?&nbsp; </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">If a safe and effective learning initiative with extraordinary promise for dramatic benefits for all students (especially those most in need and the most expensive), and that:<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">fits into the District’s Mission, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">folds neatly into the Strategic Plan, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">furthers the Vision (in a foundational way), <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">is self-funding within a short time, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">and meets many of the Goals that the District has laid out --<o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">what else do you need? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What does “data driven decision making” mean to you? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do you believe in delegating authority and control down to lower local levels for <SPAN style="mso-spacerun: yes">&nbsp;</SPAN>implementation, while retaining responsibility and oversight? </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Everyone agrees that neurofeedback is safe.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Or can easily be even safer. </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What history, assurances or comparisons do you require?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What would it take for you to believe it <I style="mso-bidi-font-style: normal">enough </I>to remove the issue as a barrier?&nbsp; </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">TO SUPPORTERS <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do you believe we will need a larger room to hand out end-of-year awards after adopting a broad neurofeedback initiative? <SPAN style="mso-spacerun: yes">&nbsp;</SPAN>What award categories will be impacted? </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">True or False:<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">When a teacher does neurofeedback training, it can be called “education”.<BR>Is that a case you feel comfortable/passionate about making? </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">How would you challenge the critics of neurofeedback who say neurofeedback is: <SPAN style="mso-spacerun: yes">&nbsp;</SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“Not education.”&nbsp; &nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“Only experimental.” </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“We are not licensed for that.”</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“That’s a medical procedure.”&nbsp; or&nbsp; “We don’t do therapy.” </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“Everyone would have to sign a waiver.”</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“Not safe enough ... insurance and litigation problems.” </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“No darn good.”</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><SPAN style="mso-spacerun: yes">&nbsp; </SPAN>“Balderdash!” </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do you feel the District needs any special parental permission to fulfill it’s mission using neurofeedback? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What delays and barriers are expected and what is too much? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do you support a broad and dispersed pilot program introducing multiple kinds neurofeedback applications in several schools, (all at about the same time), to get a diverse and useful base of experience for the second stage?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>If not, why not.&nbsp; If not, when? &nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do you feel that the brightest students and regular students should be an important group for initial introductions to ensure that neurofeedback does not get a “special” reputation? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">WHO IS QUALIFIED TO COMMENT?<o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Paradigm shifts are uncomfortable.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Experts in education, science, medicine, Special Ed., ADHD and learning disorders have their history, reputation and practices at stake when they admit that: something very different from what they do, is rather good.&nbsp; Can you list the kinds of financial conflicts of interest that would disqualify a nay-sayer or must be disclosed as part of their input? </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Who should be allowed, and not allowed to register an unbiased concern? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What qualifications must someone possess and not possess to advice the District? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">How much evidence, of what kind, from what source, with what consistency, would it take for you to support neurofeedback?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><STRONG>CURRENT PRACTICES<o:p></o:p></STRONG></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><I style="mso-bidi-font-style: normal"></I>&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt"><I style="mso-bidi-font-style: normal">Post hoc, ergo proctor hoc.</I>&nbsp; <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">This is a Latin phrase meaning “after the fact, therefore because of the fact.”<o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">This is the rationale always used in an educational outcome study.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">“We did this, and look how well it worked!”<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">In formal logic, ‘<I style="mso-bidi-font-style: normal">Post hoc, ergo proctor hoc’ </I>&nbsp;is the name of a logical fallacy. </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">The explanation is that everything has multiple causes.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>To identify just one “reason for” a change within a complicated system is not supportable logically.&nbsp; </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What evidence besides outcome studies does the District use as proof for effectiveness when adopting or deciding to continue programs?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">The following programs were adopted by and are currently supported by the District for Special Needs.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>By what process, and with what criteria of proof, were the following educational programs deemed acceptable to the District? </P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Orton Gillingham, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">The Wilson Reading System, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Fast Forward, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Lindamood-Bell, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Resource Room, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Instructional Support Lab, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">SRA<o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">REACH, <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">N.O.W. <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">P.R.I.D.E. <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Specialized Learning Support.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Adaptive Instructional Technologies. <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do any of the current special education programs regularly demonstrate reduction of medication?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do any report 10 to 20 point IQ jumps as commonplace? <SPAN style="mso-spacerun: yes">&nbsp;</SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">What evidence of effectiveness justifies the continuation of a current program?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Which ones are due for withdrawal of support, to fund more promising initiatives?<o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">Do you have, or do you favor, a standard policy for IEP requests under 504, asking for neurofeedback? <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">By what criteria will you decide your support?<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>What trusted experts would you consult and what qualifications must an advisor have to be an expert?&nbsp; How specifically knowledgeable on neurofeedback itself must a resource be, to still be credible and heeded?&nbsp; How na&#239;ve in the actual practice can an ‘expert/advisor’ be?&nbsp;&nbsp; <o:p></o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 0pt">&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>