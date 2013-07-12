<?//begin code admpanel
$id = 162; 
$razdelid = "37"; 
$razdel_id = "37"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/autism/index.php"; 
$id_author = 0; 
$title = "Reports from the Moms"; 
$description = "Here is what 3 moms reported as their child went back to school."; 
$partsfragmented = 1; 
$date_posted = "03-10-2007"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/autism/moms.php"; 
$doc_identificate_name = "moms"; 
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
<H2 align=center>Reports from the Moms – All from September, 2007</H2>
<P align=center>These results are typical but not universal</P>
<P>Here is an email from a Mom of a 6-year old diagnosed with PDD, NOS and Disruptive Behavior Disorder who receives 46 hours of BHRS (wrap around) services a week. </P>
<P>He just finished 10 sessions of neurofeedback.</P>
<DIR>
<DIR>
<P>Hi Gary,</P>
<P>Eric went back to school today and his behavior was SOOO CALM!!! He said he was so excited to go back to school and was the most patient and relaxed I have ever seen him!! Also, yesterday when Eric's TSS was over, he was able to verbalize so much more, quickly did homework and we were able to sandwich preferred and non-preferred very easily. I hope this lasts!!!!!!!!!!!!</P></DIR></DIR>
<P>The next day she sends:</P>
<DIR>
<DIR>
<P>Eric had 0 incidents of inappropriate touching, 0 tantrums, 0 time outs and went along with everything in school. He also earned 2 treat box toys at school!! Also, for his social group the director also commented how calm and appropriate he was. He is now with "older" kids, either the same age up to 8 years old. Again, he was very appropriate and compliant!!!!</P></DIR></DIR><B>
<P>6-year old with severe ADHD.</P>
<DIR>
<DIR></B>
<P>When going to Kindergarten Aaron cried every day and came home angry. He couldn’t get along with others. Teachers said he was constantly yelling out in class. He was not with the program and not making it. They wanted to medicate him. Even going to Summer camp was torture. </P></DIR></DIR>
<P>After 7 sessions of neurotherapy. </P>
<DIR>
<DIR>
<P>Aaron just started 1<SUP>st grade. Last night Aaron actually wanted to read for the first time. He is smart. I didn’t know he was smart, I couldn’t tell before. I have a different kid. I could cry. It’s a miracle. He’s excited to go to school.</P></DIR></DIR><B>
<P>All the doctors say Susan is a puzzle. </P>
<DIR>
<DIR></B>
<P>Susan was brought home from a Russian orphanage in great distress with multiple physical and psychological diagnoses. She was expelled within a few days from 4 different Kindergartens. She had to leave 3 other Kindergartens within months. Once she locked down a WalMart. Restraints didn’t work. Elwyn didn’t work. Everyone says institutionalize her. </P>
<P>This year Susan is 9-years old and has progressed to the next grade. She is doing fine in school without an aide. No problems or incidents in school. Excellent reports from the bus driver. Her education is coming along. Everyone has noticed dramatic improvements in her behavior. </P>
<P>At home she says "I love you" and wants hugs. Her tantrums have gone down from daily to weekly and are much less intense. She now responds to positive reinforcement. Susan is more consolable. She tries to play nice. She will try new foods and we can take her out. Susan’s other therapies are proceeding more smoothly. Of the dozen therapies that we have tried, neurofeedback has given us the best results. </P></DIR></DIR></SUP>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>