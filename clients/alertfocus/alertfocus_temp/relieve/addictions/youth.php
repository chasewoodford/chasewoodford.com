<?//begin code admpanel
$id = 173; 
$razdelid = "41"; 
$razdel_id = "41"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/additions/index.php"; 
$id_author = 0; 
$title = "Youth Study"; 
$description = "Arizona treatment facility reports stunning results with neurofeedback. "; 
$partsfragmented = 1; 
$date_posted = "30-10-2008"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/relieve/additions/youth.php"; 
$doc_identificate_name = "youth"; 
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
<H2>Neurotherapy with Youth Offenders and Young Addicts: A Pilot Study of the Integration of Remedial Neurotherapy Training into a Therapeutic Community</H2>
<P>Peter Smith, Psy. D. , BCIAC-Fellow<BR>Marvin W. Sams, N.D., R. EEG T., BCIAC-Fellow</P>
<H3>Study Objectives</H3>
<P>Question: Is Neurotherapy of benefit to the Therapeutic Recovery Community? </P>
<P>Successful outcomes has been linked to duration of stay…Can Neurotherapy help young addicts stay in therapy?<BR><BR>The methods used in this study are similar to those used our prior work with Youth Offenders and Eating Disorders. Will the results be similar?</P>
<P>Major difference between the three studies: The length of stay in the Therapeutic Community is longer. (12 months of care and lower costs than typical residential treatment centers.)</P>
<P><STRONG>Demographics</STRONG></P>
<P>Subjects were mostly white middle class teens with arrest records. </P>
<P><STRONG>V3 TUCSON Program</STRONG></P>
<P>–12 Step based on the AA model<BR>–Two meetings per day, Sponsors <BR>–Daily structure is service oriented<BR>–Education and pre vocational <BR>–Peer leadership and confrontation <BR>–Family therapy<BR>–Comprehensive evaluation, IVA, QEEG, MMPI-2, BDI-2 (pre and post)<BR>–Four neurofeedback sessions per week w/Heart Rate variability training. <BR>–Retesting at session 24</P>
<P><STRONG>Neurotherapy methods</STRONG></P>
<UL>
<LI>IVA continuous performance test (auditory and visual) and EEG with Eyes Open, Eyes Closed, and Playing Tetris on Game Boy. </LI>
<LI>Visual analysis of the analog recording; Normative Database analysis.</LI>
<LI>Remedial neurofeedback protocols as per Dr. Sams.</LI>
<LI>Neurofeedback was usually four or more sessions per week.</LI>
<LI>AVE sessions under task on later subjects. </LI>
<LI>A 13 channel EEG was often done as a pre-training baseline, the data edited for artifacts, and a report generated comparing the current magnitudes to the previous magnitudes in eight frequency bands at nine electrode sites.</LI>
<LI>Heart Rate Variability training.</LI>
<LI>Retested and reevaluated EEG every 20 sessions.</LI></UL>
<P><STRONG>Neurofeedback methodology</STRONG></P>
<P>Appropriate sized Electro-Cap with tin electrodes were used for all training sessions. </P>
<P>Sessions employed were those that had previously demonstrated a 50% or greater reduction in averaged peak to peak amplitude at nine electrode sites (Cz, F3, F4, P3, P4, F7, F8, T3, T4) across eight frequency bands (Delta, Theta, Alpha a, Alpha b, Alpha t, 13Hz, Beta1, Beta2) with multiple clients.</P>
<P>All training was done under task (hand held video game).</P>
<P>Training reward consisted of proportional high pitched tones played back through head phones. The tones were present 100% of the time; Pitch lowered when the training band magnitude decreased below approximately 50% of the magnitude average for Increase (difference) training, and increased pitch during Decrease (difference) training as the magnitude decreased.</P>
<P>Frequency bands ranged from 0.5 to 120Hz.</P>
<P>Sessions used synergistic two or three five minute training periods with specific frequencies presented at the same electrode site(s).</P>
<P><STRONG>Impact on length of stay</STRONG></P>
<P>Wait List only (No Neurotherapy) (n=11)<BR>Average length of stay = 53.1 days.<BR><BR>Wait list, then 12 Neurotherapy sessions (n=3)<BR>Average length of stay = 125 days.</P>
<P>Wait List, then received 24 sessions (n=3) <BR>Average length of stay = 268 or more days. <BR>100% graduated from program.</P>
<P><STRONG>Pre/post Beck Scores after 35 days, 24 sessions, and at follow-up</STRONG></P>
<P>25.5 Pre<BR>11.29 Mean Score<BR><BR>10 Post Mean ScoreFollow-Up<BR>p&lt;.001, T testN=30 Pre/Post N=6 Follow-up</P>
<P>Medication Utilization (n=30)<BR>No medication = 34%<BR>Psych meds added = 2%<BR>Psych meds decreased = 49%<BR>Psych meds stayed the same = 8.7%</P>
<P>Note: The subject that added meds was the only one to relapse.</P>
<P>Auditory Attention Quotient -Very signif. (p = &#8804;.001)<BR>Visual Attention Quotient –Signif. (p = &#8804;.05)<BR>Full Scale Attention Quotient -Very signif. (p = &#8804;.001)<BR>Response Control Measures –Not Signif.</P>
<P><STRONG>MMPI-2 Pre-and post-treatment results</STRONG></P>
<P>Statistically significant reductions on Depression, Somatic Focus, Hysteria, Anxiety, Schizophrenia scales (D, HS, HY, Pt, SC)</P>
<P>Also significant reductions in markers of Psychopathology associated with substance addiction potential and Distrust (PD &amp; PA)</P>
<P><STRONG>Summary Of results to date V3 TUCSON</STRONG></P>
<P>More than 90% of the Graduates achieved key abstinence factors: Work/School, Family support, Attendance at AA meetings.</P>
<P>Those that relapsed returned to recovery activity quickly.</P>
<H4>Neurotherapy aided in 4 areas:</H4>
<H5>-Retention of residents, longer stays</H5>
<H5>-Improves cognitive abilities and fosters academic achievement</H5>
<H5>-Decreased medication use and helped build self management skills</H5>
<H5>-Depression and personality features improved</H5>
<P>&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>