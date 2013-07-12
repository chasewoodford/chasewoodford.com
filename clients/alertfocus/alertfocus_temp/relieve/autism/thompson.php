<?//begin code admpanel
$id = 147; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Large Asperger's study"; 
$description = "126 Asperger’s clients reviewed showed significant improvement (P &lt; .001) on all measures."; 
$partsfragmented = 1; 
$date_posted = "25-10-2006"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/thompson.php"; 
$doc_identificate_name = "thompson"; 
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
<TABLE class=MsoNormalTable style="BACKGROUND: #f9fffd; WIDTH: 570pt; BORDER-COLLAPSE: collapse; mso-padding-alt: 3.0pt 3.0pt 3.0pt 3.0pt" cellSpacing=0 cellPadding=0 width=760 border=0>
<TBODY>
<TR style="mso-yfti-irow: 0; mso-yfti-lastrow: yes">
<TD style="BORDER-RIGHT: #ece9d8; PADDING-RIGHT: 3pt; BORDER-TOP: #ece9d8; PADDING-LEFT: 3pt; PADDING-BOTTOM: 3pt; BORDER-LEFT: #ece9d8; WIDTH: 100%; PADDING-TOP: 3pt; BORDER-BOTTOM: #ece9d8; BACKGROUND-COLOR: transparent" width="100%">
<H2 style="MARGIN: 2.75pt 0in 0pt">Autistic Spectrum Disorders including Asperger’s Syndrome-<BR>EEG &amp; QEEG Findings, Results, and QEEG Findings, Results<BR>&amp;&nbsp;Neurophysiological Rationale</H2>
<H3 style="MARGIN: 1.4pt 0in"><EM>Michael Thompson, MD &amp;, Lynda Thompson, PhD </EM></H3>
<H4 style="MARGIN: 1.4pt 0in auto">ADD Centres Ltd., Biofeedback Institute of Toronto Mississauga, Ontario, Canada<BR>lyndamichaelthompson@gmail.com</H4>
<P><B>Category</B>: Research &amp; Clinical Application </P>
<P><B>Introduction&nbsp; </B>This paper reviews our EEG, QEEG and LORETA findings which correspond to known functional neuroanatomical sites associated with the symptoms of Asperger’s. We show how we use that information to guide successful neurofeedback interventions. Theoretical formulations arise from work with more than 1,000 autistic spectrum clients and EEG neurofeedback analysis and results with more than 150 of these clients.</P>
<P><B>Method:&nbsp; </B>Before neurofeedback we used medications, behavior therapies, psychotherapies, education and speech therapies (Thompson &amp; Havelkova, 1982). When neurofeedback became available clients were trained to decrease slow wave activity and beta spindling and raise 13-15 Hz often at FCz. Pre and post testing (after 40 sessions) used the WISC, WRAT, TOVA, IVA, questionnaires and QEEG changes. A selection of these clients has had 19 channel EEG assessments and analysis using LORETA. <BR><BR><B>Results</B>: 126 Asperger’s clients reviewed showed significant improvement (P &lt; .001) on all measures. Brain maps were done on a sample of the clients. These revealed low activation P4 T6 in Asperger’s cases and decreased activation Cz and Pz in the Autistic group. LORETA showed anterior cingulate Brodmann area 24 dysfunction in Asperger’s and dysfunction in the posterior cingulate Brodmann area 31 and in the cuneus and precuneus in the autistic cases. <BR><BR><B>Conclusion</B>:&nbsp; Findings to date suggest an axis of disturbed functioning (anterior and posterior cingulate Brodmann areas 24, 31) often with high amplitude 3-10 Hz and spindling beta (&gt; 20 Hz) and low amplitude 13-18 Hz usually at FCz (LORETA abnormalities seen in the cingulate, medial and orbital frontal and/or prefrontal cortex). Similar findings are seen with anxiety disorders. Asperger’s is unique in also having right temporal-parietal cortex inactivity corresponding to sensory aprosodia. Beta spindling suggests that the cortex is irritable, unstable and / or easily kindled. Increasing sensorimotor rhythm (SMR) using neurofeedback has a stabilizing effect (Sterman, 2000).</P></TD></TR></TBODY></TABLE>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>