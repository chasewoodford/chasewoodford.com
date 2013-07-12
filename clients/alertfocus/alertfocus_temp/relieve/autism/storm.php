<?//begin code admpanel
$id = 161; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Autism and Neurofeedback"; 
$description = "Calming the inner storm."; 
$partsfragmented = 1; 
$date_posted = "03-10-2007"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/storm.php"; 
$doc_identificate_name = "storm"; 
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
<H2 align=center>Autism and Neurofeedback</H2>
<H3 align=center>Calming the Inner Storm - Reducing Autistic Symptoms by 40% </H3>
<P>In biofeedback, biological information is fed back to you. You look into a behavioral mirror and learn to adjust what you are doing. The most powerful form of biofeedback works on the source of behavior with an EEG to see brain waves. Biofeedback of neurological information is neurofeedback. </P>
<P>Neurofeedback treatments are an effective remedy for autism. Quieting brain waves is tightly linked to symptom reduction. Research demonstrates a 40% reduction in all autistic symptoms. </P>
<P>In autism we see big spikes of intensity in brain waves. There are also disturbances in communication between sites within the brain. These can be corrected with neurofeedback. The goal and point of all biofeedback is to increase self-awareness and subtle self-control to build self-regulation of behavior. Neurofeedback relaxes the nervous system and releases abnormal brain wave patterns. Neurofeedback treatments permanently reduce the excess spiking and bring greater calm and maturity. In addition, neurofeedback to boost cerebral blood flow will strengthen the brain. </P>
<P>Both experimental research and my clinical experience show that we can reduce the symptoms of autism significantly with neurofeedback. The improvements are permanent and across the board – </P><B>
<P>Emotional calm:</B> Fewer tantrums with less intensity. Improved self-control. </P><B>
<P>Better quality sleep.</B> Restorative sleep helps everything else. </P><B>
<P>Odd, repetitive behavior</B>: Less coping is required with a calm brain. </P><B>
<P>Communication, Focus:</B> The brain becomes more efficient and effective. </P><B>
<P>Social intimacy: </B>When the inner storm subsides then maturation can progress. </P>
<P>Neurofeedback methods can require very little of the client and anyone can be treated. I treat autistic children, teens and adults in my office in Bala Cynwyd, just a mile off the Belmont exit of the Schuylkill, Rt. 76. Within 10 sessions almost all clients notice either more emotional calm, sharper mental clarity or better quality sleep. </P>
<UL>
<LI>Brain training treats autism at the source. </LI>
<LI>Broad symptom relief is substantial and permanent. </LI>
<LI>Pleasant, natural, non-invasive, no drugs, no adverse reactions. </LI>
<LI>Some neurofeedback methods can be used in the home, community and school. </LI></UL>
<P>Gary Ames, Licensed Psychologist<BR>28 Rock Hill Road, Bala Cynwyd, PA 19004<BR>610-668-3223</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>