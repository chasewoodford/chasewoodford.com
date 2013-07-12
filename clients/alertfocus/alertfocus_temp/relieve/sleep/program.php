<?//begin code admpanel
$id = 170; 
$razdelid = "29"; 
$razdel_id = "29"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/sleep/index.php"; 
$id_author = 0; 
$title = "Sleep Program"; 
$description = "My sleep program has multiple elements to maximize success.  Get a great night's sleep so that you wake up feeling refreshed.  "; 
$partsfragmented = 1; 
$date_posted = "06-10-2008"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/relieve/sleep/program.php"; 
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
<P>The insomnia program is designed to work with your body and brain to allow you get to sleep and stay asleep without drugs.&nbsp; Clients tell me they sleep better and wake up feeling refreshed.&nbsp; </P>
<P>The program has 4 elements that all work together to allow high confidence for substantial success.&nbsp; The sleep program consists of devices for home use and several sessions in my office.&nbsp; </P>
<P><STRONG>Bio Device</STRONG> – approved by the FDA for insomnia&nbsp;&nbsp;<BR>See <A href="http://www.alpha-stim.com/">www.Alpha-Stim.com</A> for credible evidence on this kind of device.&nbsp; The one I have for you is much cheaper.&nbsp; The research over many decades is so compelling that the FDA approves the device as safe and effective for anxiety, depression and insomnia.&nbsp; It is very easy to use at home, you don’t even notice it.&nbsp; </P>
<P><B>Biofeedback </B>– as featured in major magazines.<BR>There are a few kinds of healing gadgets that can be effective depending on your where you hold your stress in your body and mind.&nbsp; Biofeedback can be as simple as holding a thermometer so you can learn to warm your hands and relax in that way.&nbsp; Higher numbers show you where relaxation lies.&nbsp; Other devices show you how to find restorative breathing/cardiac rhythms.&nbsp; Also see <A href="http://www.wilddivine.com/">www.WildDivine.com</A>, sometimes my affiliate code #1011 gets you a discount or free shipping.</P>
<P><B>Neurofeedback</B> – See proof in the current journal “Sleep” <BR>The brain is primary organ of sleep.&nbsp; Brain training is a proven way to enhance sleep quality.&nbsp; Brain wave biofeedback means your mind learns to control your brain.&nbsp; I place sensors on your head so an EEG can read your brain waves.&nbsp; You can look at the numbers directly and aim them in the proper direction or we can let any DVD do this job by dimming occasionally to let you know how to steer your brain right.&nbsp; </P>
<P><B>Neurotherapy </B>– Powerful insomnia procedure.&nbsp; <BR><A href="http://www.neurofield.com/">www.NeuroField.com</A> is the latest and most potent device for clearing up multiple mind-body issues.&nbsp; A cap fits loosely on your head and induces a very mild electrical field of about 1 volt for about one minute.&nbsp; You can’t feel the current but you may detect the change in your bio-field.&nbsp; We theorize that energy is being added to your system to strengthen your natural healing capacity. &nbsp;This includes promoting your ability to sleep restfully and restoratively.&nbsp; &nbsp;&nbsp;</P>
<P>&nbsp;</P>
<P>&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>