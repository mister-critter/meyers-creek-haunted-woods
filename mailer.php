<?php

    // Get the form fields, removes html tags and whitespace.
    $name = strip_tags(trim($_POST["name"]));
    $name = str_replace(array("\r","\n"),array(" "," "),$name);
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $address_1 = strip_tags(trim($_POST["address_1"]));
    $address_2 = strip_tags(trim($_POST["address_2"]));
    $city_state_zip = strip_tags(trim($_POST["city_state_zip"]));
    $phone = strip_tags(trim($_POST["phone"]));
    $how_did_you_hear_about_us = trim($_POST["how_did_you_hear_about_us"]);
    $reliable_transportation = strip_tags(trim($_POST["reliable_transportation"]));
    $former_employee = strip_tags(trim($_POST["former_employee"]));
    $former_employee_when = strip_tags(trim($_POST["former_employee_when"]));
    $friend_employees = strip_tags(trim($_POST["friend_employees"]));
    $friend_employees_who = trim($_POST["friend_employees_who"]);
    $is_18_or_older = trim($_POST["is_18_or_older"]);
    $approved_to_work_in_us = trim($_POST["approved_to_work_in_us"]);
    $legal_status_documentation = trim($_POST["legal_status_documentation"]);
    $require_job_accomodations = trim($_POST["require_job_accomodations"]);
    $convicted_of_criminal_offense = trim($_POST["convicted_of_criminal_offense"]);
    $criminal_offense_description = trim($_POST["criminal_offense_description"]);
    $okay_with_weather = trim($_POST["okay_with_weather"]);
    $okay_with_work_hours = trim($_POST["okay_with_work_hours"]);
    $okay_with_strobe_lights = trim($_POST["okay_with_strobe_lights"]);
    $okay_with_fog_machines = trim($_POST["okay_with_fog_machines"]);
    $okay_to_use_chainsaw = trim($_POST["okay_to_use_chainsaw"]);
    $has_cosmetic_allergies = trim($_POST["has_cosmetic_allergies"]);
    $i_understand = trim($_POST["i_understand"]);
    $date = trim($_POST["date"]);

    // Check the data.
    if (empty($name) OR !filter_var($email, FILTER_VALIDATE_EMAIL)) {
        header("Location: http://www.meyerscreekhauntedwoods.com/apply.html");
        exit;
    }

    // Set the recipient email address. Update this to YOUR desired email address.
    $recipient = "candinicole36@gmail.com";

    // Set the email subject.
    $subject = "New contact from $name";

    // Build the email content.
    $email_content .= "Name:\n $name\n\n";
    $email_content .= "Email:\n $email\n\n";
    $email_content .= "Address 1:\n $address_1\n\n";
    $email_content .= "Address 2:\n $address_2\n\n";
    $email_content .= "City, State, Zip:\n $city_state_zip\n\n";
    $email_content .= "Phone:\n $phone\n\n";
    $email_content .= "How did you hear about us?:\n $how_did_you_hear_about_us\n\n";
    $email_content .= "Do you have reliable transportation to and from work?:\n $reliable_transportation\n\n";
    $email_content .= "Have you ever applied to or worked for Meyers Creek Haunted Woods before?:\n $former_employee\n\n";
    $email_content .= "Do you have any friends or relatives working for Meyers Creek Haunted Woods?:\n $friend_employees\n\n";
    $email_content .= "If yes please state their name and relationship:\n $friend_employees_who\n\n";
    $email_content .= "Are you 18 years or older?:\n $is_18_or_older\n\n";
    $email_content .= "Are you a US citizen or approved to work in the United States?:\n $approved_to_work_in_us\n\n";
    $email_content .= "What document can you provide as proof of citizenship or legal status?:\n $legal_status_documentation\n\n";
    $email_content .= "Do you have any condition which would require job accommodations?:\n $require_job_accomodations\n\n";
    $email_content .= "If yes, please describe accommodations required below:\n $describe_accomodations\n\n";
    $email_content .= "Have you ever been convicted of a criminal offense (felony or misdemeanor)?:\n $convicted_of_criminal_offense\n\n";
    $email_content .= "If yes, please state the nature of the crime (s), when and where convicted and disposition of the case:\n $criminal_offense_description\n\n";
    $email_content .= "Are you okay working in the rain and cold weather?:\n $okay_with_weather\n\n";
    $email_content .= "Are you able to work every Friday and Saturday night in October from the hours of 6:30 to Midnight?:\n $okay_with_work_hours\n\n";
    $email_content .= "Are you okay working in Strobe lights?:\n $okay_with_strobe_lights\n\n";
    $email_content .= "Are you okay working around fog machines?:\n $okay_with_fog_machines\n\n";
    $email_content .= "Have you ever used and are comfortable using a chainsaw?:\n $okay_to_use_chainsaw\n\n";
    $email_content .= "Are you allergic to any cosmetics (latex, or Halloween makeup)?:\n $has_cosmetic_allergies\n\n";
    $email_content .= "I understand:\n $i_understand\n\n";
    $email_content .= "Date:\n $date\n\n";

    // Build the email headers.
    $email_headers = "From: $name <$email>";

    // Send the email.
    mail($recipient, $subject, $email_content, $email_headers);
    
    // Redirect to the index.html page with success code
    header("Location: http://www.meyerscreekhauntedwoods.com/apply-thanks.html");

?>
