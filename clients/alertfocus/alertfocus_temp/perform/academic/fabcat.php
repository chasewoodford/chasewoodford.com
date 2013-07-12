<?//begin code admpanel
$id = 135; 
$razdelid = "32"; 
$razdel_id = "32"; 
$razdel_picture = ""; 
$razdel_link = "/perform/academic/index.php"; 
$id_author = 0; 
$title = "FABCAT"; 
$description = "Focus and Attention Building with Computer Assisted Training"; 
$partsfragmented = 1; 
$date_posted = "23-03-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/perform/academic/fabcat.php"; 
$doc_identificate_name = "fabcat"; 
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
<H3 class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT size=5>F</FONT>ocus and <FONT size=5>A</FONT>ttention <FONT size=5>B</FONT>uilding with <BR><FONT size=5>C</FONT>omputer <FONT size=5>A</FONT>ssisted <FONT size=5>T</FONT>raining (FABCAT)</H3>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt; TEXT-ALIGN: right" align=right><FONT face="Times New Roman">By Gary Ames 610-668-3223</FONT></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Courier New">Training ADHD Away</FONT></B></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><FONT face="Courier New">Focus and Attention Building with Computer Assisted Feedback (FABCAT) is a generic name for a type of education used in over&nbsp;500 school systems.&nbsp; Efficacy of attention training with students has had compelling evidence since the 1970s (see J. Lubar 1970).<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>The hard science research results are now indeed impressive with the number of studies and successful students doubling each year.&nbsp; <?xml:namespace prefix = o ns = "urn:schemas-microsoft-com:office:office" /><o:p></o:p></FONT></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><SPAN style="FONT-SIZE: 13pt; FONT-FAMILY: Rockwell; mso-bidi-font-family: 'Times New Roman'">Specific educational research within school settings dates back to 1991 at the "New Visions School" and "A Chance To Grow," in Minneapolis.&nbsp; They have gathered very nice research data over the years. <SPAN style="mso-spacerun: yes">&nbsp;</SPAN>You can also see some research results at </SPAN><A href="http://www.playattention.com/">www.PlayAttention.com</A>.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>They estimate that for Special Ed students solely with attention problems, approximately 75-80% can be mainstreamed within one year.&nbsp; Recently, controlled scientific studies (Monastra, 2001) have proven that about half of those with ADHD can completely end their use of stimulant medications.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Courier New">FABCAT works</FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">In most studies, success rates vary between 60-90% of ADHD students who complete 40 hours of training sessions.&nbsp; Students show significant results in improved alertness, focus, and attention using any standard test.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Results are readily measured with IVA, behavioral measures, classroom charts, and in reduced requirements for medication.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoPlainText style="MARGIN: 0in 0in 1pt"><FONT face="Courier New">Once attention improvements are attained, the students’ improved capacity for learning is sustained.&nbsp; Related behavior issues disolve.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>There are only occasional requests for booster sessions. </FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Staff </FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">Any Teacher, Aide, or Volunteer can be an Attention Coach.&nbsp; Training the Trainer can be self-study with videos, and takes as little as 2-4 hours.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Phone support is required by PlayAttention.&nbsp; Other suppliers have different equipment, nuances, and support arrangements. <SPAN style="mso-spacerun: yes">&nbsp;</SPAN>Certifications are offered but not required.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Schedule</FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">One FT Attention Coach meets with each student for 30-40 minute training session 2 times per week.&nbsp; At 6 sessions per day with 24 students, yields about 70 sessions per student within one school year which is about 40 hours of training per student, per year.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Range of Sessions</FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">The Attention Training generally yields very noticeable changes within a few months.&nbsp; Some Special Ed. students can be mainstreamed after one semester.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Normal and gifted students and athletes usually required fewer sessions to notice greater mental focus and the capacity to concentrate.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Look of FABCAT </FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">Each session looks like the student playing a video game.&nbsp; The student might wear a light plastic helmet that provides data to the computer about the degree of attention devoted to the current task.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>That feedback affects the display so the student can learn what works to succeed in the game by gathering fuller attention.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Feel of FABCAT </FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">The student experience is typically described as pleasant or interesting.&nbsp; Students typically feel more alert at the end of a session. <SPAN style="mso-spacerun: yes">&nbsp;</SPAN>This learning is consolidated over time, generalized, and becomes a preferred way to attend to the world at large.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Content of PlayAttention</FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">In most of the FABCAT approaches, training content is irrelevant.&nbsp; It is the capacity for focus and attention which is trained with computer assisted feedback.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>PlayAttention trains with 6 kinds of attention tasks as video game subject matter:&nbsp; Attention, Visual tracking, Discriminatory Processing (what’s important now) Attention Stamina, Time on Task, Short Term Memory (sequencing).<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>While this content has some intuitive appeal, it may not be more effective than other approaches, even on these particular tasks.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Effects of FABCAT </FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">The improved skill at focusing and attention is universally preferred by the student, teachers, administration, and parents.&nbsp; It only hurts the pharmacist because the need for Ritalin, Adderall and other attention medications often declines or is no longer needed, at all.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>There is no risk associated with FABCAT training, there are often health related or behavioral benefits, such as sleep and defiance. </FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Cost of FABCAT</FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">The cost for various kinds of equipment range between $2-5000 plus one computer each and one Attention Coach for about 24 students.&nbsp; Some equipment needs old computers, while others make full use of the latest technology.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Setting up a room with multiple Computerized Attention Trainers can handle a higher volume of students with just one Attention Coach.&nbsp; The upper limit is about 10 Training Units and 10 students at a time coming in at specific intervals.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Add more Coaches with equipment and there is no limit.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Getting started with FABCAT</FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><I style="mso-bidi-font-style: normal"><FONT face="Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Baby steps</FONT></I></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">Schools can begin with one or two training units and train one or two staff.&nbsp; After one semester the benefits can be observed and decisions to expand the program are made on firmer footing.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>For certainty of early success, Play Attention has a strong implementation track record in schools.&nbsp; At full utilization, calculate: $3000 for Play Attention, one used computer, one Attention Coach for 25-40 students per year.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Naturally, there can be a part-time commitment for trial purposes to reduce staff expense.</FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><I style="mso-bidi-font-style: normal"><FONT face="Times New Roman">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Both feet</FONT></I></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">A more ambitious beginning is to purchase an array of equipment from several vendors.&nbsp; Each approach has it’s own merits.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Here you provide training as appropriate to each approach, and simultaneously implement some in each school.&nbsp; <o:p></o:p></FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><o:p>&nbsp;</o:p></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">Since every approach works, the diversity yields the broadest local knowledge base.&nbsp; The experience fosters the most informed assessment and best next step.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Assume $2-5000 per training unit.&nbsp; There is merit to paying $4000 per pupil which includes outside services to ascertain very specific training protocols.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>I am personally most impressed with NeuroCARE pro.&nbsp; See </FONT><A href="http://www.zengar.com/">www.Zengar.com</A><FONT face="Times New Roman"> for a most impressive system – world class.</FONT></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><o:p>&nbsp;</o:p></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><B style="mso-bidi-font-weight: normal"><FONT face="Times New Roman">Benefits of FABCAT</FONT></B></P>
<P class=MsoNormal style="MARGIN: 0in 0in 1pt"><FONT face="Times New Roman">The training is directly in line with school’s mission and mandates.&nbsp; Since attentional difficulties adds significant cost and effort, for both learning and teaching, any relief is multi-faceted.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>The most financially tangible benefit is in mainstreaming special education students.&nbsp; The return on investment is attractive by any criteria.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN>Beyond mainstreaming those with attentional issues, all students can benefit from FABCAT training.&nbsp; Delighted students, parents and teachers are to be expected.<SPAN style="mso-spacerun: yes">&nbsp; </SPAN></FONT></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>