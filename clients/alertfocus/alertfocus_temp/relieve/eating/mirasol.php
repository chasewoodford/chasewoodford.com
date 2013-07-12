<?//begin code admpanel
$id = 115; 
$razdelid = "30"; 
$razdel_id = "30"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/eating/index.php"; 
$id_author = 0; 
$title = "Mirasol evidence"; 
$description = "Summary of research on neurofeedback from a residential eating disorder facility."; 
$partsfragmented = 1; 
$date_posted = "10-05-2005"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/eating/mirasol.php"; 
$doc_identificate_name = "mirasol"; 
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
<P><BR>Scientific research from presentation to 13th annual Renfew conference by Gary Ames and Marvin Berman.&nbsp; Originally presented to the Association for Applied Psychophysiology and Neurofeedback. </P>
<P>Peter N. Smith, Psy. D., Marvin W. Sams, ND, and Leslie Sherlin, BA.</P>
<P><STRONG>Neurofeedback training for eating disorders: <BR></STRONG>21 anorexic and 54 bulimic at Mirasol RTC for Eating Disorders in Tucson, AZ.<BR>All women were independently diagnosed with an eating disorder prior to admission.<BR></P>
<P><STRONG>Intake assessments</STRONG>: TOVA, MMPI-2, BDI-2, Eating Disorders Inventory-2, Eysenck Personality Inventory, Tellegen Absorption Scale, and the Marlowe Crown Test.<BR>Right brain dysfunction with significantly increased Delta activity under cognitive challenge.</P>
<P>Research-designed training protocols were statistically more likely to reduce or eliminate the need for medication. </P>
<P>Significant decrease in Beck Depression Inv-2 scores, neuroticism scores, and all EDI-2 scores. A significant increase in extroversion scores. MMPI-2 changes reveal a reduction in symptoms associated with distress.</P>
<P>Anorexics gained weight significantly. Bulimics lost 3lb/mo during treatment.<BR>All tests significant at the p&gt;.03 level.<BR>63 subjects responded to 6-month follow-up.</P>
<P>Weight changes continued in the proper direction. Anorexics gained about 1 lb per week. Overweight bulimics lost about 3 lbs per month.<BR>80-100% reduction in depression on BDI (clinical vs. QEEG driven protocol)<BR>Depression reduction the key factor in sustained success (Melanie Klein’s ‘depressive position’)</P>
<P>65% are doing well in recovery. 80% have had some resurgence of symptoms.<BR>Maintenance of preferred weight direction was better for anorexics (p&gt;.05) than for bulimics (p&gt;.08), and third for overweight (N=63) at 6-months.<BR></P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>