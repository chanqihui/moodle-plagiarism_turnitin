<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

// General
$string['pluginname'] = 'Turnitin plagiarism plugin';
$string['turnitintooltwo'] = 'Turnitin Tool';
$string['turnitin'] = 'Turnitin';


// Assignment Settings
$string['turnitin:enable'] = 'Enable Turnitin';
$string['excludebiblio'] = 'Exclude Bibliography';
$string['excludequoted'] = 'Exclude Quoted Material';
$string['excludevalue'] = 'Exclude Small Matches';
$string['excludewords'] = 'Words';
$string['excludepercent'] = 'Percent';
$string['norubric'] = 'No rubric';
$string['otherrubric'] = 'Use rubric belonging to other instructor';
$string['attachrubric'] = 'Attach a rubric to this assignment';
$string['launchrubricmanager'] = 'Launch Rubric Manager';
$string['attachrubricnote'] = 'Note: students will be able to view attached rubrics and their content prior to submitting.';
$string['erater_handbook_advanced'] = 'Advanced';
$string['erater_handbook_highschool'] = 'High School';
$string['erater_handbook_middleschool'] = 'Middle School';
$string['erater_handbook_elementary'] = 'Elementary School';
$string['erater_handbook_learners'] = 'English Learners';
$string['erater_dictionary_enus'] = 'US English Dictionary';
$string['erater_dictionary_engb'] = 'UK English Dictionary';
$string['erater_dictionary_en'] = 'Both US and UK English Dictionaries';
$string['erater'] = 'Enable e-rater grammar check';
$string['erater_handbook'] = 'ETS&copy; Handbook';
$string['erater_dictionary'] = 'e-rater Dictionary';
$string['erater_categories'] = 'e-rater Categories';
$string['erater_spelling'] = 'Spelling';
$string['erater_grammar'] = 'Grammar';
$string['erater_usage'] = 'Usage';
$string['erater_mechanics'] = 'Mechanics';
$string['erater_style'] = 'Style';
$string['anonblindmarkingnote'] = 'Note: The separate Turnitin anonymous marking setting has been removed. Turnitin will use Moodle\'s blind marking setting to determine the anonymous marking setting.';
$string['transmatch'] = 'Translated Matching';
$string['genduedate'] = 'Generate reports on due date (resubmissions are allowed until due date)';
$string['genimmediately1'] = 'Generate reports immediately (resubmissions are not allowed)';
$string['genimmediately2'] = 'Generate reports immediately (resubmissions are allowed until due date)';
$string['launchquickmarkmanager'] = 'Launch Quickmark Manager';
$string['launchpeermarkmanager'] = 'Launch Peermark Manager';
$string['studentreports'] = 'Display Originality Reports to Students';
$string['submitondraft'] = 'Submit file when first uploaded';
$string['submitonfinal'] = 'Submit file when student sends for marking';
$string['draftsubmit'] = 'When should the file be submitted to Turnitin?';
$string['allownonor'] = 'Allow submission of any file type?';
$string['norepository'] = 'No Repository';
$string['standardrepository'] = 'Standard Repository';
$string['submitpapersto'] = 'Store Student Papers';
$string['institutionalrepository'] = 'Institutional Repository (Where Applicable)';
$string['submitpapersto_help'] = 'This setting provides instructors with the ability to select whether papers are stored in a Turnitin student paper repository. The benefit of submitting papers to the student paper repository is that student papers submitted to the assignment are checked against other students\&#39; submissions within your current and previous classes. If you select &#34;no repository&#34;, your students\&#39; papers will not be stored in the Turnitin student paper repository.';
$string['checkagainstnote'] = 'Note: If you do not select "Yes" for at least one of the "Check against..." options below then an Originality report will NOT be generated.';
$string['spapercheck'] = 'Check against stored student papers';
$string['internetcheck'] = 'Check against internet';
$string['journalcheck'] = 'Check against journals,<br />periodicals and publications';
$string['compareinstitution'] = 'Compare submitted files with papers submitted within this institution';
$string['reportgenspeed'] = 'Report Generation Speed';
$string['genspeednote'] = 'Note: Originality Report generation for resubmissions is subject to a twenty-four hour delay.';
$string['locked_message'] = 'Locked message';
$string['locked_message_default'] = 'This setting is locked at the site level';
$string['sharedrubric'] = 'Shared Rubric';
$string['turnitinrefreshsubmissions'] = 'Refresh Submissions';
$string['turnitinrefreshingsubmissions'] = 'Refreshing Submissions';
$string['turnitinppulapre'] = 'To submit a file to Turnitin you must first accept our EULA. Choosing to not accept our EULA will submit your file to Moodle only. Click here to accept.';
$string['filedoesnotexist'] = 'File has been deleted';


// Plugin settings
$string['config'] = 'Configuration';
$string['defaults'] = 'Default Settings';
$string['showusage'] = 'Show Data Dump';
$string['saveusage'] = 'Save Data Dump';
$string['errors'] = 'Errors';
$string['turnitinconfig'] = 'Turnitin Plagiarism Plugin Configuration';
$string['tiiexplain'] = 'Turnitin is a commercial product and you must have a paid subscription to use this service for more information see <a href=http://docs.moodle.org/en/Turnitin_administration>http://docs.moodle.org/en/Turnitin_administration</a>';
$string['useturnitin'] = 'Enable Turnitin';
$string['useturnitin_mod'] = 'Enable Turnitin for {$a}';
$string['pp_configuredesc'] = 'You must configure this module within the turnitintooltwo module. Please click <a href={$a}/admin/settings.php?section=modsettingturnitintooltwo>here</a> to configure this plugin';
$string['turnitindefaults'] = 'Turnitin plagiarism plugin default settings';
$string['defaultsdesc'] = 'The following settings are the defaults set when enabling Turnitin within an Activity Module';
$string['turnitinpluginsettings'] = 'Turnitin plagiarism plugin settings';
$string['pperrorsdesc'] = 'There has been a problem in trying to upload the files below to Turnitin. To resubmit, select the files you wish to resubmit and press the resubmit button. These will then be processed the next time the cron is run.';
$string['pperrorssuccess'] = 'The files you selected have been resubmitted and will be processed by the cron.';
$string['pperrorsfail'] = 'There was a problem with some of the files you selected, A new cron event could not be created for them.';
$string['resubmitselected'] = 'Resubmit Selected Files';
$string['deleteconfirm'] = 'Are you sure you want to delete this submission?\n\nThis action cannot be undone.';
$string['deletesubmission'] = 'Delete Submission';
$string['semptytable'] = 'No results found.';
$string['configupdated'] = 'Configuration updated';
$string['defaultupdated'] = 'Turnitin defaults updated';
$string['notavailableyet'] = 'Not available';
$string['resubmittoturnitin'] = 'Resubmit to Turnitin';
$string['resubmitting'] = 'Resubmitting';
$string['id'] = 'Id';
$string['student'] = 'Student';
$string['course'] = 'Course';
$string['module'] = 'Module';

// Grade book/View assignment page
$string['turnitin:viewsimilarityscore'] = 'View Similarity Score';
$string['turnitin:viewfullreport'] = 'View Originality Report';
$string['launchrubricview'] = 'View the Rubric used for marking';
$string['turnitinppulapost'] = 'Your file has not been submitted to Turnitin. Please click here to accept our EULA.';
$string['ppsubmissionerrorseelogs'] = 'This file has not been submitted to Turnitin, please consult your system administrator';

// Receipts
$string['messageprovider:submission'] = 'Turnitin Plagiarism Plugin Digital Receipt notifications';
$string['digitalreceipt'] = 'Digital Receipt';
$string['pp_digital_receipt_message'] = 'Dear {$a->firstname} {$a->lastname},<br /><br />You have successfully submitted the file <strong>{$a->submission_title}</strong> to the assignment <strong>{$a->assignment_name}{$a->assignment_part}</strong> in the class <strong>{$a->course_fullname}</strong> on <strong>{$a->submission_date}</strong>. Your submission id is <strong>{$a->submission_id}</strong>. Your full digital receipt can be viewed and printed from from the print/download button in the Document Viewer.<br /><br />Thank you for using Turnitin,<br /><br />The Turnitin Team';

// Paper statuses
$string['turnitinid'] = 'Turnitin ID';
$string['turnitinstatus'] = 'Turnitin status';
$string['pending'] = 'Pending';
$string['similarity'] = 'Similarity';
$string['notorcapable'] = 'It is not possible to produce an Originality Report for this file.';
$string['grademark'] = 'GradeMark';
$string['student_read'] = 'The student viewed the paper on:';
$string['student_notread'] = 'The student has not viewed this paper.';
$string['launchpeermarkreviews'] = 'Launch Peermark Reviews';

// Cron
$string['ppqueuesize'] = 'Number of events in the Plagiarism Plugin events queue';
$string['ppcronsubmissionlimitreached'] = 'No further submissions will be sent to Turnitin by this cron execution as only {$a} are processed per run';
$string['cronsubmittedsuccessfully'] = 'Submission: {$a->title} (TII ID: {$a->submissionid}) for the assignment {$a->assignmentname} on the course {$a->coursename} was successfully submitted to Turnitin.';
$string['pp_submission_error'] = 'Turnitin has returned an error with your submission:';
$string['turnitindeletionerror'] = 'Turnitin submission deletion failed. The local Moodle copy was removed but the submission in Turnitin could not be deleted.';
$string['ppeventsfailedconnection'] = 'No events will be processed by the Turnitin plagiarism plugin by this cron execution as a connection to Turnitin can not be established.';

// Error codes
$string['tii_submission_failure'] = 'Please consult your tutor or system administrator for further details';
$string['faultcode'] = 'Fault Code';
$string['line'] = 'Line';
$string['message'] = 'Message';
$string['code'] = 'Code';
$string['tiisubmissionsgeterror'] = 'There was an error when trying to get submissions for this assignment from Turnitin';
$string['errorcode0'] = 'This file has not been submitted to Turnitin, please consult your system administrator';
$string['errorcode1'] = 'This file has not been sent to Turnitin as it does not have enough content to produce an Originality Report.';
$string['errorcode2'] = 'This file will not be submitted to Turnitin as it exceeds the maximum size of {$a} allowed';
$string['errorcode3'] = 'This file has not been submitted to Turnitin because the user has not accepted the Turnitin End User Licence Agreement.';
$string['errorcode4'] = 'You must upload a supported file type for this assignment. Accepted file types are; .doc, .docx, .ppt, .pptx, .pps, .ppsx, .pdf, .txt, .htm, .html, .hwp, .odt, .wpd, .ps and .rtf';
$string['errorcode5'] = 'This file has not been submitted to Turnitin because there is a problem creating the module in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode6'] = 'This file has not been submitted to Turnitin because there is a problem editing the module settings in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode7'] = 'This file has not been submitted to Turnitin because there is a problem creating the user in Turnitin which is preventing submissions, please consult your API logs for further information';
$string['errorcode8'] = 'This file has not been submitted to Turnitin because there is a problem creating the temp file. The most likely cause is an invalid file name. Please rename the file and re-upload using Edit Submission.';
$string['errorcode9'] = 'The file cannot be submitted as there is no accessible content in the file pool to submit.';

// Javascript
$string['closebutton'] = 'Close';
$string['loadingdv'] = 'Loading Turnitin Document Viewer...';
$string['changerubricwarning'] = 'Changing or detaching a rubric will remove all existing rubric scoring from papers in this assignment, including scorecards which have previously been marked. Overall grades for previously graded papers will remain.';
$string['messageprovider:submission'] = 'Turnitin Plagiarism Plugin Digital Receipt notifications';

// Turnitin Submission Status
$string['turnitinstatus'] = 'Turnitin status';
$string['deleted'] = 'Deleted';
$string['pending'] = 'Pending';
