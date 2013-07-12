<?//begin code admpanel
$id = 166; 
$razdelid = "34"; 
$razdel_id = "34"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/add/index.php"; 
$id_author = 0; 
$title = "Intensive Program"; 
$description = "Knock out ADD with an intensive program."; 
$partsfragmented = 1; 
$date_posted = "30-04-2008"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/add/program.php"; 
$doc_identificate_name = "program"; 
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
<SPAN class=page>&nbsp;
<P>ADHD Program. <BR>Intensive program to train the brain for substantial improvement in attention, conduct, achievement and maturity. These powerful methods teach the mind how improve brain functioning.&nbsp; Proven to enhance attention and mood for good. First you will notice greater calm and self-control. Within weeks or months you will see social success and academic achievement. </P>
<P>Fun too.&nbsp;Kids and teens love it because we watch popular DVDs. They just need to work their brain waves to keep the movie playing or keep playing at full brightness. <BR>Call for more info: Gary Ames, Licensed psychologist, 610.668-3223. </P>
<P>&nbsp;</P>
<P>Program for ADD</P>
<P>Now is an excellent time to get in the required number of sessions with adequate frequency to clear up most of the symptoms of ADHD. There is substantial evidence of effectiveness of these approaches and we find here what other neurofeedback practitioners have experienced. There is some evidence of improvement in 10 sessions or less. We see 80-90% success rates for those who complete 25-40 sessions. The degree of improvement is substantial, at least a 50% reduction of symptoms. </P>
<P>There are a number of biofeedback and neurofeedback techniques that can improve attention, health, competence, IQ, while reducing mood volatility, attitude issues, conduct problems, and drug dosage. </P>
<P>I use biofeedback of EEG to allow self-repair of brainwaves and normalize the connectivity of transmission between sites. Everyone feels more calm.&nbsp;&nbsp; </P>
<P>Ideally the program can be done 2-3 times a week.&nbsp;Yes this will cost money, but it is a bargain in quality of life for the family and the future of the trainee. &nbsp;Some insuances help&nbsp;defray the cost. </P>
<P>Call Gary Ames to discuss your child: <STRONG>610-668-3223</STRONG></P>
<P><STRONG></STRONG>&nbsp;</P></SPAN>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>