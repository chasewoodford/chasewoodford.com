<?//begin code admpanel
$id = 172; 
$razdelid = "41"; 
$razdel_id = "41"; 
$razdel_picture = ""; 
$razdel_link = "/relieve/additions/index.php"; 
$id_author = 0; 
$title = "Summary of Addicitons Research and Methods"; 
$description = "Overview of neurofeedback for addicitons.
"; 
$partsfragmented = 1; 
$date_posted = "30-10-2008"; 
$linkid = ""; 
$template=1; 
$current_part = 1;
$mainpage = "/home4/jobhuntnow/public_html/alertfocus.com//relieve/additions/overview.php"; 
$doc_identificate_name = "overview"; 
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
<H2 align=center>EEG NEUROTHERAPY FOR THE TREATMENT OF ALCOHOLISM AND ADDICTIONS: </H2>
<H2 align=center>BRIEF OVERVIEW</H2>
<P><B><U>Introduction</U></B> </P>
<P>Alcoholism is a disease that afflicts at least 12 million Americans. It leads to approximately 250,000 premature deaths a year, disrupts the lives of some 45 million family members and costs an estimated $120 billion a year in medical bills, property damage and lost time and productivity. </P>
<P>Over the past eight years, a major breakthrough in the treatment of alcoholism and chemical dependency has been consistently demonstrated by a number of researchers, including (but not limited to) Saxby and Peniston (1995), Anderson (1994), Sonder and Sonder (1994), White (1994), Cowan (1993), Patterson (1993), Peniston, Marrinan, Deming and Kulkosky (1993), Schneider, Elbert, Heimann, Welker, Stetter, Mattes, Birbaumer and Mann (1993), Byers (1992), Fahrion, Walters, Coyne and Allen (1992), and Peniston and Kulkosky (1990, 1989). </P>
<P>The essence of this treatment involves a non-invasive, non-pharmacological outpatient program combining EEG brain wave biofeedback (called <B><I>neurotherapy</I></B>), highly specific imagery of brain structures, neurotransmitters and brain wave patterns, positive personalized visualizations, cognitive re-scripting and intensive cognitive-behavior therapy. This program, commonly referred to as the <B>Peniston Protocol</B>, is administered 3-5 days per week over a 7-12 week period for a total of 35-40 sessions. </P>
<P><B><U>Success Rates and Cost-Effectiveness</U></B> </P>
<P>In sharp contrast to traditional inpatient, outpatient and 12-step treatment programs, which yield <U>maximum</U> success rates of 30-40%, the long-term (3 year) abstinence rates for severe alcoholics receiving the Peniston Protocol consistently reach <B>80%</B>. Moreover, significant positive, measurable and durable personality changes have consistently accompanied these startling results. </P>
<P>Further, these dramatic results appear to be deliverable at a very reasonable cost (e.g., $4,000 - $6,000 total), particularly in comparison to the extremely high cost of traditional inpatient treatment programs (e.g., $2,500 - $9,000 per week, depending on complexity of diagnosis and whether or not detoxification is included). </P>
<P><B><U>Background and Rationale</U></B> </P>
<P>As it functions, the brain produces minute electrical signals on its surface called brain waves. Brain waves constantly change as the brain handles the business of dealing with itself and its environment. For over fifty years, this electroencephalographic (EEG) activity has been used for <B>neuroanalysis</B> (e.g., diagnosis of brain disease or injury). With the advent of fast computers, researchers are now able to quantitatively analyze the frequency and amplitude of brain waves (QEEG) to form complex topographic "maps" of the EEG's power and frequency distribution for more accurate and effective diagnoses. They found that abnormal behavior often corresponded to abnormal brain wave patterns and distributions. </P>
<P>Conclusive research indicates that certain types of abnormal brain functioning can be corrected by learning to operantly condition the brain's electrical activity. This conditioning is accomplished by visual and/or audio feedback of the moment-to-moment activity of the EEG. This visual/audio EEG feedback is used by the patient to learn to increase or decrease the power and/or percentage of selected brain wave frequencies This conditioning or training is called <B>neurotherapy</B>. </P>
<P>Neurotherapy is proving to be medically effective because it facilitates positive neurochemical, personality and behavioral changes in relatively short periods of time (weeks vs. months or even years). Moreover, it is cost- effective because it avoids the high expenses associated with surgery, drugs or long- term inpatient or outpatient therapy. </P>
<P>It is also widely accepted among researchers and clinicians that patterns of surface EEG activity reflect the activity of deeper brain structures and patterns of brain neurochemistry. For example, those brain neurotransmitters, opioids, neurohormones and neuropeptides associated with reward and internal feelings of well-being are influenced directly (and thus fluctuate widely) according to changes in cortical EEG patterns. Equally important, alcohol cravings and uncontrollable alcohol ingestion are now strongly associated with both deficiencies and/or abnormalities in certain brain neurochemicals (e.g., serotonin; opioid peptides including beta endorphin and enkephalin; norepinephrine; dopamine; and GABA) and poorly developed low frequency EEG rhythms (e.g., alpha and theta) (Blum, 1991). </P>
<P>Consequently, as Peniston and numerous other researchers have shown, the normalization of alpha and theta EEG rhythms via neurotherapy produces the same normalization of brain chemistry that is produced by either alcohol ingestion or the external manipulation of the excitatory and inhibitory processes that control these essential neurochemicals. In other words, the increased feelings of reward and internal well-being that occur from alcohol ingestion or other external influences of brain neurochemistry are also produced by the normalization of alpha and theta rhythms via neurotherapy. </P>
<P>Thus, the complex interrelationships among these variables appear to be both at the root and the cure for severe alcohol cravings and uncontrollable alcohol ingestion. Moreover, these interrelationships and the normalization of the deficient factors within them via neurotherapy certainly contribute to an understanding as to why the Peniston Protocol produces such impressive results with this difficult clinical population. </P>
<P><B><U>Breakdown of the Peniston Protocol</U></B> </P>
<P>Although there is some variation among clinicians, the following is a step- by-step breakdown of the most commonly used clinical procedures within the Peniston Protocol: </P>
<P>(1) Intake interview, evaluation and personality/behavioral pre-testing (e.g., MMPI II, MCMI II, Beck Depression Inventory, Beck Hopelessness Scale and/or Sixteen Personality Factor Questionnaire). </P>
<P>(2) Brief pre-treatment QEEG topographic brain map. </P>
<P>(3) Five preliminary non-EEG biofeedback sessions (e.g. temperature, EMG, and/or skin conductance). </P>
<P>(4) Twenty-five to thirty alpha/theta neurotherapy sessions. </P>
<P>(5) Brief post-treatment QEEG topographic brain map. </P>
<P>(6) Discharge interview, evaluation and personality/behavioral post-testing (e.g., MMPI II, MCMI II, Beck Depression Inventory, Beck Hopelessness Scale and/or Sixteen Personality Factor Questionnaire). </P>
<P><B><U>Personality/Behavioral Improvements</U></B> </P>
<P>In addition to long-term (3 year) abstinence rates of 80%, the Peniston Protocol has consistently produced the following very healthy personality changes: </P>
<P>(1) Significant <B>decreases</B> in scales labeled schizoid, avoidant, passive- aggressive, schizotypal, borderline, paranoid, anxiety, somatoform, dysthymia, alcohol abuse, psychotic thinking, depression, psychotic depression, hypochondriasis, hysteria, schizophrenia, social introversion and psychotic delusion. </P>
<P>(2) Significant <B>increases</B> in warmth, abstract thinking, stability, conscientiousness, boldness, imaginativeness and self-control. </P>
<P>Thus, the Peniston Protocol consistently produces positive changes in what many consider to be "hard wired" aspects of personality. These dramatic personality changes enhance the patient's ability to cope without substance abuse, significantly reducing the likelihood of relapse. </P>
<P><B><U>Summary and Conclusion</U></B> </P>
<P>Alcoholism is a debilitating and expensive disease that has responded poorly to traditional inpatient, outpatient and 12-step treatment programs (e.g., maximum 30-40% sustained abstinence). Researchers Eugene Peniston and Paul Kulkosky, along with many others over the past eight years, have consistently demonstrated that severe alcoholics treated with EEG neurotherapy, imagery/visualization and cognitive-behavior therapy (e.g., the Peniston Protocol) show startling long-term (3 year) abstinence rates of 80%. Moreover, these extremely positive results are consistently accompanied by dramatic, healthy personality/behavioral changes that clearly contribute to reductions in the likelihood of relapse. </P>
<P>The neurotherapeutic changes in alpha/theta EEG rhythms achieved by these patients with the Peniston Protocol produce low, sustained levels of the opioid peptide beta-endorphin, reflecting lower sustained levels of arousal and stress. Moreover, the normalization of low frequency cortical EEG rhythms (e.g., alpha &amp; theta) apparently also produce normalization of several other brain neurochemicals whose imbalances are highly associated with severe alcohol cravings and uncontrolled alcohol ingestion. </P>
<P>In addition to its extremely high success rate for this difficult clinical population, the Peniston Protocol appears to be very cost-effective in comparison to traditional inpatient and outpatient treatment programs. </P>
<P><B><U>REFERENCES</U></B> </P>
<P>Anderson, B. (1994). Applications of biofeedback and neurotherapy in private practice in the treatment of alcohol and chemical dependency. Presentation delivered to the Advanced Brainwave Training Institute, Number 5, Washburn University, Topeka, Kansas, February, 1994. </P>
<P>Blum, K. (1991) Alcohol and the Addictive Brain. New York: The Free Press. </P>
<P>Byers, A.P. (1992). The normalization of a personality through neurofeedback therapy. Subtle Energies, 3,1,1-17. </P>
<P>Cowan, J. (1993). Alpha-theta brainwave biofeedback: The many possible theoretical reasons for its success. Biofeedback, 21, 2, 11-16. </P>
<P>Fahrion, S.L., Walters, E.D., Coyne, L., &amp; Allen, T. (1992). Alteration in EEG amplitude, personality factors and brain electrical mapping after alpha- theta brainwave training: A controlled case study of an alcoholic in recovery. Alcoholism: Clinical and Experimental Research, 16, 3, 547-552. </P>
<P>Patterson, D.M. (1993) The secret of my success as a therapist: Clinical procedures and success rates for the Peniston Protocol in the treatment of alcoholism, chemical dependency and post-traumatic stress disorder. Invited presentation delivered to the staff of the Mastery Program, a subsidiary of Advanced Neuroscience Corporation, King of Prussia, Pennsylvania, October, 1993. </P>
<P>Peniston, E.G., Marrinan, D.A., Deming, W.A., &amp; Kulkosky, P.J. (1993). EEG alpha-theta brainwave synchronization in Vietnam theater veterans with combat- related post-traumatic stress disorder and alcohol abuse. Advances in Medical Psychotherapy, 6, 37-50. </P>
<P>Peniston, E.G. &amp; Kulkosky, P.J. (1990). Alcoholic personality and alpha-theta brainwave training. Medical Psychotherapy, 3, 37-55. </P>
<P>Peniston, E.G. &amp; Kulkosky, P.J. (1989). Alpha-theta brainwave training and beta-endorphin levels in alcoholics. Alcoholism: Clinical and Experimental Research, 13, 2, 271-277. </P>
<P>Saxby, E. &amp; Peniston, E.G. (1995). Alpha-theta brainwave neurofeedback training: An effective treatment for male and female alcoholics with depressive symptoms. Journal of Clinical Psychology, 51(5), 685-693. </P>
<P>Schneider, F., Elbert, T., Heimann, H., Welker, A., Stetter, F., Mattes, R., Birbaumer, N., &amp; Mann, K. (1993). Self-regulation of slow cortical potentials in psychiatric patients: Alcohol dependency. Biofeedback and Self-Regulation, 18(1), 3-33. </P>
<P>Sonder, C. &amp; Sonder, J. (1994) Alpha-theta brainwave training for alcoholism, chemical dependency and post-traumatic stress disorder: Success rates for the Peniston Protocol. Personal communications regarding the Mastery Program, a subsidiary of Advanced Neuroscience Corporation, Cherry Hill, New Jersey, January, 1994. </P>
<P>White, N. E. (1994). The Peniston Protocol as a multi-level intervention: Theories of success of alpha-theta training. Panel presentation at the Twenty-Fifth Annual Conference of the Association of Applied Psychophysiology and Biofeedback entitled Alpha-Theta Brainwave Biofeedback: The Multiple Explanations for its Clinical Effectiveness, Atlanta, Georgia, March 7, 1994. </P>
<P>&nbsp;</P>
eod;
require $site_root."/".$document_template_link;
@mysql_close($db);
?>